<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class TwoYearOldFundingBasis extends ModelBase
{
    public const STUDENT = 'student';

    public const FUNDING_BASIS = 'fundingBasis';

    protected $_resourceType = ResourceType::UK_DFE_TWO_YEAR_OLD_FUNDING_BASIS;

    /**
     * @param Query $query
     * @return TwoYearOldFundingBasis[] | Collection
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
     * @return string
     */
    public function getFundingBasis()
    {
        return $this->getProperty('fundingBasis');
    }

    /**
     * @param string $fundingBasis
     */
    public function setFundingBasis(string $fundingBasis = null)
    {
        $this->setProperty('fundingBasis', $fundingBasis);
    }
}
