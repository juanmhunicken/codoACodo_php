<?php
    echo $_POST['inputEmail']."<br>";
    echo $_POST['inputPassword']."<br>";

    require_once('../clases/database.php');
    
    $new_conn = new connection();

    $new_conn->connect();

    $query = "select * from users where user = '" . $_POST['inputEmail']. "' and password = '". $_POST['inputPassword']."'";
 
    echo $query;
    $new_conn->execute($query);
    $rowCount = $new_conn->num_lines();
    echo $rowCount;

?>
