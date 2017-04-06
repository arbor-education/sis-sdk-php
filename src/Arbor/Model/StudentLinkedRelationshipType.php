<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class StudentLinkedRelationshipType extends ModelBase
{

    const STUDENT_LINKED_RELATIONSHIP_TYPE_NAME = 'studentLinkedRelationshipTypeName';

    const IS_MEDICAL = 'isMedical';

    const IS_ACADEMIC = 'isAcademic';

    protected $_resourceType = ResourceType::STUDENT_LINKED_RELATIONSHIP_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentLinkedRelationshipType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentLinkedRelationshipType");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentLinkedRelationshipType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_LINKED_RELATIONSHIP_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getStudentLinkedRelationshipTypeName()
    {
        return $this->getProperty("studentLinkedRelationshipTypeName");
    }

    /**
     * @param string $studentLinkedRelationshipTypeName
     */
    public function setStudentLinkedRelationshipTypeName($studentLinkedRelationshipTypeName = null)
    {
        $this->setProperty("studentLinkedRelationshipTypeName", $studentLinkedRelationshipTypeName);
    }

    /**
     * @return bool
     */
    public function getIsMedical()
    {
        return $this->getProperty("isMedical");
    }

    /**
     * @param bool $isMedical
     */
    public function setIsMedical($isMedical = null)
    {
        $this->setProperty("isMedical", $isMedical);
    }

    /**
     * @return bool
     */
    public function getIsAcademic()
    {
        return $this->getProperty("isAcademic");
    }

    /**
     * @param bool $isAcademic
     */
    public function setIsAcademic($isAcademic = null)
    {
        $this->setProperty("isAcademic", $isAcademic);
    }


}
