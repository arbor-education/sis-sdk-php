<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationTransportCertificate extends ModelBase
{

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const PRIVATE_KEY = 'privateKey';

    const PUBLIC_KEY = 'publicKey';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const LAST_SEQUENCE_NUMBER = 'lastSequenceNumber';

    protected $_resourceType = ResourceType::QUALIFICATION_TRANSPORT_CERTIFICATE;

    /**
     * @param Query $query
     * @return QualificationTransportCertificate[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_TRANSPORT_CERTIFICATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationTransportCertificate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_TRANSPORT_CERTIFICATE, $id);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty('awardingOrganization');
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty('awardingOrganization', $awardingOrganization);
    }

    /**
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->getProperty('privateKey');
    }

    /**
     * @param string $privateKey
     */
    public function setPrivateKey($privateKey = null)
    {
        $this->setProperty('privateKey', $privateKey);
    }

    /**
     * @return string
     */
    public function getPublicKey()
    {
        return $this->getProperty('publicKey');
    }

    /**
     * @param string $publicKey
     */
    public function setPublicKey($publicKey = null)
    {
        $this->setProperty('publicKey', $publicKey);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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

    /**
     * @return int
     */
    public function getLastSequenceNumber()
    {
        return $this->getProperty('lastSequenceNumber');
    }

    /**
     * @param int $lastSequenceNumber
     */
    public function setLastSequenceNumber($lastSequenceNumber = null)
    {
        $this->setProperty('lastSequenceNumber', $lastSequenceNumber);
    }


}
