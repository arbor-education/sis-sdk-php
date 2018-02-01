<?php

namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PupilPremiumRecipientImport extends ModelBase
{

    const PUPIL_PREMIUM_RECIPIENT_IMPORT_JOB_ID = 'pupilPremiumRecipientImportJobId';

    const PUPIL_PREMIUM_RECIPIENT_ID = 'pupilPremiumRecipientId';

    protected $_resourceType = ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT_IMPORT;

    /**
     * @param Query $query
     * @return PupilPremiumRecipientImport[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PupilPremiumRecipientImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_PUPIL_PREMIUM_RECIPIENT_IMPORT, $id);
    }

    /**
     * @return Pupil
     */
    public function getPupilPremiumRecipientImportJobId()
    {
        return $this->getProperty('pupilPremiumRecipientImportJobId');
    }

    /**
     * @param Pupil $pupilPremiumRecipientImportJobId
     */
    public function setPupilPremiumRecipientImportJobId(Pupil $pupilPremiumRecipientImportJobId = null)
    {
        $this->setProperty('pupilPremiumRecipientImportJobId', $pupilPremiumRecipientImportJobId);
    }

    /**
     * @return Pupil
     */
    public function getPupilPremiumRecipientId()
    {
        return $this->getProperty('pupilPremiumRecipientId');
    }

    /**
     * @param Pupil $pupilPremiumRecipientId
     */
    public function setPupilPremiumRecipientId(Pupil $pupilPremiumRecipientId = null)
    {
        $this->setProperty('pupilPremiumRecipientId', $pupilPremiumRecipientId);
    }


}
