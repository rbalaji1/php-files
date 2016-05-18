<?php
    $con = mysql_connect("localhost","root","12020210749343");
    mysql_select_db("utility");
    
    $username = $_POST["username"];
    $q = mysql_query("SELECT * FROM grid WHERE username='$username'");
    while($e=mysql_fetch_assoc($q))
    $output[] = $e;
    
    print(json_encode($output));
    
    mysql_close();
    
    ?>

