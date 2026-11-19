<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionEnquiry extends ModelBase
{
    public const ADMISSION_GUARDIAN = 'admissionGuardian';

    public const SOURCE = 'source';

    public const STATUS = 'status';

    public const RECEIVED_DATE = 'receivedDate';

    public const MARKETING_CONSENT = 'marketingConsent';

    protected $_resourceType = ResourceType::ADMISSION_ENQUIRY;

    /**
     * @param Query $query
     * @return AdmissionEnquiry[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_ENQUIRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionEnquiry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_ENQUIRY, $id);
    }

    /**
     * @return \Arbor\Model\AdmissionGuardian
     */
    public function getAdmissionGuardian()
    {
        return $this->getProperty('admissionGuardian');
    }

    /**
     * @param \Arbor\Model\AdmissionGuardian $admissionGuardian
     */
    public function setAdmissionGuardian(\Arbor\Model\AdmissionGuardian $admissionGuardian = null)
    {
        $this->setProperty('admissionGuardian', $admissionGuardian);
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }

    /**
     * @param string $source
     */
    public function setSource(string $source = null)
    {
        $this->setProperty('source', $source);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->getProperty('receivedDate');
    }

    /**
     * @param \DateTime $receivedDate
     */
    public function setReceivedDate(\DateTime $receivedDate = null)
    {
        $this->setProperty('receivedDate', $receivedDate);
    }

    /**
     * @return bool
     */
    public function getMarketingConsent()
    {
        return $this->getProperty('marketingConsent');
    }

    /**
     * @param bool $marketingConsent
     */
    public function setMarketingConsent(bool $marketingConsent = null)
    {
        $this->setProperty('marketingConsent', $marketingConsent);
    }
}
