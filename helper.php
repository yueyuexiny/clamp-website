<?php

/* error_reporting(-1);
  ini_set('display_errors', 'On');
  set_error_handler("var_dump"); */
include("config.php");
require_once('vendor/autoload.php');


// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = '6LcYEyQTAAAAANt5a4oDI3HF1FP2ciStB_mfPzxv';
$secret = '6LcYEyQTAAAAAO79-xkp4EUKFmcMWP_idGkJpL7W';

// initialize the service request factory


$isFormValid = false;
if (isset($_POST['submit'])) {

    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
        // Make the call to verify the response and also pass the user's IP address
        $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        if ($resp->isSuccess()) {
            $isFormValid = true;
        }
    }

    if ($isFormValid) {
    	$insertId=insertIntoDatabase($host, $username, $password, $db);
        email_team($insertId);
        email_user($_POST);
        postToGitHub($insertId);
        $command = '<script type="text/javascript">alert("You request has been received and we will contact you soon.")</script>';
    } else {
        $command = '<script type="text/javascript">alert("You must select recaptcha command.")</script>';
    }
}

function postToGitHub($insertId){
	$client = new \Github\Client();
	$client->authenticate('clampnlp@gmail.com', 'Uth768ClampNlp', Github\Client::AUTH_HTTP_PASSWORD);
	//create($username, $repository, array $params)
	$email = $_POST['inputEmail'];
	
	$organizationtype = $_POST['orgType'];
	$orgTypeOther = $_POST ["orgTypeOther"];
	if ($organizationtype == 'Other') {
		$organizationtype = $orgTypeOther;
	}
	
	$useType = $_POST["useType"];
	$useTypeOther = $_POST['useTypeOther'];
	if ($useTypeOther == 'Other') {
		$useType = $useTypeOther;
	}
	$issueBody='<table border="1">
	<tr><td>First Name</td><td>' . $_POST['inputFName'] . '</td></tr>
	<tr><td>Last Name</td><td>' . $_POST['inputLName'] . '</td></tr>
	<tr><td>Email</td><td>' . $email . '</td></tr>
	<tr><td>Organization</td><td>' . $_POST['inputOrganization'] . '</td></tr>
	<tr><td>Job Title</td><td>' . $_POST['inputJobTitle'] . '</td></tr>
	<tr><td>Please choose the best description of your institution/organization type.</td><td>' . $organizationtype . '</td></tr>
	<tr><td>How would CLAMP be used at your organization?</td><td>' . $useType . '</td></tr>
	<tr><td>Please select the version of CLAMP that you would like to receive</td><td>' . $_POST['clampType'] . '</td></tr>
	<tr><td>Please provide more details about your project</td><td>' . $_POST['inputDetails'] . '</td></tr>
	<tr><td>Do you consent to the use of your name as a user of our system?</td><td>' . $_POST['consent'] . '</td></tr>
	<tr><td colspan=\'2\'><a href=\'http://clamp.uth.edu/details.php?id='.$insertId.'\'>http://clamp.uth.edu/details.php?id='.$insertId.'</a></td></tr>
    </table>';
	$client->api('issue')->create('clampnlp', 'clamp', array('title' => 'New download request : '.$_POST['inputFName'].' '.$_POST['inputLName'], 'body' => $issueBody));
}

function insertIntoDatabase($host, $username, $password, $db){
	$conn = new mysqli($host, $username, $password, $db);
	date_default_timezone_set('America/Chicago');
	$timestamp = date("Y-m-d h:i:s");
	$organizationtype = ($_POST['orgType'] == 'Other') ? $_POST ["orgTypeOther"] : $_POST['orgType'];
	$useType = ($_POST["useType"] == 'Other') ? $_POST['useTypeOther'] : $_POST["useType"];
	$clampversion = $_POST['clampType'];
	$email=$_POST['inputEmail'];
	$firstName=$_POST['inputFName'];
	$lastName=$_POST['inputLName'];
	$organization=$_POST['inputOrganization'];
	$details=$_POST['inputDetails'];
	$consent=$_POST['consent'];
	$job=str_replace("'", "", $_POST['inputJobTitle']);
	switch ($clampversion) {
		case 'CLAMP-CMD (Commandline)':
			$v = 'cmd';
			break;
		case 'CLAMP-GUI (Windows)':
			$v = 'win';
			break;
		case 'CLAMP-GUI (Mac OS X)':
			$v = 'mac';
			break;
		case 'CLAMP-Cancer-Win':
			$v = 'cancer-win';
			break;
		case 'CLAMP-Cancer-Mac':
			$v = 'cancer-mac';
			break;
	}
	$sql="insert into request_form (REQUEST_TIME,ORGANIZATION_TYPE,CLAMP_USAGE,CLAMP_VERSION,EMAIL,FIRST_NAME,LAST_NAME,ORGANIZATION,DETAILS,SYSTEM_USER,JOB_TITLE,VRS) 
			values 
			('$timestamp','$organizationtype','$useType','$clampversion','$email','$firstName','$lastName','$organization','$details','$consent','$job','$v')";
	$conn->query($sql);
	$insertId=$conn->insert_id;
	$conn->close();
	return $insertId;
}



