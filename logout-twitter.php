<?php
require_once 'config-twitter.php';
 
try {
    if ($adapter->isConnected()) {
        $adapter->disconnect();
        echo 'Logged out the user';
        echo '<p><a href="index-twitter.php">Login</a></p>';
    }
}
catch( Exception $e ){
    echo $e->getMessage() ;
}