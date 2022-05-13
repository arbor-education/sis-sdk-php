<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IntakeSeasonApplicantBucket extends ModelBase
{
    const APPLICANT_BUCKET_NAME = 'applicantBucketName';

    const INTAKE_SEASON = 'intakeSeason';

    protected $_resourceType = ResourceType::INTAKE_SEASON_APPLICANT_BUCKET;

    /**
     * @param Query $query
     * @return IntakeSeasonApplicantBucket[] | Collection
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

        $query->setResourceType(ResourceType::INTAKE_SEASON_APPLICANT_BUCKET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntakeSeasonApplicantBucket
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTAKE_SEASON_APPLICANT_BUCKET, $id);
    }

    /**
     * @return string
     */
    public function getApplicantBucketName()
    {
        return $this->getProperty('applicantBucketName');
    }

    /**
     * @param string $applicantBucketName
     */
    public function setApplicantBucketName($applicantBucketName = null)
    {
        $this->setProperty('applicantBucketName', $applicantBucketName);
    }

    /**
     * @return IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty('intakeSeason');
    }

    /**
     * @param IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(IntakeSeason $intakeSeason = null)
    {
        $this->setProperty('intakeSeason', $intakeSeason);
    }

}
