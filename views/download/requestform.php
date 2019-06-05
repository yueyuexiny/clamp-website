<!-- =========================
     Get CLAMP
   ============================== -->
<div class="download">
    <div class="container page-container">
        <br />
        <div class="section-header">
            <h1>Download CLAMP</h1>
        </div>

        <div class="section-content">
            <p class="bold">
                CLAMP is available in two versions:
            </p><br>
            <p> 1) CLAMP-CMD, a command line program that implements the state-of-the-art techniques for extracting
                clinical concepts from text; and </p>
            <p>2) CLAMP-GUI, which provides GUIs for efficiently
                building clinical NLP pipelines for your individual
                applications.
                <br/><br>
                CLAMP is free for academic use/research purposes.
                Please fill up the form below with your project information. We will send you the download link to
                the version you are requesting and activation code after review, which typically takes 2-3 days. 
                <!-- For commercial users, please fill up this form so we will get in touch with you to ascertain your needs and discuss appropriate licensing of CLAMP.-->
                <br>
                If you need commercial license, please refer to <a href="http://www.melaxtech.com/">www.melaxtech.com</a>
                
            </p>
            <br>

            <!-- <p style="color:#b50000 ">
                If you need the <b>CLAMP-Cancer</b> version, please visit: <a href="http://clamp.uth.edu/cancer.php"> http://clamp.uth.edu/cancer.php</a>
            </p>
            <br>-->
            


        </div>
        <hr />
        <div class="section-content">
            <p class="bold">
                Updates in CLAMP 1.5.1:
            </p><br>
            <p>• Bug fixing</p>
            <p>• Optimize the running speed of the comprehensive clinical pipeline.</p>
            <br>
        <!--
        <div class="section-content">
            <p class="bold">
                CLAMP 1.5.0 New Features:
            </p><br>
            <p>• Pre-annotation: The model in corpus project will be updated automatically during user’s annotation and give pre-annotated results on new documents. </p>
            <p>• Java is embedded into the package so that the users don’t have to install/modify their own Java environment. </p>
            <p>• Compare two folders and show the accuracy file by file.</p>
            <p>• Usability improvement.</p>
            <p>• Bug fixing</p>
        </div>
        -->
            <br>

        <hr />

        <div class="col-lg-6">
            <form id="requestForm" action="./get-clamp.php" method="post" class="form-horizontal">
                <br />
                <div class="form-group">
                    <h2>CLAMP Request Form</h2>
                </div>

                <div class="row" style="margin: 0 -30px;">
                    <div class="col-md-6">
                        <label for="inputFName">First Name <label style="color: #b50000;">*</label></label>
                        <input type="text" class="form-control input-md" id="inputFName" name="inputFName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputLName">Last Name <label style="color: #b50000;">*</label></label>
                        <input type="text" class="form-control input-md" id="inputLName" name="inputLName" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail">Email address <label style="color: #b50000;">*</label> (If you are going to use it for research purposes, please provide your official email account)</label>
                        <input type="email" class="form-control input-md" id="inputEmail" name="inputEmail" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputJobTitle">Job Title <label style="color: #b50000;">*</label></label>
                        <input type="text" class="form-control input-md" id="inputJobTitle" name="inputJobTitle" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputOrganization">Full Name of the Organization <label style="color: #b50000;">*</label></label>
                    <input type="text" class="form-control input-md" id="inputOrganization" name="inputOrganization" required>
                </div>
                <div class="form-group">
                    <label>Please choose the best description of your institution/organization type. <label
                            style="color: #b50000;">*</label></label>
                    <div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Commercial"  required>Commercial</label>
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Non-profit" required>Non-profit</label>
                        </div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Other" required>Other</label>
                            <label for="orgTypeOther" class="sr-only">Specify other type</label><input class="text-inline input-md" type="text" name="orgTypeOther" id="orgTypeOther">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>How would CLAMP be used at your organization? <label style="color: #b50000;">*</label></label>
                    <div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Operational" required >Operational</label>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Research" required> Research</label>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Educational" required> Educational</label>
                        </div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Other"  required> Other</label>
                            <label for="useTypeOther" class="sr-only">Specify other use</label><input class="text-inline input-md" type="text" data-other="useType" name="useTypeOther" id="useTypeOther">
                        </div>
                        <div class="invalid-feedback">
                          Please choose a reason.
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDetails">Please provide more details about your project (at least 150 characters) <label
                            style="color: #b50000;">*</label> </label>
                    <textarea class="form-control" id="inputDetails" rows="5" name="inputDetails" required="" minlength="150"></textarea>
                </div>

                <div class="form-group">
                    <label>Please select the version of CLAMP that you would like to receive
                        <span style="color: #b50000;">*</span>
                    </label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="clampType" value="CLAMP-CMD (Commandline)" required>
                            CLAMP-CMD (Commandline)
                        </label>
                        <br />
                        <label class="radio-inline">
                            <input type="radio" name="clampType" value="CLAMP-GUI (Windows)" required>
                            CLAMP-GUI (Windows)
                        </label>
                        <br />
                        <label class="radio-inline">
                            <input type="radio" name="clampType" value="CLAMP-GUI (Mac OS X)" required>
                            CLAMP-GUI (Mac OS X)
                        </label>
                    </div>
                </div>

		<div class="form-group">
			<a href="license_agreement.txt" target="_blank">Please click here to see CLAMP License Agreement</a>
		</div>

                <div class="form-group">
                    <label class="text-danger">
                        We respect your privacy and will not share your personal
                        information except as needed for access to CLAMP. If you elect, we may share
                        the name of your institution to publicize where CLAMP is being used.
                    </label>

                    <label>Do you consent to the use of your name and affiliation as a user of our system? <label style="color: #b50000;">*</label></label>
                    <div>
                        <label class="radio-inline"> <input type="radio" name="consent" value="Yes" checked required>Yes</label>
                        <label class="radio-inline"> <input type="radio" name="consent" value="No">No</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="g-recaptcha" style="margin-bottom: 10px" data-sitekey="<?php echo $siteKey; ?>"></div>
                    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>

                    <button type="submit" class="btn btn-primary btn-lg" name="submit">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($command)){
    echo $command;
}
?>
<?php include dirname(__FILE__) . '/../footer.php'; ?>
