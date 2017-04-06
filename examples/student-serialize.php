<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Student;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

ModelBase::setDefaultGateway($api);

$model = Student::retrieve(1);
$serialized = serialize($model);

echo "Serialized:\n";
echo $serialized ."\n\n";
echo "Unserialized:\n";

$model2 = unserialize($serialized);

//Display Logic
$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($model2);
print_r($array);
