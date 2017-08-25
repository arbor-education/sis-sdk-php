<?php

require_once __DIR__ . '/example-bootstrap.php';

$model = \Arbor\Model\Student::retrieve(1);
$serialized = serialize($model);

echo "Serialized:\n";
echo $serialized . "\n\n";
echo "Unserialized:\n";

$model2 = unserialize($serialized);
$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($model2);
print_r($hydrator->extractArray($model2));
