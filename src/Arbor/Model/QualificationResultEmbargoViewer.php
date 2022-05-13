<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationResultEmbargoViewer extends ModelBase
{
    const VIEWER = 'viewer';

    protected $_resourceType = ResourceType::QUALIFICATION_RESULT_EMBARGO_VIEWER;

    /**
     * @param Query $query
     * @return QualificationResultEmbargoViewer[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_RESULT_EMBARGO_VIEWER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationResultEmbargoViewer
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_RESULT_EMBARGO_VIEWER, $id);
    }

    /**
     * @return ModelBase
     */
    public function getViewer()
    {
        return $this->getProperty('viewer');
    }

    /**
     * @param ModelBase $viewer
     */
    public function setViewer(ModelBase $viewer = null)
    {
        $this->setProperty('viewer', $viewer);
    }

}
