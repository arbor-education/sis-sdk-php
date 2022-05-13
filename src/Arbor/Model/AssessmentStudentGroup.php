<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentStudentGroup extends ModelBase
{
    const ACADEMIC_YEAR_ASSESSMENT = 'academicYearAssessment';

    const STUDENT_GROUP = 'studentGroup';

    protected $_resourceType = ResourceType::ASSESSMENT_STUDENT_GROUP;

    /**
     * @param Query $query
     * @return AssessmentStudentGroup[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ASSESSMENT_STUDENT_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentStudentGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_STUDENT_GROUP, $id);
    }

    /**
     * @return AcademicYearAssessment
     */
    public function getAcademicYearAssessment()
    {
        return $this->getProperty('academicYearAssessment');
    }

    /**
     * @param AcademicYearAssessment $academicYearAssessment
     */
    public function setAcademicYearAssessment(AcademicYearAssessment $academicYearAssessment = null)
    {
        $this->setProperty('academicYearAssessment', $academicYearAssessment);
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
    public function setStudentGroup(ModelBase $studentGroup = null)
    {
        $this->setProperty('studentGroup', $studentGroup);
    }

}
