<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\LocalAuthority;

class UkDfe_Student extends ModelBase
{

    const UNIQUE_LEARNER_NUMBER = 'uniqueLearnerNumber';

    const HOME_LOCAL_AUTHORITY = 'homeLocalAuthority';

    const YOUTH_SUPPORT_SERVICES_AGREEMENT = 'youthSupportServicesAgreement';

    const HOURS_AT_SETTING = 'hoursAtSetting';

    const FUNDED_HOURS = 'fundedHours';

    const ETHNICITY_SOURCE = 'ethnicitySource';

    const NHS_NUMBER = 'nhsNumber';

    const EXTENDED_HOURS = 'extendedHours';

    const THIRTY_HOUR_CODE = 'thirtyHourCode';

    protected $_resourceType = ResourceType::UK_DFE_STUDENT;

    /**
     * @param Query $query
     * @return UkDfe_Student[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_STUDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UkDfe_Student
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_STUDENT, $id);
    }

    /**
     * @return int
     */
    public function getUniqueLearnerNumber()
    {
        return $this->getProperty('uniqueLearnerNumber');
    }

    /**
     * @param int $uniqueLearnerNumber
     */
    public function setUniqueLearnerNumber($uniqueLearnerNumber = null)
    {
        $this->setProperty('uniqueLearnerNumber', $uniqueLearnerNumber);
    }

    /**
     * @return LocalAuthority
     */
    public function getHomeLocalAuthority()
    {
        return $this->getProperty('homeLocalAuthority');
    }

    /**
     * @param LocalAuthority $homeLocalAuthority
     */
    public function setHomeLocalAuthority(LocalAuthority $homeLocalAuthority = null)
    {
        $this->setProperty('homeLocalAuthority', $homeLocalAuthority);
    }

    /**
     * @return string
     */
    public function getYouthSupportServicesAgreement()
    {
        return $this->getProperty('youthSupportServicesAgreement');
    }

    /**
     * @param string $youthSupportServicesAgreement
     */
    public function setYouthSupportServicesAgreement($youthSupportServicesAgreement = null)
    {
        $this->setProperty('youthSupportServicesAgreement', $youthSupportServicesAgreement);
    }

    /**
     * @return string
     */
    public function getHoursAtSetting()
    {
        return $this->getProperty('hoursAtSetting');
    }

    /**
     * @param string $hoursAtSetting
     */
    public function setHoursAtSetting($hoursAtSetting = null)
    {
        $this->setProperty('hoursAtSetting', $hoursAtSetting);
    }

    /**
     * @return string
     */
    public function getFundedHours()
    {
        return $this->getProperty('fundedHours');
    }

    /**
     * @param string $fundedHours
     */
    public function setFundedHours($fundedHours = null)
    {
        $this->setProperty('fundedHours', $fundedHours);
    }

    /**
     * @return string
     */
    public function getEthnicitySource()
    {
        return $this->getProperty('ethnicitySource');
    }

    /**
     * @param string $ethnicitySource
     */
    public function setEthnicitySource($ethnicitySource = null)
    {
        $this->setProperty('ethnicitySource', $ethnicitySource);
    }

    /**
     * @return string
     */
    public function getNhsNumber()
    {
        return $this->getProperty('nhsNumber');
    }

    /**
     * @param string $nhsNumber
     */
    public function setNhsNumber($nhsNumber = null)
    {
        $this->setProperty('nhsNumber', $nhsNumber);
    }

    /**
     * @return string
     */
    public function getExtendedHours()
    {
        return $this->getProperty('extendedHours');
    }

    /**
     * @param string $extendedHours
     */
    public function setExtendedHours($extendedHours = null)
    {
        $this->setProperty('extendedHours', $extendedHours);
    }

    /**
     * @return string
     */
    public function getThirtyHourCode()
    {
        return $this->getProperty('thirtyHourCode');
    }

    /**
     * @param string $thirtyHourCode
     */
    public function setThirtyHourCode($thirtyHourCode = null)
    {
        $this->setProperty('thirtyHourCode', $thirtyHourCode);
    }


}
