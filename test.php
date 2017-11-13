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

$result = file_get_contents('http://139.52.147.65:9999/clampdemo', false, $context);
$jsonresult = json_decode($result);

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="brat/style-vis.css"/>
  <script type="text/javascript" src="brat/client/lib/head.load.min.js"></script>
  <script type="text/javascript" src="brat/client/lib/jquery.min.js"></script>
  <script type="text/javascript" src="brat/client/lib/jquery.svg.min.js"></script>
  <script type="text/javascript" src="brat/client/lib/jquery.svgdom.min.js"></script>
  <script type="text/javascript" src="brat/client/src/configuration.js"></script>
  <script type="text/javascript" src="brat/client/src/util.js"></script>
  <script type="text/javascript" src="brat/client/src/annotation_log.js"></script>
  <script type="text/javascript" src="brat/client/lib/webfont.js"></script>
  <script type="text/javascript" src="brat/client/src/dispatcher.js"></script>
  <script type="text/javascript" src="brat/client/src/url_monitor.js"></script>
  <script type="text/javascript" src="brat/client/src/visualizer.js"></script>
  
 <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
 
  <script>
  var bratLocation = 'brat/';


  var webFontURLs = [
	  bratLocation + '/static/fonts/Astloch-Bold.ttf',
	  bratLocation + '/static/fonts/PT_Sans-Caption-Web-Regular.ttf',
	  bratLocation + '/static/fonts/Liberation_Sans-Regular.ttf'
  ];
  </script>
  
</head>
<body>

<div class="container">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#xmi">Results.xmi</a></li>
    <li><a data-toggle="tab" href="#txt1">Resutls.txt</a></li>
  </ul>

  <div class="tab-content">
    <div id="xmi" class="tab-pane fade in active">
      <div id=brat_block></div>
      <script>
      	Util.embed(
              // id of the div element where brat should embed the visualisations
              'brat_block',
              // object containing collection data
              <?php echo json_encode( $jsonresult->collData ) ?>,
              // object containing document data
              <?php echo json_encode( $jsonresult->docData ) ?>,
              // Array containing locations of the visualisation fonts
              webFontURLs
              );
      </script>
    </div>
    <div id="txt1" class="tab-pane fade">      
	<input type="hidden" value="<?php echo $jsonresult->textData?>" id="txthidden" />      
	<table id="testTable" border="1">
    <thead valign="top">
        <tr>
            <th>Location_Start</th>
            <th>Location_End</th>
            <th>Entity</th>
            <th>Null</th>
            <th>Status</th>
            <th>Details</th>
        </tr>
    </thead>
</table>
      <script>
      var tabl = $("#testTable"),
      vals = $("#txthidden").val(),
      rows = vals.split("\n"),
      columns, i;
      
  	  for (i = 0; i < rows.length; i++) {
      	columns = rows[i].split("\t");
    			tabl.append(
      		'<tr>' + 
         	'<td>' + columns[0] + '</td>' + 
          	'<td>' + columns[1] + '</td>' + 
          	'<td>' + columns[2] + '</td>' + 
          	'<td>' + columns[3] + '</td>' + 
          	'<td>' + columns[4] + '</td>' + 
          	'<td>' + (columns[5] || '') + '</td>' + 
      	'</tr>'
    		);
     
  }
    	 

    	  
      </script>
    </div>
  </div>
</div>



</body>
</html>
  






