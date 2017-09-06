<?php 
$postdata = http_build_query(
		array(
				'demotext' => $_POST["demotext"]
		)
		);


$opts = array('http' =>
		array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $postdata
		)
);

$context  = stream_context_create($opts);

$result = file_get_contents('http://localhost:9999/clampdemo', false, $context);
echo $result;
?>