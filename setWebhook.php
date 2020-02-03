<?php

const TOKEN     = 'YourToken';

$method = 'setWebhook';

$url = 'https://api.telegram.org/bot' . TOKEN . '/' . $method;

$options = [
    'url' => 'http://yourDomain/',
];

$response = file_get_contents($url . '?' . http_build_query($options));
