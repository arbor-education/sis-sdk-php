<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PlascCensusTeacher extends ModelBase
{
    public const DATA_RETURN = 'dataReturn';

    public const TEACHER_CATEGORY = 'teacherCategory';

    public const SEX = 'sex';

    public const TENURE = 'tenure';

    public const PART_TIME_HOURS = 'partTimeHours';

    public const HEAD_COUNT = 'headCount';

    public const CONTRACTS_COUNT = 'contractsCount';

    public const CONTRACTS_PART_TIME_HOURS = 'contractsPartTimeHours';

    protected $_resourceType = ResourceType::CYMRU_PLASC_CENSUS_TEACHER;

    /**
     * @param Query $query
     * @return PlascCensusTeacher[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PLASC_CENSUS_TEACHER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PlascCensusTeacher
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PLASC_CENSUS_TEACHER, $id);
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
    public function getTeacherCategory()
    {
        return $this->getProperty('teacherCategory');
    }

    /**
     * @param string $teacherCategory
     */
    public function setTeacherCategory(string $teacherCategory = null)
    {
        $this->setProperty('teacherCategory', $teacherCategory);
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
    public function getPartTimeHours()
    {
        return $this->getProperty('partTimeHours');
    }

    /**
     * @param int $partTimeHours
     */
    public function setPartTimeHours(int $partTimeHours = null)
    {
        $this->setProperty('partTimeHours', $partTimeHours);
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

    /**
     * @return int
     */
    public function getContractsCount()
    {
        return $this->getProperty('contractsCount');
    }

    /**
     * @param int $contractsCount
     */
    public function setContractsCount(int $contractsCount = null)
    {
        $this->setProperty('contractsCount', $contractsCount);
    }

    /**
     * @return int
     */
    public function getContractsPartTimeHours()
    {
        return $this->getProperty('contractsPartTimeHours');
    }

    /**
     * @param int $contractsPartTimeHours
     */
    public function setContractsPartTimeHours(int $contractsPartTimeHours = null)
    {
        $this->setProperty('contractsPartTimeHours', $contractsPartTimeHours);
    }
}
