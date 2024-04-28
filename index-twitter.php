<?php
require_once 'config-twitter.php';
 
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    echo"<pre>";print_r($userProfile);echo"</echo>";
    echo '<a href="logout-twitter.php">Logout</a>';
}
catch( Exception $e ){
    echo $e->getMessage() ;
}