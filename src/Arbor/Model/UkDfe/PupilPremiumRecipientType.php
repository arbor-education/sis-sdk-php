<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PupilPremiumRecipientType extends ModelBase
{

    const PUPIL_PREMIUM_RECIPIENT = 'pupilPremiumRecipient';

    const PUPIL_PREMIUM_TYPE = 'pupilPremiumType';

    protected $_resourceType = ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT_TYPE;

    /**
     * @param Query $query
     * @return PupilPremiumRecipientType[] | Collection
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
     * @return PupilPremiumRecipient
     */
    public function getPupilPremiumRecipient()
    {
        return $this->getProperty('pupilPremiumRecipient');
    }

    /**
     * @param PupilPremiumRecipient $pupilPremiumRecipient
     */
    public function setPupilPremiumRecipient(PupilPremiumRecipient $pupilPremiumRecipient = null)
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
    public function setPupilPremiumType($pupilPremiumType = null)
    {
        $this->setProperty('pupilPremiumType', $pupilPremiumType);
    }


}
