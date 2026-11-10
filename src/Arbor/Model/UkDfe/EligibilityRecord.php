<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EligibilityRecord extends ModelBase
{
    public const FSM_CATEGORY = 'fsmCategory';

    public const UK_COUNTRY = 'ukCountry';

    public const FSM_CLAIMANT_GUARDIAN = 'fsmClaimantGuardian';

    protected $_resourceType = ResourceType::UK_DFE_ELIGIBILITY_RECORD;

    /**
     * @param Query $query
     * @return EligibilityRecord[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ELIGIBILITY_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EligibilityRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ELIGIBILITY_RECORD, $id);
    }

    /**
     * @return \Arbor\Model\UkDfe\FsmCategory
     */
    public function getFsmCategory()
    {
        return $this->getProperty('fsmCategory');
    }

    /**
     * @param \Arbor\Model\UkDfe\FsmCategory $fsmCategory
     */
    public function setFsmCategory(\Arbor\Model\UkDfe\FsmCategory $fsmCategory = null)
    {
        $this->setProperty('fsmCategory', $fsmCategory);
    }

    /**
     * @return string
     */
    public function getUkCountry()
    {
        return $this->getProperty('ukCountry');
    }

    /**
     * @param string $ukCountry
     */
    public function setUkCountry(string $ukCountry = null)
    {
        $this->setProperty('ukCountry', $ukCountry);
    }

    /**
     * @return \Arbor\Model\Guardian
     */
    public function getFsmClaimantGuardian()
    {
        return $this->getProperty('fsmClaimantGuardian');
    }

    /**
     * @param \Arbor\Model\Guardian $fsmClaimantGuardian
     */
    public function setFsmClaimantGuardian(\Arbor\Model\Guardian $fsmClaimantGuardian = null)
    {
        $this->setProperty('fsmClaimantGuardian', $fsmClaimantGuardian);
    }
}
