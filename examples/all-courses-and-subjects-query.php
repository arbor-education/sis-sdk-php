<?php

require_once __DIR__ . '/example-bootstrap.php';

$currentAcademicYear = $api->retrieve(Arbor\Resource\ResourceType::ACADEMIC_YEAR, '2016-2017');
$academicUnitQuery = new Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_UNIT);
$academicUnitQuery->addPropertyFilter(Arbor\Model\AcademicUnit::ACADEMIC_YEAR, Arbor\Query\Query::OPERATOR_EQUALS, $currentAcademicYear);

foreach ($api->query($academicUnitQuery) as $model) {
    $modelHydrator = new Arbor\Model\Hydrator();
    $array = $modelHydrator->extractArray($model);
    list(, , , $id) = explode('/', $array['href']);

    /** @var Arbor\Model\AcademicUnit $academicUnitModel */
    $academicUnitModel = $api->retrieve(Arbor\Resource\ResourceType::ACADEMIC_UNIT, $id);
    $academicUnitModelHydrator = new Arbor\Model\Hydrator();
    $academicUnitModelArray = $academicUnitModelHydrator->extractArray($academicUnitModel);

    printf(
        'Academic Unit: %s -> Subject: %s%s',
        $academicUnitModel->getAcademicUnitName(),
        ($subject = $academicUnitModel->getSubject()) ? $subject->getSubjectName() : 'None',
        PHP_EOL
    );
}
