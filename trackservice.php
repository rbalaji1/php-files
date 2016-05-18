<?php
mysql_connect("localhost","root","12020210749343");

mysql_select_db("users");

//$usr=$_POST["username"];
mysql_select_db("package");


//do{

		$q=mysql_query("SELECT status FROM packages WHERE username = 'r'");

		while($e=mysql_fetch_assoc($q))
			print($e["status"]);
			//$output[]=$e;
		
//print($output);
//print(json_encode($output));
mysql_close();
?>
