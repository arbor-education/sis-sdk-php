<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PayScale extends ModelBase
{
    public const PAY_SCALE_CATEGORY = 'payScaleCategory';

    public const REGIONAL_PAY_SPINE = 'regionalPaySpine';

    protected $_resourceType = ResourceType::CYMRU_PAY_SCALE;

    /**
     * @param Query $query
     * @return PayScale[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PAY_SCALE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PayScale
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PAY_SCALE, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\PayScaleCategory
     */
    public function getPayScaleCategory()
    {
        return $this->getProperty('payScaleCategory');
    }

    /**
     * @param \Arbor\Model\Cymru\PayScaleCategory $payScaleCategory
     */
    public function setPayScaleCategory(\Arbor\Model\Cymru\PayScaleCategory $payScaleCategory = null)
    {
        $this->setProperty('payScaleCategory', $payScaleCategory);
    }

    /**
     * @return string
     */
    public function getRegionalPaySpine()
    {
        return $this->getProperty('regionalPaySpine');
    }

    /**
     * @param string $regionalPaySpine
     */
    public function setRegionalPaySpine(string $regionalPaySpine = null)
    {
        $this->setProperty('regionalPaySpine', $regionalPaySpine);
    }
}
