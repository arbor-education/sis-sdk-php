<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationAwardCountry extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const ACCREDITATION_CODE = 'accreditationCode';

    public const ACCREDITATION_END_DATE = 'accreditationEndDate';

    public const ACCREDITATION_NAME = 'accreditationName';

    public const ACCREDITATION_START_DATE = 'accreditationStartDate';

    public const COUNTRY_CODE = 'countryCode';

    public const OPERATIONAL_END_DATE = 'operationalEndDate';

    public const OPERATIONAL_START_DATE = 'operationalStartDate';

    public const QUALIFICATION_AWARD_CERTIFICATION_BODY = 'qualificationAwardCertificationBody';

    public const QUALIFICATION_AWARD = 'qualificationAward';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD_COUNTRY;

    /**
     * @param Query $query
     * @return QualificationAwardCountry[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_AWARD_COUNTRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAwardCountry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_AWARD_COUNTRY, $id);
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
    public function getAccreditationCode()
    {
        return $this->getProperty('accreditationCode');
    }

    /**
     * @param string $accreditationCode
     */
    public function setAccreditationCode(string $accreditationCode = null)
    {
        $this->setProperty('accreditationCode', $accreditationCode);
    }

    /**
     * @return \DateTime
     */
    public function getAccreditationEndDate()
    {
        return $this->getProperty('accreditationEndDate');
    }

    /**
     * @param \DateTime $accreditationEndDate
     */
    public function setAccreditationEndDate(\DateTime $accreditationEndDate = null)
    {
        $this->setProperty('accreditationEndDate', $accreditationEndDate);
    }

    /**
     * @return string
     */
    public function getAccreditationName()
    {
        return $this->getProperty('accreditationName');
    }

    /**
     * @param string $accreditationName
     */
    public function setAccreditationName(string $accreditationName = null)
    {
        $this->setProperty('accreditationName', $accreditationName);
    }

    /**
     * @return \DateTime
     */
    public function getAccreditationStartDate()
    {
        return $this->getProperty('accreditationStartDate');
    }

    /**
     * @param \DateTime $accreditationStartDate
     */
    public function setAccreditationStartDate(\DateTime $accreditationStartDate = null)
    {
        $this->setProperty('accreditationStartDate', $accreditationStartDate);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getProperty('countryCode');
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode = null)
    {
        $this->setProperty('countryCode', $countryCode);
    }

    /**
     * @return \DateTime
     */
    public function getOperationalEndDate()
    {
        return $this->getProperty('operationalEndDate');
    }

    /**
     * @param \DateTime $operationalEndDate
     */
    public function setOperationalEndDate(\DateTime $operationalEndDate = null)
    {
        $this->setProperty('operationalEndDate', $operationalEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getOperationalStartDate()
    {
        return $this->getProperty('operationalStartDate');
    }

    /**
     * @param \DateTime $operationalStartDate
     */
    public function setOperationalStartDate(\DateTime $operationalStartDate = null)
    {
        $this->setProperty('operationalStartDate', $operationalStartDate);
    }

    /**
     * @return \Arbor\Model\QualificationAwardCertificationBody
     */
    public function getQualificationAwardCertificationBody()
    {
        return $this->getProperty('qualificationAwardCertificationBody');
    }

    /**
     * @param \Arbor\Model\QualificationAwardCertificationBody
     * $qualificationAwardCertificationBody
     */
    public function setQualificationAwardCertificationBody(\Arbor\Model\QualificationAwardCertificationBody $qualificationAwardCertificationBody = null)
    {
        $this->setProperty('qualificationAwardCertificationBody', $qualificationAwardCertificationBody);
    }

    /**
     * @return \Arbor\Model\QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param \Arbor\Model\QualificationAward $qualificationAward
     */
    public function setQualificationAward(\Arbor\Model\QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }
}
