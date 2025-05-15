<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AcademicUnit extends ModelBase
{
    public const CATEGORY = 'category';

    public const WELSH_LANGUAGE_USE_IN_CLASS = 'welshLanguageUseInClass';

    public const LESSON_MEDIUM = 'lessonMedium';

    public const IS_LEA_DESIGNATED_SPECIAL_CLASS = 'isLeaDesignatedSpecialClass';

    protected $_resourceType = ResourceType::CYMRU_ACADEMIC_UNIT;

    /**
     * @param Query $query
     * @return AcademicUnit[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_ACADEMIC_UNIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_ACADEMIC_UNIT, $id);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category = null)
    {
        $this->setProperty('category', $category);
    }

    /**
     * @return string
     */
    public function getWelshLanguageUseInClass()
    {
        return $this->getProperty('welshLanguageUseInClass');
    }

    /**
     * @param string $welshLanguageUseInClass
     */
    public function setWelshLanguageUseInClass(string $welshLanguageUseInClass = null)
    {
        $this->setProperty('welshLanguageUseInClass', $welshLanguageUseInClass);
    }

    /**
     * @return string
     */
    public function getLessonMedium()
    {
        return $this->getProperty('lessonMedium');
    }

    /**
     * @param string $lessonMedium
     */
    public function setLessonMedium(string $lessonMedium = null)
    {
        $this->setProperty('lessonMedium', $lessonMedium);
    }

    /**
     * @return bool
     */
    public function getIsLeaDesignatedSpecialClass()
    {
        return $this->getProperty('isLeaDesignatedSpecialClass');
    }

    /**
     * @param bool $isLeaDesignatedSpecialClass
     */
    public function setIsLeaDesignatedSpecialClass(bool $isLeaDesignatedSpecialClass = null)
    {
        $this->setProperty('isLeaDesignatedSpecialClass', $isLeaDesignatedSpecialClass);
    }
}
