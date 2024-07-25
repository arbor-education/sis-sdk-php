<?php
namespace Arbor\Model;

use Arbor\Model\Hydrator\HydratorInterface;

class Hydrator implements HydratorInterface
{
    /**
     * @param ModelBase $model
     * @param array $arrayRepresentation
     * @return ModelBase
     */
    public function hydrateModel($model, $arrayRepresentation)
    {
        if (is_null($model->getApiGateway())) {
            throw new Exception("Trying to hydrate an unconnected model");
        }

        $properties = [];
        foreach ($arrayRepresentation as $propertyName=>$propertyValue) {
            switch ($propertyName) {
                case 'entityType':
                    $model->setResourceType($propertyValue);
                    break;
                case 'href':
                    //this is a special property
                    $model->setResourceUrl($propertyValue);
                    break;
                case 'displayName':
                    $model->setDisplayName($propertyValue);
                    break;
                case 'userTags':
                    $model->setUserTags(new \ArrayObject($propertyValue));
                    break;
                default: //This is a normal property
                    //If the property value is another representation then parse it recursivly
                    if (is_array($propertyValue)&&(isset($propertyValue['entityType']))) {
                        switch ($propertyValue['entityType']) {
                            case 'date':
                                /**@var \DateTime $propertyValue*/
                                $model->setProperty($propertyName, new \DateTime($propertyValue['date']));
                                break;
                            default:
                                $relateModelRepresentation = $propertyValue;

                                $relatedModel = $model->getApiGateway()
                                    ->instantiateModel($propertyValue['entityType']);
                                $this->hydrateModel($relatedModel, $relateModelRepresentation);
                                $model->setProperty($propertyName, $relatedModel);
                                break;
                        }
                    } elseif (is_array($propertyValue)) {
                        //This is a collection returned by a collection property
                        $collection = new Collection();
                        foreach ($propertyValue as $resourceRepresentation) {
                            if (isset($resourceRepresentation['entityType'])) {
                                $relatedModel = $model->getApiGateway()
                                    ->instantiateModel($resourceRepresentation['entityType']);
                                $this->hydrateModel($relatedModel, $resourceRepresentation);
                                $collection->add($relatedModel);
                            }
                        }
                        $model->setProperty($propertyName, $collection);
                    } else {
                        //This is a normal model property so add it to the properties array
                        $model->setProperty($propertyName, $propertyValue);
                    }
                    break;
            }
        }
        return $model;
    }

    /**
     * @param ModelBase $model
     * @param bool $abbreviate If set to true only entityType and href array keys will be included
     * @return array
     */
    public function extractArray($model, $abbreviate=false)
    {
        $representation = [];

        $representation["entityType"] = $model->getResourceType();
        if ($model->getResourceUrl()) {
            $representation["href"] = $model->getResourceUrl();
        }
        if (!$abbreviate) {
            $properties = $model->getProperties();
            foreach ($properties as $propertyName=>$propertyValue) {
                if ($propertyValue instanceof ModelBase) {
                    $relatedModel = $propertyValue;
                    $representation[$propertyName] = $this->extractArray($relatedModel);
                } elseif ($propertyValue instanceof \DateTimeInterface) {
                    $representation[$propertyName] = [
                            "entityType"=>"date",
                            "date"=>$propertyValue->format("Y-m-d H:i:s"),
                    ];
                } elseif ($propertyValue instanceof Collection) {
                    //This must be a navigation property which holds a collection of related objects
                    /**@var \Arbor\Model\Collection $propertyValue*/
                    foreach ($propertyValue as $relatedModel) {
                        $representation[$propertyName][] = $this->extractArray($relatedModel);
                    }
                } elseif ($propertyValue instanceof \ArrayObject) {
                    $representation[$propertyName] = $propertyValue->getArrayCopy();
                } else {
                    $representation[$propertyName] = $propertyValue;
                }
            }
        }
        return $representation;
    }
}
