# Arbor SDK

Arbor Education SDK library

## Introduction

PHP SDK is a library which simplifies the process of integrating the Arbor REST API with your own software.

Rather than handling XML and making HTTP requests in your code, you can simply include the SDK and use getters and setters on models in order to access data from Arbor. PHP SDK includes hundreds of models as well as a gateway pattern for querying the API via a query model.

## Requirements

* PHP 7.1 or higher
* [Composer](https://getcomposer.org/download)

## Installation

Simply download the project and run `composer install` from the root of the project to use as standalone for testing purposes. 

Find the latest version on Packagist [Arbor Education - PHP SDK](https://packagist.org/packages/arbor-education/arbor-sdk-php)  and install it with composer directly in your project `composer require arbor-education/arbor-sdk-php`

Once setup use the `examples/config-dist.php` to create your own config. For this you will need your apps credentials added on [Arbor Education - Developers Portal](https://developers-portal.arbor.sc) in order to be able to make requests to a sandbox environment. 

## Usage

In the `examples/example-bootstrap` you will find the configuration needed to make requests, either using it directly from `examples/config.php` or using your own configuration. The entire `examples` directory is focused on helping you develop your app faster. Scripts written represent some of the most frequently used queries.

## Example

Use `Arbor\Api\Gateway\RestGateway` to make GET, POST, PUT and DELETE requests and use `Arbor\Query\Query` to add filters to your requests. 

#### GET request:
```php
$student = \Arbor\Model\Student::retrieve(16);
```
or use [examples/student-retrieve.php](https://github.com/arbor-education/sis-sdk-php/blob/master/examples/student-retrieve.php) to see how to retrieve a record.

#### POST request:

use [examples/staff-create.php](https://github.com/arbor-education/sis-sdk-php/blob/master/examples/staff-create.php) to see how to create a new record.

#### PUT request: 

use [examples/staff-create.php](https://github.com/arbor-education/sis-sdk-php/blob/master/examples/staff-update.php) to see how to update an existing record.

#### DELETE request:

```php
$api->delete($staff->getPerson()); // assuming that you are deleting your newly created staff record
```

#### Query filters: 
List of filters can be found in `Arbor\Query\Query`

```php
$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ARBOR_MODEL);
$query->addPropertyFilter(ArborModel::PROPERTY_NAME, OPERATOR, $value);
$query->addPropertyFilter(ArborModel::PROPERTY_NAME, SECOND_OPERATOR, $value);
... 

$records = \Arbor\Model\ArborModel::query($query); // will return an array of records

foreach ($records as $record) {
    // e.g. $record->getDisplayName();
}
```
Check `examples` directory to see usages of filters.
