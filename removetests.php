<?php 
include("requestformadmin.php");
include("config.php");
$pageTitle = "CLAMP Admin";
$pageDescription = "Clamp Admin";
include_once dirname(__FILE__) . '/views/header.php';



$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from request_form where ISTEST=0";



$res = $conn->query($sql);



			
?>
<form name="ord" action="" method="post">


			
<table width='100%' height='70%'><tr><td align='middle' valign='top'><p>
<table border='1' class='table table-hover' style='width:50%;'>
<?php 
echo "<tr style='cursor: pointer; background-color: #0f0f0f; color: #ffffff'><td>#</td>
		<td onclick=javascript:orderer('".$nextSwitch."','FIRST_NAME')>FIRST NAME</td>
		<td onclick=javascript:orderer('".$nextSwitch."','LAST_NAME')>LAST NAME</td>
		<td onclick=javascript:orderer('".$nextSwitch."','EMAIL')>EMAIL</td>
		<td onclick=javascript:orderer('".$nextSwitch."','CLAMP_VERSION')>CLAMP VERSION</td>
		<td onclick=javascript:orderer('".$nextSwitch."','REQUEST_TIME')>REQUEST TIME</td>
		<td onclick=javascript:orderer('".$nextSwitch."','REQUEST_APPROVED')>APPROVED</td>
		<td onclick=javascript:orderer('".$nextSwitch."','DOWNLOAD_TIME')>DOWNLOAD TIME</td>
		<td >NOTES</td><tr>";
while($row = $res->fetch_assoc()) {
	$count++;
	$approved=$row['REQUEST_APPROVED']=="Yes" ? "&#10004":"&nbsp;";
						
	echo "<tr style='cursor: pointer;' onclick=\"location.href='details.php?id=".$row['REQUEST_ID']."'\">
						<td><input type=button value='Move to Test' onclick='removerequest(".$row['NOTE'].")'></td><td >".$count."</td><td >".$row['FIRST_NAME']."</td>
						<td>".$row['LAST_NAME']."</td>
						<td>".$row['EMAIL']."</td>
						<td>".$row['CLAMP_VERSION']."</td>
						<td>".$row['REQUEST_TIME']."</td>
						<td>".$approved."</td>
						<td>".$row['DOWNLOAD_TIME']."</td>
						<td>".$row['NOTE']."</td><tr>";
}
echo "</table>";
echo "</td></tr></table>";

?>
<script>
function removerequest(id){
	document.ord.removeid=id;
	document.ord.submit();
}
</script>

<input type="hidden" name="submitted" value="1">
<input type="hidden" name="removeid" value="">
<input type="hidden" name="REQUEST_APPROVED" value="">
</form>

<?php 

$conn->close();

include_once dirname(__FILE__) . '/views/footer.php';
?>