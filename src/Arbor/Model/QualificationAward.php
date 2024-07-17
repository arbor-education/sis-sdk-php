<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationAward extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const QUALIFICATION_SCHEME = 'qualificationScheme';

    public const QUALIFICATION_SUBJECT = 'qualificationSubject';

    public const AWARDING_ORGANIZATION = 'awardingOrganization';

    public const AWARD_IDENTIFIER = 'awardIdentifier';

    public const TITLE = 'title';

    public const SHORT_TITLE = 'shortTitle';

    public const QUALIFICATION_AWARD_TYPE = 'qualificationAwardType';

    public const QUALIFICATION_AWARD_SUBTYPE = 'qualificationAwardSubtype';

    public const ACCREDITATION_START_DATE = 'accreditationStartDate';

    public const ACCREDITATION_END_DATE = 'accreditationEndDate';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const CERTIFICATION_END_DATE = 'certificationEndDate';

    public const OPERATIONAL_START_DATE = 'operationalStartDate';

    public const OPERATIONAL_END_DATE = 'operationalEndDate';

    public const IS_LINEAR_QUALIFICATION = 'isLinearQualification';

    public const QCA_ACCREDITATION_NUMBER = 'qcaAccreditationNumber';

    public const KS4_DISCOUNT_CODE2014 = 'ks4DiscountCode2014';

    public const KS4_DISCOUNT_CODE2015 = 'ks4DiscountCode2015';

    public const KS4_DISCOUNT_CODE2016 = 'ks4DiscountCode2016';

    public const KS4_DISCOUNT_CODE2017 = 'ks4DiscountCode2017';

    public const POST16_DISCOUNT_CODE = 'post16DiscountCode';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD;

    /**
     * @param Query $query
     * @return QualificationAward[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_AWARD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAward
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_AWARD, $id);
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
     * @return \Arbor\Model\QualificationScheme
     */
    public function getQualificationScheme()
    {
        return $this->getProperty('qualificationScheme');
    }

    /**
     * @param \Arbor\Model\QualificationScheme $qualificationScheme
     */
    public function setQualificationScheme(\Arbor\Model\QualificationScheme $qualificationScheme = null)
    {
        $this->setProperty('qualificationScheme', $qualificationScheme);
    }

    /**
     * @return \Arbor\Model\QualificationSubject
     */
    public function getQualificationSubject()
    {
        return $this->getProperty('qualificationSubject');
    }

    /**
     * @param \Arbor\Model\QualificationSubject $qualificationSubject
     */
    public function setQualificationSubject(\Arbor\Model\QualificationSubject $qualificationSubject = null)
    {
        $this->setProperty('qualificationSubject', $qualificationSubject);
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
     * @return string
     */
    public function getAwardIdentifier()
    {
        return $this->getProperty('awardIdentifier');
    }

    /**
     * @param string $awardIdentifier
     */
    public function setAwardIdentifier(string $awardIdentifier = null)
    {
        $this->setProperty('awardIdentifier', $awardIdentifier);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getShortTitle()
    {
        return $this->getProperty('shortTitle');
    }

    /**
     * @param string $shortTitle
     */
    public function setShortTitle(string $shortTitle = null)
    {
        $this->setProperty('shortTitle', $shortTitle);
    }

    /**
     * @return \Arbor\Model\QualificationAwardType
     */
    public function getQualificationAwardType()
    {
        return $this->getProperty('qualificationAwardType');
    }

    /**
     * @param \Arbor\Model\QualificationAwardType $qualificationAwardType
     */
    public function setQualificationAwardType(\Arbor\Model\QualificationAwardType $qualificationAwardType = null)
    {
        $this->setProperty('qualificationAwardType', $qualificationAwardType);
    }

    /**
     * @return \Arbor\Model\QualificationAwardSubtype
     */
    public function getQualificationAwardSubtype()
    {
        return $this->getProperty('qualificationAwardSubtype');
    }

    /**
     * @param \Arbor\Model\QualificationAwardSubtype $qualificationAwardSubtype
     */
    public function setQualificationAwardSubtype(\Arbor\Model\QualificationAwardSubtype $qualificationAwardSubtype = null)
    {
        $this->setProperty('qualificationAwardSubtype', $qualificationAwardSubtype);
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
     * @return \DateTime
     */
    public function getCertificationEndDate()
    {
        return $this->getProperty('certificationEndDate');
    }

    /**
     * @param \DateTime $certificationEndDate
     */
    public function setCertificationEndDate(\DateTime $certificationEndDate = null)
    {
        $this->setProperty('certificationEndDate', $certificationEndDate);
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
     * @return bool
     */
    public function getIsLinearQualification()
    {
        return $this->getProperty('isLinearQualification');
    }

    /**
     * @param bool $isLinearQualification
     */
    public function setIsLinearQualification(bool $isLinearQualification = null)
    {
        $this->setProperty('isLinearQualification', $isLinearQualification);
    }

    /**
     * @return string
     */
    public function getQcaAccreditationNumber()
    {
        return $this->getProperty('qcaAccreditationNumber');
    }

    /**
     * @param string $qcaAccreditationNumber
     */
    public function setQcaAccreditationNumber(string $qcaAccreditationNumber = null)
    {
        $this->setProperty('qcaAccreditationNumber', $qcaAccreditationNumber);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2014()
    {
        return $this->getProperty('ks4DiscountCode2014');
    }

    /**
     * @param string $ks4DiscountCode2014
     */
    public function setKs4DiscountCode2014(string $ks4DiscountCode2014 = null)
    {
        $this->setProperty('ks4DiscountCode2014', $ks4DiscountCode2014);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2015()
    {
        return $this->getProperty('ks4DiscountCode2015');
    }

    /**
     * @param string $ks4DiscountCode2015
     */
    public function setKs4DiscountCode2015(string $ks4DiscountCode2015 = null)
    {
        $this->setProperty('ks4DiscountCode2015', $ks4DiscountCode2015);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2016()
    {
        return $this->getProperty('ks4DiscountCode2016');
    }

    /**
     * @param string $ks4DiscountCode2016
     */
    public function setKs4DiscountCode2016(string $ks4DiscountCode2016 = null)
    {
        $this->setProperty('ks4DiscountCode2016', $ks4DiscountCode2016);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2017()
    {
        return $this->getProperty('ks4DiscountCode2017');
    }

    /**
     * @param string $ks4DiscountCode2017
     */
    public function setKs4DiscountCode2017(string $ks4DiscountCode2017 = null)
    {
        $this->setProperty('ks4DiscountCode2017', $ks4DiscountCode2017);
    }

    /**
     * @return string
     */
    public function getPost16DiscountCode()
    {
        return $this->getProperty('post16DiscountCode');
    }

    /**
     * @param string $post16DiscountCode
     */
    public function setPost16DiscountCode(string $post16DiscountCode = null)
    {
        $this->setProperty('post16DiscountCode', $post16DiscountCode);
    }
}
