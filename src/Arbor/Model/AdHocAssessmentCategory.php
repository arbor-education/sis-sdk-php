<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdHocAssessmentCategory extends ModelBase
{
    public const CATEGORY_NAME = 'categoryName';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT_CATEGORY;

    /**
     * @param Query $query
     * @return AdHocAssessmentCategory[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::AD_HOC_ASSESSMENT_CATEGORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdHocAssessmentCategory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AD_HOC_ASSESSMENT_CATEGORY, $id);
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->getProperty('categoryName');
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName(string $categoryName = null)
    {
        $this->setProperty('categoryName', $categoryName);
    }
}
