<?php
require_once 'vendor/autoload.php';
 
$config = [
    'callback' => 'http://localhost/test-login-sofia/login-register/login-register/SABORES%20COLOMBIA/pantallainicio.php',
    'keys'     => ['key' => '8DCQjUnWqlh3EPRdEzNN98GKE', 'secret' => '4w4LjThJgq707zKRXXnNlHwClZ7LMun2VI6uBQmHbihF9Z27Rq'],
    'authorize' => true
];
 
$adapter = new Hybridauth\Provider\Twitter( $config );