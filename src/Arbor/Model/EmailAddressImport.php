<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailAddressImport extends ModelBase
{
    public const EMAIL_ADDRESS_IMPORT_JOB = 'emailAddressImportJob';

    public const EMAIL_ADDRESS_OWNER = 'emailAddressOwner';

    public const EMAIL_ADDRESS_TYPE = 'emailAddressType';

    public const EMAIL_ADDRESS = 'emailAddress';

    public const ROW_INDEX = 'rowIndex';

    public const ERRORS = 'errors';

    public const REQUIRED_ERRORS = 'requiredErrors';

    protected $_resourceType = ResourceType::EMAIL_ADDRESS_IMPORT;

    /**
     * @param Query $query
     * @return EmailAddressImport[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_ADDRESS_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailAddressImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_ADDRESS_IMPORT, $id);
    }

    /**
     * @return \Arbor\Model\EmailAddressImportJob
     */
    public function getEmailAddressImportJob()
    {
        return $this->getProperty('emailAddressImportJob');
    }

    /**
     * @param \Arbor\Model\EmailAddressImportJob $emailAddressImportJob
     */
    public function setEmailAddressImportJob(\Arbor\Model\EmailAddressImportJob $emailAddressImportJob = null)
    {
        $this->setProperty('emailAddressImportJob', $emailAddressImportJob);
    }

    /**
     * @return ModelBase
     */
    public function getEmailAddressOwner()
    {
        return $this->getProperty('emailAddressOwner');
    }

    /**
     * @param ModelBase $emailAddressOwner
     */
    public function setEmailAddressOwner(\ModelBase $emailAddressOwner = null)
    {
        $this->setProperty('emailAddressOwner', $emailAddressOwner);
    }

    /**
     * @return string
     */
    public function getEmailAddressType()
    {
        return $this->getProperty('emailAddressType');
    }

    /**
     * @param string $emailAddressType
     */
    public function setEmailAddressType(string $emailAddressType = null)
    {
        $this->setProperty('emailAddressType', $emailAddressType);
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->getProperty('emailAddress');
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress = null)
    {
        $this->setProperty('emailAddress', $emailAddress);
    }

    /**
     * @return int
     */
    public function getRowIndex()
    {
        return $this->getProperty('rowIndex');
    }

    /**
     * @param int $rowIndex
     */
    public function setRowIndex(int $rowIndex = null)
    {
        $this->setProperty('rowIndex', $rowIndex);
    }

    /**
     * @return string
     */
    public function getErrors()
    {
        return $this->getProperty('errors');
    }

    /**
     * @param string $errors
     */
    public function setErrors(string $errors = null)
    {
        $this->setProperty('errors', $errors);
    }

    /**
     * @return string
     */
    public function getRequiredErrors()
    {
        return $this->getProperty('requiredErrors');
    }

    /**
     * @param string $requiredErrors
     */
    public function setRequiredErrors(string $requiredErrors = null)
    {
        $this->setProperty('requiredErrors', $requiredErrors);
    }
}
