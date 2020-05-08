<?php

require_once __DIR__ . '/example-bootstrap.php';

$models = new \Arbor\Query\Query(Arbor\Resource\UkDfe\ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT);
$student = \Arbor\Model\Student::retrieve(77);

$pupilPremium = new \Arbor\Model\UkDfe\EarlyYearsPupilPremiumRecipient();
$pupilPremium->setStudent($student);
$pupilPremium->setStartDate(new DateTime());
$pupilPremium->setEndDate(new DateTime());
$pupilPremium->setRecipientForEconomicReasons(true);
$pupilPremium->setRecipientForOtherReasons(false);
$pupilPremium->connect($api);
$pupilPremium->save();

$br = $api->retrieve(
    Arbor\Resource\UkDfe\ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT,
    $pupilPremium->getResourceId()
);

$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($br));
