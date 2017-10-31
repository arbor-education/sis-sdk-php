<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgressAssessmentImportJob extends ModelBase
{
    const UPLOADED_DATETIME = 'uploadedDatetime';

    const IMPORT_STARTED_DATETIME = 'importStartedDatetime';

    const IMPORTED_DATETIME = 'importedDatetime';

    const DATA = 'data';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_IMPORT_JOB;

    /**
     * @param Query $query
     * @return ProgressAssessmentImportJob[] | Collection
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

        $query->setResourceType(ResourceType::PROGRESS_ASSESSMENT_IMPORT_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgressAssessmentImportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_IMPORT_JOB, $id);
    }

    /**
     * @return \DateTime
     */
    public function getUploadedDatetime()
    {
        return $this->getProperty('uploadedDatetime');
    }

    /**
     * @param \DateTime $uploadedDatetime
     */
    public function setUploadedDatetime(\DateTime $uploadedDatetime = null)
    {
        $this->setProperty('uploadedDatetime', $uploadedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getImportStartedDatetime()
    {
        return $this->getProperty('importStartedDatetime');
    }

    /**
     * @param \DateTime $importStartedDatetime
     */
    public function setImportStartedDatetime(\DateTime $importStartedDatetime = null)
    {
        $this->setProperty('importStartedDatetime', $importStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getImportedDatetime()
    {
        return $this->getProperty('importedDatetime');
    }

    /**
     * @param \DateTime $importedDatetime
     */
    public function setImportedDatetime(\DateTime $importedDatetime = null)
    {
        $this->setProperty('importedDatetime', $importedDatetime);
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->getProperty('data');
    }

    /**
     * @param string $data
     */
    public function setData($data = null)
    {
        $this->setProperty('data', $data);
    }
}
