<?php
mysql_connect("localhost","root","12020210749343");

mysql_select_db("users");

$usr=$_POST["username"];
mysql_select_db("package");


mysql_query("UPDATE packages SET username=NULL WHERE username = 'r'");
		
mysql_close();
?>
