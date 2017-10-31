<?php

require_once __DIR__ . '/example-bootstrap.php';

/**@var \Arbor\Model\AcademicUnit $model */
$model = $api->retrieve(\Arbor\Resource\ResourceType::ACADEMIC_UNIT, 2573);

$cohortCollection = $model->getAcademicUnitCohorts();

foreach ($cohortCollection as $index => $cohort) {
    printf(
        'Cohort #%d: %s%s',
        $index + 1,
        $cohort->getCohortName(),
        PHP_EOL
    );
}
