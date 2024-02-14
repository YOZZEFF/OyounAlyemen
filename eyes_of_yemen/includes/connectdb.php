<?php
define('HOSTNAME','localhost');
define('HOST_USER','root');
define('HOST_PASS','');
define('DB_NAME','eyesofyemen');

$connection=mysqli_connect(HOSTNAME,HOST_USER,HOST_PASS,DB_NAME);

if(!$connection){
    die("Connection failed:".mysqli_connect_error()."Error No:".mysqli_connect_errno());
}else{
//    echo "Connected";
}

?>