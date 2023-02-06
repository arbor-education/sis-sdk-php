<?php

use Arbor\Api\Gateway\RestGateway;
use Arbor\Api\ServerErrorException;
use Arbor\Model\Collection;
use Arbor\Model\Hydrator;
use Arbor\Model\Person;
use Arbor\Model\Student;
use Arbor\Resource\ResourceType;
use Faker\Factory;

/** @var RestGateway $api */
$api = require_once __DIR__ . '/example-bootstrap.php';

$faker = Factory::create();
$hydrator = new Hydrator();

/** @var Collection|Person[] $persons */
$persons = new Collection();
/** @var Collection|Student[] $students */
$students = new Collection();

foreach (range(0, 3) as $id) {
    $person = new Person();
    $person->setLegalFirstName($faker->firstName);
    $person->setLegalLastName($faker->lastName);
    $persons->add($person);

    $student = new Student();
    $student->setPerson($person);
    $students->add($student);
}

try {
    $api->bulkCreate(ResourceType::PERSON, $persons);
} catch (ServerErrorException $exception) {
    foreach ($exception->getResponsePayload()['results'] as $key => $result) {
        if (!$result['status']['success']) {
            printf('Failed to insert person: %s%s', $result['status']['errors'][0], PHP_EOL);
            print_r($hydrator->extractArray($persons[$key]));
        }
    }
}

try {
    $api->bulkCreate(ResourceType::STUDENT, $students);
} catch (ServerErrorException $exception) {
    foreach ($exception->getResponsePayload()['results'] as $key => $result) {
        if (!$result['status']['success']) {
            printf('Failed to insert student: %s%s', $result['status']['errors'][0], PHP_EOL);
            print_r($hydrator->extractArray($students[$key]));
        }
    }
}
