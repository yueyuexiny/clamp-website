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
        email_team($_POST);
        email_user($_POST);
        $command = '<script type="text/javascript">alert("You request has been received and we will contact you soon.")</script>';
    } else {
        $command = '<script type="text/javascript">alert("You must select recaptcha command.")</script>';
    }
}

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

    // Write to Google Spreadsheet
    $row = array('timestamp' => $timestamp,
        'firstname' => $_POST['inputFName'],
        'lastname' => $_POST['inputLName'],
        'email' => $_POST['inputEmail'],
        'organization' => $_POST['inputOrganization'],
        'pleasechoosethebestdescriptionofyourinstitutionorganizationtype.' => $organizationtype,
        'howwouldclampbeusedatyourorganization' => $useType,
        'pleaseselecttheversionofclampthatyouwouldliketoreceive' => $clampversion,
        'pleaseprovidemoredetailsaboutyourproject' => $_POST['inputDetails'],
        'doyouconsenttotheuseofyournameandaffiliationasauserofoursystem' => $_POST['consent'],
        'jobtitle' => $_POST['inputJobTitle']);
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
}

function email_team(){
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
    $to = 'jingqi.wang@uth.tmc.edu,Ergin.Soysal@uth.tmc.edu,Min.Jiang@uth.tmc.edu,Anupama.E.Gururaj@uth.tmc.edu';
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
    </table>

    </body>
    </html>
    ';

    mail($to, $subject, $body, $headers);
}

function email_user(){
    $to_sms= $_POST['inputEmail'];
    $from_email= 'jingqi.wang@uth.tmc.edu,Ergin.Soysal@uth.tmc.edu,Min.Jiang@uth.tmc.edu,Anupama.E.Gururaj@uth.tmc.edu';
    $subject = "Thank you for requesting a CLAMP Download";;

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