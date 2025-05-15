<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserDefinedFieldImport extends ModelBase
{
    public const USER_DEFINED_IMPORT_JOB = 'userDefinedImportJob';

    public const ENTITY = 'entity';

    public const VALUE = 'value';

    public const ROW_INDEX = 'rowIndex';

    public const ERRORS = 'errors';

    public const REQUIRED_ERRORS = 'requiredErrors';

    protected $_resourceType = ResourceType::USER_DEFINED_FIELD_IMPORT;

    /**
     * @param Query $query
     * @return UserDefinedFieldImport[] | Collection
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

        $query->setResourceType(ResourceType::USER_DEFINED_FIELD_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserDefinedFieldImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_DEFINED_FIELD_IMPORT, $id);
    }

    /**
     * @return \Arbor\Model\UserDefinedFieldImportJob
     */
    public function getUserDefinedImportJob()
    {
        return $this->getProperty('userDefinedImportJob');
    }

    /**
     * @param \Arbor\Model\UserDefinedFieldImportJob $userDefinedImportJob
     */
    public function setUserDefinedImportJob(\Arbor\Model\UserDefinedFieldImportJob $userDefinedImportJob = null)
    {
        $this->setProperty('userDefinedImportJob', $userDefinedImportJob);
    }

    /**
     * @return ModelBase
     */
    public function getEntity()
    {
        return $this->getProperty('entity');
    }

    /**
     * @param ModelBase $entity
     */
    public function setEntity(\ModelBase $entity = null)
    {
        $this->setProperty('entity', $entity);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param string $value
     */
    public function setValue(string $value = null)
    {
        $this->setProperty('value', $value);
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
