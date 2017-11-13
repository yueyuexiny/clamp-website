<table id="testTable" border="2">
    <thead valign="top">
        <tr>
            <th>Location</th>
            <th>Entity</th>
            <th>Null</th>
            <th>Status</th>
            <th>Details</th>
        </tr>
    </thead>
</table>
      <script>
      var vals = "<?php echo json_encode($jsonresult->textData)?>",
      rows = vals.split('\n'),
      columns, i;

  for (i = 0; i < rows.length; i++) {
    columns = rows[i].split('\t');
    tabl.append(
      '<tr>' + 
          '<td>' + columns[0] + '</td>' + 
          '<td>' + columns[1] + '</td>' + 
          '<td>' + (columns[2] || '') + '</td>' + 
      '</tr>'
    );
  } 




  //var text = <?php echo $jsonresult->textData?>;
  //var txt = text.split('\t');
  //var table = "<table>";
  //for (var i=0; i< txt.length; i++) {
      //table = table + "<tr><td>"+ txt[i]+"</td></tr>"; 
  //}
  //table = table + "</table>";

  //return table;