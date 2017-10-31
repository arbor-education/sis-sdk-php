<?php

namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class CtfExportJobStudent extends ModelBase
{
    const CTF_EXPORT_JOB = 'ctfExportJob';

    const STUDENT = 'student';

    const CML_REMOVAL_GROUNDS = 'cmlRemovalGrounds';

    protected $_resourceType = ResourceType::UK_DFE_CTF_EXPORT_JOB_STUDENT;

    /**
     * @param Query $query
     * @return CtfExportJobStudent[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_CTF_EXPORT_JOB_STUDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CtfExportJobStudent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_CTF_EXPORT_JOB_STUDENT, $id);
    }

    /**
     * @return CtfExportJob
     */
    public function getCtfExportJob()
    {
        return $this->getProperty('ctfExportJob');
    }

    /**
     * @param CtfExportJob $ctfExportJob
     */
    public function setCtfExportJob(CtfExportJob $ctfExportJob = null)
    {
        $this->setProperty('ctfExportJob', $ctfExportJob);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getCmlRemovalGrounds()
    {
        return $this->getProperty('cmlRemovalGrounds');
    }

    /**
     * @param string $cmlRemovalGrounds
     */
    public function setCmlRemovalGrounds($cmlRemovalGrounds = null)
    {
        $this->setProperty('cmlRemovalGrounds', $cmlRemovalGrounds);
    }
}
