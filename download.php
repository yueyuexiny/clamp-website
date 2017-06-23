<?php
date_default_timezone_set('America/Chicago');
define('CHUNK_SIZE', 1024*1024);
include("config.php");



$conn = new mysqli ( $host, $username, $password, $db );

if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}


function read_from_database($conn,$email,$id){

	$sql="SELECT REQUEST_ID FROM request_form WHERE REQUEST_ID='".$id."' and EMAIL='".$email."'";
	$res = $conn->query ( $sql );
	$row = $res->fetch_assoc ();
	if($row==false || $row->num_rows<1){
		return false;
	}
	else {
		return true;
	}
}


function update_database($conn,$email,$id){
	//$sql="UPDATE REQUEST_FORM SET AGREEMENT='Yes, I agree', DOWNLOAD_TIME='".date("Y-m-d H:i:s")."' where REQUEST_ID='".$id."' and EMAIL='".$email."'";
	$sql="UPDATE request_form SET AGREEMENT='Yes, I agree', DOWNLOAD_TIME='".date("Y-m-d H:i:s")."' where REQUEST_ID=? and EMAIL=?";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('is',$id,$email);
	$rslt=$stmt->execute();
	$stmt->close();
	
}

function getFileNameFromDatabase($conn,$v){
	$sql="SELECT FILE_NAME FROM clamp_files WHERE FILE_TYPE='$v'";
	$res = $conn->query ( $sql );
	$row = $res->fetch_assoc ();
	return $row['FILE_NAME'];
	
}


if(isset($_POST['email'])){
	// Update license agreement field in Google Spreadsheet
	update_database($conn,$_POST['email'], $_POST['id']);
	$clampfile=getFileNameFromDatabase($conn,$_POST['v']);
	include("downloader.php");
}else{



	if(!isset($_GET['v'])){
		//echo "<label style='margin-top: 400px;margin-bottom: 400px'>Invalid CLAMP version</label>";
		header('Location: get-clamp.php');
	}
	if(isset($_GET['email'])){
		$id = $_GET ['id'];
		$email=$_GET ['email'];
		$clampversion_r=$_GET ['v'];
		//$sql="SELECT REQUEST_ID FROM REQUEST_FORM WHERE REQUEST_ID='".$id."' and EMAIL='".$email."'";
		$sql="SELECT REQUEST_ID FROM request_form WHERE REQUEST_ID=? and EMAIL=? and VRS=?";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('iss',$id,$email,$clampversion_r);
		$stmt->execute();
		$stmt->store_result();
		$rows=$stmt->num_rows;
		$stmt->close();
		
		if($rows<1){
			//echo "<label style='margin-top: 400px;margin-bottom: 400px'>Invalid email address</label>";
			
			
			header('Location: get-clamp.php');
		}else{
			include dirname(__FILE__) . '/views/header.php';
			include dirname(__FILE__) . '/views/download/download.php';
		}
	}else{
		//echo "<label style='margin-top: 400px;margin-bottom: 400px'>Invalid email address</label>";
		header('Location: get-clamp.php');
	}
}
$conn->close();
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