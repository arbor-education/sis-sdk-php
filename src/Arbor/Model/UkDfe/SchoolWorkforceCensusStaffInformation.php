<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\SchoolWorkforceCensus;

class SchoolWorkforceCensusStaffInformation extends ModelBase
{

    const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    const OCCASIONALS_QTS = 'occasionalsQts';

    const OCCASIONALS_NOT_QTS = 'occasionalsNotQts';

    const OCCASIONALS_NOT_KNOWN = 'occasionalsNotKnown';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_STAFF_INFORMATION;

    /**
     * @param \Arbor\Query\Query $query
     * @return SchoolWorkforceCensusStaffInformation[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_SchoolWorkforceCensusStaffInformation");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SchoolWorkforceCensusStaffInformation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_STAFF_INFORMATION, $id);
    }

    /**
     * @return SchoolWorkforceCensus
     */
    public function getSchoolWorkforceCensus()
    {
        return $this->getProperty("schoolWorkforceCensus");
    }

    /**
     * @param SchoolWorkforceCensus $schoolWorkforceCensus
     */
    public function setSchoolWorkforceCensus(SchoolWorkforceCensus $schoolWorkforceCensus = null)
    {
        $this->setProperty("schoolWorkforceCensus", $schoolWorkforceCensus);
    }

    /**
     * @return int
     */
    public function getOccasionalsQts()
    {
        return $this->getProperty("occasionalsQts");
    }

    /**
     * @param int $occasionalsQts
     */
    public function setOccasionalsQts($occasionalsQts = null)
    {
        $this->setProperty("occasionalsQts", $occasionalsQts);
    }

    /**
     * @return int
     */
    public function getOccasionalsNotQts()
    {
        return $this->getProperty("occasionalsNotQts");
    }

    /**
     * @param int $occasionalsNotQts
     */
    public function setOccasionalsNotQts($occasionalsNotQts = null)
    {
        $this->setProperty("occasionalsNotQts", $occasionalsNotQts);
    }

    /**
     * @return int
     */
    public function getOccasionalsNotKnown()
    {
        return $this->getProperty("occasionalsNotKnown");
    }

    /**
     * @param int $occasionalsNotKnown
     */
    public function setOccasionalsNotKnown($occasionalsNotKnown = null)
    {
        $this->setProperty("occasionalsNotKnown", $occasionalsNotKnown);
    }


}
