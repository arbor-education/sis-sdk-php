<?php

namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Email extends ModelBase
{

    const CONTEXT = 'context';

    protected $_resourceType = ResourceType::GROUP_EMAIL;

    /**
     * @param Query $query
     * @return Email[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_EMAIL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Email
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_EMAIL, $id);
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->getProperty('context');
    }

    /**
     * @param string $context
     */
    public function setContext($context = null)
    {
        $this->setProperty('context', $context);
    }


}
