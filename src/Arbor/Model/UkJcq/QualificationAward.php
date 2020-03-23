<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class QualificationAward extends ModelBase
{

    const QCA_ACCREDITATION_NUMBER = 'qcaAccreditationNumber';

    const KS4_DISCOUNT_CODE2014 = 'ks4DiscountCode2014';

    const KS4_DISCOUNT_CODE2015 = 'ks4DiscountCode2015';

    const KS4_DISCOUNT_CODE2016 = 'ks4DiscountCode2016';

    const KS4_DISCOUNT_CODE2017 = 'ks4DiscountCode2017';

    const POST16_DISCOUNT_CODE = 'post16DiscountCode';

    protected $_resourceType = ResourceType::UK_JCQ_QUALIFICATION_AWARD;

    /**
     * @param Query $query
     * @return QualificationAward[] | Collection
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

        $query->setResourceType(ResourceType::UK_JCQ_QUALIFICATION_AWARD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAward
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_JCQ_QUALIFICATION_AWARD, $id);
    }

    /**
     * @return string
     */
    public function getQcaAccreditationNumber()
    {
        return $this->getProperty('qcaAccreditationNumber');
    }

    /**
     * @param string $qcaAccreditationNumber
     */
    public function setQcaAccreditationNumber($qcaAccreditationNumber = null)
    {
        $this->setProperty('qcaAccreditationNumber', $qcaAccreditationNumber);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2014()
    {
        return $this->getProperty('ks4DiscountCode2014');
    }

    /**
     * @param string $ks4DiscountCode2014
     */
    public function setKs4DiscountCode2014($ks4DiscountCode2014 = null)
    {
        $this->setProperty('ks4DiscountCode2014', $ks4DiscountCode2014);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2015()
    {
        return $this->getProperty('ks4DiscountCode2015');
    }

    /**
     * @param string $ks4DiscountCode2015
     */
    public function setKs4DiscountCode2015($ks4DiscountCode2015 = null)
    {
        $this->setProperty('ks4DiscountCode2015', $ks4DiscountCode2015);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2016()
    {
        return $this->getProperty('ks4DiscountCode2016');
    }

    /**
     * @param string $ks4DiscountCode2016
     */
    public function setKs4DiscountCode2016($ks4DiscountCode2016 = null)
    {
        $this->setProperty('ks4DiscountCode2016', $ks4DiscountCode2016);
    }

    /**
     * @return string
     */
    public function getKs4DiscountCode2017()
    {
        return $this->getProperty('ks4DiscountCode2017');
    }

    /**
     * @param string $ks4DiscountCode2017
     */
    public function setKs4DiscountCode2017($ks4DiscountCode2017 = null)
    {
        $this->setProperty('ks4DiscountCode2017', $ks4DiscountCode2017);
    }

    /**
     * @return string
     */
    public function getPost16DiscountCode()
    {
        return $this->getProperty('post16DiscountCode');
    }

    /**
     * @param string $post16DiscountCode
     */
    public function setPost16DiscountCode($post16DiscountCode = null)
    {
        $this->setProperty('post16DiscountCode', $post16DiscountCode);
    }


}
