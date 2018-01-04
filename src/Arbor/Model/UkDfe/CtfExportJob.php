<?php

namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class CtfExportJob extends ModelBase
{

    const EXPORT_TYPE = 'exportType';

    const LA_SEND = 'laSend';

    const LA_RECEIVE = 'laReceive';

    const DFE_SEND = 'dfeSend';

    const DFE_RECEIVE = 'dfeReceive';

    const FILE_NAME = 'fileName';

    const FILE_NUMBER = 'fileNumber';

    const REPORTING_PERIOD_START_DATE = 'reportingPeriodStartDate';

    const REPORTING_PERIOD_END_DATE = 'reportingPeriodEndDate';

    const EXPORT_DATETIME = 'exportDatetime';

    const XSD_ERROR = 'xsdError';

    const DATA_ERROR = 'dataError';

    const DATA_ERROR_MESSAGE = 'dataErrorMessage';

    protected $_resourceType = ResourceType::UK_DFE_CTF_EXPORT_JOB;

    /**
     * @param Query $query
     * @return CtfExportJob[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_CTF_EXPORT_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CtfExportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_CTF_EXPORT_JOB, $id);
    }

    /**
     * @return string
     */
    public function getExportType()
    {
        return $this->getProperty('exportType');
    }

    /**
     * @param string $exportType
     */
    public function setExportType($exportType = null)
    {
        $this->setProperty('exportType', $exportType);
    }

    /**
     * @return string
     */
    public function getLaSend()
    {
        return $this->getProperty('laSend');
    }

    /**
     * @param string $laSend
     */
    public function setLaSend($laSend = null)
    {
        $this->setProperty('laSend', $laSend);
    }

    /**
     * @return string
     */
    public function getLaReceive()
    {
        return $this->getProperty('laReceive');
    }

    /**
     * @param string $laReceive
     */
    public function setLaReceive($laReceive = null)
    {
        $this->setProperty('laReceive', $laReceive);
    }

    /**
     * @return string
     */
    public function getDfeSend()
    {
        return $this->getProperty('dfeSend');
    }

    /**
     * @param string $dfeSend
     */
    public function setDfeSend($dfeSend = null)
    {
        $this->setProperty('dfeSend', $dfeSend);
    }

    /**
     * @return string
     */
    public function getDfeReceive()
    {
        return $this->getProperty('dfeReceive');
    }

    /**
     * @param string $dfeReceive
     */
    public function setDfeReceive($dfeReceive = null)
    {
        $this->setProperty('dfeReceive', $dfeReceive);
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
     * @return int
     */
    public function getFileNumber()
    {
        return $this->getProperty('fileNumber');
    }

    /**
     * @param int $fileNumber
     */
    public function setFileNumber($fileNumber = null)
    {
        $this->setProperty('fileNumber', $fileNumber);
    }

    /**
     * @return \DateTime
     */
    public function getReportingPeriodStartDate()
    {
        return $this->getProperty('reportingPeriodStartDate');
    }

    /**
     * @param \DateTime $reportingPeriodStartDate
     */
    public function setReportingPeriodStartDate(\DateTime $reportingPeriodStartDate = null)
    {
        $this->setProperty('reportingPeriodStartDate', $reportingPeriodStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getReportingPeriodEndDate()
    {
        return $this->getProperty('reportingPeriodEndDate');
    }

    /**
     * @param \DateTime $reportingPeriodEndDate
     */
    public function setReportingPeriodEndDate(\DateTime $reportingPeriodEndDate = null)
    {
        $this->setProperty('reportingPeriodEndDate', $reportingPeriodEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getExportDatetime()
    {
        return $this->getProperty('exportDatetime');
    }

    /**
     * @param \DateTime $exportDatetime
     */
    public function setExportDatetime(\DateTime $exportDatetime = null)
    {
        $this->setProperty('exportDatetime', $exportDatetime);
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
     * @return string
     */
    public function getDataErrorMessage()
    {
        return $this->getProperty('dataErrorMessage');
    }

    /**
     * @param string $dataErrorMessage
     */
    public function setDataErrorMessage($dataErrorMessage = null)
    {
        $this->setProperty('dataErrorMessage', $dataErrorMessage);
    }


}
