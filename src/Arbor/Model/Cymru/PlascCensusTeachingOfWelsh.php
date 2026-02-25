<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PlascCensusTeachingOfWelsh extends ModelBase
{
    public const DATA_RETURN = 'dataReturn';

    public const TEACHING_WELSH_CATEGORY = 'teachingWelshCategory';

    public const SEX = 'sex';

    public const TENURE = 'tenure';

    public const TEACHING_WELSH_HOURS = 'teachingWelshHours';

    public const HEAD_COUNT = 'headCount';

    protected $_resourceType = ResourceType::CYMRU_PLASC_CENSUS_TEACHING_OF_WELSH;

    /**
     * @param Query $query
     * @return PlascCensusTeachingOfWelsh[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PLASC_CENSUS_TEACHING_OF_WELSH);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PlascCensusTeachingOfWelsh
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PLASC_CENSUS_TEACHING_OF_WELSH, $id);
    }

    /**
     * @return \Arbor\Model\Statutory\DataReturn
     */
    public function getDataReturn()
    {
        return $this->getProperty('dataReturn');
    }

    /**
     * @param \Arbor\Model\Statutory\DataReturn $dataReturn
     */
    public function setDataReturn(\Arbor\Model\Statutory\DataReturn $dataReturn = null)
    {
        $this->setProperty('dataReturn', $dataReturn);
    }

    /**
     * @return string
     */
    public function getTeachingWelshCategory()
    {
        return $this->getProperty('teachingWelshCategory');
    }

    /**
     * @param string $teachingWelshCategory
     */
    public function setTeachingWelshCategory(string $teachingWelshCategory = null)
    {
        $this->setProperty('teachingWelshCategory', $teachingWelshCategory);
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->getProperty('sex');
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex = null)
    {
        $this->setProperty('sex', $sex);
    }

    /**
     * @return string
     */
    public function getTenure()
    {
        return $this->getProperty('tenure');
    }

    /**
     * @param string $tenure
     */
    public function setTenure(string $tenure = null)
    {
        $this->setProperty('tenure', $tenure);
    }

    /**
     * @return int
     */
    public function getTeachingWelshHours()
    {
        return $this->getProperty('teachingWelshHours');
    }

    /**
     * @param int $teachingWelshHours
     */
    public function setTeachingWelshHours(int $teachingWelshHours = null)
    {
        $this->setProperty('teachingWelshHours', $teachingWelshHours);
    }

    /**
     * @return int
     */
    public function getHeadCount()
    {
        return $this->getProperty('headCount');
    }

    /**
     * @param int $headCount
     */
    public function setHeadCount(int $headCount = null)
    {
        $this->setProperty('headCount', $headCount);
    }
}
