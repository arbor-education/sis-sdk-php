<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationTransportCertificate extends ModelBase
{
    public const AWARDING_ORGANIZATION = 'awardingOrganization';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const PRIVATE_KEY = 'privateKey';

    public const PUBLIC_KEY = 'publicKey';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const LAST_SEQUENCE_NUMBER = 'lastSequenceNumber';

    protected $_resourceType = ResourceType::QUALIFICATION_TRANSPORT_CERTIFICATE;

    /**
     * @param Query $query
     * @return QualificationTransportCertificate[] | Collection
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
     * @return \Arbor\Model\AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty('awardingOrganization');
    }

    /**
     * @param \Arbor\Model\AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(\Arbor\Model\AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty('awardingOrganization', $awardingOrganization);
    }

    /**
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(\Arbor\Model\EducationalInstitution $educationalInstitution = null)
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
    public function setPrivateKey(string $privateKey = null)
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
    public function setPublicKey(string $publicKey = null)
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
    public function setLastSequenceNumber(int $lastSequenceNumber = null)
    {
        $this->setProperty('lastSequenceNumber', $lastSequenceNumber);
    }
}
