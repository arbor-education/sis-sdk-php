<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EducationalInstitutionEnrolment extends ModelBase
{
    public const REMOVAL_GROUNDS = 'removalGrounds';

    public const ALTERNATIVE_PROVISION_REASON = 'alternativeProvisionReason';

    protected $_resourceType = ResourceType::UK_DFE_EDUCATIONAL_INSTITUTION_ENROLMENT;

    /**
     * @param Query $query
     * @return EducationalInstitutionEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_EDUCATIONAL_INSTITUTION_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EducationalInstitutionEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_EDUCATIONAL_INSTITUTION_ENROLMENT, $id);
    }

    /**
     * @return string
     */
    public function getRemovalGrounds()
    {
        return $this->getProperty('removalGrounds');
    }

    /**
     * @param string $removalGrounds
     */
    public function setRemovalGrounds(string $removalGrounds = null)
    {
        $this->setProperty('removalGrounds', $removalGrounds);
    }

    /**
     * @return \Arbor\Model\UkDfe\AlternativeProvisionReason
     */
    public function getAlternativeProvisionReason()
    {
        return $this->getProperty('alternativeProvisionReason');
    }

    /**
     * @param \Arbor\Model\UkDfe\AlternativeProvisionReason $alternativeProvisionReason
     */
    public function setAlternativeProvisionReason(\Arbor\Model\UkDfe\AlternativeProvisionReason $alternativeProvisionReason = null)
    {
        $this->setProperty('alternativeProvisionReason', $alternativeProvisionReason);
    }
}
