<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class IlrReturn extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const RETURN_NUMBER = 'returnNumber';

    const RETURN_DATE = 'returnDate';

    const REFERENCE_DATE = 'referenceDate';

    const ADULT_SKILLS_BUDGET = 'adultSkillsBudget';

    const APPRENTICESHIPS16_18 = 'apprenticeships16_18';

    const ESF_FUNDED = 'esfFunded';

    const COMMUNITY_LEARNING = 'communityLearning';

    const EFA_FUNDED = 'efaFunded';

    protected $_resourceType = ResourceType::UK_ILR_ILR_RETURN;

    /**
     * @param Query $query
     * @return IlrReturn[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_ILR_RETURN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IlrReturn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_ILR_RETURN, $id);
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
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getReturnNumber()
    {
        return $this->getProperty('returnNumber');
    }

    /**
     * @param string $returnNumber
     */
    public function setReturnNumber($returnNumber = null)
    {
        $this->setProperty('returnNumber', $returnNumber);
    }

    /**
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->getProperty('returnDate');
    }

    /**
     * @param \DateTime $returnDate
     */
    public function setReturnDate(\DateTime $returnDate = null)
    {
        $this->setProperty('returnDate', $returnDate);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->getProperty('referenceDate');
    }

    /**
     * @param \DateTime $referenceDate
     */
    public function setReferenceDate(\DateTime $referenceDate = null)
    {
        $this->setProperty('referenceDate', $referenceDate);
    }

    /**
     * @return bool
     */
    public function getAdultSkillsBudget()
    {
        return $this->getProperty('adultSkillsBudget');
    }

    /**
     * @param bool $adultSkillsBudget
     */
    public function setAdultSkillsBudget($adultSkillsBudget = null)
    {
        $this->setProperty('adultSkillsBudget', $adultSkillsBudget);
    }

    /**
     * @return bool
     */
    public function getApprenticeships16_18()
    {
        return $this->getProperty('apprenticeships16_18');
    }

    /**
     * @param bool $apprenticeships16_18
     */
    public function setApprenticeships16_18($apprenticeships16_18 = null)
    {
        $this->setProperty('apprenticeships16_18', $apprenticeships16_18);
    }

    /**
     * @return bool
     */
    public function getEsfFunded()
    {
        return $this->getProperty('esfFunded');
    }

    /**
     * @param bool $esfFunded
     */
    public function setEsfFunded($esfFunded = null)
    {
        $this->setProperty('esfFunded', $esfFunded);
    }

    /**
     * @return bool
     */
    public function getCommunityLearning()
    {
        return $this->getProperty('communityLearning');
    }

    /**
     * @param bool $communityLearning
     */
    public function setCommunityLearning($communityLearning = null)
    {
        $this->setProperty('communityLearning', $communityLearning);
    }

    /**
     * @return bool
     */
    public function getEfaFunded()
    {
        return $this->getProperty('efaFunded');
    }

    /**
     * @param bool $efaFunded
     */
    public function setEfaFunded($efaFunded = null)
    {
        $this->setProperty('efaFunded', $efaFunded);
    }


}
