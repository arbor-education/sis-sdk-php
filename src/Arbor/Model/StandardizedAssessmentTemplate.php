<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class StandardizedAssessmentTemplate extends ModelBase
{
    const TEMPLATE_NAME = 'templateName';

    const CODE = 'code';

    const VALIDITY_START_DATE = 'validityStartDate';

    const VALIDITY_END_DATE = 'validityEndDate';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StandardizedAssessmentTemplate[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StandardizedAssessmentTemplate");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StandardizedAssessmentTemplate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_TEMPLATE, $id);
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->getProperty("templateName");
    }

    /**
     * @param string $templateName
     */
    public function setTemplateName($templateName = null)
    {
        $this->setProperty("templateName", $templateName);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return \DateTime
     */
    public function getValidityStartDate()
    {
        return $this->getProperty("validityStartDate");
    }

    /**
     * @param \DateTime $validityStartDate
     */
    public function setValidityStartDate(\DateTime $validityStartDate = null)
    {
        $this->setProperty("validityStartDate", $validityStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getValidityEndDate()
    {
        return $this->getProperty("validityEndDate");
    }

    /**
     * @param \DateTime $validityEndDate
     */
    public function setValidityEndDate(\DateTime $validityEndDate = null)
    {
        $this->setProperty("validityEndDate", $validityEndDate);
    }
}
