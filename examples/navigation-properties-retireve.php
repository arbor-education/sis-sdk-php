<?php
/**
 * Demonstrates how a collection of related models can be retrieved
 */
require_once(__DIR__."/example-bootstrap.php");

use Arbor\Api\Gateway\RestGateway;
use Arbor\Resource\ResourceType;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

/**@var \Arbor\Model\AcademicUnit $model*/
$model = $api->retrieve(ResourceType::ACADEMIC_UNIT, 1);

$cohortCollection = $model->getAcademicUnitCohorts();

//Display Logic
echo "Cohort count = ".$cohortCollection->count()."\n";
//print_r($model);
foreach ($cohortCollection as $index => $cohort) {
    echo "Cohort $index name: ".$cohort->getCohortName()."\n";
    //print_r($cohort);
}
