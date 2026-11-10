<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MarksheetTemplateAutomation extends ModelBase
{
    public const MARKSHEET_TEMPLATE_SOURCE_COLUMN = 'marksheetTemplateSourceColumn';

    public const MARKSHEET_TEMPLATE_DESTINATION_COLUMN = 'marksheetTemplateDestinationColumn';

    protected $_resourceType = ResourceType::MARKSHEET_TEMPLATE_AUTOMATION;

    /**
     * @param Query $query
     * @return MarksheetTemplateAutomation[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_TEMPLATE_AUTOMATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetTemplateAutomation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_TEMPLATE_AUTOMATION, $id);
    }

    /**
     * @return \Arbor\Model\MarksheetTemplateColumn
     */
    public function getMarksheetTemplateSourceColumn()
    {
        return $this->getProperty('marksheetTemplateSourceColumn');
    }

    /**
     * @param \Arbor\Model\MarksheetTemplateColumn $marksheetTemplateSourceColumn
     */
    public function setMarksheetTemplateSourceColumn(\Arbor\Model\MarksheetTemplateColumn $marksheetTemplateSourceColumn = null)
    {
        $this->setProperty('marksheetTemplateSourceColumn', $marksheetTemplateSourceColumn);
    }

    /**
     * @return \Arbor\Model\MarksheetTemplateColumn
     */
    public function getMarksheetTemplateDestinationColumn()
    {
        return $this->getProperty('marksheetTemplateDestinationColumn');
    }

    /**
     * @param \Arbor\Model\MarksheetTemplateColumn $marksheetTemplateDestinationColumn
     */
    public function setMarksheetTemplateDestinationColumn(\Arbor\Model\MarksheetTemplateColumn $marksheetTemplateDestinationColumn = null)
    {
        $this->setProperty('marksheetTemplateDestinationColumn', $marksheetTemplateDestinationColumn);
    }
}
