<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomerFeedback extends ModelBase
{
    public const AREA = 'area';

    public const SCORE = 'score';

    public const FEEDBACK = 'feedback';

    public const CLIENT_TYPE = 'clientType';

    public const CLIENT_VERSION = 'clientVersion';

    public const REQUEST = 'request';

    protected $_resourceType = ResourceType::CUSTOMER_FEEDBACK;

    /**
     * @param Query $query
     * @return CustomerFeedback[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOMER_FEEDBACK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomerFeedback
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOMER_FEEDBACK, $id);
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->getProperty('area');
    }

    /**
     * @param string $area
     */
    public function setArea(string $area = null)
    {
        $this->setProperty('area', $area);
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->getProperty('score');
    }

    /**
     * @param int $score
     */
    public function setScore(int $score = null)
    {
        $this->setProperty('score', $score);
    }

    /**
     * @return string
     */
    public function getFeedback()
    {
        return $this->getProperty('feedback');
    }

    /**
     * @param string $feedback
     */
    public function setFeedback(string $feedback = null)
    {
        $this->setProperty('feedback', $feedback);
    }

    /**
     * @return string
     */
    public function getClientType()
    {
        return $this->getProperty('clientType');
    }

    /**
     * @param string $clientType
     */
    public function setClientType(string $clientType = null)
    {
        $this->setProperty('clientType', $clientType);
    }

    /**
     * @return string
     */
    public function getClientVersion()
    {
        return $this->getProperty('clientVersion');
    }

    /**
     * @param string $clientVersion
     */
    public function setClientVersion(string $clientVersion = null)
    {
        $this->setProperty('clientVersion', $clientVersion);
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->getProperty('request');
    }

    /**
     * @param string $request
     */
    public function setRequest(string $request = null)
    {
        $this->setProperty('request', $request);
    }
}
