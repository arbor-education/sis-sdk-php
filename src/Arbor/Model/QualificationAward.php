<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationAward extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const QUALIFICATION_SCHEME = 'qualificationScheme';

    const QUALIFICATION_SUBJECT = 'qualificationSubject';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const AWARD_IDENTIFIER = 'awardIdentifier';

    const TITLE = 'title';

    const SHORT_TITLE = 'shortTitle';

    const QUALIFICATION_AWARD_TYPE = 'qualificationAwardType';

    const QUALIFICATION_AWARD_SUBTYPE = 'qualificationAwardSubtype';

    const ACCREDITATION_START_DATE = 'accreditationStartDate';

    const ACCREDITATION_END_DATE = 'accreditationEndDate';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const CERTIFICATION_END_DATE = 'certificationEndDate';

    const OPERATIONAL_START_DATE = 'operationalStartDate';

    const OPERATIONAL_END_DATE = 'operationalEndDate';

    const IS_LINEAR_QUALIFICATION = 'isLinearQualification';

    const QCA_ACCREDITATION_NUMBER = 'qcaAccreditationNumber';

    const KS4_DISCOUNT_CODE2014 = 'ks4DiscountCode2014';

    const KS4_DISCOUNT_CODE2015 = 'ks4DiscountCode2015';

    const KS4_DISCOUNT_CODE2016 = 'ks4DiscountCode2016';

    const KS4_DISCOUNT_CODE2017 = 'ks4DiscountCode2017';

    const POST16_DISCOUNT_CODE = 'post16DiscountCode';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD;

    /**
     * @param Query $query
     * @return QualificationAward[] | Collection
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
     * @return QualificationScheme
     */
    public function getQualificationScheme()
    {
        return $this->getProperty('qualificationScheme');
    }

    /**
     * @param QualificationScheme $qualificationScheme
     */
    public function setQualificationScheme(QualificationScheme $qualificationScheme = null)
    {
        $this->setProperty('qualificationScheme', $qualificationScheme);
    }

    /**
     * @return QualificationSubject
     */
    public function getQualificationSubject()
    {
        return $this->getProperty('qualificationSubject');
    }

    /**
     * @param QualificationSubject $qualificationSubject
     */
    public function setQualificationSubject(QualificationSubject $qualificationSubject = null)
    {
        $this->setProperty('qualificationSubject', $qualificationSubject);
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
     * @return string
     */
    public function getAwardIdentifier()
    {
        return $this->getProperty('awardIdentifier');
    }

    /**
     * @param string $awardIdentifier
     */
    public function setAwardIdentifier($awardIdentifier = null)
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
    public function setTitle($title = null)
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
    public function setShortTitle($shortTitle = null)
    {
        $this->setProperty('shortTitle', $shortTitle);
    }

    /**
     * @return QualificationAwardType
     */
    public function getQualificationAwardType()
    {
        return $this->getProperty('qualificationAwardType');
    }

    /**
     * @param QualificationAwardType $qualificationAwardType
     */
    public function setQualificationAwardType(QualificationAwardType $qualificationAwardType = null)
    {
        $this->setProperty('qualificationAwardType', $qualificationAwardType);
    }

    /**
     * @return QualificationAwardSubtype
     */
    public function getQualificationAwardSubtype()
    {
        return $this->getProperty('qualificationAwardSubtype');
    }

    /**
     * @param QualificationAwardSubtype $qualificationAwardSubtype
     */
    public function setQualificationAwardSubtype(QualificationAwardSubtype $qualificationAwardSubtype = null)
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
    public function setIsLinearQualification($isLinearQualification = null)
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
    public function setQcaAccreditationNumber($qcaAccreditationNumber = null)
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
    public function setKs4DiscountCode2014($ks4DiscountCode2014 = null)
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
    public function setKs4DiscountCode2015($ks4DiscountCode2015 = null)
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
    public function setKs4DiscountCode2016($ks4DiscountCode2016 = null)
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
    public function setKs4DiscountCode2017($ks4DiscountCode2017 = null)
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
    public function setPost16DiscountCode($post16DiscountCode = null)
    {
        $this->setProperty('post16DiscountCode', $post16DiscountCode);
    }

}
