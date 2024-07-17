<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PupilPremiumRecipientType extends ModelBase
{
    public const PUPIL_PREMIUM_RECIPIENT = 'pupilPremiumRecipient';

    public const PUPIL_PREMIUM_TYPE = 'pupilPremiumType';

    protected $_resourceType = ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT_TYPE;

    /**
     * @param Query $query
     * @return PupilPremiumRecipientType[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PupilPremiumRecipientType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT_TYPE, $id);
    }

    /**
     * @return \Arbor\Model\UkDfe\PupilPremiumRecipient
     */
    public function getPupilPremiumRecipient()
    {
        return $this->getProperty('pupilPremiumRecipient');
    }

    /**
     * @param \Arbor\Model\UkDfe\PupilPremiumRecipient $pupilPremiumRecipient
     */
    public function setPupilPremiumRecipient(\Arbor\Model\UkDfe\PupilPremiumRecipient $pupilPremiumRecipient = null)
    {
        $this->setProperty('pupilPremiumRecipient', $pupilPremiumRecipient);
    }

    /**
     * @return string
     */
    public function getPupilPremiumType()
    {
        return $this->getProperty('pupilPremiumType');
    }

    /**
     * @param string $pupilPremiumType
     */
    public function setPupilPremiumType(string $pupilPremiumType = null)
    {
        $this->setProperty('pupilPremiumType', $pupilPremiumType);
    }
}
