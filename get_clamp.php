<?php session_start(); ?>
<?php include dirname(__FILE__) . '/views/header.php'; ?>
<?php

/* error_reporting(-1);
  ini_set('display_errors', 'On');
  set_error_handler("var_dump"); */

require_once('vendor/autoload.php');
require_once('spreadSheet.php');

// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = '6LcYEyQTAAAAANt5a4oDI3HF1FP2ciStB_mfPzxv';
$secret = '6LcYEyQTAAAAAO79-xkp4EUKFmcMWP_idGkJpL7W';

// initialize the service request factory
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

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
        write_to_spreadsheet();
        $command = '<script type="text/javascript">alert("You request has been received and we will contact you soon.")</script>';
    } else {
        $command = '<script type="text/javascript">alert("You must select recaptcha command.")</script>';
    }
}
include dirname(__FILE__) . '/views/download/requestform.php';

function write_to_spreadsheet() {
    $serviceRequest = new DefaultServiceRequest(getGoogleTokenFromKeyFile());

    ServiceRequestFactory::setInstance($serviceRequest);

    // retrieve a list of spreadsheets
    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
    $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
    $spreadsheet = $spreadsheetFeed->getByTitle('CLAMP Request Form (Responses)');

    // Get a single worksheet by title
    $worksheetFeed = $spreadsheet->getWorksheets();
    $worksheet = $worksheetFeed->getByTitle('Form Responses 1');
    $listFeed = $worksheet->getListFeed();

    date_default_timezone_set('America/Chicago');

    $timestamp = date("Y-m-d h:i:s");
    $firstname = $_POST['inputFName'];
    $lastname = $_POST['inputLName'];
    $email = $_POST['inputEmail'];
    $jobtitle = $_POST['inputJobTitle'];
    $organization = $_POST['inputOrganization'];

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

    $clampversion = $_POST['clampType'];
    $projectdetails = $_POST['inputDetails'];
    $consent = $_POST['consent'];


    // Write to Google Spreadsheet
    $row = array('timestamp' => $timestamp,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'organization' => $organization,
        'pleasechoosethebestdescriptionofyourinstitutionorganizationtype.' => $organizationtype,
        'howwouldclampbeusedatyourorganization' => $useType,
        'pleaseselecttheversionofclampthatyouwouldliketoreceive' => $clampversion,
        'pleaseprovidemoredetailsaboutyourproject' => $projectdetails,
        'doyouconsenttotheuseofyournameandaffiliationasauserofoursystem' => $consent,
        'jobtitle' => $jobtitle);
    $listFeed->insert($row);

    // Generate download link
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
    }
    // Send email
    $subject = "New Request from CLAMP website";

    //$to ='Ruiling.Liu@uth.tmc.edu';
    $to = 'jingqi.wang@uth.tmc.edu,Ergin.Soysal@uth.tmc.edu,Min.Jiang@uth.tmc.edu,Anupama.E.Gururaj@uth.tmc.edu';    
    $message = '
		<html>
		<head>
		<title>Some title</title>
		</head>
		<body>
		<table border="1">
		<tr><td>First Name</td><td>' . $firstname . '</td></tr>
		<tr><td>Last Name</td><td>' . $lastname . '</td></tr>
		<tr><td>Email</td><td>' . $email . '</td></tr>
		<tr><td>Organization</td><td>' . $organization . '</td></tr>
		<tr><td>Job Title</td><td>' . $jobtitle . '</td></tr>
		<tr><td>Please choose the best description of your institution/organization type.</td><td>' . $organizationtype . '</td></tr>
		<tr><td>How would CLAMP be used at your organization?</td><td>' . $useType . '</td></tr>
		<tr><td>Please select the version of CLAMP that you would like to receive</td><td>' . $clampversion . '</td></tr>
		<tr><td>Please provide more details about your project</td><td>' . $projectdetails . '</td></tr>
		<tr><td>Do you consent to the use of your name as a user of our system?</td><td>' . $consent . '</td></tr>
		</table>
		
		</body>
		</html>
		';

    $headers = "From:" . strip_tags($email) . "\r\n";
    $headers .= "Reply-To:" . strip_tags($email) . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html;
		
		charset=iso-8859-1' . "\r\n";
    $headers .='X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>