<?php
    $con = mysql_connect("localhost","root","12020210749343");
    
    mysql_select_db("utility");
    
    $appliancename = $_POST["appliancename"];
    $username = $_POST["username"];

    $q = mysql_query("DELETE from grid WHERE username='$username' AND appliancename='$appliancename'");
    
    if($q)
        print("true");
    else
    print("false");
    
    mysql_close();
    
    ?>

