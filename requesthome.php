<?php
    $con = mysql_connect("localhost","root","12020210749343");
    
    mysql_select_db("utility");
    
    $username = $_POST["username"];
    
    $q = mysql_query("UPDATE grid SET commitstat=1 WHERE username = '$username'");
    
    if($q)
    print("true");
    else
    print("false");
    
    mysql_close();
    
    ?>

