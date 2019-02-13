<?php

require_once __DIR__ . '/example-bootstrap.php';

$results = \Arbor\Model\LocalAuthority::query(
    new \Arbor\Query\Query(
        null,
        [],
        [
            ['tagName' => 'colour', 'value' => 'green']
            //['tagName' => null, 'value' => null]
        ]
    )
);

foreach ($results as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    $array = $hydrator->extractArray($model);
    print_r($array);
    print_r($model->getUserTags());
}
