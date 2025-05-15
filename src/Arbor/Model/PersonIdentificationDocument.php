<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PersonIdentificationDocument extends ModelBase
{
    public const PERSON = 'person';

    public const DOCUMENT_TYPE = 'documentType';

    public const DOCUMENT_NUMBER = 'documentNumber';

    public const ISSUE_DATE = 'issueDate';

    public const EXPIRY_DATE = 'expiryDate';

    public const NAME_ON_DOCUMENT = 'nameOnDocument';

    public const ISSUING_COUNTRY = 'issuingCountry';

    protected $_resourceType = ResourceType::PERSON_IDENTIFICATION_DOCUMENT;

    /**
     * @param Query $query
     * @return PersonIdentificationDocument[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_IDENTIFICATION_DOCUMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonIdentificationDocument
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_IDENTIFICATION_DOCUMENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \Arbor\Model\IdentificationDocumentType
     */
    public function getDocumentType()
    {
        return $this->getProperty('documentType');
    }

    /**
     * @param \Arbor\Model\IdentificationDocumentType $documentType
     */
    public function setDocumentType(\Arbor\Model\IdentificationDocumentType $documentType = null)
    {
        $this->setProperty('documentType', $documentType);
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->getProperty('documentNumber');
    }

    /**
     * @param string $documentNumber
     */
    public function setDocumentNumber(string $documentNumber = null)
    {
        $this->setProperty('documentNumber', $documentNumber);
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->getProperty('issueDate');
    }

    /**
     * @param \DateTime $issueDate
     */
    public function setIssueDate(\DateTime $issueDate = null)
    {
        $this->setProperty('issueDate', $issueDate);
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->getProperty('expiryDate');
    }

    /**
     * @param \DateTime $expiryDate
     */
    public function setExpiryDate(\DateTime $expiryDate = null)
    {
        $this->setProperty('expiryDate', $expiryDate);
    }

    /**
     * @return string
     */
    public function getNameOnDocument()
    {
        return $this->getProperty('nameOnDocument');
    }

    /**
     * @param string $nameOnDocument
     */
    public function setNameOnDocument(string $nameOnDocument = null)
    {
        $this->setProperty('nameOnDocument', $nameOnDocument);
    }

    /**
     * @return \Arbor\Model\Country
     */
    public function getIssuingCountry()
    {
        return $this->getProperty('issuingCountry');
    }

    /**
     * @param \Arbor\Model\Country $issuingCountry
     */
    public function setIssuingCountry(\Arbor\Model\Country $issuingCountry = null)
    {
        $this->setProperty('issuingCountry', $issuingCountry);
    }
}
