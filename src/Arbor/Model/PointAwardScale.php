<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PointAwardScale extends ModelBase
{
    public const POINT_AWARD_SCALE_NAME = 'pointAwardScaleName';

    public const SINGULAR_POINT_NAME = 'singularPointName';

    public const PLURAL_POINT_NAME = 'pluralPointName';

    public const CYCLE_OPENING_POINTS_BALANCE = 'cycleOpeningPointsBalance';

    public const TERM_OPENING_POINTS_BALANCE = 'termOpeningPointsBalance';

    public const ACADEMIC_YEAR_OPENING_POINTS_BALANCE = 'academicYearOpeningPointsBalance';

    public const LIFETIME_OPENING_POINTS_BALANCE = 'lifetimeOpeningPointsBalance';

    public const MIN_POINT_AWARD = 'minPointAward';

    public const MAX_POINT_AWARD = 'maxPointAward';

    public const DIRECTIONALITY = 'directionality';

    public const SHOW_IN_PARENT_PORTAL = 'showInParentPortal';

    public const SHOW_NARRATIVE_IN_PARENT_PORTAL = 'showNarrativeInParentPortal';

    public const SHOW_AWARDED_BY_IN_PARENT_PORTAL = 'showAwardedByInParentPortal';

    public const SHOW_EVENT_IN_PARENT_PORTAL = 'showEventInParentPortal';

    protected $_resourceType = ResourceType::POINT_AWARD_SCALE;

    /**
     * @param Query $query
     * @return PointAwardScale[] | Collection
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
    public function setPointAwardScaleName(string $pointAwardScaleName = null)
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
    public function setSingularPointName(string $singularPointName = null)
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
    public function setPluralPointName(string $pluralPointName = null)
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
    public function setCycleOpeningPointsBalance(float $cycleOpeningPointsBalance = null)
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
    public function setTermOpeningPointsBalance(float $termOpeningPointsBalance = null)
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
    public function setAcademicYearOpeningPointsBalance(float $academicYearOpeningPointsBalance = null)
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
    public function setLifetimeOpeningPointsBalance(float $lifetimeOpeningPointsBalance = null)
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
    public function setMinPointAward(float $minPointAward = null)
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
    public function setMaxPointAward(float $maxPointAward = null)
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
    public function setDirectionality(string $directionality = null)
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
    public function setShowInParentPortal(bool $showInParentPortal = null)
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
    public function setShowNarrativeInParentPortal(bool $showNarrativeInParentPortal = null)
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
    public function setShowAwardedByInParentPortal(bool $showAwardedByInParentPortal = null)
    {
        $this->setProperty('showAwardedByInParentPortal', $showAwardedByInParentPortal);
    }

    /**
     * @return bool
     */
    public function getShowEventInParentPortal()
    {
        return $this->getProperty('showEventInParentPortal');
    }

    /**
     * @param bool $showEventInParentPortal
     */
    public function setShowEventInParentPortal(bool $showEventInParentPortal = null)
    {
        $this->setProperty('showEventInParentPortal', $showEventInParentPortal);
    }
}
