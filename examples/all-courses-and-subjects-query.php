<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use \Arbor\Query\Query;
use \Guzzle\Plugin\Log\LogPlugin;
use \Arbor\Model\AcademicUnit;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Hydrator;


$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

$api->getHttpClient()->setSslVerification(false);
ModelBase::setDefaultGateway($api);

$currentAcademicYear = $api->retrieve(ResourceType::ACADEMIC_YEAR, '2012-2013');

$academicUnitQuery = new Query(ResourceType::ACADEMIC_UNIT);
$academicUnitQuery->addPropertyFilter(AcademicUnit::ACADEMIC_YEAR, Query::OPERATOR_EQUALS, $currentAcademicYear);

$modelCollection = $api->query($academicUnitQuery);

//Display Logic
foreach($modelCollection AS $model)
{
    if($model) {
        $modelHydrator = new Hydrator();
        $array = $modelHydrator->extractArray($model);
        
        $href = $array['href'];
        $hrefElements = explode("/", $href);
        $id = $hrefElements[3];

        $academicUnitModel = $api->retrieve(ResourceType::ACADEMIC_UNIT,  $id);
        $academicUnitModelHydrator = new Hydrator();
        $academicUnitModelArray = $academicUnitModelHydrator->extractArray($academicUnitModel);

        echo $academicUnitModel->getAcademicUnitName() . ' -> ';
        $subject = $academicUnitModel->getSubject();
        if(!is_null($subject)) {
            echo "Subject property: " . $academicUnitModel->getSubject()->getSubjectName() . PHP_EOL;
        }
        else {
            echo 'NO SUBJECT RECORDS' . PHP_EOL;
        }
//        var_dump($academicUnitModel->getSubject());
    }
    else {
        echo "Error!";
    }
}
