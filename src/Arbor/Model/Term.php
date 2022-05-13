<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Term extends ModelBase
{
    const ACADEMIC_YEAR = 'academicYear';

    const TERM_NAME = 'termName';

    const SHORT_TERM_NAME = 'shortTermName';

    const CODE = 'code';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::TERM;

    /**
     * @param Query $query
     * @return Term[] | Collection
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

        $query->setResourceType(ResourceType::TERM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Term
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TERM, $id);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getTermName()
    {
        return $this->getProperty('termName');
    }

    /**
     * @param string $termName
     */
    public function setTermName($termName = null)
    {
        $this->setProperty('termName', $termName);
    }

    /**
     * @return string
     */
    public function getShortTermName()
    {
        return $this->getProperty('shortTermName');
    }

    /**
     * @param string $shortTermName
     */
    public function setShortTermName($shortTermName = null)
    {
        $this->setProperty('shortTermName', $shortTermName);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
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
