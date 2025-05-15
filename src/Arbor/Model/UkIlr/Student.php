<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Student extends ModelBase
{
    public const MIGRATED_AS_PART_OF_PROVIDER_MERGER = 'migratedAsPartOfProviderMerger';

    public const MOVED_DUE_TO_MINIMUM_CONTRACT_LEVEL = 'movedDueToMinimumContractLevel';

    public const PRIMARY_LLDD_AND_HEALTH_PROBLEM = 'primaryLlddAndHealthProblem';

    protected $_resourceType = ResourceType::UK_ILR_STUDENT;

    /**
     * @param Query $query
     * @return Student[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_STUDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Student
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_STUDENT, $id);
    }

    /**
     * @return bool
     */
    public function getMigratedAsPartOfProviderMerger()
    {
        return $this->getProperty('migratedAsPartOfProviderMerger');
    }

    /**
     * @param bool $migratedAsPartOfProviderMerger
     */
    public function setMigratedAsPartOfProviderMerger(bool $migratedAsPartOfProviderMerger = null)
    {
        $this->setProperty('migratedAsPartOfProviderMerger', $migratedAsPartOfProviderMerger);
    }

    /**
     * @return bool
     */
    public function getMovedDueToMinimumContractLevel()
    {
        return $this->getProperty('movedDueToMinimumContractLevel');
    }

    /**
     * @param bool $movedDueToMinimumContractLevel
     */
    public function setMovedDueToMinimumContractLevel(bool $movedDueToMinimumContractLevel = null)
    {
        $this->setProperty('movedDueToMinimumContractLevel', $movedDueToMinimumContractLevel);
    }

    /**
     * @return ModelBase
     */
    public function getPrimaryLlddAndHealthProblem()
    {
        return $this->getProperty('primaryLlddAndHealthProblem');
    }

    /**
     * @param ModelBase $primaryLlddAndHealthProblem
     */
    public function setPrimaryLlddAndHealthProblem(\ModelBase $primaryLlddAndHealthProblem = null)
    {
        $this->setProperty('primaryLlddAndHealthProblem', $primaryLlddAndHealthProblem);
    }
}
