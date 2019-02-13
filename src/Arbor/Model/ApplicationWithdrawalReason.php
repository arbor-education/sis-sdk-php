<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ApplicationWithdrawalReason extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const APPLICATION_WITHDRAWAL_REASON_NAME = 'applicationWithdrawalReasonName';

    protected $_resourceType = ResourceType::APPLICATION_WITHDRAWAL_REASON;

    /**
     * @param Query $query
     * @return ApplicationWithdrawalReason[] | Collection
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

        $query->setResourceType(ResourceType::APPLICATION_WITHDRAWAL_REASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ApplicationWithdrawalReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::APPLICATION_WITHDRAWAL_REASON, $id);
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
    public function getApplicationWithdrawalReasonName()
    {
        return $this->getProperty('applicationWithdrawalReasonName');
    }

    /**
     * @param string $applicationWithdrawalReasonName
     */
    public function setApplicationWithdrawalReasonName($applicationWithdrawalReasonName = null)
    {
        $this->setProperty('applicationWithdrawalReasonName', $applicationWithdrawalReasonName);
    }


}
