<?php
include ("requestformadmin.php");
include ("config.php");
require 'PHPMailerAutoload.php';
global $sqlString;

$now=strtotime("today");
$start_date = strtotime("27 February 2017");
do{
	$start_date = strtotime("next Monday",strtotime("next Monday",$start_date));
} while($start_date < $now || (($start_date==$now) && date("H")>="12"));


$mailTemplate="";
$id = $_GET ['id'];
$conn = new mysqli ( $host, $username, $password, $db );

if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}

$sql = "select * from request_form where request_id=" . $id;
$res = $conn->query ( $sql );
$row = $res->fetch_assoc ();

$nextRecordSql="SELECT MIN(REQUEST_ID) FROM request_form WHERE REQUEST_ID>".$id;
$previousRecordSql="SELECT MAX(REQUEST_ID) FROM request_form WHERE REQUEST_ID<".$id;

$nextRes=$conn->query($nextRecordSql);
$previousRes=$conn->query($previousRecordSql);

$nextRow = mysqli_fetch_row($nextRes);
$previousRow = mysqli_fetch_row($previousRes);

$nextId=$nextRow[0]>0?$nextRow[0]:$id;
$previousId=$previousRow[0]>0?$previousRow[0]:$id;


$submitted=false;
$activationMail=false;
	
	if(isset($_POST["approverName"])){
		$sqlString.=",ACTIVATION_SENT_BY='".$_POST['approverName'].
					"',VERSION='".$_POST['clampVersion'].
					"',REQUEST_APPROVED='Yes".
					"',EMAIL_SENT='Yes".
					"',EMAIL_DATE=NOW()".
					",EMAIL_SENT_BY='Automated".
					"',ACTIVATION_CODE='".$_POST['activationCode']."'";
		$submitted=true;
		$activationMail=true;
		//var_dump($sqlString);
	}
	elseif (isset($_POST["notes"])){
		$sqlString.=",NOTE='".$_POST['notes']."'";
		$submitted=true;
		//var_dump($sqlString);
	}
	elseif (isset($_POST["mailBody"])){
		sendPlainMailToUser($_POST['mailTo'],$_POST['mailSubject'],$_POST['mailBody']);
	}


	
	if($submitted){
		$sqlString=substr($sqlString,1);
		$sql = "UPDATE request_form SET ".$sqlString." WHERE REQUEST_ID=".$_POST["id"];
		//var_dump($sql);
		$conn->query($sql);
		if($activationMail){
			
			//$mb=getUserMailBody($_POST["id"],$row["FIRST_NAME"],$_POST["months"],$row["VRS"],$row["EMAIL"],$_POST['activationCode'],$start_date);
			$mb=$_POST["inputTextArea"];
			sendMailToUser($row["EMAIL"],"CLAMP download link and activation code",$mb);
		}
				
	}

$pageTitle = "CLAMP Admin";
$pageDescription = "CLAMP ADMIN";
include_once dirname ( __FILE__ ) . '/views/header.php';




function sendMailToUser($to,$subject,$body){
	
	$mail = new PHPMailer;
	$mail->isSMTP();
    	$mail->Host = 'smtp.uth.tmc.edu';
    	$mail->SMTPAuth = false;
    	$mail->Port = 25;
    	$mail->setFrom('clampnlp@gmail.com');
    	$mail->addAddress($to);
    	$mail->addReplyTo('clampnlp@gmail.com');
    	$mail->isHTML(true);
    	$mail->Subject = $subject;
    	$mail->Body = $body;
    	
	if($mail->send()){
		echo "<script>alert('Mail is accepted for delivery')</script>";
	}
	else{
		echo "<script>alert('There was a problem sending the mail')</script>";
	}
}


function sendPlainMailToUser($to,$subject,$body){
	
	$mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.uth.tmc.edu';
        $mail->SMTPAuth = false;
        $mail->Port = 25;
        $mail->setFrom('clampnlp@gmail.com');
        $mail->addAddress($to);
        $mail->addReplyTo('clampnlp@gmail.com');
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;

	if($mail->send()){
		echo "<script>alert('Mail is accepted for delivery')</script>";
	}
	else{
		echo "<script>alert('There was a problem sending the mail')</script>";
	}
}

