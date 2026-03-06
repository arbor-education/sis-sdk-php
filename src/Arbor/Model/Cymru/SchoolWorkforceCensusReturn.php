<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolWorkforceCensusReturn extends ModelBase
{
    public const DATA_ERROR = 'dataError';

    public const DATA_EXPORT_COMPLETED_DATETIME = 'dataExportCompletedDatetime';

    public const DATA_EXPORT_STARTED_DATETIME = 'dataExportStartedDatetime';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const IS_DRY_RUN = 'isDryRun';

    public const IS_STAFF_HR_AND_PAYROLL_INFORMATION_EXCLUDED = 'isStaffHrAndPayrollInformationExcluded';

    public const LOCAL_AUTHORITY_ACCEPTED_DATETIME = 'localAuthorityAcceptedDatetime';

    public const LOCAL_AUTHORITY_REJECTED_DATETIME = 'localAuthorityRejectedDatetime';

    public const RETURN_FILENAME = 'returnFilename';

    public const RETURN_FILENAME_HR_PAYROLL = 'returnFilenameHrPayroll';

    public const RETURN_FILENAME_HR_PAYROLL_SEQUENCE_NUMBER = 'returnFilenameHrPayrollSequenceNumber';

    public const RETURN_FILENAME_SEQUENCE_NUMBER = 'returnFilenameSequenceNumber';

    public const SCHOOL_APPROVED_DATETIME = 'schoolApprovedDatetime';

    public const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    public const STATUS = 'status';

    public const SUBMITTED_DATETIME = 'submittedDatetime';

    public const XSD_ERROR = 'xsdError';

    public const XSLT_ERROR = 'xsltError';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS_RETURN;

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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS_RETURN);

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

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS_RETURN, $id);
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
     * @return bool
     */
    public function getIsStaffHrAndPayrollInformationExcluded()
    {
        return $this->getProperty('isStaffHrAndPayrollInformationExcluded');
    }

    /**
     * @param bool $isStaffHrAndPayrollInformationExcluded
     */
    public function setIsStaffHrAndPayrollInformationExcluded(bool $isStaffHrAndPayrollInformationExcluded = null)
    {
        $this->setProperty('isStaffHrAndPayrollInformationExcluded', $isStaffHrAndPayrollInformationExcluded);
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
    public function getReturnFilenameHrPayroll()
    {
        return $this->getProperty('returnFilenameHrPayroll');
    }

    /**
     * @param string $returnFilenameHrPayroll
     */
    public function setReturnFilenameHrPayroll(string $returnFilenameHrPayroll = null)
    {
        $this->setProperty('returnFilenameHrPayroll', $returnFilenameHrPayroll);
    }

    /**
     * @return int
     */
    public function getReturnFilenameHrPayrollSequenceNumber()
    {
        return $this->getProperty('returnFilenameHrPayrollSequenceNumber');
    }

    /**
     * @param int $returnFilenameHrPayrollSequenceNumber
     */
    public function setReturnFilenameHrPayrollSequenceNumber(int $returnFilenameHrPayrollSequenceNumber = null)
    {
        $this->setProperty('returnFilenameHrPayrollSequenceNumber', $returnFilenameHrPayrollSequenceNumber);
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
     * @return \Arbor\Model\Cymru\SchoolWorkforceCensus
     */
    public function getSchoolWorkforceCensus()
    {
        return $this->getProperty('schoolWorkforceCensus');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolWorkforceCensus $schoolWorkforceCensus
     */
    public function setSchoolWorkforceCensus(\Arbor\Model\Cymru\SchoolWorkforceCensus $schoolWorkforceCensus = null)
    {
        $this->setProperty('schoolWorkforceCensus', $schoolWorkforceCensus);
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

    /**
     * @return bool
     */
    public function getXsdError()
    {
        return $this->getProperty('xsdError');
    }

    /**
     * @param bool $xsdError
     */
    public function setXsdError(bool $xsdError = null)
    {
        $this->setProperty('xsdError', $xsdError);
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
}
