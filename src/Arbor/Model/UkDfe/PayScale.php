<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PayScale extends ModelBase
{
    public const REGIONAL_PAY_SPINE = 'regionalPaySpine';

    public const PAY_SCALE_CATEGORY = 'payScaleCategory';

    protected $_resourceType = ResourceType::UK_DFE_PAY_SCALE;

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

        $query->setResourceType(ResourceType::UK_DFE_PAY_SCALE);

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

        return $gateway->retrieve(ResourceType::UK_DFE_PAY_SCALE, $id);
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

    /**
     * @return \Arbor\Model\UkDfe\PayScaleCategory
     */
    public function getPayScaleCategory()
    {
        return $this->getProperty('payScaleCategory');
    }

    /**
     * @param \Arbor\Model\UkDfe\PayScaleCategory $payScaleCategory
     */
    public function setPayScaleCategory(\Arbor\Model\UkDfe\PayScaleCategory $payScaleCategory = null)
    {
        $this->setProperty('payScaleCategory', $payScaleCategory);
    }
}
