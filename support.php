<?php $pageTitle = "CLAMP Current Users" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Clamp Current Users." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>
<?php
        $now=strtotime("today");    
        $start_date = strtotime("29 July 2019");
        do{
                $start_date = strtotime("next Monday",strtotime("next Monday",$start_date));
        } while($start_date < $now || (($start_date==$now) && date("H")>="12"));
?>
    <div class="container">
        <div class="page-header">
            <h1 class="text-center">CLAMP Support</h1>
        </div>
        <p class="lead text-center">CLAMP development and maintenance are supported by institutional funds. We will provide technical support to the license holders. For academic license holders, you will get limited email and phone support. For commercial license holders, you will get sufficient support to get CLAMP up and running.</p>


        <div class="container">
            <div class="row stylish-panel">
                <div class="col-md-12">
                    <div style="text-align: center">
                        <img src="img/office.png" alt="CLAMP Office Hour" class="img-circle img-thumbnail" style="margin-bottom: 20px">
                        <h4>Office Hour</h4>
                            <p class="p-left" style="font-size: 18px">
                            We will have CLAMP office hour on Mondays, every alternating week.<br><br>The next CLAMP office hour is on  <span style= "color: #A52A2A ">  <?=date("F dS , Y",$start_date);?> , 11.00 am -12.00 noon (CST)</span>.
                            <br>
                            <br>The call-in information is provided below:<br><br>
                            Join the meeting:
                            <a target="_blank" href=" https://uthealth.webex.com/mw3300/mywebex/default.do?service=1&siteurl=uthealth&nomenu=true&main_url=%2Fmc3300%2Fe.do%3Fsiteurl%3Duthealth%26AT%3DMI%26EventID%3D787113527%26UID%3D0%26Host%3DQUhTSwAAAAS6cwStsaqejbRnvthiQG1EJyLN5Td3ZVz1I5laajFTUjeHoVDNEPKjIoXQGuYDQkj3HNY1rps79eKRyjE5aUp60%26FrameSet%3D2%26MTID%3Dm78e40e01a5a7ca5b9777dbd68ae085f1">Webex</a><br><br>
                            You can also join by phone.<br>
                            United States Toll (San Jose): +1-240-454-0887 <br>
                            United States Toll Free: 1-844-621-3956 <br>
                            Meeting number (access Code): 800 536 859<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row stylish-panel">
                <div class="col-md-4">
                    <div>
                        <img height="200" src="img/github.png" alt="CLAMP GitHub Page" class="img-circle img-thumbnail" style="margin-bottom: 20px">
                        <h4>Discussion Forum</h4>
                        <p class="p-left">Find and share solutions and ideas with your peers and CLAMP experts on our   <a href="https://github.com/UTHealth-CCB/clamp-support/issues" target="_blank" >GitHub page </a>.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <img src="img/phone.png" alt="CLAMP Telephone number" class="img-circle img-thumbnail" style="margin-bottom: 20px">
                        <h4>Telephone</h4>
                        <p class="p-left">
                            9:00 a.m. - 5:00 p.m. Central Time<br>
                            Telephone :713-500-3619</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <img src="img/email.png" alt="CLAMP Emaill Address" class="img-circle img-thumbnail" style="margin-bottom: 20px">
                        <h4>Email</h4>
                        <p class="p-left">
                            Anupama E. Gururaj, PhD<br>
                            <span class="glyphicon glyphicon-envelope"></span>
                            <a href="mailto:Anupama.E.Gururaj@uth.tmc.edu">anupama.e.gururaj@uth.tmc.edu</a>

                        </p>
                    </div>
                </div>


            </div>



    </div>
        </div>
    <!-- /container -->
<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>