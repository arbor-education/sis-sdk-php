<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYearAssessment;

class AssessmentStudentGroup extends ModelBase
{

    const ACADEMIC_YEAR_ASSESSMENT = 'academicYearAssessment';

    const STUDENT_GROUP = 'studentGroup';

    protected $_resourceType = ResourceType::ASSESSMENT_STUDENT_GROUP;

    /**
     * @param \Arbor\Query\Query $query
     * @return AssessmentStudentGroup[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("AssessmentStudentGroup");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AssessmentStudentGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::ASSESSMENT_STUDENT_GROUP, $id);
    }

    /**
     * @return AcademicYearAssessment
     */
    public function getAcademicYearAssessment()
    {
        return $this->getProperty("academicYearAssessment");
    }

    /**
     * @param AcademicYearAssessment $academicYearAssessment
     */
    public function setAcademicYearAssessment(AcademicYearAssessment $academicYearAssessment = null)
    {
        $this->setProperty("academicYearAssessment", $academicYearAssessment);
    }

    /**
     * @return ModelBase
     */
    public function getStudentGroup()
    {
        return $this->getProperty("studentGroup");
    }

    /**
     * @param ModelBase $studentGroup
     */
    public function setStudentGroup(ModelBase $studentGroup = null)
    {
        $this->setProperty("studentGroup", $studentGroup);
    }


}
