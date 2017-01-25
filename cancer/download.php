<?php

require_once('vendor/autoload.php');
require_once('spreadSheet.php');
date_default_timezone_set('America/Chicago');


//initialize the service request factory
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;


/*error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
*/

function read_from_spreadsheet($email){

    $serviceRequest = new DefaultServiceRequest(getGoogleTokenFromKeyFile());
    ServiceRequestFactory::setInstance($serviceRequest);

    // retrieve a list of spreadsheets
    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
    $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
    $spreadsheet = $spreadsheetFeed->getByTitle('CLAMP Request Form (Responses)');


    // Get a single worksheet by title
    $worksheetFeed = $spreadsheet->getWorksheets();
    $worksheet = $worksheetFeed->getByTitle('Form Responses 1');


    $sq = 'email ="'. $email .'"';
    $listFeed = $worksheet->getListFeed(["sq"=>$sq]);

    $entries = $listFeed->getEntries();
    if(count($entries)>0){
        $listEntry = $entries[0];
        $values = $listEntry->getValues();

        return $values;
    }else{
        return false;
    }
}


function update_spreadsheet($email){

    $serviceRequest = new DefaultServiceRequest(getGoogleTokenFromKeyFile());
    ServiceRequestFactory::setInstance($serviceRequest);

    // retrieve a list of spreadsheets
    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
    $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
    $spreadsheet = $spreadsheetFeed->getByTitle('CLAMP Request Form (Responses)');


    // Get a single worksheet by title
    $worksheetFeed = $spreadsheet->getWorksheets();
    $worksheet = $worksheetFeed->getByTitle('Form Responses 1');


    $sq = 'email ="'. $email .'"';
    $listFeed = $worksheet->getListFeed(["sq"=>$sq]);

    $entries = $listFeed->getEntries();
    if(count($entries)>0){
        $listEntry = $entries[0];

        $values = $listEntry->getValues();

        $values["licenseagreement"] = "Yes, I agree";
        $values["downloadtime"] = date("Y-m-d H:i:s");
        $listEntry->update($values);
    }
}


if(isset($_POST['email'])){
    // Update license agreement field in Google Spreadsheet
    update_spreadsheet($_POST['email']);

    switch($_POST['v']){
        case 'cmd':
            $clampfile = "ClampCMD_1.2.1.zip";
            break;
        case 'mac':
            $clampfile = "ClampMac_1.2.1.zip";
            break;
        case 'win':
            $clampfile = "ClampWin_1.2.1.zip";
    }
    header("location:".$clampfile);
}else{

    include dirname(__FILE__) . '/views/header.php';

    if(!isset($_GET['v'])){
        echo "<label style='margin-top: 400px;margin-bottom: 400px'>Invalid CLAMP version</label>";
    }
    if(isset($_GET['email'])){
        $values = read_from_spreadsheet($_GET['email']);

        if($values==false){
            echo "<label style='margin-top: 400px;margin-bottom: 400px'>Invalid email address</label>";
        }else{
            include dirname(__FILE__) . '/views/download/download.php';
        }
    }else{
        echo "<label style='margin-top: 400px;margin-bottom: 400px'>Invalid email address</label>";
    }
}
?>

    <script>
        var loadScript = function (src, loadCallback) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = src;
            s.onload = loadCallback;
            document.body.appendChild(s);
        };

        // http://stackoverflow.com/questions/9847580/how-to-detect-safari-chrome-ie-firefox-and-opera-browser
        var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
        var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

        if (isSafari || isOpera) {

            loadScript('//code.jquery.com/jquery-2.1.4.min.js', function () {
                loadScript('//cdnjs.cloudflare.com/ajax/libs/webshim/1.15.10/dev/polyfiller.js', function () {

                    webshims.setOptions('forms', {
                        overrideMessages: true,
                        replaceValidationUI: false
                    });
                    webshims.setOptions({
                        waitReady: true
                    });
                    webshims.polyfill();
                });
            });
        }

        function check() {
            var ele = document.getElementsByName('licence');

            if (ele[0].checked) {
                document.getElementById('submitbtn').disabled = false;
            }
            else {
                document.getElementById('submitbtn').disabled = true;
            }

        }
    </script>

<?php include dirname(__FILE__) . '/views/footer.php'; ?>