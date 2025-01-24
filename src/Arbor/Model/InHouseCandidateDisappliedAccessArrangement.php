<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InHouseCandidateDisappliedAccessArrangement extends ModelBase
{
    public const IN_HOUSE_CANDIDATE = 'inHouseCandidate';

    public const ACCESS_ARRANGEMENT = 'accessArrangement';

    public const IN_HOUSE_EXAM = 'inHouseExam';

    protected $_resourceType = ResourceType::IN_HOUSE_CANDIDATE_DISAPPLIED_ACCESS_ARRANGEMENT;

    /**
     * @param Query $query
     * @return InHouseCandidateDisappliedAccessArrangement[] | Collection
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

        $query->setResourceType(ResourceType::IN_HOUSE_CANDIDATE_DISAPPLIED_ACCESS_ARRANGEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseCandidateDisappliedAccessArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_CANDIDATE_DISAPPLIED_ACCESS_ARRANGEMENT, $id);
    }

    /**
     * @return \Arbor\Model\InHouseCandidate
     */
    public function getInHouseCandidate()
    {
        return $this->getProperty('inHouseCandidate');
    }

    /**
     * @param \Arbor\Model\InHouseCandidate $inHouseCandidate
     */
    public function setInHouseCandidate(\Arbor\Model\InHouseCandidate $inHouseCandidate = null)
    {
        $this->setProperty('inHouseCandidate', $inHouseCandidate);
    }

    /**
     * @return \Arbor\Model\AccessArrangement
     */
    public function getAccessArrangement()
    {
        return $this->getProperty('accessArrangement');
    }

    /**
     * @param \Arbor\Model\AccessArrangement $accessArrangement
     */
    public function setAccessArrangement(\Arbor\Model\AccessArrangement $accessArrangement = null)
    {
        $this->setProperty('accessArrangement', $accessArrangement);
    }

    /**
     * @return \Arbor\Model\InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty('inHouseExam');
    }

    /**
     * @param \Arbor\Model\InHouseExam $inHouseExam
     */
    public function setInHouseExam(\Arbor\Model\InHouseExam $inHouseExam = null)
    {
        $this->setProperty('inHouseExam', $inHouseExam);
    }
}
