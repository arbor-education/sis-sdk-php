<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PersonNationality extends ModelBase
{
    public const NATIONAL_IDENTITY = 'nationalIdentity';

    protected $_resourceType = ResourceType::CYMRU_PERSON_NATIONALITY;

    /**
     * @param Query $query
     * @return PersonNationality[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PERSON_NATIONALITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonNationality
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PERSON_NATIONALITY, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\NationalIdentity
     */
    public function getNationalIdentity()
    {
        return $this->getProperty('nationalIdentity');
    }

    /**
     * @param \Arbor\Model\Cymru\NationalIdentity $nationalIdentity
     */
    public function setNationalIdentity(\Arbor\Model\Cymru\NationalIdentity $nationalIdentity = null)
    {
        $this->setProperty('nationalIdentity', $nationalIdentity);
    }
}
