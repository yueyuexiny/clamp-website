<?php
$auth=false;
if (!isset($_SERVER['PHP_AUTH_USER'])) {
	    header('WWW-Authenticate: Basic realm="My Realm"');
	        header('HTTP/1.0 401 Unauthorized');
	        echo 'username and password required';
		    exit;
} else if ($_SERVER['PHP_AUTH_USER']=="clampadmin" && $_SERVER['PHP_AUTH_PW']=="twgdhbtzhy"){
	$auth=true;    
	
}
  else{
  			$auth=false;
  			echo "<p>Access Denied</p>";
	    	if (isset($_SERVER['PHP_AUTH_USER'])) {
	    		unset($_SERVER['PHP_AUTH_USER']);
	    	}
	    	if (isset($_SERVER['PHP_AUTH_PW'])) {
	    		unset($_SERVER['PHP_AUTH_PW']);
	    	}
	    	header('WWW-Authenticate: Basic realm="My Realm"');
	    	header('HTTP/1.0 401 Unauthorized');
	    	echo 'username and password required';
	    	exit;
  }
?>
