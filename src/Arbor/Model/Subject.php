<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Subject extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const SUBJECT_NAME = 'subjectName';

    const PARENT_SUBJECT = 'parentSubject';

    const USED_IN_SWF_ONLY = 'usedInSwfOnly';

    const USED_IN_CBDS_ONLY = 'usedInCbdsOnly';

    const D00115 = 'd00115';

    const D00220 = 'd00220';

    protected $_resourceType = ResourceType::SUBJECT;

    /**
     * @param Query $query
     * @return Subject[] | Collection
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

        $query->setResourceType(ResourceType::SUBJECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Subject
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SUBJECT, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getSubjectName()
    {
        return $this->getProperty('subjectName');
    }

    /**
     * @param string $subjectName
     */
    public function setSubjectName($subjectName = null)
    {
        $this->setProperty('subjectName', $subjectName);
    }

    /**
     * @return Subject
     */
    public function getParentSubject()
    {
        return $this->getProperty('parentSubject');
    }

    /**
     * @param Subject $parentSubject
     */
    public function setParentSubject(Subject $parentSubject = null)
    {
        $this->setProperty('parentSubject', $parentSubject);
    }

    /**
     * @return bool
     */
    public function getUsedInSwfOnly()
    {
        return $this->getProperty('usedInSwfOnly');
    }

    /**
     * @param bool $usedInSwfOnly
     */
    public function setUsedInSwfOnly($usedInSwfOnly = null)
    {
        $this->setProperty('usedInSwfOnly', $usedInSwfOnly);
    }

    /**
     * @return bool
     */
    public function getUsedInCbdsOnly()
    {
        return $this->getProperty('usedInCbdsOnly');
    }

    /**
     * @param bool $usedInCbdsOnly
     */
    public function setUsedInCbdsOnly($usedInCbdsOnly = null)
    {
        $this->setProperty('usedInCbdsOnly', $usedInCbdsOnly);
    }

    /**
     * @return string
     */
    public function getD00115()
    {
        return $this->getProperty('d00115');
    }

    /**
     * @param string $d00115
     */
    public function setD00115($d00115 = null)
    {
        $this->setProperty('d00115', $d00115);
    }

    /**
     * @return string
     */
    public function getD00220()
    {
        return $this->getProperty('d00220');
    }

    /**
     * @param string $d00220
     */
    public function setD00220($d00220 = null)
    {
        $this->setProperty('d00220', $d00220);
    }


}
