<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SpecialSchoolProvision extends ModelBase
{
    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const SPECIAL_SCHOOL_PROVISION_TYPE = 'specialSchoolProvisionType';

    public const RANK = 'rank';

    protected $_resourceType = ResourceType::CYMRU_SPECIAL_SCHOOL_PROVISION;

    /**
     * @param Query $query
     * @return SpecialSchoolProvision[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SPECIAL_SCHOOL_PROVISION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SpecialSchoolProvision
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SPECIAL_SCHOOL_PROVISION, $id);
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
     * @return \Arbor\Model\Cymru\SpecialSchoolProvisionType
     */
    public function getSpecialSchoolProvisionType()
    {
        return $this->getProperty('specialSchoolProvisionType');
    }

    /**
     * @param \Arbor\Model\Cymru\SpecialSchoolProvisionType $specialSchoolProvisionType
     */
    public function setSpecialSchoolProvisionType(\Arbor\Model\Cymru\SpecialSchoolProvisionType $specialSchoolProvisionType = null)
    {
        $this->setProperty('specialSchoolProvisionType', $specialSchoolProvisionType);
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->getProperty('rank');
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank = null)
    {
        $this->setProperty('rank', $rank);
    }
}
