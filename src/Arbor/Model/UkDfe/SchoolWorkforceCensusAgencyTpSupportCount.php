<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolWorkforceCensusAgencyTpSupportCount extends ModelBase
{
    public const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const WORKFORCE_CENSUS_ROLE_IDENTIFIER = 'workforceCensusRoleIdentifier';

    public const AGENCY_TP_SUPPORT_CATEGORY = 'agencyTpSupportCategory';

    public const SUP_HEAD_COUNT = 'supHeadCount';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_AGENCY_TP_SUPPORT_COUNT;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensusAgencyTpSupportCount[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_AGENCY_TP_SUPPORT_COUNT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolWorkforceCensusAgencyTpSupportCount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_AGENCY_TP_SUPPORT_COUNT, $id);
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
    public function getWorkforceCensusRoleIdentifier()
    {
        return $this->getProperty('workforceCensusRoleIdentifier');
    }

    /**
     * @param string $workforceCensusRoleIdentifier
     */
    public function setWorkforceCensusRoleIdentifier(string $workforceCensusRoleIdentifier = null)
    {
        $this->setProperty('workforceCensusRoleIdentifier', $workforceCensusRoleIdentifier);
    }

    /**
     * @return string
     */
    public function getAgencyTpSupportCategory()
    {
        return $this->getProperty('agencyTpSupportCategory');
    }

    /**
     * @param string $agencyTpSupportCategory
     */
    public function setAgencyTpSupportCategory(string $agencyTpSupportCategory = null)
    {
        $this->setProperty('agencyTpSupportCategory', $agencyTpSupportCategory);
    }

    /**
     * @return int
     */
    public function getSupHeadCount()
    {
        return $this->getProperty('supHeadCount');
    }

    /**
     * @param int $supHeadCount
     */
    public function setSupHeadCount(int $supHeadCount = null)
    {
        $this->setProperty('supHeadCount', $supHeadCount);
    }
}
