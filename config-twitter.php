<?php
require_once 'vendor/autoload.php';
 
$config = [
    'callback' => 'http://localhost/test-login-sofia/login-register/login-register/SABORES%20COLOMBIA/pantallainicio.php',
    'keys'     => ['key' => '9YMipVHrCQ2Kx99vinullzn3J', 'secret' => 'LqP7bN2XhkU4Jb5B9TaApCq14aOhzDjv1T6BQRB2Aet9184qV2'],
    'authorize' => true
];
 
$adapter = new Hybridauth\Provider\Twitter( $config );