<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use \Arbor\Query\Query;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Student;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

ModelBase::setDefaultGateway($api);

$ethnicity = $api->retrieve(ResourceType::ETHNICITY, "AAFR");

$query = new Query();
$query->addPropertyFilter("ethnicity", Query::OPERATOR_EQUALS, $ethnicity);

$modelCollection = Student::query($query);

$hydrator = new \Arbor\Model\Hydrator();
//Display Logic
foreach ($modelCollection as $model) {
    $array = $hydrator->extractArray($model);
    print_r($array);
}
