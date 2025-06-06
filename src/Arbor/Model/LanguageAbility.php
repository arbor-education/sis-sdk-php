<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class LanguageAbility extends ModelBase
{
    public const PERSON = 'person';

    public const LANGUAGE = 'language';

    public const IS_FIRST_LANGUAGE = 'isFirstLanguage';

    public const IS_NATIVE_LANGUAGE = 'isNativeLanguage';

    public const SPEAKS_LANGUAGE = 'speaksLanguage';

    public const UNDERSTANDS_LANGUAGE = 'understandsLanguage';

    public const IS_SPOKEN_AT_HOME = 'isSpokenAtHome';

    public const LANGUAGE_PROFICIENCY = 'languageProficiency';

    public const NOTES = 'notes';

    protected $_resourceType = ResourceType::LANGUAGE_ABILITY;

    /**
     * @param Query $query
     * @return LanguageAbility[] | Collection
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

        $query->setResourceType(ResourceType::LANGUAGE_ABILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LanguageAbility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LANGUAGE_ABILITY, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \Arbor\Model\Language
     */
    public function getLanguage()
    {
        return $this->getProperty('language');
    }

    /**
     * @param \Arbor\Model\Language $language
     */
    public function setLanguage(\Arbor\Model\Language $language = null)
    {
        $this->setProperty('language', $language);
    }

    /**
     * @return bool
     */
    public function getIsFirstLanguage()
    {
        return $this->getProperty('isFirstLanguage');
    }

    /**
     * @param bool $isFirstLanguage
     */
    public function setIsFirstLanguage(bool $isFirstLanguage = null)
    {
        $this->setProperty('isFirstLanguage', $isFirstLanguage);
    }

    /**
     * @return bool
     */
    public function getIsNativeLanguage()
    {
        return $this->getProperty('isNativeLanguage');
    }

    /**
     * @param bool $isNativeLanguage
     */
    public function setIsNativeLanguage(bool $isNativeLanguage = null)
    {
        $this->setProperty('isNativeLanguage', $isNativeLanguage);
    }

    /**
     * @return bool
     */
    public function getSpeaksLanguage()
    {
        return $this->getProperty('speaksLanguage');
    }

    /**
     * @param bool $speaksLanguage
     */
    public function setSpeaksLanguage(bool $speaksLanguage = null)
    {
        $this->setProperty('speaksLanguage', $speaksLanguage);
    }

    /**
     * @return bool
     */
    public function getUnderstandsLanguage()
    {
        return $this->getProperty('understandsLanguage');
    }

    /**
     * @param bool $understandsLanguage
     */
    public function setUnderstandsLanguage(bool $understandsLanguage = null)
    {
        $this->setProperty('understandsLanguage', $understandsLanguage);
    }

    /**
     * @return bool
     */
    public function getIsSpokenAtHome()
    {
        return $this->getProperty('isSpokenAtHome');
    }

    /**
     * @param bool $isSpokenAtHome
     */
    public function setIsSpokenAtHome(bool $isSpokenAtHome = null)
    {
        $this->setProperty('isSpokenAtHome', $isSpokenAtHome);
    }

    /**
     * @return string
     */
    public function getLanguageProficiency()
    {
        return $this->getProperty('languageProficiency');
    }

    /**
     * @param string $languageProficiency
     */
    public function setLanguageProficiency(string $languageProficiency = null)
    {
        $this->setProperty('languageProficiency', $languageProficiency);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }
}
