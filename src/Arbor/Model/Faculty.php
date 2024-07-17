<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Faculty extends ModelBase
{
    public const CODE = 'code';

    public const FACULTY_NAME = 'facultyName';

    public const IS_ACTIVE = 'isActive';

    protected $_resourceType = ResourceType::FACULTY;

    /**
     * @param Query $query
     * @return Faculty[] | Collection
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

        $query->setResourceType(ResourceType::FACULTY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Faculty
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FACULTY, $id);
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
     * @return string
     */
    public function getFacultyName()
    {
        return $this->getProperty('facultyName');
    }

    /**
     * @param string $facultyName
     */
    public function setFacultyName(string $facultyName = null)
    {
        $this->setProperty('facultyName', $facultyName);
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->getProperty('isActive');
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive = null)
    {
        $this->setProperty('isActive', $isActive);
    }
}
