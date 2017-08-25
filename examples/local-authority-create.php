<?php

require_once __DIR__ . '/example-bootstrap.php';

$country = $api->retrieve(\Arbor\Resource\ResourceType::COUNTRY, 'GBR');

$model = new \Arbor\Model\LocalAuthority();
$model->setName('Test Local Authority');
$model->setCode('001');
$model->setCountry($country);
$model->save();

$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($model);
print_r($array);
