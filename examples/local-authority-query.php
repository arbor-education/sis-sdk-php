<?php
require_once(__DIR__ . "/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\UkDfe\ResourceType;
use Guzzle\Plugin\Log\LogPlugin;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Model\LocalAuthority;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

ModelBase::setDefaultGateway($api);

/* Setup some random tags values
$results = LocalAuthority::query(new Query());

$colours = array(1=>"blue", 2=>"yellow", 3=>"green");

foreach($results AS $model)
{
    $randColor = $colours[rand(1,3)];
    $model->tag("colour", $randColor);
    $model->save();
}
*/

$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());
$results = LocalAuthority::query(
    new Query(
        null,
        array(),
        array(array("tagName"=>"colour", "value"=>"green"))
    )
);

//Display Logic
foreach($results AS $model)
{
    /**@var LocalAuthority $model*/
    $hydrator = new \Arbor\Model\Hydrator();
    $array = $hydrator->extractArray($model);
    print_r($array);
    print_r($model->getUserTags());
}

