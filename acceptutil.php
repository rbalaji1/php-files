<?php
    $con = mysql_connect("localhost","root","12020210749343");
    
    mysql_select_db("utility");
    
    $username = $_POST["username"];
    $apname = $_POST["appliancename"];
    $start = $_POST["currentstart"];
    $end = $_POST["currentend"];
    
    $q = mysql_query("UPDATE grid SET currentstart='$start', currentend='$end' WHERE username = '$username' AND appliancename='$apname'");
    
    if($q)
    print("true");
    else
    print("false");
    
    mysql_close();
    
    ?>

