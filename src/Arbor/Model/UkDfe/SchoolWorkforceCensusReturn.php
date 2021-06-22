<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\EducationalInstitution;

class SchoolWorkforceCensusReturn extends ModelBase
{

    const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const RETURN_FILENAME = 'returnFilename';

    const STATUS_DESCRIPTION = 'statusDescription';

    const RETURN_FILENAME_SEQUENCE_NUMBER = 'returnFilenameSequenceNumber';

    const XSLT_ERROR = 'xsltError';

    const DATA_ERROR = 'dataError';

    const IS_DRY_RUN = 'isDryRun';

    const DATA_EXPORT_STARTED_DATETIME = 'dataExportStartedDatetime';

    const DATA_EXPORT_COMPLETED_DATETIME = 'dataExportCompletedDatetime';

    const SCHOOL_APPROVED_DATETIME = 'schoolApprovedDatetime';

    const LOCAL_AUTHORITY_REJECTED_DATETIME = 'localAuthorityRejectedDatetime';

    const LOCAL_AUTHORITY_ACCEPTED_DATETIME = 'localAuthorityAcceptedDatetime';

    const IS_STAFF_CONTRACT_INFORMATION_EXCLUDED = 'isStaffContractInformationExcluded';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_RETURN;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensusReturn[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_RETURN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolWorkforceCensusReturn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_RETURN, $id);
    }

    /**
     * @return SchoolWorkforceCensus
     */
    public function getSchoolWorkforceCensus()
    {
        return $this->getProperty('schoolWorkforceCensus');
    }

    /**
     * @param SchoolWorkforceCensus $schoolWorkforceCensus
     */
    public function setSchoolWorkforceCensus(SchoolWorkforceCensus $schoolWorkforceCensus = null)
    {
        $this->setProperty('schoolWorkforceCensus', $schoolWorkforceCensus);
    }

    /**
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return string
     */
    public function getReturnFilename()
    {
        return $this->getProperty('returnFilename');
    }

    /**
     * @param string $returnFilename
     */
    public function setReturnFilename($returnFilename = null)
    {
        $this->setProperty('returnFilename', $returnFilename);
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->getProperty('statusDescription');
    }

    /**
     * @param string $statusDescription
     */
    public function setStatusDescription($statusDescription = null)
    {
        $this->setProperty('statusDescription', $statusDescription);
    }

    /**
     * @return int
     */
    public function getReturnFilenameSequenceNumber()
    {
        return $this->getProperty('returnFilenameSequenceNumber');
    }

    /**
     * @param int $returnFilenameSequenceNumber
     */
    public function setReturnFilenameSequenceNumber($returnFilenameSequenceNumber = null)
    {
        $this->setProperty('returnFilenameSequenceNumber', $returnFilenameSequenceNumber);
    }

    /**
     * @return bool
     */
    public function getXsltError()
    {
        return $this->getProperty('xsltError');
    }

    /**
     * @param bool $xsltError
     */
    public function setXsltError($xsltError = null)
    {
        $this->setProperty('xsltError', $xsltError);
    }

    /**
     * @return bool
     */
    public function getDataError()
    {
        return $this->getProperty('dataError');
    }

    /**
     * @param bool $dataError
     */
    public function setDataError($dataError = null)
    {
        $this->setProperty('dataError', $dataError);
    }

    /**
     * @return bool
     */
    public function getIsDryRun()
    {
        return $this->getProperty('isDryRun');
    }

    /**
     * @param bool $isDryRun
     */
    public function setIsDryRun($isDryRun = null)
    {
        $this->setProperty('isDryRun', $isDryRun);
    }

    /**
     * @return \DateTime
     */
    public function getDataExportStartedDatetime()
    {
        return $this->getProperty('dataExportStartedDatetime');
    }

    /**
     * @param \DateTime $dataExportStartedDatetime
     */
    public function setDataExportStartedDatetime(\DateTime $dataExportStartedDatetime = null)
    {
        $this->setProperty('dataExportStartedDatetime', $dataExportStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getDataExportCompletedDatetime()
    {
        return $this->getProperty('dataExportCompletedDatetime');
    }

    /**
     * @param \DateTime $dataExportCompletedDatetime
     */
    public function setDataExportCompletedDatetime(\DateTime $dataExportCompletedDatetime = null)
    {
        $this->setProperty('dataExportCompletedDatetime', $dataExportCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSchoolApprovedDatetime()
    {
        return $this->getProperty('schoolApprovedDatetime');
    }

    /**
     * @param \DateTime $schoolApprovedDatetime
     */
    public function setSchoolApprovedDatetime(\DateTime $schoolApprovedDatetime = null)
    {
        $this->setProperty('schoolApprovedDatetime', $schoolApprovedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getLocalAuthorityRejectedDatetime()
    {
        return $this->getProperty('localAuthorityRejectedDatetime');
    }

    /**
     * @param \DateTime $localAuthorityRejectedDatetime
     */
    public function setLocalAuthorityRejectedDatetime(\DateTime $localAuthorityRejectedDatetime = null)
    {
        $this->setProperty('localAuthorityRejectedDatetime', $localAuthorityRejectedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getLocalAuthorityAcceptedDatetime()
    {
        return $this->getProperty('localAuthorityAcceptedDatetime');
    }

    /**
     * @param \DateTime $localAuthorityAcceptedDatetime
     */
    public function setLocalAuthorityAcceptedDatetime(\DateTime $localAuthorityAcceptedDatetime = null)
    {
        $this->setProperty('localAuthorityAcceptedDatetime', $localAuthorityAcceptedDatetime);
    }

    /**
     * @return bool
     */
    public function getIsStaffContractInformationExcluded()
    {
        return $this->getProperty('isStaffContractInformationExcluded');
    }

    /**
     * @param bool $isStaffContractInformationExcluded
     */
    public function setIsStaffContractInformationExcluded($isStaffContractInformationExcluded = null)
    {
        $this->setProperty('isStaffContractInformationExcluded', $isStaffContractInformationExcluded);
    }


}
