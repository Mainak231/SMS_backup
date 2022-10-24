<?php 
    
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbName="schoolmanagementportaldb";

    $db_conn = mysqli_connect($servername,$username,$password,$dbName);

    if(!$db_conn)
    {
        echo 'Connection failed';
        exit;
    }

?>