function getUserMailBody($id,$name,$months,$v,$email,$code,$start_date,$cvrs){
	$mailBody="<html>
	<head></head>
	<body><table cellpadding='10' cellspacing='10'><tr><td>
	Dear $name,<br><br>
 
Thank you for your interest in the CLAMP software.<br>

Please use the link provided below to download $cvrs :<br><br>
 
<a href='http://clamp.uth.edu/download.php?v=$v&email=$email&id=$id'>http://clamp.uth.edu/download.php?v=$v&email=$email&id=$id </a> <br><br>
 
The activation code is <b>$code</b> <br><br>
 
Please note that the activation code will work for only one instance of CLAMP and will be valid for a $months month period only.  <br>

You will need to re-apply and renew your license for CLAMP annually. <br><br>
 
Please contact us if you have questions or would like to provide feedback at <a href='http://clamp.uth.edu/support.php'>http://clamp.uth.edu/support.php</a> <br>
 
We will have CLAMP office hour on Mondays, every alternating week starting February 27th, 2017  at 11.00 am (CST). The next CLAMP office hour is on ".date("F dS , Y",$start_date).", 11.00 am -12.00 noon (CST).<br>
		
Please join us if you require help to use or have questions regarding CLAMP.  The call-in information is provided below: <br>
 
Please join the meeting from your computer, tablet or smartphone. <a target='_blank' href='https://global.gotomeeting.com/join/379685837'>GoToMeeting</a> <br>
 
You can also dial in using your phone. <br>
United States: +1 (872) 240-3311 <br>
Access Code: 379-685-837 <br>
 <br>
Thanks<br>
 
<b>The CLAMP team</b><br>
</td></tr></table>
</body>
</html>
 ";
	return $mailBody;
}

?>
<script type="text/javascript">
    function process() {

      //hljs.initHighlightingOnLoad();
     

      var xmlhttp;
      if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
        if (xmlhttp.overrideMimeType) {
          xmlhttp.overrideMimeType('text/plain');
        }
      } else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
		 
      var lt = "3";
//       radios = document.getElementsByName("lt");
//       for (var i = 0; i < radios.length; i++) {
//         if (radios[i].checked) {
//           lt = radios[i].value;
//         }
//       }

	  // get licensed months
      var months = "0";
	 if(lt=="3")
	 {
		months = document.getElementById("plaintext").value;
		 if (months.length == 0) {
        document.getElementById("output").innerHTML = "Nothing entered.";
        return;
      }
	 }
	 
	 var pwds="";
	 pwds = document.getElementById("pwd").value;
		 if (pwds.length == 0) {
        document.getElementById("output").innerHTML = "Please Input Correct Password.";
        return;
      }
		 
	 var vrs="";
	 vrs=document.getElementById("vrs").value;
	 if (vrs.length == 0) { 
	        document.getElementById("output").innerHTML = "Please Input Clamp Version.";
	        return;
	 }
	  
      xmlhttp.onreadystatechange = function () {
          //alert(xmlhttp.readyState);
        if (xmlhttp.readyState == 4) {
          var output;
          //alert(xmlhttp.status);
          if (xmlhttp.status == 200) {
            output = xmlhttp.responseText;
              document.getElementById("output").innerHTML = output;
              
          } else {
          //  output = xmlhttp.status + ", " + xmlhttp.readyState + ", "
          //     + xmlhttp.statusText;
          //  document.getElementById("output").innerHTML = output;
		  output="error" +xmlhttp.status + ".html";
		  $("#output").load(output); 
          }
        } else {
          document.getElementById("output").innerHTML = "Request sent. Processing<br />";
        }
      };

      var poststring = "http://clamp.uth.edu/licensemgr2/clamplicense?task=gensn&pwd="+pwds+"&lt=" + lt
          + "&m=" + months + "&vrs=" + vrs;
      //alert(poststring);
      xmlhttp.open("POST", poststring, true);

      try {
        xmlhttp.send();
      } catch (z) {
        document.getElementById("output").innerHTML = "Network failure";
      }
    }
    
    function createClampVersion(){
    	if(document.inputForm.c1.value=="Cmd"){
    		document.inputForm.vrs.value="Clamp"+document.inputForm.c1.value+document.inputForm.c3.value;
    		document.approveForm.clampVersion.value=document.inputForm.vrs.value;
    		document.approveForm.months.value=document.inputForm.plaintext.value;
    		document.inputForm.c2.selectedIndex=0;
    		if(document.inputForm.c3.selectedIndex>0){
    			document.inputForm.submitButton.disabled=false;
    			return;
    		}
    		
    	}
    	else{
    		document.inputForm.vrs.value="Clamp"+document.inputForm.c1.value+document.inputForm.c2.value+document.inputForm.c3.value;
    		document.approveForm.clampVersion.value=document.inputForm.vrs.value;
    		document.approveForm.months.value=document.inputForm.plaintext.value;
    	}
    	document.inputForm.submitButton.disabled=false;
    	
    	for(i=1;i<4;i++){
    		elmnt=eval("document.inputForm.c"+i);
    		if(elmnt.selectedIndex==0){
    			document.inputForm.submitButton.disabled=true;
    			document.inputForm.vrs.value="";
    			break;
    		}
    		document.approveForm.clampVersion.value=document.inputForm.vrs.value;
    		document.approveForm.months.value=document.inputForm.plaintext.value;
    	}
    }

    function importMailVars(){
        
         var str=document.approveForm.inputTextArea.value;
 		 //alert(document.approveForm.activationCode.value);
 		 var months=document.inputForm.plaintext.value;
 		 var activationCode=document.approveForm.activationCode.value;
 		 if(months.length>0){
         	str=str.replace("{months}",months);
 		 }
 		 if(activationCode.length>0){
         	str=str.replace("{ActivationCode}",activationCode);
 		 }
         document.approveForm.inputTextArea.value=str;
    }

    
  </script>
