<?php
require("vendor/autoload.php");

$openapi = \OpenApi\Generator::scan(['/var/www/html/vapi']);

header('Content-Type: application/x-yaml');
echo $openapi->toYaml();

