<?php 
$fakeFileName=$clampfile;
$file = "downloads/0D0A/".$clampfile;
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$fakeFileName");

readfile_chunked($file);

function readfile_chunked($filename, $retbytes = TRUE) {
	$buffer = '';
	$cnt    = 0;
	$handle = @fopen($filename, 'rb');

	if ($handle == false) {
		header('Location: 404.html');
		
	}

	while (!feof($handle)) {
		$buffer = fread($handle, CHUNK_SIZE);
		echo $buffer;
		ob_flush();
		flush();

		if ($retbytes) {
			$cnt += strlen($buffer);
		}
	}

	$status = fclose($handle);

	if ($retbytes && $status) {
		return $cnt; // return num. bytes delivered like readfile() does.
	}

	return $status; 
	
	
}


?>

