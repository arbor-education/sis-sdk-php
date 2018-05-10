<?php
/**
 * Created by PhpStorm.
 * User: djordje
 * Date: 4/13/18
 * Time: 3:22 PM
 */

require_once __DIR__ . '/example-bootstrap.php';

$date = new \DateTime();

$contracts = new \Arbor\Query\Query(Arbor\Resource\ResourceType::STAFF_CONTRACT);
$contracts->addPropertyFilter(\Arbor\Model\StaffContract::START_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, $date);
$contracts->addPropertyFilter(\Arbor\Model\StaffContract::END_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, $date);

$current_staff = \Arbor\Model\StaffContract::query($contracts);

foreach ($current_staff as $current) {
    $hydrator = new \Arbor\Model\Hydrator();
    print_r($hydrator->extractArray($current));
}