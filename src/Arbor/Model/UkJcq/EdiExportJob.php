<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EdiExportJob extends ModelBase
{
    public const FILE_NAME = 'fileName';

    public const FILE_TYPE = 'fileType';

    public const EXPORTED_DATETIME = 'exportedDatetime';

    public const STATUS = 'status';

    public const SEQUENCE_NUMBER = 'sequenceNumber';

    public const AWARDING_ORGANIZATION = 'awardingOrganization';

    public const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    protected $_resourceType = ResourceType::UK_JCQ_EDI_EXPORT_JOB;

    /**
     * @param Query $query
     * @return EdiExportJob[] | Collection
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
    public function setFileName(string $fileName = null)
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
    public function setFileType(string $fileType = null)
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
    public function setStatus(string $status = null)
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
    public function setSequenceNumber(int $sequenceNumber = null)
    {
        $this->setProperty('sequenceNumber', $sequenceNumber);
    }

    /**
     * @return \Arbor\Model\AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty('awardingOrganization');
    }

    /**
     * @param \Arbor\Model\AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(\Arbor\Model\AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty('awardingOrganization', $awardingOrganization);
    }

    /**
     * @return \Arbor\Model\QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param \Arbor\Model\QualificationAvailabilityInstance
     * $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(\Arbor\Model\QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }
}
