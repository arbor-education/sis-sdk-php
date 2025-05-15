<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeOfStudy extends ModelBase
{
    public const PROGRAMME_REFERENCE = 'programmeReference';

    public const SHORT_NAME = 'shortName';

    protected $_resourceType = ResourceType::CYMRU_PROGRAMME_OF_STUDY;

    /**
     * @param Query $query
     * @return ProgrammeOfStudy[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PROGRAMME_OF_STUDY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeOfStudy
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PROGRAMME_OF_STUDY, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\ProgrammeReference
     */
    public function getProgrammeReference()
    {
        return $this->getProperty('programmeReference');
    }

    /**
     * @param \Arbor\Model\Cymru\ProgrammeReference $programmeReference
     */
    public function setProgrammeReference(\Arbor\Model\Cymru\ProgrammeReference $programmeReference = null)
    {
        $this->setProperty('programmeReference', $programmeReference);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }
}
