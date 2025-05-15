<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SenNeed extends ModelBase
{
    public const STUDENT = 'student';

    public const SEN_NEED_TYPE = 'senNeedType';

    public const DESCRIPTION = 'description';

    public const RANKING = 'ranking';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::SEN_NEED;

    /**
     * @param Query $query
     * @return SenNeed[] | Collection
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

        $query->setResourceType(ResourceType::SEN_NEED);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenNeed
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEN_NEED, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \Arbor\Model\SenNeedType
     */
    public function getSenNeedType()
    {
        return $this->getProperty('senNeedType');
    }

    /**
     * @param \Arbor\Model\SenNeedType $senNeedType
     */
    public function setSenNeedType(\Arbor\Model\SenNeedType $senNeedType = null)
    {
        $this->setProperty('senNeedType', $senNeedType);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return int
     */
    public function getRanking()
    {
        return $this->getProperty('ranking');
    }

    /**
     * @param int $ranking
     */
    public function setRanking(int $ranking = null)
    {
        $this->setProperty('ranking', $ranking);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }
}
