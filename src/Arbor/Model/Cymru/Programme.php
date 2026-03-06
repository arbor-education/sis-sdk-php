<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Programme extends ModelBase
{
    public const PROGRAMME_IDENTIFIER = 'programmeIdentifier';

    public const PROGRAMME_REFERENCE = 'programmeReference';

    protected $_resourceType = ResourceType::CYMRU_PROGRAMME;

    /**
     * @param Query $query
     * @return Programme[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PROGRAMME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Programme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PROGRAMME, $id);
    }

    /**
     * @return string
     */
    public function getProgrammeIdentifier()
    {
        return $this->getProperty('programmeIdentifier');
    }

    /**
     * @param string $programmeIdentifier
     */
    public function setProgrammeIdentifier(string $programmeIdentifier = null)
    {
        $this->setProperty('programmeIdentifier', $programmeIdentifier);
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
}
