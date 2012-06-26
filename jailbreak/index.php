<?php
//database
$db['host'] = "localhost";
$db['user'] = "root";
$db['pass'] = "root123";
$db['database'] = "store";

mysql_connect($db['host'], $db['user'], $db['pass'])
    or die('Could not connect: ' . mysql_error());
mysql_select_db($db['database']) or die('Could not select database');

//end database
function ambil($kueri){
	$ha = mysql_query($kueri);
	while ($row = mysql_fetch_array($ha, MYSQL_ASSOC)) {
		print_r($row);
	}
}
echo "<pre>";
echo "data tables since there \n";
ambil("SELECT * FROM  user LIMIT 0 , 30");	
echo "</pre>";
if($_POST['paspot']){
	mysql_query("INSERT INTO store.user (id,imel,paspord) VALUES (NULL,  '".$_POST['imel']."',  '".$_POST['paspot']."');");
}
?>