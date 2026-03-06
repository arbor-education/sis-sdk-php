<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AcademicYearEnrolment extends ModelBase
{
    public const GUIDED_CONTACT_HOURS = 'guidedContactHours';

    protected $_resourceType = ResourceType::CYMRU_ACADEMIC_YEAR_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicYearEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_ACADEMIC_YEAR_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicYearEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_ACADEMIC_YEAR_ENROLMENT, $id);
    }

    /**
     * @return int
     */
    public function getGuidedContactHours()
    {
        return $this->getProperty('guidedContactHours');
    }

    /**
     * @param int $guidedContactHours
     */
    public function setGuidedContactHours(int $guidedContactHours = null)
    {
        $this->setProperty('guidedContactHours', $guidedContactHours);
    }
}
