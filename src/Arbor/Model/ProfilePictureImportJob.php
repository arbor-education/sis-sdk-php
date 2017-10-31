<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProfilePictureImportJob extends ModelBase
{
    const NAME = 'name';

    const IMPORT_TYPE = 'importType';

    const IDENTIFIER_CLASS = 'identifierClass';

    const COMPLETED_DATETIME = 'completedDatetime';

    protected $_resourceType = ResourceType::PROFILE_PICTURE_IMPORT_JOB;

    /**
     * @param Query $query
     * @return ProfilePictureImportJob[] | Collection
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

        $query->setResourceType(ResourceType::PROFILE_PICTURE_IMPORT_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProfilePictureImportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROFILE_PICTURE_IMPORT_JOB, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getImportType()
    {
        return $this->getProperty('importType');
    }

    /**
     * @param string $importType
     */
    public function setImportType($importType = null)
    {
        $this->setProperty('importType', $importType);
    }

    /**
     * @return string
     */
    public function getIdentifierClass()
    {
        return $this->getProperty('identifierClass');
    }

    /**
     * @param string $identifierClass
     */
    public function setIdentifierClass($identifierClass = null)
    {
        $this->setProperty('identifierClass', $identifierClass);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }
}
