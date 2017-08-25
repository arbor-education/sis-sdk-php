<?php

require_once __DIR__ . '/example-bootstrap.php';

$changes = $api->getChanges(\Arbor\Resource\ResourceType::STUDENT, 43322);

foreach ($changes as $change) {
    printf(
        'Object: %s, ID: %s has been %sd%s',
        $change->getChangedResource()->getResourceType(),
        $change->getChangedResource()->getResourceId(),
        $change->getChangeType(),
        PHP_EOL
    );
}
