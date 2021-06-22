<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PointAwardScale extends ModelBase
{

    const POINT_AWARD_SCALE_NAME = 'pointAwardScaleName';

    const SINGULAR_POINT_NAME = 'singularPointName';

    const PLURAL_POINT_NAME = 'pluralPointName';

    const CYCLE_OPENING_POINTS_BALANCE = 'cycleOpeningPointsBalance';

    const TERM_OPENING_POINTS_BALANCE = 'termOpeningPointsBalance';

    const ACADEMIC_YEAR_OPENING_POINTS_BALANCE = 'academicYearOpeningPointsBalance';

    const LIFETIME_OPENING_POINTS_BALANCE = 'lifetimeOpeningPointsBalance';

    const MIN_POINT_AWARD = 'minPointAward';

    const MAX_POINT_AWARD = 'maxPointAward';

    const DIRECTIONALITY = 'directionality';

    const SHOW_IN_PARENT_PORTAL = 'showInParentPortal';

    const SHOW_NARRATIVE_IN_PARENT_PORTAL = 'showNarrativeInParentPortal';

    const SHOW_AWARDED_BY_IN_PARENT_PORTAL = 'showAwardedByInParentPortal';

    protected $_resourceType = ResourceType::POINT_AWARD_SCALE;

    /**
     * @param Query $query
     * @return PointAwardScale[] | Collection
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

        $query->setResourceType(ResourceType::POINT_AWARD_SCALE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PointAwardScale
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::POINT_AWARD_SCALE, $id);
    }

    /**
     * @return string
     */
    public function getPointAwardScaleName()
    {
        return $this->getProperty('pointAwardScaleName');
    }

    /**
     * @param string $pointAwardScaleName
     */
    public function setPointAwardScaleName($pointAwardScaleName = null)
    {
        $this->setProperty('pointAwardScaleName', $pointAwardScaleName);
    }

    /**
     * @return string
     */
    public function getSingularPointName()
    {
        return $this->getProperty('singularPointName');
    }

    /**
     * @param string $singularPointName
     */
    public function setSingularPointName($singularPointName = null)
    {
        $this->setProperty('singularPointName', $singularPointName);
    }

    /**
     * @return string
     */
    public function getPluralPointName()
    {
        return $this->getProperty('pluralPointName');
    }

    /**
     * @param string $pluralPointName
     */
    public function setPluralPointName($pluralPointName = null)
    {
        $this->setProperty('pluralPointName', $pluralPointName);
    }

    /**
     * @return float
     */
    public function getCycleOpeningPointsBalance()
    {
        return $this->getProperty('cycleOpeningPointsBalance');
    }

    /**
     * @param float $cycleOpeningPointsBalance
     */
    public function setCycleOpeningPointsBalance($cycleOpeningPointsBalance = null)
    {
        $this->setProperty('cycleOpeningPointsBalance', $cycleOpeningPointsBalance);
    }

    /**
     * @return float
     */
    public function getTermOpeningPointsBalance()
    {
        return $this->getProperty('termOpeningPointsBalance');
    }

    /**
     * @param float $termOpeningPointsBalance
     */
    public function setTermOpeningPointsBalance($termOpeningPointsBalance = null)
    {
        $this->setProperty('termOpeningPointsBalance', $termOpeningPointsBalance);
    }

    /**
     * @return float
     */
    public function getAcademicYearOpeningPointsBalance()
    {
        return $this->getProperty('academicYearOpeningPointsBalance');
    }

    /**
     * @param float $academicYearOpeningPointsBalance
     */
    public function setAcademicYearOpeningPointsBalance($academicYearOpeningPointsBalance = null)
    {
        $this->setProperty('academicYearOpeningPointsBalance', $academicYearOpeningPointsBalance);
    }

    /**
     * @return float
     */
    public function getLifetimeOpeningPointsBalance()
    {
        return $this->getProperty('lifetimeOpeningPointsBalance');
    }

    /**
     * @param float $lifetimeOpeningPointsBalance
     */
    public function setLifetimeOpeningPointsBalance($lifetimeOpeningPointsBalance = null)
    {
        $this->setProperty('lifetimeOpeningPointsBalance', $lifetimeOpeningPointsBalance);
    }

    /**
     * @return float
     */
    public function getMinPointAward()
    {
        return $this->getProperty('minPointAward');
    }

    /**
     * @param float $minPointAward
     */
    public function setMinPointAward($minPointAward = null)
    {
        $this->setProperty('minPointAward', $minPointAward);
    }

    /**
     * @return float
     */
    public function getMaxPointAward()
    {
        return $this->getProperty('maxPointAward');
    }

    /**
     * @param float $maxPointAward
     */
    public function setMaxPointAward($maxPointAward = null)
    {
        $this->setProperty('maxPointAward', $maxPointAward);
    }

    /**
     * @return string
     */
    public function getDirectionality()
    {
        return $this->getProperty('directionality');
    }

    /**
     * @param string $directionality
     */
    public function setDirectionality($directionality = null)
    {
        $this->setProperty('directionality', $directionality);
    }

    /**
     * @return bool
     */
    public function getShowInParentPortal()
    {
        return $this->getProperty('showInParentPortal');
    }

    /**
     * @param bool $showInParentPortal
     */
    public function setShowInParentPortal($showInParentPortal = null)
    {
        $this->setProperty('showInParentPortal', $showInParentPortal);
    }

    /**
     * @return bool
     */
    public function getShowNarrativeInParentPortal()
    {
        return $this->getProperty('showNarrativeInParentPortal');
    }

    /**
     * @param bool $showNarrativeInParentPortal
     */
    public function setShowNarrativeInParentPortal($showNarrativeInParentPortal = null)
    {
        $this->setProperty('showNarrativeInParentPortal', $showNarrativeInParentPortal);
    }

    /**
     * @return bool
     */
    public function getShowAwardedByInParentPortal()
    {
        return $this->getProperty('showAwardedByInParentPortal');
    }

    /**
     * @param bool $showAwardedByInParentPortal
     */
    public function setShowAwardedByInParentPortal($showAwardedByInParentPortal = null)
    {
        $this->setProperty('showAwardedByInParentPortal', $showAwardedByInParentPortal);
    }


}
