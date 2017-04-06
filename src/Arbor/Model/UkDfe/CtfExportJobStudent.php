<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\CtfExportJob;
use \Arbor\Model\Student;

class CtfExportJobStudent extends ModelBase
{

    const CTF_EXPORT_JOB = 'ctfExportJob';

    const STUDENT = 'student';

    protected $_resourceType = ResourceType::UK_DFE_CTF_EXPORT_JOB_STUDENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CtfExportJobStudent[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_CtfExportJobStudent");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CtfExportJobStudent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_CTF_EXPORT_JOB_STUDENT, $id);
    }

    /**
     * @return CtfExportJob
     */
    public function getCtfExportJob()
    {
        return $this->getProperty("ctfExportJob");
    }

    /**
     * @param CtfExportJob $ctfExportJob
     */
    public function setCtfExportJob(CtfExportJob $ctfExportJob = null)
    {
        $this->setProperty("ctfExportJob", $ctfExportJob);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }


}
