<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\IntakeSeason;

class IntakeSeasonApplicantBucket extends ModelBase
{
    const APPLICANT_BUCKET_NAME = 'applicantBucketName';

    const INTAKE_SEASON = 'intakeSeason';

    protected $_resourceType = ResourceType::INTAKE_SEASON_APPLICANT_BUCKET;

    /**
     * @param \Arbor\Query\Query $query
     * @return IntakeSeasonApplicantBucket[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("IntakeSeasonApplicantBucket");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return IntakeSeasonApplicantBucket
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::INTAKE_SEASON_APPLICANT_BUCKET, $id);
    }

    /**
     * @return string
     */
    public function getApplicantBucketName()
    {
        return $this->getProperty("applicantBucketName");
    }

    /**
     * @param string $applicantBucketName
     */
    public function setApplicantBucketName($applicantBucketName = null)
    {
        $this->setProperty("applicantBucketName", $applicantBucketName);
    }

    /**
     * @return IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty("intakeSeason");
    }

    /**
     * @param IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(IntakeSeason $intakeSeason = null)
    {
        $this->setProperty("intakeSeason", $intakeSeason);
    }
}
