<?php

require_once __DIR__ . '/example-bootstrap.php';

/** @var \Arbor\Model\LocalAuthority $model */
$model = $api->retrieve(\Arbor\Resource\ResourceType::LOCAL_AUTHORITY, '001');
$model->setShortName('Test');
$model->tag('colour', 'green');
$model->save();

$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($model));
