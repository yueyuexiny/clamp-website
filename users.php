<?php $pageTitle = "CLAMP Current Users" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Clamp Current Users." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>
<?php include_once dirname(__FILE__) . '/statistics.php'; ?>
<html lang="en">
<head>

  
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


.number-position-orgs{
    position: absolute;
    top: 42%;
    right: 20%;
   
}

.number-position-request{
    position: absolute;
    top: 42%;
    left: 20%;
}



</style>
</head>

<body>       
<div class="container page-container">
    <br/>
    <div class="section-header">
        <h1>Current Users</h1>
    </div>

    <div>
     <p>
            Many of the world’s most dynamic healthcare institutions, academic labs, and NLP scientists use CLAMP to make their annotation and NLP tasks more effective. </p>
    <br><br>
    <div class="row">  
    <div class="col-md-5 col-sm-5 col-xs-5">  		
  		<button type="button" style="padding: 2% 0;" class="btn btn-lg btn-primary btn-block active" role="button" aria-pressed="true"> <span style="font-size:30px;"><i style="color:orange;" class="fa fa-download" aria-hidden="true"></i>  <?php echo $userCount;?> Requests</span></button>
  		</div>
  		<div class="col-md-1 col-sm-1 col-xs-1"><button type="button" style="color:white; padding: 2% 0;" class="btn btn-lg btn-primary btn-block disabled"> <span style="font-size:30px;color:black;"> from </span></button></div> 
  		<div class="col-md-5 col-sm-5 col-xs-5"> 
  		<button type="button" style="padding: 2% 0;" class="btn btn-lg btn-primary btn-block active" role="button" aria-pressed="true"><span style="font-size:30px;"><i style="color:orange;" class="fa fa-university" aria-hidden="true"></i>  <?php echo $organizationCount;?> Organizations</span></button>
  		</div>
 
          </div>
     
		</div>
	<br><br><br>
	<center>
	<div style="width:80%;" align="center">
		<canvas id="canvas"></canvas>
	</div>
	</center>
	<script>
<?php echo $chartScript;?>
	</script>
	<br>
	<h3> Example organizations: </h3>
	<br><br>
    </div>

	<div class= "container">
	<table class="table">              
        <?php
        $i = 0;
        $file = fopen("organization-list.csv", "r");
        while (!feof($file)){   
            $data = fgets($file);
            echo "<tr>";
            echo "<td>" . $data. "</td>";
            $data = fgets($file);
            echo "<td>" . $data. "</td>";
            $data = fgets($file);
            echo "<td>" . $data. "</td>";
            echo "<tr>";                         
            $i++;
        }
        fclose($file);
        ?>
	</table>
	
	
</div>
</body>
</html>
 <!-- 
    <div id="customers-logo" class="row">
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/UTH.jpg" alt="University of Texas Health Science Center." class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/BERGHealth.png" alt="BERG Health" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/MDAnderson.jpeg" alt="MD Anderson Cancer Center" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/BaylorCollegeofMedicine.jpg" alt="Baylor College of Medicine" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/ApolloHIT.png" alt="Apollo HIT" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/AssurerxHealthInc.jpg" alt="Assurerx Health Inc" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/CaseWesternReverseUniversity.png" alt="Case Western Reverse University" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/ColumbiaUniversity.png" alt="Columbia University" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/CUHK.jpg" alt="CUHK" class="thumbnail"/>
        </div>        
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/MCGHealthLLC.jpg" alt="MCG Health LLC" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/NCHHealth.jpg" alt="NCH Health" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/CIC-IPN.jpg" alt="CIC-IPN" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/JiangsuProvinceHospital.jpg" alt="Jiangsu Province Hospital" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/NorthwesternUniversity.png" alt="Northwestern University" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/SichuanUniversity.png" alt="Sichuan University" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/StanfordUniversity.png" alt="Stanford University" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/VirginiaCommonwealthUniversity.jpg" alt="Virginia Commonwealth University" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/USF.jpg" alt="USF" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/UniversityOfHeidelberg.png" alt="University Of Heidelberg" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/UniversityOfMarylandBaltimoreCounty.png" alt="University Of Maryland Baltimore County" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/UCSDBioinformatics.png" alt="UCSD Bioinformatics" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/UniversityOfMinnesota.png" alt="University Of Minnesota" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/UniversityOfUtah.png" alt="University Of Utah" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/UPMC.jpg" alt="UPMC" class="thumbnail"/>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="img/clients/VanderbiltUniversity.jpg" alt="Vanderbilt University" class="thumbnail"/>
        </div>
    </div>
 -->

	
  





<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>