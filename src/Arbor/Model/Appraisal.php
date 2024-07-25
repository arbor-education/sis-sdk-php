<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Appraisal extends ModelBase
{
    public const APPRAISEE = 'appraisee';

    public const APPRAISAL_DATE = 'appraisalDate';

    public const APPRAISER = 'appraiser';

    public const APPRAISAL_NOTES = 'appraisalNotes';

    public const COMPLETED_DATETIME = 'completedDatetime';

    protected $_resourceType = ResourceType::APPRAISAL;

    /**
     * @param Query $query
     * @return Appraisal[] | Collection
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

        $query->setResourceType(ResourceType::APPRAISAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Appraisal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::APPRAISAL, $id);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getAppraisee()
    {
        return $this->getProperty('appraisee');
    }

    /**
     * @param \Arbor\Model\Staff $appraisee
     */
    public function setAppraisee(\Arbor\Model\Staff $appraisee = null)
    {
        $this->setProperty('appraisee', $appraisee);
    }

    /**
     * @return \DateTime
     */
    public function getAppraisalDate()
    {
        return $this->getProperty('appraisalDate');
    }

    /**
     * @param \DateTime $appraisalDate
     */
    public function setAppraisalDate(\DateTime $appraisalDate = null)
    {
        $this->setProperty('appraisalDate', $appraisalDate);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getAppraiser()
    {
        return $this->getProperty('appraiser');
    }

    /**
     * @param \Arbor\Model\Staff $appraiser
     */
    public function setAppraiser(\Arbor\Model\Staff $appraiser = null)
    {
        $this->setProperty('appraiser', $appraiser);
    }

    /**
     * @return string
     */
    public function getAppraisalNotes()
    {
        return $this->getProperty('appraisalNotes');
    }

    /**
     * @param string $appraisalNotes
     */
    public function setAppraisalNotes(string $appraisalNotes = null)
    {
        $this->setProperty('appraisalNotes', $appraisalNotes);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }
}
