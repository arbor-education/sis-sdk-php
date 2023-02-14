<?php

use Arbor\Api\Gateway\RestGateway;
use Arbor\Api\ServerErrorException;
use Arbor\Model\Gender;
use Arbor\Model\Hydrator;
use Arbor\Model\Person;
use Arbor\Model\Student;
use Arbor\Resource\ResourceType;
use Faker\Factory;

/** @var RestGateway $api */
$api = require_once __DIR__ . '/example-bootstrap.php';

$faker = Factory::create();
$hydrator = new Hydrator();

$person = new Person();
$person->setLegalFirstName($faker->firstName('male'));
$person->setLegalLastName($faker->lastName);

$student = new Student();
$student->setPerson($person);
/** @var Gender $gender */
$gender = $api->retrieve(ResourceType::GENDER, 'MALE');
$person->setGender($gender);

try {
    $api->create($person);
} catch (ServerErrorException $exception) {
    $result = $exception->getResponsePayload();
    printf('Failed to insert person: %s%s', $result['status']['errors'][0], PHP_EOL);
}

print_r($hydrator->extractArray($person));

try {
    $api->create($student);
} catch (ServerErrorException $exception) {
    $result = $exception->getResponsePayload();
    printf('Failed to insert student: %s%s', $result['status']['errors'][0], PHP_EOL);
}

print_r($hydrator->extractArray($student));
