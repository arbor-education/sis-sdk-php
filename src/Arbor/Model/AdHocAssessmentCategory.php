<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class AdHocAssessmentCategory extends ModelBase
{

    const CATEGORY_NAME = 'categoryName';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT_CATEGORY;

    /**
     * @param \Arbor\Query\Query $query
     * @return AdHocAssessmentCategory[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AdHocAssessmentCategory");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AdHocAssessmentCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::AD_HOC_ASSESSMENT_CATEGORY, $id);
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->getProperty("categoryName");
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName($categoryName = null)
    {
        $this->setProperty("categoryName", $categoryName);
    }


}
