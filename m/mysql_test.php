<?php
error_reporting(E_ALL | E_STRICT);

$host = '110.234.2.227';
$user = 'sususoft';
$pass = 'SuSu0514!@';
$dbConn = mysql_connect($host, $user, $pass);

$dbName = 'sususoft_dilri_db';
mysql_select_db($dbName);
//print_r($dbConn);
$sql = 'SELECT * FROM tbl_notice  ';
$qry = mysql_query($sql);
if ($qry) {
}


$num = mysql_num_rows($qry);echo "총 데이터: ".$num."<br>";


while ($row = mysql_fetch_array($qry)) {
	echo $row[1]."<br>";

}
?>
