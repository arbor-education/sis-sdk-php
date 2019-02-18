<?php
/**
 * Created by PhpStorm.
 * User: djordje
 * Date: 2/13/19
 * Time: 4:06 PM
 */

require_once __DIR__ . '/example-bootstrap.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('POST', 'https://api-sandbox2.uk.arbor.sc/graphql/query', [
    'auth' => [
        'username', 'password' //please use your apps username and password here, same one as used in config.php
    ],
    'json' => [
        'query' => '{ BusinessRole { businessRole businessRoleName defaultUserRoles { permissionName code } } }'
        ]
]);

echo $response->getBody()->getContents();
echo $response->getStatusCode();
echo $response->getProtocolVersion();