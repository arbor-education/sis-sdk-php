<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Language;
use \Arbor\Model\QualificationScheme;
use \Arbor\Model\QualificationSubject;
use \Arbor\Model\AwardingOrganization;
use \Arbor\Model\QualificationAwardType;
use \Arbor\Model\QualificationAwardLevel;

class QualificationAward extends ModelBase
{
    const AWARDING_ORGANISATION_ACCREDITED_VERSION_NUMBER = 'awardingOrganisationAccreditedVersionNumber';

    const ASSESSMENT_LANGUAGE = 'assessmentLanguage';

    const CERTIFICATE_OF_UNIT_CREDIT_ISSUED = 'certificateOfUnitCreditIssued';

    const CONTRIBUTING_UNITS_LISTED = 'contributingUnitsListed';

    const COURSE_LENGTH_TYPE = 'courseLengthType';

    const ENDORSED_TITLE_REQUIRED = 'endorsedTitleRequired';

    const GUIDED_LEARNING_MIN_HOURS = 'guidedLearningMinHours';

    const GUIDED_LEARNING_MAX_HOURS = 'guidedLearningMaxHours';

    const LEARNING_AIM_CODE = 'learningAimCode';

    const DELIVERY_MODEL_TYPE = 'deliveryModelType';

    const EVIDENCE_REQUIREMENT_PROVIDED = 'evidenceRequirementProvided';

    const EVIDENCE_REQUIREMENT_TYPE = 'evidenceRequirementType';

    const QUALIFICATION_NUMBER = 'qualificationNumber';

    const REGISTRATION_EXPIRY_MONTHS = 'registrationExpiryMonths';

    const RESIT_RULE_TEXT = 'resitRuleText';

    const STATEMENT_OF_CREDIT_ISSUED = 'statementOfCreditIssued';

    const QCA_CLASSIFICATION_CODE = 'qcaClassificationCode';

    const QCA_ACCREDITATION_NUMBER = 'qcaAccreditationNumber';

    const KS4_DISCOUNT_CODE2014 = 'ks4DiscountCode2014';

    const KS4_DISCOUNT_CODE2015 = 'ks4DiscountCode2015';

    const KS4_DISCOUNT_CODE2016 = 'ks4DiscountCode2016';

    const KS4_DISCOUNT_CODE2017 = 'ks4DiscountCode2017';

    const POST16_DISCOUNT_CODE = 'post16DiscountCode';

    const NQF = 'nqf';

    const EXAMINATION_FEE = 'examinationFee';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const QUALIFICATION_SCHEME = 'qualificationScheme';

    const QUALIFICATION_SUBJECT = 'qualificationSubject';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const AWARD_IDENTIFIER = 'awardIdentifier';

    const FULL_TITLE = 'fullTitle';

    const SHORT_TITLE = 'shortTitle';

    const QUALIFICATION_AWARD_TYPE = 'qualificationAwardType';

    const QUALIFICATION_AWARD_LEVEL = 'qualificationAwardLevel';

    const ACCREDITATION_START_DATE = 'accreditationStartDate';

    const ACCREDITATION_END_DATE = 'accreditationEndDate';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const CERTIFICATION_START_DATE = 'certificationStartDate';

    const CERTIFICATION_END_DATE = 'certificationEndDate';

    const OPERATIONAL_START_DATE = 'operationalStartDate';

    const OPERATIONAL_END_DATE = 'operationalEndDate';

    const CLASSIFICATION = 'classification';

    const SECTOR_LEAD_ORGANIZATION = 'sectorLeadOrganization';

