<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\EducationalInstitution;

class SchoolCensusReturn extends ModelBase
{

    const SCHOOL_CENSUS = 'schoolCensus';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const CURRENT_RETURN_NUMBER = 'currentReturnNumber';

    const RETURN_FILENAME = 'returnFilename';

    const RETURN_FILENAME_SEQUENCE_NUMBER = 'returnFilenameSequenceNumber';

    const DATA_ERROR = 'dataError';

    const XSD_ERROR = 'xsdError';

    const XSLT_ERROR = 'xsltError';

    const SUMMARY_ERROR = 'summaryError';

    const SUMMARY_ERROR_DESCRIPTION = 'summaryErrorDescription';

    const STATUS_DESCRIPTION = 'statusDescription';

    const DATA_EXPORT_STARTED_DATETIME = 'dataExportStartedDatetime';

    const DATA_EXPORT_COMPLETED_DATETIME = 'dataExportCompletedDatetime';

    const IS_DRY_RUN = 'isDryRun';

    const SUBMITTED_DATETIME = 'submittedDatetime';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_CENSUS_RETURN;

    /**
     * @param Query $query
     * @return SchoolCensusReturn[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_CENSUS_RETURN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolCensusReturn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_CENSUS_RETURN, $id);
    }

    /**
     * @return SchoolCensus
     */
    public function getSchoolCensus()
    {
        return $this->getProperty('schoolCensus');
    }

    /**
     * @param SchoolCensus $schoolCensus
     */
    public function setSchoolCensus(SchoolCensus $schoolCensus = null)
    {
        $this->setProperty('schoolCensus', $schoolCensus);
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
     * @return int
     */
    public function getCurrentReturnNumber()
    {
        return $this->getProperty('currentReturnNumber');
    }

    /**
     * @param int $currentReturnNumber
     */
    public function setCurrentReturnNumber($currentReturnNumber = null)
    {
        $this->setProperty('currentReturnNumber', $currentReturnNumber);
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
    public function getXsdError()
    {
        return $this->getProperty('xsdError');
    }

    /**
     * @param bool $xsdError
     */
    public function setXsdError($xsdError = null)
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
    public function setXsltError($xsltError = null)
    {
        $this->setProperty('xsltError', $xsltError);
    }

    /**
     * @return bool
     */
    public function getSummaryError()
    {
        return $this->getProperty('summaryError');
    }

    /**
     * @param bool $summaryError
     */
    public function setSummaryError($summaryError = null)
    {
        $this->setProperty('summaryError', $summaryError);
    }

    /**
     * @return string
     */
    public function getSummaryErrorDescription()
    {
        return $this->getProperty('summaryErrorDescription');
    }

    /**
     * @param string $summaryErrorDescription
     */
    public function setSummaryErrorDescription($summaryErrorDescription = null)
    {
        $this->setProperty('summaryErrorDescription', $summaryErrorDescription);
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
