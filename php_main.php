<?php
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
{
    "require": {
        "knplabs/github-api": "~1.4"
    }
}

require_once 'vendor/autoload.php';
$user = "viperphase1";
$org = "tmgOrganization1";
$client = new \Github\Client();
$repositories = $client->api('user')->repositories('tmgOrganization1');
print_r($repositories);
?>
