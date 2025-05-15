<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IntegrationsBiViewerReport extends ModelBase
{
    public const INTEGRATIONS_BI_VIEWER_PROVIDER = 'IntegrationsBiViewerProvider';

    public const EMBED_URL = 'embedUrl';

    public const NAME = 'name';

    public const EXTERNAL_REPORT_ID = 'externalReportId';

    public const ACTIVE = 'active';

    protected $_resourceType = ResourceType::INTEGRATIONS_BI_VIEWER_REPORT;

    /**
     * @param Query $query
     * @return IntegrationsBiViewerReport[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_BI_VIEWER_REPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsBiViewerReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_BI_VIEWER_REPORT, $id);
    }

    /**
     * @return \Arbor\Model\IntegrationsBiViewerProvider
     */
    public function getIntegrationsBiViewerProvider()
    {
        return $this->getProperty('IntegrationsBiViewerProvider');
    }

    /**
     * @param \Arbor\Model\IntegrationsBiViewerProvider $IntegrationsBiViewerProvider
     */
    public function setIntegrationsBiViewerProvider(\Arbor\Model\IntegrationsBiViewerProvider $IntegrationsBiViewerProvider = null)
    {
        $this->setProperty('IntegrationsBiViewerProvider', $IntegrationsBiViewerProvider);
    }

    /**
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->getProperty('embedUrl');
    }

    /**
     * @param string $embedUrl
     */
    public function setEmbedUrl(string $embedUrl = null)
    {
        $this->setProperty('embedUrl', $embedUrl);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getExternalReportId()
    {
        return $this->getProperty('externalReportId');
    }

    /**
     * @param string $externalReportId
     */
    public function setExternalReportId(string $externalReportId = null)
    {
        $this->setProperty('externalReportId', $externalReportId);
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
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }
}
