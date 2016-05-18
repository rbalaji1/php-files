<?php
    //$con = mysql_connect("localhost","root","student");
    $con = mysql_connect("localhost","root","12020210749343");
    
    mysql_select_db("utility");
    
    
    $name = $_POST["username"];
    $usstarttime = $_POST["usstarttime"];
    $appliancename = $_POST["appliancename"];
    
    
    
    $result = mysql_query("UPDATE grid SET usstarttime = '$usstarttime' where appliancename='$appliancename' AND username='$name'");
    
    // $result = mysql_query("UPDATE grid SET power='100', starttime='100', deadline='100', runtime='100' where appliancename='dryer' AND username='r'");
    if($result)
    print("true");
    else
    print("false");
    
    
    mysql_close();
    ?>