function email_team($insertId){
    $email = $_POST['inputEmail'];

    $organizationtype = $_POST['orgType'];
    $orgTypeOther = $_POST ["orgTypeOther"];
    if ($organizationtype == 'Other') {
        $organizationtype = $orgTypeOther;
    }

    $useType = $_POST["useType"];
    $useTypeOther = $_POST['useTypeOther'];
    if ($useTypeOther == 'Other') {
        $useType = $useTypeOther;
    }

    $subject = "New Request from CLAMP website";
    //$to = 'Anupama.E.Gururaj@uth.tmc.edu,firat.tiryaki@uth.tmc.edu,Xinyue.Hu@uth.tmc.edu';
    
    //$to = 'jingqi.wang@uth.tmc.edu,Ergin.Soysal@uth.tmc.edu,Min.Jiang@uth.tmc.edu,Anupama.E.Gururaj@uth.tmc.edu,firat.tiryaki@uth.tmc.edu,mandana.salimi@uth.tmc.edu';
    $to = 'Xinyue.Hu@uth.tmc.edu';
    $headers = 'MIME-Version: 1.0' . "\r\n" .
        'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
        'From:' . strip_tags($email)  . "\r\n" .
        'Reply-To:' . strip_tags($email) . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $body = '
    <html>
    <head>
    </head>
    <body>
    <table border="1">
    <tr><td>First Name</td><td>' . $_POST['inputFName'] . '</td></tr>
    <tr><td>Last Name</td><td>' . $_POST['inputLName'] . '</td></tr>
    <tr><td>Email</td><td>' . $email . '</td></tr>
    <tr><td>Organization</td><td>' . $_POST['inputOrganization'] . '</td></tr>
    <tr><td>Job Title</td><td>' . $_POST['inputJobTitle'] . '</td></tr>
    <tr><td>Please choose the best description of your institution/organization type.</td><td>' . $organizationtype . '</td></tr>
    <tr><td>How would CLAMP be used at your organization?</td><td>' . $useType . '</td></tr>
    <tr><td>Please select the version of CLAMP that you would like to receive</td><td>' . $_POST['clampType'] . '</td></tr>
    <tr><td>Please provide more details about your project</td><td>' . $_POST['inputDetails'] . '</td></tr>
    <tr><td>Do you consent to the use of your name as a user of our system?</td><td>' . $_POST['consent'] . '</td></tr>
    <tr><td colspan=\'2\'><a href=\'http://clamp.uth.edu/details.php?id='.$insertId.'\'>http://clamp.uth.edu/details.php?id='.$insertId.'</a></td></tr>
    </table>

    </body>
    </html>
    ';
	
    mail($to, $subject, $body, $headers);
}

function email_user(){
    $to_sms= $_POST['inputEmail'];
    $from_email= 'Anupama.E.Gururaj@uth.tmc.edu';
    $subject = "Thank you for requesting a CLAMP Download";

    $headers2 = 'MIME-Version: 1.0' . "\r\n" .
        'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
        'From:' . strip_tags($from_email) . "\r\n" .
        'Reply-To:' . strip_tags($from_email) ."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $body_sms = 'Dear '.$_POST['inputFName'].',<br><br>
        This is to confirm that your request to download CLAMP software has been received. It will be reviewed by our team and we will be in touch with you soon.<br><br>
        Thank you and have a great day!<br><br>
        Best,<br>
        The CLAMP team';

    mail($to_sms, $subject, $body_sms, $headers2);
}