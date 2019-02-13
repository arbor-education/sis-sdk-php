<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentImportJob extends ModelBase
{

    const STARTED_DATETIME = 'startedDatetime';

    const COMPLETED_DATETIME = 'completedDatetime';

    const IMPORTER_CLASS_NAME = 'importerClassName';

    protected $_resourceType = ResourceType::ASSESSMENT_IMPORT_JOB;

    /**
     * @param Query $query
     * @return AssessmentImportJob[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_IMPORT_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentImportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_IMPORT_JOB, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartedDatetime()
    {
        return $this->getProperty('startedDatetime');
    }

    /**
     * @param \DateTime $startedDatetime
     */
    public function setStartedDatetime(\DateTime $startedDatetime = null)
    {
        $this->setProperty('startedDatetime', $startedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }

    /**
     * @return string
     */
    public function getImporterClassName()
    {
        return $this->getProperty('importerClassName');
    }

    /**
     * @param string $importerClassName
     */
    public function setImporterClassName($importerClassName = null)
    {
        $this->setProperty('importerClassName', $importerClassName);
    }


}
