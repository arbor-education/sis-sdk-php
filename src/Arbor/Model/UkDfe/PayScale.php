<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\PayScaleCategory;

class PayScale extends ModelBase
{
    const REGIONAL_PAY_SPINE = 'regionalPaySpine';

    const PAY_SCALE_CATEGORY = 'payScaleCategory';

    protected $_resourceType = ResourceType::UK_DFE_PAY_SCALE;

    /**
     * @param \Arbor\Query\Query $query
     * @return PayScale[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_PayScale");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PayScale
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_PAY_SCALE, $id);
    }

    /**
     * @return string
     */
    public function getRegionalPaySpine()
    {
        return $this->getProperty("regionalPaySpine");
    }

    /**
     * @param string $regionalPaySpine
     */
    public function setRegionalPaySpine($regionalPaySpine = null)
    {
        $this->setProperty("regionalPaySpine", $regionalPaySpine);
    }

    /**
     * @return PayScaleCategory
     */
    public function getPayScaleCategory()
    {
        return $this->getProperty("payScaleCategory");
    }

    /**
     * @param PayScaleCategory $payScaleCategory
     */
    public function setPayScaleCategory(PayScaleCategory $payScaleCategory = null)
    {
        $this->setProperty("payScaleCategory", $payScaleCategory);
    }
}
