<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class UcasImport extends ModelBase
{
    public const NAME = 'name';

    public const FILE_DATE = 'fileDate';

    protected $_resourceType = ResourceType::UK_DFE_UCAS_IMPORT;

    /**
     * @param Query $query
     * @return UcasImport[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_UCAS_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UcasImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_UCAS_IMPORT, $id);
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
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return \DateTime
     */
    public function getFileDate()
    {
        return $this->getProperty('fileDate');
    }

    /**
     * @param \DateTime $fileDate
     */
    public function setFileDate(\DateTime $fileDate = null)
    {
        $this->setProperty('fileDate', $fileDate);
    }
}
