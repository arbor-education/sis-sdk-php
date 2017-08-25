<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationStudyGuide extends ModelBase
{
    const RELATED_QUALIFICATION_AWARD = 'relatedQualificationAward';

    const STUDY_GUIDE_TITLE = 'studyGuideTitle';

    const STUDY_GUIDE_PUBLISHER_NAME = 'studyGuidePublisherName';

    const STUDY_GUIDE_PUBLISHER_ISBN = 'studyGuidePublisherIsbn';

    const STUDY_GUIDE_PUBLISHER_URL = 'studyGuidePublisherUrl';

    const STUDY_GUIDE_MEDIUM_TYPE = 'studyGuideMediumType';

    protected $_resourceType = ResourceType::QUALIFICATION_STUDY_GUIDE;

    /**
     * @param Query $query
     * @return QualificationStudyGuide[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_STUDY_GUIDE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationStudyGuide
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_STUDY_GUIDE, $id);
    }

    /**
     * @return QualificationAward
     */
    public function getRelatedQualificationAward()
    {
        return $this->getProperty('relatedQualificationAward');
    }

    /**
     * @param QualificationAward $relatedQualificationAward
     */
    public function setRelatedQualificationAward(QualificationAward $relatedQualificationAward = null)
    {
        $this->setProperty('relatedQualificationAward', $relatedQualificationAward);
    }

    /**
     * @return string
     */
    public function getStudyGuideTitle()
    {
        return $this->getProperty('studyGuideTitle');
    }

    /**
     * @param string $studyGuideTitle
     */
    public function setStudyGuideTitle($studyGuideTitle = null)
    {
        $this->setProperty('studyGuideTitle', $studyGuideTitle);
    }

    /**
     * @return string
     */
    public function getStudyGuidePublisherName()
    {
        return $this->getProperty('studyGuidePublisherName');
    }

    /**
     * @param string $studyGuidePublisherName
     */
    public function setStudyGuidePublisherName($studyGuidePublisherName = null)
    {
        $this->setProperty('studyGuidePublisherName', $studyGuidePublisherName);
    }

    /**
     * @return string
     */
    public function getStudyGuidePublisherIsbn()
    {
        return $this->getProperty('studyGuidePublisherIsbn');
    }

    /**
     * @param string $studyGuidePublisherIsbn
     */
    public function setStudyGuidePublisherIsbn($studyGuidePublisherIsbn = null)
    {
        $this->setProperty('studyGuidePublisherIsbn', $studyGuidePublisherIsbn);
    }

    /**
     * @return string
     */
    public function getStudyGuidePublisherUrl()
    {
        return $this->getProperty('studyGuidePublisherUrl');
    }

    /**
     * @param string $studyGuidePublisherUrl
     */
    public function setStudyGuidePublisherUrl($studyGuidePublisherUrl = null)
    {
        $this->setProperty('studyGuidePublisherUrl', $studyGuidePublisherUrl);
    }

    /**
     * @return string
     */
    public function getStudyGuideMediumType()
    {
        return $this->getProperty('studyGuideMediumType');
    }

    /**
     * @param string $studyGuideMediumType
     */
    public function setStudyGuideMediumType($studyGuideMediumType = null)
    {
        $this->setProperty('studyGuideMediumType', $studyGuideMediumType);
    }
}
