<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;

class DataCheckError extends ModelBase
{
    const DATA_CHECKER_CLASS_NAME = 'dataCheckerClassName';

    const ERROR_IDENTIFIER = 'errorIdentifier';

    const CHECKED_ENTITY = 'checkedEntity';

    const REPORTING_ENTITY = 'reportingEntity';

    const REPORTED_DATETIME = 'reportedDatetime';

    const PRIORITY = 'priority';

    const ERROR_FIX_IS_MANDATORY = 'errorFixIsMandatory';

    const IGNORED_DATETIME = 'ignoredDatetime';

    const IGNORED_BY_USER = 'ignoredByUser';

    const CORRECTED_DATETIME = 'correctedDatetime';

    const CORRECTED_BY_USER = 'correctedByUser';

    protected $_resourceType = ResourceType::DATA_CHECK_ERROR;

    /**
     * @param \Arbor\Query\Query $query
     * @return DataCheckError[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("DataCheckError");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DataCheckError
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::DATA_CHECK_ERROR, $id);
    }

    /**
     * @return string
     */
    public function getDataCheckerClassName()
    {
        return $this->getProperty("dataCheckerClassName");
    }

    /**
     * @param string $dataCheckerClassName
     */
    public function setDataCheckerClassName($dataCheckerClassName = null)
    {
        $this->setProperty("dataCheckerClassName", $dataCheckerClassName);
    }

    /**
     * @return string
     */
    public function getErrorIdentifier()
    {
        return $this->getProperty("errorIdentifier");
    }

    /**
     * @param string $errorIdentifier
     */
    public function setErrorIdentifier($errorIdentifier = null)
    {
        $this->setProperty("errorIdentifier", $errorIdentifier);
    }

    /**
     * @return ModelBase
     */
    public function getCheckedEntity()
    {
        return $this->getProperty("checkedEntity");
    }

    /**
     * @param ModelBase $checkedEntity
     */
    public function setCheckedEntity(ModelBase $checkedEntity = null)
    {
        $this->setProperty("checkedEntity", $checkedEntity);
    }

    /**
     * @return ModelBase
     */
    public function getReportingEntity()
    {
        return $this->getProperty("reportingEntity");
    }

    /**
     * @param ModelBase $reportingEntity
     */
    public function setReportingEntity(ModelBase $reportingEntity = null)
    {
        $this->setProperty("reportingEntity", $reportingEntity);
    }

    /**
     * @return \DateTime
     */
    public function getReportedDatetime()
    {
        return $this->getProperty("reportedDatetime");
    }

    /**
     * @param \DateTime $reportedDatetime
     */
    public function setReportedDatetime(\DateTime $reportedDatetime = null)
    {
        $this->setProperty("reportedDatetime", $reportedDatetime);
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->getProperty("priority");
    }

    /**
     * @param string $priority
     */
    public function setPriority($priority = null)
    {
        $this->setProperty("priority", $priority);
    }

    /**
     * @return bool
     */
    public function getErrorFixIsMandatory()
    {
        return $this->getProperty("errorFixIsMandatory");
    }

    /**
     * @param bool $errorFixIsMandatory
     */
    public function setErrorFixIsMandatory($errorFixIsMandatory = null)
    {
        $this->setProperty("errorFixIsMandatory", $errorFixIsMandatory);
    }

    /**
     * @return \DateTime
     */
    public function getIgnoredDatetime()
    {
        return $this->getProperty("ignoredDatetime");
    }

    /**
     * @param \DateTime $ignoredDatetime
     */
    public function setIgnoredDatetime(\DateTime $ignoredDatetime = null)
    {
        $this->setProperty("ignoredDatetime", $ignoredDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getIgnoredByUser()
    {
        return $this->getProperty("ignoredByUser");
    }

    /**
     * @param \DateTime $ignoredByUser
     */
    public function setIgnoredByUser(\DateTime $ignoredByUser = null)
    {
        $this->setProperty("ignoredByUser", $ignoredByUser);
    }

    /**
     * @return \DateTime
     */
    public function getCorrectedDatetime()
    {
        return $this->getProperty("correctedDatetime");
    }

    /**
     * @param \DateTime $correctedDatetime
     */
    public function setCorrectedDatetime(\DateTime $correctedDatetime = null)
    {
        $this->setProperty("correctedDatetime", $correctedDatetime);
    }

    /**
     * @return User
     */
    public function getCorrectedByUser()
    {
        return $this->getProperty("correctedByUser");
    }

    /**
     * @param User $correctedByUser
     */
    public function setCorrectedByUser(User $correctedByUser = null)
    {
        $this->setProperty("correctedByUser", $correctedByUser);
    }
}
