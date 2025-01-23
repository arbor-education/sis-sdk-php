<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolLanguageCategoryAssignment extends ModelBase
{
    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const SCHOOL_LANGUAGE_CATEGORY = 'schoolLanguageCategory';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_LANGUAGE_CATEGORY_ASSIGNMENT;

    /**
     * @param Query $query
     * @return SchoolLanguageCategoryAssignment[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_LANGUAGE_CATEGORY_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolLanguageCategoryAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_LANGUAGE_CATEGORY_ASSIGNMENT, $id);
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
     * @return \Arbor\Model\Cymru\SchoolLanguageCategory
     */
    public function getSchoolLanguageCategory()
    {
        return $this->getProperty('schoolLanguageCategory');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolLanguageCategory $schoolLanguageCategory
     */
    public function setSchoolLanguageCategory(\Arbor\Model\Cymru\SchoolLanguageCategory $schoolLanguageCategory = null)
    {
        $this->setProperty('schoolLanguageCategory', $schoolLanguageCategory);
    }
}
