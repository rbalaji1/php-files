<?php
//$con = mysql_connect("localhost","root","student");
    $con = mysql_connect("localhost","root","12020210749343");
    mysql_select_db("utility");

	$name = $_POST["username"];
	$apname = $_POST["appliancename"];
	$power = $_POST["power"];
	$starttime = $_POST["starttime"];
	$deadline = $_POST["deadline"];
	$runtime = $_POST["runtime"];
    $job = $_POST["job"];
    $cstart = $_POST["currentstart"];
    $cend = $_POST["currentend"];
	
	
		$result = mysql_query("INSERT INTO grid (username, appliancename, power, starttime, deadline, runtime, jobtype, currentstart, currentend) VALUES ('$name','$apname', $power, $starttime, $deadline, $runtime, '$job', $cstart, $cend)");
		if($result)
			print("true");
		else
			print("false");
	

	
mysql_close();
?>
