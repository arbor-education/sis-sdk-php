<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class TwoYearOldFundingBasis extends ModelBase
{

    const STUDENT = 'student';

    const FUNDING_BASIS = 'fundingBasis';

    protected $_resourceType = ResourceType::UK_DFE_TWO_YEAR_OLD_FUNDING_BASIS;

    /**
     * @param Query $query
     * @return TwoYearOldFundingBasis[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_TWO_YEAR_OLD_FUNDING_BASIS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TwoYearOldFundingBasis
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_TWO_YEAR_OLD_FUNDING_BASIS, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getFundingBasis()
    {
        return $this->getProperty('fundingBasis');
    }

    /**
     * @param string $fundingBasis
     */
    public function setFundingBasis($fundingBasis = null)
    {
        $this->setProperty('fundingBasis', $fundingBasis);
    }


}
