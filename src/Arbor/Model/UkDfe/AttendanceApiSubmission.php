<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AttendanceApiSubmission extends ModelBase
{
    public const PAYLOAD = 'payload';

    public const PAYLOAD_SENT_DATETIME = 'payloadSentDatetime';

    public const RESPONSE = 'response';

    public const RESPONSE_STATUS_CODE = 'responseStatusCode';

    public const RESPONSE_RECEIVED_DATETIME = 'responseReceivedDatetime';

    public const RESPONSE_SUBMISSION_REFERENCE = 'responseSubmissionReference';

    public const STATUS = 'status';

    protected $_resourceType = ResourceType::UK_DFE_ATTENDANCE_API_SUBMISSION;

    /**
     * @param Query $query
     * @return AttendanceApiSubmission[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ATTENDANCE_API_SUBMISSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AttendanceApiSubmission
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ATTENDANCE_API_SUBMISSION, $id);
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->getProperty('payload');
    }

    /**
     * @param string $payload
     */
    public function setPayload(string $payload = null)
    {
        $this->setProperty('payload', $payload);
    }

    /**
     * @return \DateTime
     */
    public function getPayloadSentDatetime()
    {
        return $this->getProperty('payloadSentDatetime');
    }

    /**
     * @param \DateTime $payloadSentDatetime
     */
    public function setPayloadSentDatetime(\DateTime $payloadSentDatetime = null)
    {
        $this->setProperty('payloadSentDatetime', $payloadSentDatetime);
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->getProperty('response');
    }

    /**
     * @param string $response
     */
    public function setResponse(string $response = null)
    {
        $this->setProperty('response', $response);
    }

    /**
     * @return int
     */
    public function getResponseStatusCode()
    {
        return $this->getProperty('responseStatusCode');
    }

    /**
     * @param int $responseStatusCode
     */
    public function setResponseStatusCode(int $responseStatusCode = null)
    {
        $this->setProperty('responseStatusCode', $responseStatusCode);
    }

    /**
     * @return \DateTime
     */
    public function getResponseReceivedDatetime()
    {
        return $this->getProperty('responseReceivedDatetime');
    }

    /**
     * @param \DateTime $responseReceivedDatetime
     */
    public function setResponseReceivedDatetime(\DateTime $responseReceivedDatetime = null)
    {
        $this->setProperty('responseReceivedDatetime', $responseReceivedDatetime);
    }

    /**
     * @return string
     */
    public function getResponseSubmissionReference()
    {
        return $this->getProperty('responseSubmissionReference');
    }

    /**
     * @param string $responseSubmissionReference
     */
    public function setResponseSubmissionReference(string $responseSubmissionReference = null)
    {
        $this->setProperty('responseSubmissionReference', $responseSubmissionReference);
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status = null)
    {
        $this->setProperty('status', $status);
    }
}
