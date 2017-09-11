<?php 
include("requestformadmin.php");
include("config.php");
$pageTitle = "CLAMP Admin";
$pageDescription = "Clamp Admin";
include_once dirname(__FILE__) . '/views/header.php';


$_POST["approveStatus"]=isset($_POST["approveStatus"])?$_POST["approveStatus"]:"0";
$formDate1=isset($_POST["date1"])?$_POST["date1"]:"";
$formDate2=isset($_POST["date2"])?$_POST["date2"]:"";

$approveStatus=array(
				"0"=>" REQUEST_ID > 1 ",
				"1"=>" DOWNLOAD_TIME IS NOT NULL and DOWNLOAD_TIME <> '' ",
				"2"=>" REQUEST_APPROVED='Yes' ",
				"3"=>" REQUEST_APPROVED <> 'Yes' ",
				"4"=>" request_form.ACTIVATION_CODE = license.sn and license.act_date is not NULL "
				);

$dateStatus=array(
				"0"=>"REQUEST_TIME",
				"1"=>"DOWNLOAD_TIME",
				"2"=>"EMAIL_DATE",
				"3"=>"REQUEST_TIME",
				"4"=>"DOWNLOAD_TIME"
				);

$whereClause=" WHERE ".$approveStatus[$_POST["approveStatus"]];

$dateField=$dateStatus[$_POST["approveStatus"]];
$date1=isset($_POST["date1"]) && strlen($_POST["date1"])>0 ? " STR_TO_DATE('".$_POST["date1"]."', '%Y-%m-%d') " : " STR_TO_DATE('0000-00-00', '%Y-%m-%d') ";
$date2=isset($_POST["date2"]) && strlen($_POST["date2"])>0 ? " STR_TO_DATE('".$_POST["date2"]."', '%Y-%m-%d') " : " STR_TO_DATE('2050-00-00', '%Y-%m-%d') ";
$dateClause=$dateField." >= ".$date1." AND ".$dateField. " <= ".$date2 ;

$testClause=" ISTEST=0 ";

$whereClause.=" AND ".$dateClause." AND ".$testClause;

$from=($_POST["approveStatus"]=="4" ? " request_form, license " : " request_form ");


$field=isset($_POST["field"])?$_POST["field"]:"request_id";

$thisSwitch=isset($_POST["swtch"])?$_POST["swtch"]:"DESC";
$nextSwitch=($thisSwitch=="DESC")?"ASC":"DESC";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$count=0;
$sql = "select * from $from $whereClause order by $field $thisSwitch";

$sqlDistinctUsers="select count(distinct(EMAIL)) from $from $whereClause order by $field $thisSwitch";
var_dump($sqlDistinctUsers);
$resDistinctUsers = $conn->query($sqlDistinctUsers);
$rowDistinctUsers = $resDistinctUsers->fetch_row();
$countDistinctUsers=$rowDistinctUsers[0];


$res = $conn->query($sql);
$numRows=mysqli_num_rows($res);

$date1="<input id=\"date1\" name=\"date1\" type=\"text\" class=\"DatePicker\" alt=\"{
			dayChars:3,
			dayNames:['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			daysInMonth:[31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
			format:'yyyy-mm-dd',
			monthNames:['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			startDay:1,
			yearOrder:'desc',
			yearRange:15,
			yearStart:2025
		}\" tabindex=\"1\" value=\"".$formDate1."\" />";

$date2="<input id=\"date2\" name=\"date2\" type=\"text\" class=\"DatePicker\" alt=\"{
			dayChars:3,
			dayNames:['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			daysInMonth:[31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
			format:'yyyy-mm-dd',
			monthNames:['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			startDay:1,
			yearOrder:'desc',
			yearRange:15,
			yearStart:2025
		}\" tabindex=\"1\" value=\"".$formDate2."\" />";






			
?>
<form name="ord" action="" method="post">


			
<table width='100%' height='70%'><tr><td align='middle' valign='top'><p>
<table border='1' class='table table-hover' style='width:50%;'>
<tr><td align='left' valign='top' colspan='9' style='font-weight:bold' bgcolor='E6E6FA'>
			<table>
			<tr><td>Approve Status : &nbsp; <select name='approveStatus'>
			<option value='0' <?php echo($_POST["approveStatus"]=="0" ? "selected":"")?>>All</option>
			<option value='1' <?php echo($_POST["approveStatus"]=="1" ? "selected":"")?>>Downloaded</option>
			<option value='2' <?php echo($_POST["approveStatus"]=="2" ? "selected":"")?>>Request Approved</option>
			<option value='3' <?php echo($_POST["approveStatus"]=="3" ? "selected":"")?>>Pending for Approval</option>
			<option value='4' <?php echo($_POST["approveStatus"]=="4" ? "selected":"")?>>Activated</option>
			</select> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>Date : &nbsp; </td>
			<td>(</td><td><?php echo $date1?></td><td> &nbsp; - &nbsp; </td><td><?php echo $date2?></td><td>)</td>
			<td> &nbsp; &nbsp; &nbsp; <input type='submit' value='SEARCH'/></td>
			<td> &nbsp; &nbsp; &nbsp; [ <?php echo $numRows?>  Users ] &nbsp; &nbsp; &nbsp; [ <?php echo $countDistinctUsers?>  Unique Users ]</td>
			</tr>
			</table>
			</td></tr>
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
						<td >".$count."</td><td >".$row['FIRST_NAME']."</td>
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
function orderer(swt,fld){
	document.ord.swtch.value=swt;
	document.ord.field.value=fld;
	document.ord.submit();
}
</script>

<input type="hidden" name="swtch" value="DESC">
<input type="hidden" name="field" value="request_id">
<input type="hidden" name="REQUEST_APPROVED" value="">
</form>

<?php 

$conn->close();

include_once dirname(__FILE__) . '/views/footer.php';
?>