<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\SenNeedType;

class SenNeed extends ModelBase
{
    const STUDENT = 'student';

    const SEN_NEED_TYPE = 'senNeedType';

    const DESCRIPTION = 'description';

    const RANKING = 'ranking';

    protected $_resourceType = ResourceType::SEN_NEED;

    /**
     * @param \Arbor\Query\Query $query
     * @return SenNeed[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("SenNeed");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SenNeed
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SEN_NEED, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return SenNeedType
     */
    public function getSenNeedType()
    {
        return $this->getProperty("senNeedType");
    }

    /**
     * @param SenNeedType $senNeedType
     */
    public function setSenNeedType(SenNeedType $senNeedType = null)
    {
        $this->setProperty("senNeedType", $senNeedType);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return int
     */
    public function getRanking()
    {
        return $this->getProperty("ranking");
    }

    /**
     * @param int $ranking
     */
    public function setRanking($ranking = null)
    {
        $this->setProperty("ranking", $ranking);
    }
}
