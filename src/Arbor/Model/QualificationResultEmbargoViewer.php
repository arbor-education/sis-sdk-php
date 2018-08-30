<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;

class QualificationResultEmbargoViewer extends ModelBase
{

    protected $_resourceType = ResourceType::QUALIFICATION_RESULT_EMBARGO_VIEWER;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\QualificationResultEmbargoViewer[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("QualificationResultEmbargoViewer");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\QualificationResultEmbargoViewer
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("QualificationResultEmbargoViewer", $id);
    }

    /**
     * @return ModelBase
     */
    public function getViewer()
    {
        return $this->getProperty("viewer");
    }

    /**
     * @param ModelBase $viewer
     */
    public function setViewer(ModelBase $viewer = null)
    {
        $this->setProperty("viewer", $viewer);
    }


}
