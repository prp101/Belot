<?php
	$mysql_hostname = getenv('OPENSHIFT_MYSQL_DB_HOST');
	$mysql_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$mysql_password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	$mysql_database = "belot";
	$prefix = "";

	//Spajanje na bazu
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Nemere");
	mysql_select_db($mysql_database, $bd) or die("Could not select database");
	
	if(isset($_POST["teamregister"])){
		$tmu = $_POST["teamregister"];
		$tme = $_POST["tme"];
		$tn1 = $_POST["tn1"];
		$tn2 = $_POST["tn2"];
	    $tmn = $_POST["tmn"];
	    $tbm = $_POST["tbm"];
	    $ts1 = $_POST["ts1"];
		$activated = 0;
		$sql="INSERT INTO `Teams` (username, teamName, email, igrac1, igrac2, brojMob, passwd, activated) VALUES ('$tmu', '$tmn', '$tme','$tn1', '$tn2', '$tbm', '$ts1', '$activated')";
		if (mysql_query($sql)){
			echo "1";	
			exit();
		} else{
			echo "2";	
			exit();			
		}
	}
?>	