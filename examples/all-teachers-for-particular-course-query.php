<?php

require_once("../vendor/autoload.php");
require_once("../src/register_autoloader.php");
require_once(__DIR__ . "/example-bootstrap.php");

date_default_timezone_set("Europe/London");


use Arbor\Api\Gateway\RestGateway;
use Arbor\Model\ModelBase;


$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

$api->getHttpClient()->setSslVerification(false);
ModelBase::setDefaultGateway($api);


$academicUnit = '7TE-CI'; //DESIGN_TECHNOLOGY__YEAR_7__7TE-CI

$academicUnitsQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::ACADEMIC_UNIT);
$academicUnitsQuery->addPropertyFilter(\Arbor\Model\AcademicUnit::ACADEMIC_UNIT_NAME, \Arbor\Query\Query::OPERATOR_EQUALS, $academicUnit);

$academicUnits = \Arbor\Model\AcademicUnit::query($academicUnitsQuery);

foreach($academicUnits as $academicUnit)
{
    $academicUnitLeadsQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::ACADEMIC_UNIT_LEAD);
    $academicUnitLeadsQuery->addPropertyFilter(\Arbor\Model\AcademicUnitLead::ACADEMIC_UNIT, \Arbor\Query\Query::OPERATOR_EQUALS, $academicUnit);

    $academicUnitLeads = \Arbor\Model\AcademicUnitLead::query($academicUnitLeadsQuery);

    foreach($academicUnitLeads as $academicUnitLead)
    {
        echo(   $academicUnitLead->getStaff()->getPerson()->getLegalFirstName() . ' ' .
            $academicUnitLead->getStaff()->getPerson()->getLegalLastName() . ' / ' .
            $academicUnitLead->getStartDate() . ' / ' .
            $academicUnitLead->getEndDate()
        );
    }
}
