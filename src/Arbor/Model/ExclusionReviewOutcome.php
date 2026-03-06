<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ExclusionReviewOutcome extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const LABEL = 'label';

    public const EXPORT_CODE = 'exportCode';

    public const IS_EXCLUSION_UPHELD = 'isExclusionUpheld';

    public const IS_STUDENT_REINSTATED = 'isStudentReinstated';

    protected $_resourceType = ResourceType::EXCLUSION_REVIEW_OUTCOME;

    /**
     * @param Query $query
     * @return ExclusionReviewOutcome[] | Collection
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

        $query->setResourceType(ResourceType::EXCLUSION_REVIEW_OUTCOME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ExclusionReviewOutcome
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EXCLUSION_REVIEW_OUTCOME, $id);
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
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label = null)
    {
        $this->setProperty('label', $label);
    }

    /**
     * @return string
     */
    public function getExportCode()
    {
        return $this->getProperty('exportCode');
    }

    /**
     * @param string $exportCode
     */
    public function setExportCode(string $exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
    }

    /**
     * @return bool
     */
    public function getIsExclusionUpheld()
    {
        return $this->getProperty('isExclusionUpheld');
    }

    /**
     * @param bool $isExclusionUpheld
     */
    public function setIsExclusionUpheld(bool $isExclusionUpheld = null)
    {
        $this->setProperty('isExclusionUpheld', $isExclusionUpheld);
    }

    /**
     * @return bool
     */
    public function getIsStudentReinstated()
    {
        return $this->getProperty('isStudentReinstated');
    }

    /**
     * @param bool $isStudentReinstated
     */
    public function setIsStudentReinstated(bool $isStudentReinstated = null)
    {
        $this->setProperty('isStudentReinstated', $isStudentReinstated);
    }
}
