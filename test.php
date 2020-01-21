<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'system101'; // use 'sandbox' for development in the test environment
$apiKey   = 'd7bd20e85bef94a2988719242906702d946e9767d707b10fac8063273b08cf84'; // use your sandbox app API key for development in the test environment
$AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms      = $AT->sms();

// Use the service
$result   = $sms->send([
    'to'      => '+254723740215',
    'message' => 'Hello World!'
]);

//print_r($result);