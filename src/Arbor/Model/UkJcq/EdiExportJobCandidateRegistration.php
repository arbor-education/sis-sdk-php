<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EdiExportJobCandidateRegistration extends ModelBase
{
    public const EDI_EXPORT_JOB = 'ediExportJob';

    public const CANDIDATE_REGISTRATION = 'candidateRegistration';

    protected $_resourceType = ResourceType::UK_JCQ_EDI_EXPORT_JOB_CANDIDATE_REGISTRATION;

    /**
     * @param Query $query
     * @return EdiExportJobCandidateRegistration[] | Collection
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
     * @return \Arbor\Model\UkJcq\EdiExportJob
     */
    public function getEdiExportJob()
    {
        return $this->getProperty('ediExportJob');
    }

    /**
     * @param \Arbor\Model\UkJcq\EdiExportJob $ediExportJob
     */
    public function setEdiExportJob(\Arbor\Model\UkJcq\EdiExportJob $ediExportJob = null)
    {
        $this->setProperty('ediExportJob', $ediExportJob);
    }

    /**
     * @return \Arbor\Model\CandidateRegistration
     */
    public function getCandidateRegistration()
    {
        return $this->getProperty('candidateRegistration');
    }

    /**
     * @param \Arbor\Model\CandidateRegistration $candidateRegistration
     */
    public function setCandidateRegistration(\Arbor\Model\CandidateRegistration $candidateRegistration = null)
    {
        $this->setProperty('candidateRegistration', $candidateRegistration);
    }
}
