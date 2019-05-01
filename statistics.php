<?php
include("config.php");

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$organizationCountSQL = "select count(DISTINCT(ORGANIZATION)) as org from request_form where REQUEST_TIME is not null";
$userCountSQL = "select count(DISTINCT(EMAIL)) as usr from request_form where REQUEST_TIME is not null";
$requestCountWithMonths = "SELECT MONTH(REQUEST_TIME) as month , YEAR(REQUEST_TIME) as year, COUNT(REQUEST_TIME) as count from request_form where REQUEST_TIME is not null GROUP BY MONTH(REQUEST_TIME),YEAR(REQUEST_TIME) ORDER BY YEAR(REQUEST_TIME),MONTH(REQUEST_TIME)"; 

//sql-query: select DISTINCT(ORGANIZATION) as org from request_form, license WHERE request_form.ACTIVATION_CODE = license.sn and license.act_date is not NULL AND (CLAMP_VERSION IS NOT NULL) AND DOWNLOAD_TIME >= STR_TO_DATE('0000-00-00', '%Y-%m-%d') AND DOWNLOAD_TIME <= STR_TO_DATE('2050-00-00', '%Y-%m-%d') AND ISTEST=0 and lower(SYSTEM_USER) = 'yes';
//select organizations with consent: "yes" for using there names.

$res = $conn->query($organizationCountSQL);
$row = $res->fetch_assoc();


/* ORGANIZATION COUNT*/
$organizationCount=$row['org'];


$res = $conn->query($userCountSQL);
$row = $res->fetch_assoc();


/* USER COUNT*/
$userCount=$row['usr'];

//echo $userCount ." - ".$organizationCount

$res = $conn->query($requestCountWithMonths);
while ($row = $res->fetch_assoc()) {
	//printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}



?>
