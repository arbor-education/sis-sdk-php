<?php

require_once __DIR__ . '/example-bootstrap.php';

$model = \Arbor\Model\Student::retrieve(1);
$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($model));
