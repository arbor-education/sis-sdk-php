<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Faculty extends ModelBase
{
    const CODE = 'code';

    const FACULTY_NAME = 'facultyName';

    protected $_resourceType = ResourceType::FACULTY;

    /**
     * @param Query $query
     * @return Faculty[] | Collection
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
    public function setCode($code = null)
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
    public function setFacultyName($facultyName = null)
    {
        $this->setProperty('facultyName', $facultyName);
    }
}
