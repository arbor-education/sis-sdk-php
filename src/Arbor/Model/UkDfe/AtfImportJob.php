<?php

namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\LocalAuthority;
use Arbor\Model\EducationalInstitution;

class AtfImportJob extends ModelBase
{
    const ATF_VERSION = 'atfVersion';

    const SOURCE_LOCAL_AUTHORITY_CODE = 'sourceLocalAuthorityCode';

    const SOURCE_LOCAL_AUTHORITY = 'sourceLocalAuthority';

    const SOURCE_ESTABLISHMENT_NUMBER = 'sourceEstablishmentNumber';

    const SOURCE_EDUCATIONAL_INSTITUTION_NAME = 'sourceEducationalInstitutionName';

    const SOURCE_EDUCATIONAL_INSTITUTION = 'sourceEducationalInstitution';

    const DESTINATION_LOCAL_AUTHORITY_CODE = 'destinationLocalAuthorityCode';

    const DESTINATION_LOCAL_AUTHORITY = 'destinationLocalAuthority';

    const DESTINATION_ESTABLISHMENT_NUMBER = 'destinationEstablishmentNumber';

    const DESTINATION_EDUCATIONAL_INSTITUTION = 'destinationEducationalInstitution';

    const LAST_IMPORT_DATETIME = 'lastImportDatetime';

    const STATUS = 'status';

    protected $_resourceType = ResourceType::UK_DFE_ATF_IMPORT_JOB;

    /**
     * @param Query $query
     * @return AtfImportJob[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ATF_IMPORT_JOB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AtfImportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ATF_IMPORT_JOB, $id);
    }

    /**
     * @return string
     */
    public function getAtfVersion()
    {
        return $this->getProperty('atfVersion');
    }

    /**
     * @param string $atfVersion
     */
    public function setAtfVersion($atfVersion = null)
    {
        $this->setProperty('atfVersion', $atfVersion);
    }

    /**
     * @return string
     */
    public function getSourceLocalAuthorityCode()
    {
        return $this->getProperty('sourceLocalAuthorityCode');
    }

    /**
     * @param string $sourceLocalAuthorityCode
     */
    public function setSourceLocalAuthorityCode($sourceLocalAuthorityCode = null)
    {
        $this->setProperty('sourceLocalAuthorityCode', $sourceLocalAuthorityCode);
    }

    /**
     * @return LocalAuthority
     */
    public function getSourceLocalAuthority()
    {
        return $this->getProperty('sourceLocalAuthority');
    }

    /**
     * @param LocalAuthority $sourceLocalAuthority
     */
    public function setSourceLocalAuthority(LocalAuthority $sourceLocalAuthority = null)
    {
        $this->setProperty('sourceLocalAuthority', $sourceLocalAuthority);
    }

    /**
     * @return string
     */
    public function getSourceEstablishmentNumber()
    {
        return $this->getProperty('sourceEstablishmentNumber');
    }

    /**
     * @param string $sourceEstablishmentNumber
     */
    public function setSourceEstablishmentNumber($sourceEstablishmentNumber = null)
    {
        $this->setProperty('sourceEstablishmentNumber', $sourceEstablishmentNumber);
    }

    /**
     * @return string
     */
    public function getSourceEducationalInstitutionName()
    {
        return $this->getProperty('sourceEducationalInstitutionName');
    }

    /**
     * @param string $sourceEducationalInstitutionName
     */
    public function setSourceEducationalInstitutionName($sourceEducationalInstitutionName = null)
    {
        $this->setProperty('sourceEducationalInstitutionName', $sourceEducationalInstitutionName);
    }

    /**
     * @return EducationalInstitution
     */
    public function getSourceEducationalInstitution()
    {
        return $this->getProperty('sourceEducationalInstitution');
    }

    /**
     * @param EducationalInstitution $sourceEducationalInstitution
     */
    public function setSourceEducationalInstitution(EducationalInstitution $sourceEducationalInstitution = null)
    {
        $this->setProperty('sourceEducationalInstitution', $sourceEducationalInstitution);
    }

    /**
     * @return string
     */
    public function getDestinationLocalAuthorityCode()
    {
        return $this->getProperty('destinationLocalAuthorityCode');
    }

    /**
     * @param string $destinationLocalAuthorityCode
     */
    public function setDestinationLocalAuthorityCode($destinationLocalAuthorityCode = null)
    {
        $this->setProperty('destinationLocalAuthorityCode', $destinationLocalAuthorityCode);
    }

    /**
     * @return LocalAuthority
     */
    public function getDestinationLocalAuthority()
    {
        return $this->getProperty('destinationLocalAuthority');
    }

    /**
     * @param LocalAuthority $destinationLocalAuthority
     */
    public function setDestinationLocalAuthority(LocalAuthority $destinationLocalAuthority = null)
    {
        $this->setProperty('destinationLocalAuthority', $destinationLocalAuthority);
    }

    /**
     * @return string
     */
    public function getDestinationEstablishmentNumber()
    {
        return $this->getProperty('destinationEstablishmentNumber');
    }

    /**
     * @param string $destinationEstablishmentNumber
     */
    public function setDestinationEstablishmentNumber($destinationEstablishmentNumber = null)
    {
        $this->setProperty('destinationEstablishmentNumber', $destinationEstablishmentNumber);
    }

    /**
     * @return EducationalInstitution
     */
    public function getDestinationEducationalInstitution()
    {
        return $this->getProperty('destinationEducationalInstitution');
    }

    /**
     * @param EducationalInstitution $destinationEducationalInstitution
     */
    public function setDestinationEducationalInstitution(EducationalInstitution $destinationEducationalInstitution = null)
    {
        $this->setProperty('destinationEducationalInstitution', $destinationEducationalInstitution);
    }

    /**
     * @return \DateTime
     */
    public function getLastImportDatetime()
    {
        return $this->getProperty('lastImportDatetime');
    }

    /**
     * @param \DateTime $lastImportDatetime
     */
    public function setLastImportDatetime(\DateTime $lastImportDatetime = null)
    {
        $this->setProperty('lastImportDatetime', $lastImportDatetime);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty('status', $status);
    }
}
