<?php

namespace Arbor\Model\Cymru;

use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\Cymru\ResourceType;

class SchoolVacancyCoverType extends ModelBase
{
    public const SCHOOL_VACANCY = 'schoolVacancy';

    public const VACANCY_COVER_TYPE = 'vacancyCoverType';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_VACANCY_COVER_TYPE;

    /**
     * @param Query $query
     * @return SchoolVacancyCoverType[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_VACANCY_COVER_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolVacancyCoverType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_VACANCY_COVER_TYPE, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolVacancy
     */
    public function getSchoolVacancy()
    {
        return $this->getProperty('schoolVacancy');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolVacancy $schoolVacancy
     */
    public function setSchoolVacancy(\Arbor\Model\Cymru\SchoolVacancy $schoolVacancy = null)
    {
        $this->setProperty('schoolVacancy', $schoolVacancy);
    }

    /**
     * @return string
     */
    public function getVacancyCoverType()
    {
        return $this->getProperty('vacancyCoverType');
    }

    /**
     * @param string $vacancyCoverType
     */
    public function setVacancyCoverType(string $vacancyCoverType = null)
    {
        $this->setProperty('vacancyCoverType', $vacancyCoverType);
    }
}
