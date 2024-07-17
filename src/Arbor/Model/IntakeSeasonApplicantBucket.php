<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IntakeSeasonApplicantBucket extends ModelBase
{
    public const APPLICANT_BUCKET_NAME = 'applicantBucketName';

    public const INTAKE_SEASON = 'intakeSeason';

    protected $_resourceType = ResourceType::INTAKE_SEASON_APPLICANT_BUCKET;

    /**
     * @param Query $query
     * @return IntakeSeasonApplicantBucket[] | Collection
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
    public function setApplicantBucketName(string $applicantBucketName = null)
    {
        $this->setProperty('applicantBucketName', $applicantBucketName);
    }

    /**
     * @return \Arbor\Model\IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty('intakeSeason');
    }

    /**
     * @param \Arbor\Model\IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(\Arbor\Model\IntakeSeason $intakeSeason = null)
    {
        $this->setProperty('intakeSeason', $intakeSeason);
    }
}
