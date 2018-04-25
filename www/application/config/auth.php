<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['domain'] = 'http://localhost';
$config['google-clientid'] = '273617751027-la9kguadnqbihrbjf9lgaidb4qfrr18a.apps.googleusercontent.com';
$config['google-clientsecret'] = 'bqCs-FR9ANCXx9u5Lik4Sobf';
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