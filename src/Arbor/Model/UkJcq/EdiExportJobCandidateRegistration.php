<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\CandidateRegistration;

class EdiExportJobCandidateRegistration extends ModelBase
{

    const EDI_EXPORT_JOB = 'ediExportJob';

    const CANDIDATE_REGISTRATION = 'candidateRegistration';

    protected $_resourceType = ResourceType::UK_JCQ_EDI_EXPORT_JOB_CANDIDATE_REGISTRATION;

    /**
     * @param Query $query
     * @return EdiExportJobCandidateRegistration[] | Collection
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

        $query->setResourceType(ResourceType::UK_JCQ_EDI_EXPORT_JOB_CANDIDATE_REGISTRATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EdiExportJobCandidateRegistration
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_JCQ_EDI_EXPORT_JOB_CANDIDATE_REGISTRATION, $id);
    }

    /**
     * @return EdiExportJob
     */
    public function getEdiExportJob()
    {
        return $this->getProperty('ediExportJob');
    }

    /**
     * @param EdiExportJob $ediExportJob
     */
    public function setEdiExportJob(EdiExportJob $ediExportJob = null)
    {
        $this->setProperty('ediExportJob', $ediExportJob);
    }

    /**
     * @return CandidateRegistration
     */
    public function getCandidateRegistration()
    {
        return $this->getProperty('candidateRegistration');
    }

    /**
     * @param CandidateRegistration $candidateRegistration
     */
    public function setCandidateRegistration(CandidateRegistration $candidateRegistration = null)
    {
        $this->setProperty('candidateRegistration', $candidateRegistration);
    }


}
