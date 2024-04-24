<?php

//logout.php

include('config-google.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index-google.php');

?>