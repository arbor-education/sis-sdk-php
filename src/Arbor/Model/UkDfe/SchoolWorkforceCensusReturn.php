<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolWorkforceCensusReturn extends ModelBase
{
    public const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const RETURN_FILENAME = 'returnFilename';

    public const STATUS_DESCRIPTION = 'statusDescription';

    public const RETURN_FILENAME_SEQUENCE_NUMBER = 'returnFilenameSequenceNumber';

    public const XSLT_ERROR = 'xsltError';

    public const DATA_ERROR = 'dataError';

    public const IS_DRY_RUN = 'isDryRun';

    public const DATA_EXPORT_STARTED_DATETIME = 'dataExportStartedDatetime';

    public const DATA_EXPORT_COMPLETED_DATETIME = 'dataExportCompletedDatetime';

    public const SCHOOL_APPROVED_DATETIME = 'schoolApprovedDatetime';

    public const LOCAL_AUTHORITY_REJECTED_DATETIME = 'localAuthorityRejectedDatetime';

    public const LOCAL_AUTHORITY_ACCEPTED_DATETIME = 'localAuthorityAcceptedDatetime';

    public const IS_STAFF_CONTRACT_INFORMATION_EXCLUDED = 'isStaffContractInformationExcluded';

    public const SUBMITTED_DATETIME = 'submittedDatetime';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_RETURN;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensusReturn[] | Collection
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
     * @return \Arbor\Model\UkDfe\SchoolWorkforceCensus
     */
    public function getSchoolWorkforceCensus()
    {
        return $this->getProperty('schoolWorkforceCensus');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolWorkforceCensus $schoolWorkforceCensus
     */
    public function setSchoolWorkforceCensus(\Arbor\Model\UkDfe\SchoolWorkforceCensus $schoolWorkforceCensus = null)
    {
        $this->setProperty('schoolWorkforceCensus', $schoolWorkforceCensus);
    }

    /**
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(\Arbor\Model\EducationalInstitution $educationalInstitution = null)
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
    public function setReturnFilename(string $returnFilename = null)
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
    public function setStatusDescription(string $statusDescription = null)
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
    public function setReturnFilenameSequenceNumber(int $returnFilenameSequenceNumber = null)
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
    public function setXsltError(bool $xsltError = null)
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
    public function setDataError(bool $dataError = null)
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
    public function setIsDryRun(bool $isDryRun = null)
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
    public function setIsStaffContractInformationExcluded(bool $isStaffContractInformationExcluded = null)
    {
        $this->setProperty('isStaffContractInformationExcluded', $isStaffContractInformationExcluded);
    }

    /**
     * @return \DateTime
     */
    public function getSubmittedDatetime()
    {
        return $this->getProperty('submittedDatetime');
    }

    /**
     * @param \DateTime $submittedDatetime
     */
    public function setSubmittedDatetime(\DateTime $submittedDatetime = null)
    {
        $this->setProperty('submittedDatetime', $submittedDatetime);
    }
}
