<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class AssessmentMarksheet extends ModelBase
{
    public const MARKSHEET_TEMPLATE = 'marksheetTemplate';

    protected $_resourceType = ResourceType::ASSESSMENT_MARKSHEET;

    /**
     * @param Query $query
     * @return AssessmentMarksheet[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_MARKSHEET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMarksheet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_MARKSHEET, $id);
    }

    /**
     * @return \Arbor\Model\MarksheetTemplate
     */
    public function getMarksheetTemplate()
    {
        return $this->getProperty('marksheetTemplate');
    }

    /**
     * @param \Arbor\Model\MarksheetTemplate $marksheetTemplate
     */
    public function setMarksheetTemplate(\Arbor\Model\MarksheetTemplate $marksheetTemplate = null)
    {
        $this->setProperty('marksheetTemplate', $marksheetTemplate);
    }
}
