<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Employer extends ModelBase
{
    const EDS_EMPLOYER_ID = 'edsEmployerId';

    const SMALL_EMPLOYER = 'smallEmployer';

    const SMALL_MEDIUM_EMPLOYER = 'smallMediumEmployer';

    protected $_resourceType = ResourceType::UK_ILR_EMPLOYER;

    /**
     * @param Query $query
     * @return Employer[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_EMPLOYER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Employer
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_EMPLOYER, $id);
    }

    /**
     * @return string
     */
    public function getEdsEmployerId()
    {
        return $this->getProperty('edsEmployerId');
    }

    /**
     * @param string $edsEmployerId
     */
    public function setEdsEmployerId($edsEmployerId = null)
    {
        $this->setProperty('edsEmployerId', $edsEmployerId);
    }

    /**
     * @return bool
     */
    public function getSmallEmployer()
    {
        return $this->getProperty('smallEmployer');
    }

    /**
     * @param bool $smallEmployer
     */
    public function setSmallEmployer($smallEmployer = null)
    {
        $this->setProperty('smallEmployer', $smallEmployer);
    }

    /**
     * @return bool
     */
    public function getSmallMediumEmployer()
    {
        return $this->getProperty('smallMediumEmployer');
    }

    /**
     * @param bool $smallMediumEmployer
     */
    public function setSmallMediumEmployer($smallMediumEmployer = null)
    {
        $this->setProperty('smallMediumEmployer', $smallMediumEmployer);
    }
}
