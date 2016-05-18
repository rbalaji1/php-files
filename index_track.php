<?php
mysql_connect("localhost","root","12020210749343");
mysql_select_db("package");

if( $_POST["request"] == "package" )
{

	//the following query loads all the tables in the particular database "world".
	$q=mysql_query("SELECT DISTINCT TABLE_NAME FROM INFORMATION_SCHEMA.COLUMNS where TABLE_SCHEMA= 'package'");

	while($e=mysql_fetch_assoc($q))
			$output[]=$e;
}

else if ( $_POST["request"] == "packages" )	 
{
		$q=mysql_query("SELECT * FROM ".$_REQUEST['packages']."");
		while($e=mysql_fetch_assoc($q))
			$output[]=$e;
		
}

print(json_encode($output));
mysql_close();
?>
