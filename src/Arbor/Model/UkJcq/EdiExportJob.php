<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\AwardingOrganization;
use Arbor\Model\QualificationAvailabilityInstance;

class EdiExportJob extends ModelBase
{

    const FILE_NAME = 'fileName';

    const FILE_TYPE = 'fileType';

    const EXPORTED_DATETIME = 'exportedDatetime';

    const STATUS = 'status';

    const SEQUENCE_NUMBER = 'sequenceNumber';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    protected $_resourceType = ResourceType::UK_JCQ_EDI_EXPORT_JOB;

    /**
     * @param Query $query
     * @return EdiExportJob[] | Collection
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

        $query->setResourceType(ResourceType::UK_JCQ_EDI_EXPORT_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EdiExportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_JCQ_EDI_EXPORT_JOB, $id);
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->getProperty('fileName');
    }

    /**
     * @param string $fileName
     */
    public function setFileName($fileName = null)
    {
        $this->setProperty('fileName', $fileName);
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->getProperty('fileType');
    }

    /**
     * @param string $fileType
     */
    public function setFileType($fileType = null)
    {
        $this->setProperty('fileType', $fileType);
    }

    /**
     * @return \DateTime
     */
    public function getExportedDatetime()
    {
        return $this->getProperty('exportedDatetime');
    }

    /**
     * @param \DateTime $exportedDatetime
     */
    public function setExportedDatetime(\DateTime $exportedDatetime = null)
    {
        $this->setProperty('exportedDatetime', $exportedDatetime);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->getProperty('sequenceNumber');
    }

    /**
     * @param int $sequenceNumber
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        $this->setProperty('sequenceNumber', $sequenceNumber);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty('awardingOrganization');
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty('awardingOrganization', $awardingOrganization);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }


}