    const ASSESSOR = 'assessor';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationAward[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("QualificationAward");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationAward
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::QUALIFICATION_AWARD, $id);
    }

    /**
     * @return string
     */
    public function getAwardingOrganisationAccreditedVersionNumber()
    {
        return $this->getProperty("awardingOrganisationAccreditedVersionNumber");
    }

    /**
     * @param string $awardingOrganisationAccreditedVersionNumber
     */
    public function setAwardingOrganisationAccreditedVersionNumber($awardingOrganisationAccreditedVersionNumber = null)
    {
        $this->setProperty("awardingOrganisationAccreditedVersionNumber", $awardingOrganisationAccreditedVersionNumber);
    }

    /**
     * @return Language
     */
    public function getAssessmentLanguage()
    {
        return $this->getProperty("assessmentLanguage");
    }

    /**
     * @param Language $assessmentLanguage
     */
    public function setAssessmentLanguage(Language $assessmentLanguage = null)
    {
        $this->setProperty("assessmentLanguage", $assessmentLanguage);
    }

    /**
     * @return bool
     */
    public function getCertificateOfUnitCreditIssued()
    {
        return $this->getProperty("certificateOfUnitCreditIssued");
    }

    /**
     * @param bool $certificateOfUnitCreditIssued
     */
    public function setCertificateOfUnitCreditIssued($certificateOfUnitCreditIssued = null)
    {
        $this->setProperty("certificateOfUnitCreditIssued", $certificateOfUnitCreditIssued);
    }

    /**
     * @return bool
     */
    public function getContributingUnitsListed()
    {
        return $this->getProperty("contributingUnitsListed");
    }

    /**
     * @param bool $contributingUnitsListed
     */
    public function setContributingUnitsListed($contributingUnitsListed = null)
    {
        $this->setProperty("contributingUnitsListed", $contributingUnitsListed);
    }

    /**
     * @return string
     */
    public function getCourseLengthType()
    {
        return $this->getProperty("courseLengthType");
    }

    /**
     * @param string $courseLengthType
     */
    public function setCourseLengthType($courseLengthType = null)
    {
        $this->setProperty("courseLengthType", $courseLengthType);
    }

    /**
     * @return bool
     */
    public function getEndorsedTitleRequired()
    {
        return $this->getProperty("endorsedTitleRequired");
    }

    /**
     * @param bool $endorsedTitleRequired
     */
    public function setEndorsedTitleRequired($endorsedTitleRequired = null)
    {
        $this->setProperty("endorsedTitleRequired", $endorsedTitleRequired);
    }

    /**
     * @return int
     */
    public function getGuidedLearningMinHours()
    {
        return $this->getProperty("guidedLearningMinHours");
    }

    /**
     * @param int $guidedLearningMinHours
     */
    public function setGuidedLearningMinHours($guidedLearningMinHours = null)
    {
        $this->setProperty("guidedLearningMinHours", $guidedLearningMinHours);
    }

    /**
     * @return int
     */
    public function getGuidedLearningMaxHours()
    {
        return $this->getProperty("guidedLearningMaxHours");
    }

    /**
     * @param int $guidedLearningMaxHours
     */
    public function setGuidedLearningMaxHours($guidedLearningMaxHours = null)
    {
        $this->setProperty("guidedLearningMaxHours", $guidedLearningMaxHours);
    }

    /**
     * @return string
     */
    public function getLearningAimCode()
    {
        return $this->getProperty("learningAimCode");
    }

    /**
     * @param string $learningAimCode
     */
    public function setLearningAimCode($learningAimCode = null)
    {
        $this->setProperty("learningAimCode", $learningAimCode);
    }

    /**
     * @return string
     */
    public function getDeliveryModelType()
    {
        return $this->getProperty("deliveryModelType");
    }

    /**
     * @param string $deliveryModelType
     */
    public function setDeliveryModelType($deliveryModelType = null)
    {
        $this->setProperty("deliveryModelType", $deliveryModelType);
    }

    /**
     * @return bool
     */
    public function getEvidenceRequirementProvided()
    {
        return $this->getProperty("evidenceRequirementProvided");
    }

    /**
     * @param bool $evidenceRequirementProvided
     */
    public function setEvidenceRequirementProvided($evidenceRequirementProvided = null)
    {
        $this->setProperty("evidenceRequirementProvided", $evidenceRequirementProvided);
    }

    /**
     * @return string
     */
    public function getEvidenceRequirementType()
    {
        return $this->getProperty("evidenceRequirementType");
    }

    /**
     * @param string $evidenceRequirementType
     */
    public function setEvidenceRequirementType($evidenceRequirementType = null)
    {
        $this->setProperty("evidenceRequirementType", $evidenceRequirementType);
    }

    /**
     * @return string
     */
    public function getQualificationNumber()
    {
        return $this->getProperty("qualificationNumber");
    }

    /**
     * @param string $qualificationNumber
     */
    public function setQualificationNumber($qualificationNumber = null)
    {
        $this->setProperty("qualificationNumber", $qualificationNumber);
    }

    /**
     * @return int
     */
    public function getRegistrationExpiryMonths()
    {
        return $this->getProperty("registrationExpiryMonths");
    }

    /**
     * @param int $registrationExpiryMonths
     */
    public function setRegistrationExpiryMonths($registrationExpiryMonths = null)
    {
        $this->setProperty("registrationExpiryMonths", $registrationExpiryMonths);
    }

    /**
     * @return string
     */
    public function getResitRuleText()
    {
        return $this->getProperty("resitRuleText");
    }

    /**
     * @param string $resitRuleText
     */
    public function setResitRuleText($resitRuleText = null)
    {
        $this->setProperty("resitRuleText", $resitRuleText);
    }

    /**
     * @return bool
     */
    public function getStatementOfCreditIssued()
    {
        return $this->getProperty("statementOfCreditIssued");
    }

    /**
     * @param bool $statementOfCreditIssued
     */
    public function setStatementOfCreditIssued($statementOfCreditIssued = null)
    {
        $this->setProperty("statementOfCreditIssued", $statementOfCreditIssued);
    }

    /**
     * @return string
     */
    public function getQcaClassificationCode()
    {
        return $this->getProperty("qcaClassificationCode");
    }

    /**
     * @param string $qcaClassificationCode
     */
    public function setQcaClassificationCode($qcaClassificationCode = null)
    {
        $this->setProperty("qcaClassificationCode", $qcaClassificationCode);
    }

    /**
     * @return string
     */
    public function getQcaAccreditationNumber()
    {
        return $this->getProperty("qcaAccreditationNumber");
    }

    /**
     * @param string $qcaAccreditationNumber
     */
    public function setQcaAccreditationNumber($qcaAccreditationNumber = null)
    {
        $this->setProperty("qcaAccreditationNumber", $qcaAccreditationNumber);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2014()
    {
        return $this->getProperty("ks4DiscountCode2014");
    }

    /**
     * @param string $ks4DiscountCode2014
     */
    public function setKs4DiscountCode2014($ks4DiscountCode2014 = null)
    {
        $this->setProperty("ks4DiscountCode2014", $ks4DiscountCode2014);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2015()
    {
        return $this->getProperty("ks4DiscountCode2015");
    }

    /**
     * @param string $ks4DiscountCode2015
     */
    public function setKs4DiscountCode2015($ks4DiscountCode2015 = null)
    {
        $this->setProperty("ks4DiscountCode2015", $ks4DiscountCode2015);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2016()
    {
        return $this->getProperty("ks4DiscountCode2016");
    }

    /**
     * @param string $ks4DiscountCode2016
     */
    public function setKs4DiscountCode2016($ks4DiscountCode2016 = null)
    {
        $this->setProperty("ks4DiscountCode2016", $ks4DiscountCode2016);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2017()
    {
        return $this->getProperty("ks4DiscountCode2017");
    }

    /**
     * @param string $ks4DiscountCode2017
     */
    public function setKs4DiscountCode2017($ks4DiscountCode2017 = null)
    {
        $this->setProperty("ks4DiscountCode2017", $ks4DiscountCode2017);
    }

    /**
     * @return string
     */
    public function getPost16DiscountCode()
    {
        return $this->getProperty("post16DiscountCode");
    }

    /**
     * @param string $post16DiscountCode
     */
    public function setPost16DiscountCode($post16DiscountCode = null)
    {
        $this->setProperty("post16DiscountCode", $post16DiscountCode);
    }

    /**
     * @return string
     */
    public function getNqf()
    {
        return $this->getProperty("nqf");
    }

    /**
     * @param string $nqf
     */
    public function setNqf($nqf = null)
    {
        $this->setProperty("nqf", $nqf);
    }

    /**
     * @return float
     */
    public function getExaminationFee()
    {
        return $this->getProperty("examinationFee");
    }

    /**
     * @param float $examinationFee
     */
    public function setExaminationFee($examinationFee = null)
    {
        $this->setProperty("examinationFee", $examinationFee);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return QualificationScheme
     */
    public function getQualificationScheme()
    {
        return $this->getProperty("qualificationScheme");
    }

    /**
     * @param QualificationScheme $qualificationScheme
     */
    public function setQualificationScheme(QualificationScheme $qualificationScheme = null)
    {
        $this->setProperty("qualificationScheme", $qualificationScheme);
    }

    /**
     * @return QualificationSubject
     */
    public function getQualificationSubject()
    {
        return $this->getProperty("qualificationSubject");
    }

    /**
     * @param QualificationSubject $qualificationSubject
     */
    public function setQualificationSubject(QualificationSubject $qualificationSubject = null)
    {
        $this->setProperty("qualificationSubject", $qualificationSubject);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty("awardingOrganization");
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty("awardingOrganization", $awardingOrganization);
    }

    /**
     * @return string
     */
    public function getAwardIdentifier()
    {
        return $this->getProperty("awardIdentifier");
    }

    /**
     * @param string $awardIdentifier
     */
    public function setAwardIdentifier($awardIdentifier = null)
    {
        $this->setProperty("awardIdentifier", $awardIdentifier);
    }

    /**
     * @return string
     */
    public function getFullTitle()
    {
        return $this->getProperty("fullTitle");
    }

    /**
     * @param string $fullTitle
     */
    public function setFullTitle($fullTitle = null)
    {
        $this->setProperty("fullTitle", $fullTitle);
    }

    /**
     * @return string
     */
    public function getShortTitle()
    {
        return $this->getProperty("shortTitle");
    }

    /**
     * @param string $shortTitle
     */
    public function setShortTitle($shortTitle = null)
    {
        $this->setProperty("shortTitle", $shortTitle);
    }

    /**
     * @return QualificationAwardType
     */
    public function getQualificationAwardType()
    {
        return $this->getProperty("qualificationAwardType");
    }

    /**
     * @param QualificationAwardType $qualificationAwardType
     */
    public function setQualificationAwardType(QualificationAwardType $qualificationAwardType = null)
    {
        $this->setProperty("qualificationAwardType", $qualificationAwardType);
    }

    /**
     * @return QualificationAwardLevel
     */
    public function getQualificationAwardLevel()
    {
        return $this->getProperty("qualificationAwardLevel");
    }

    /**
     * @param QualificationAwardLevel $qualificationAwardLevel
     */
    public function setQualificationAwardLevel(QualificationAwardLevel $qualificationAwardLevel = null)
    {
        $this->setProperty("qualificationAwardLevel", $qualificationAwardLevel);
    }

    /**
     * @return \DateTime
     */
    public function getAccreditationStartDate()
    {
        return $this->getProperty("accreditationStartDate");
    }

    /**
     * @param \DateTime $accreditationStartDate
     */
    public function setAccreditationStartDate(\DateTime $accreditationStartDate = null)
    {
        $this->setProperty("accreditationStartDate", $accreditationStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getAccreditationEndDate()
    {
        return $this->getProperty("accreditationEndDate");
    }

    /**
     * @param \DateTime $accreditationEndDate
     */
    public function setAccreditationEndDate(\DateTime $accreditationEndDate = null)
    {
        $this->setProperty("accreditationEndDate", $accreditationEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return \DateTime
     */
    public function getCertificationStartDate()
    {
        return $this->getProperty("certificationStartDate");
    }

    /**
     * @param \DateTime $certificationStartDate
     */
    public function setCertificationStartDate(\DateTime $certificationStartDate = null)
    {
        $this->setProperty("certificationStartDate", $certificationStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getCertificationEndDate()
    {
        return $this->getProperty("certificationEndDate");
    }

    /**
     * @param \DateTime $certificationEndDate
     */
    public function setCertificationEndDate(\DateTime $certificationEndDate = null)
    {
        $this->setProperty("certificationEndDate", $certificationEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getOperationalStartDate()
    {
        return $this->getProperty("operationalStartDate");
    }

    /**
     * @param \DateTime $operationalStartDate
     */
    public function setOperationalStartDate(\DateTime $operationalStartDate = null)
    {
        $this->setProperty("operationalStartDate", $operationalStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getOperationalEndDate()
    {
        return $this->getProperty("operationalEndDate");
    }

    /**
     * @param \DateTime $operationalEndDate
     */
    public function setOperationalEndDate(\DateTime $operationalEndDate = null)
    {
        $this->setProperty("operationalEndDate", $operationalEndDate);
    }

    /**
     * @return string
     */
    public function getClassification()
    {
        return $this->getProperty("classification");
    }

    /**
     * @param string $classification
     */
    public function setClassification($classification = null)
    {
        $this->setProperty("classification", $classification);
    }

    /**
     * @return string
     */
    public function getSectorLeadOrganization()
    {
        return $this->getProperty("sectorLeadOrganization");
    }

    /**
     * @param string $sectorLeadOrganization
     */
    public function setSectorLeadOrganization($sectorLeadOrganization = null)
    {
        $this->setProperty("sectorLeadOrganization", $sectorLeadOrganization);
    }

    /**
     * @return string
     */
    public function getAssessor()
    {
        return $this->getProperty("assessor");
    }

    /**
     * @param string $assessor
     */
    public function setAssessor($assessor = null)
    {
        $this->setProperty("assessor", $assessor);
    }
}
