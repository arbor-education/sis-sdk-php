<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MarksheetStudentGroup extends ModelBase
{
    public const MARKSHEET = 'marksheet';

    public const STUDENT_GROUP = 'studentGroup';

    protected $_resourceType = ResourceType::MARKSHEET_STUDENT_GROUP;

    /**
     * @param Query $query
     * @return MarksheetStudentGroup[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_STUDENT_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetStudentGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_STUDENT_GROUP, $id);
    }

    /**
     * @return \Arbor\Model\AssessmentMarksheet
     */
    public function getMarksheet()
    {
        return $this->getProperty('marksheet');
    }

    /**
     * @param \Arbor\Model\AssessmentMarksheet $marksheet
     */
    public function setMarksheet(\Arbor\Model\AssessmentMarksheet $marksheet = null)
    {
        $this->setProperty('marksheet', $marksheet);
    }

    /**
     * @return ModelBase
     */
    public function getStudentGroup()
    {
        return $this->getProperty('studentGroup');
    }

    /**
     * @param ModelBase $studentGroup
     */
    public function setStudentGroup(\ModelBase $studentGroup = null)
    {
        $this->setProperty('studentGroup', $studentGroup);
    }
}
