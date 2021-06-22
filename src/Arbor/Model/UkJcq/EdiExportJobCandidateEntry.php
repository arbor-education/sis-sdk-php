<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\CandidateEntry;

class EdiExportJobCandidateEntry extends ModelBase
{

    const EDI_EXPORT_JOB = 'ediExportJob';

    const CANDIDATE_ENTRY = 'candidateEntry';

    protected $_resourceType = ResourceType::UK_JCQ_EDI_EXPORT_JOB_CANDIDATE_ENTRY;

    /**
     * @param Query $query
     * @return EdiExportJobCandidateEntry[] | Collection
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

        $query->setResourceType(ResourceType::UK_JCQ_EDI_EXPORT_JOB_CANDIDATE_ENTRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EdiExportJobCandidateEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_JCQ_EDI_EXPORT_JOB_CANDIDATE_ENTRY, $id);
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
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(CandidateEntry $candidateEntry = null)
    {
        $this->setProperty('candidateEntry', $candidateEntry);
    }


}