<table class="borderTable" align="center">
	<tr>
		<td>
		<table width="100%"><tr><td align="left"><a href="details.php?id=<?php echo $previousId;?>"> &nbsp; &lt;&lt; Previous Record</a></td><td align="center"><a href="list.php">Record List</a></td><td align="right"><a href="details.php?id=<?php echo $nextId;?>">Next Record  &gt;&gt; &nbsp; </a></td></tr></table>
			<div class="panel panel-default">
			
				<div class="panel-body">

					<table class="formTable" width="800">
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td align="right" width="25%" valign="top"><b>NAME : </b></td>
							<td width="75%"><?php echo $row['FIRST_NAME']." ".$row['LAST_NAME']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>EMAIL : </b></td>
							<td><?php echo $row['EMAIL']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>REQUEST TIME : </b></td>
							<td><?php echo $row['REQUEST_TIME']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>ORGANIZATION : </b></td>
							<td><?php echo $row['ORGANIZATION']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>ORAGANIZATION TYPE : </b></td>
							<td><?php echo $row['ORGANIZATION_TYPE']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>USAGE : </b></td>
							<td><?php echo $row['CLAMP_USAGE']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>CLAMP VERSION : </b></td>
							<td><?php echo $row['CLAMP_VERSION']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>PROJECT DETAILS : </b></td>
							<td><?php echo $row['DETAILS']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>SYSTEM USER : </b></td>
							<td><?php echo $row['SYSTEM_USER']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>JOB TITLE : </b></td>
							<td><?php echo $row['JOB_TITLE']?></td>
						</tr>
						<tr>
							<td align="right" valign="top"><b>LICENSE AGREEMENT : </b></td>
							<td><?php echo $row['AGREEMENT']?></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="border-color: #000000"></td>
						</tr>
					</table>

					<div>

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#approval"
								aria-controls="approval" role="tab" data-toggle="tab">Approval</a></li>
							<li role="presentation"><a href="#activationCode"
								aria-controls="activationCode" role="tab" data-toggle="tab">Activation
									Code</a></li>
							<li role="presentation"><a href="#notes" aria-controls="notes"
								role="tab" data-toggle="tab">Notes</a></li>
							<li role="presentation"><a href="#mail" aria-controls="mail"
								role="tab" data-toggle="tab">Mail</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<p>&nbsp;</p>
							<div role="tabpanel" class="tab-pane active" id="approval">
								<form name="approveForm" method="post" action=""><input type="hidden" name="id" value="<?php echo $id; ?>">
								<input type="hidden" name="months" value="<?php echo $id; ?>">
									<table class="formTable" width="800">
										<tr>
											<td align="right" valign="top" width="25%"><b>Approver Name :
											</b></td>
											<td><select name="approverName">
									<?php foreach($projectMembers as $key=>$value){echo "<option value='$key'>$key</option>";}?>
									</select></td>
										</tr>
										<tr>
											<td align="right" valign="top"><b>Version : </b></td>
											<td><input type="text" size="50" name="clampVersion"
												value="<?php echo $row['VERSION']?>"></td>
										</tr>
										<tr>
											<td align="right" valign="top"><b>Activation Code : </b></td>
											<td><input type="text" size="50" name="activationCode"
												value="<?php echo $row['ACTIVATION_CODE']?>" onchange="importMailVars();"></td>
										</tr>
										<tr>
											<td colspan="2">&nbsp;</td>
										</tr>
										<tr>
											<td colspan="2" align="center"><input type="button"
												value="APPROVE" data-toggle="modal" data-target="#GSCCModal"/>
												<div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												 <div class="modal-dialog">
												    <div class="modal-content">
												      <div class="modal-header">
												        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
												        <h4 class="modal-title" id="myModalLabel">Mail Body</h4>
												      </div>
												      <div class="modal-body">
												           	<textarea name="inputTextArea" cols="70" rows="15"><?php echo getUserMailBody($id,$row["FIRST_NAME"],"{months}",$row["VRS"],$row["EMAIL"],"{ActivationCode}",$start_date,$row['CLAMP_VERSION'])?></textarea>
												      </div>
												      <div class="modal-footer">
												        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												        <button type="button" class="btn btn-primary" id="submitter">Send</button>
												      </div>
												    </div>
												  </div>
												</div>
												</td>
												<script>
												$("#submitter").click(function() {
													  document.approveForm.submit();
												});
												</script>
										</tr>
										<tr>
											<td colspan="2">&nbsp;</td>
										</tr>
									</table>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane" id="notes">
								<form name="notesForm" method="post" action=""><input type="hidden" name="id" value="<?php echo $id; ?>">
									<table class="formTable" width="800">
										<tr>

											<td colspan=2><textarea rows="4" name="notes" cols="10"><?php echo $row['NOTE']?></textarea></td>
										</tr>

										<tr>
											<td colspan="2" align="center"><input type="submit"
												value="ADD NOTE" /></td>
										</tr>

									</table>
								</form>

							</div>
							<div role="tabpanel" class="tab-pane" id="activationCode">
								<form name="inputForm" method="post" action="" onsubmit="return false;">
									<table class="formTable">
										<tr>
											<td valign="top" align="right"><b>Months :</b></td>
											<td>
												
												<input type="hidden" name="lt" value="3"><input id="plaintext"
												name="plaintext" 
												onkeyup="this.value=this.value.replace(/\D/g,'')"
												onafterpaste="this.value=this.value.replace(/\D/g,'')" onchange="importMailVars();"></td>
										</tr>
										<tr>
											<td valign="top" align="right"><b>Clamp Version:</b></td>
											<td><select name="c1" onchange="createClampVersion();">
													<option value="">--</option>
													<option value="Cancer">Cancer</option>
													<option value="">GUI</option>
													<option value="Cmd">Cmd</option>
											</select> <select name="c2" onchange="createClampVersion();">
													<option value="">--</option>
													<option value="Mac">Mac</option>
													<option value="Win">Win</option>
											</select> <select name="c3" onchange="createClampVersion();">
													<option value="">--</option>
													<option value="_1.2.1">1.2.1</option>
													<option value="_1.2.2">1.2.2</option>
													<option value="_1.2.3">1.2.3</option>
													<option value="_1.3.0">1.3.0</option>
											</select> <br> <input id="vrs" name="vrs" size="25" disabled>
											<input type="hidden"  id="pwd" name="pwd" value="twgdhbtzhy">
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center"><input type="submit"
												name="submitButton" value="Generate" onclick="process()"
												disabled="disabled">
												<div class="results" id="output"></div></td>
										</tr>
									</table>

								</form>

							</div>
							<div role="tabpanel" class="tab-pane" id="mail">
								<form name="mailForm" method="post" action=""> <input type="hidden" name="id" value="<?php echo $id;?>">
									<table class="formTable" width="800">

										<tr>
											<td><b>To:</b></td>
											<td><input type="text" size="50" name="mailTo"
												value="<?php echo $row['EMAIL']?>"></td>
										</tr>
										<tr>
											<td><b>Subject:</b></td>
											<td><input type="text" size="50" name="mailSubject"
												value="Clamp Info"></td>
										</tr>
										<!--  
										<tr>
											<td><b>From:</b></td>
											<td><select name="mailFrom">
								<?php foreach($projectMembers as $key=>$value){echo "<option value='$value'>$value</option>";}?>
								</select></td>
										</tr>
										-->
										<tr>
											<td colspan=2><textarea rows="4" cols="10" name="mailBody"><?php echo $mailTemplate?></textarea></td>
										</tr>

										<tr>
											<td colspan="2" align="center"><input type="submit"
												value="SEND" /></td>
										</tr>

									</table>
								</form>

							</div>

						</div>
					</div>
				</div>
		
		</td>
	</tr>
</table>
<p>&nbsp;</p>




<?php 
$conn->close();
include_once dirname(__FILE__) . '/views/footer.php';
?>
