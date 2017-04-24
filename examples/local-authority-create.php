<?php

require_once(__DIR__ . "/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use Arbor\Model\LocalAuthority;
use Guzzle\Plugin\Log\LogPlugin;
use Arbor\Model\ModelBase;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);
$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());

$country = $api->retrieve(ResourceType::COUNTRY, "GBR");

ModelBase::setDefaultGateway($api);

$model = new LocalAuthority();
$model->setName("TestAuthorotah");
$model->setShortName("AuthorotaaAah");
$model->setCountry($country);
$model->save();

//Display Logic
$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($model);
print_r($array);
