<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailAddressImport extends ModelBase
{
    const EMAIL_ADDRESS_IMPORT_JOB = 'emailAddressImportJob';

    const EMAIL_ADDRESS_OWNER = 'emailAddressOwner';

    const EMAIL_ADDRESS_TYPE = 'emailAddressType';

    const EMAIL_ADDRESS = 'emailAddress';

    const ROW_INDEX = 'rowIndex';

    const ERRORS = 'errors';

    const REQUIRED_ERRORS = 'requiredErrors';

    protected $_resourceType = ResourceType::EMAIL_ADDRESS_IMPORT;

    /**
     * @param Query $query
     * @return EmailAddressImport[] | Collection
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
     * @return EmailAddressImportJob
     */
    public function getEmailAddressImportJob()
    {
        return $this->getProperty('emailAddressImportJob');
    }

    /**
     * @param EmailAddressImportJob $emailAddressImportJob
     */
    public function setEmailAddressImportJob(EmailAddressImportJob $emailAddressImportJob = null)
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
    public function setEmailAddressOwner(ModelBase $emailAddressOwner = null)
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
    public function setEmailAddressType($emailAddressType = null)
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
    public function setEmailAddress($emailAddress = null)
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
    public function setRowIndex($rowIndex = null)
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
    public function setErrors($errors = null)
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
    public function setRequiredErrors($requiredErrors = null)
    {
        $this->setProperty('requiredErrors', $requiredErrors);
    }
}
