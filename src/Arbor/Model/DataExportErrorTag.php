<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\DataExportError;

class DataExportErrorTag extends ModelBase
{

    const DATA_EXPORT_ERROR = 'dataExportError';

    const TAGGED_ENTITY = 'taggedEntity';

    const TAG_NAME = 'tagName';

    const TAG_VALUE = 'tagValue';

    const TAG_URL = 'tagUrl';

    protected $_resourceType = ResourceType::DATA_EXPORT_ERROR_TAG;

    /**
     * @param \Arbor\Query\Query $query
     * @return DataExportErrorTag[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DataExportErrorTag");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DataExportErrorTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DATA_EXPORT_ERROR_TAG, $id);
    }

    /**
     * @return DataExportError
     */
    public function getDataExportError()
    {
        return $this->getProperty("dataExportError");
    }

    /**
     * @param DataExportError $dataExportError
     */
    public function setDataExportError(DataExportError $dataExportError = null)
    {
        $this->setProperty("dataExportError", $dataExportError);
    }

    /**
     * @return ModelBase
     */
    public function getTaggedEntity()
    {
        return $this->getProperty("taggedEntity");
    }

    /**
     * @param ModelBase $taggedEntity
     */
    public function setTaggedEntity(ModelBase $taggedEntity = null)
    {
        $this->setProperty("taggedEntity", $taggedEntity);
    }

    /**
     * @return string
     */
    public function getTagName()
    {
        return $this->getProperty("tagName");
    }

    /**
     * @param string $tagName
     */
    public function setTagName($tagName = null)
    {
        $this->setProperty("tagName", $tagName);
    }

    /**
     * @return string
     */
    public function getTagValue()
    {
        return $this->getProperty("tagValue");
    }

    /**
     * @param string $tagValue
     */
    public function setTagValue($tagValue = null)
    {
        $this->setProperty("tagValue", $tagValue);
    }

    /**
     * @return string
     */
    public function getTagUrl()
    {
        return $this->getProperty("tagUrl");
    }

    /**
     * @param string $tagUrl
     */
    public function setTagUrl($tagUrl = null)
    {
        $this->setProperty("tagUrl", $tagUrl);
    }


}
