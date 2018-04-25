<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['domain'] = 'http://bluetape.herokuapp.com';
$config['google-clientid'] = '719458144692-93mqg3kkrbveqv53bufoaneh07tmfqhq.apps.googleusercontent.com';
$config['google-clientsecret'] = 'mlg-sFVIL9qmrUjCJF20bq_Y';
$config['google-redirecturi'] = $config['domain'] . '/auth/oauth2callback';

$config['email-config'] = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'xxx',
    'smtp_pass' => 'xxx',
    'mailtype' => 'html',
    'charset' => 'iso-8859-1'
);