<?php
    $con = mysql_connect("localhost","root","12020210749343");
    mysql_select_db("package");
    
    
    $trackno = $_POST["trackno"];
    $username = $_POST["username"];
    
    mysql_query("UPDATE packages SET username='$username' WHERE trackno='$trackno'");
    $q = mysql_query("SELECT * FROM packages WHERE trackno='$trackno'");
    while($e=mysql_fetch_assoc($q))
    $output[] = $e;
    
    print(json_encode($output));
    
    mysql_close();
    
    ?>

