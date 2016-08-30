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
                CLAMP-CMD is free to use. For CLAMP-GUI, we may charge a fee, depending on the type of license. It
                is
                free for academic use/research purposes.
                Please fill up the form below with your project information. We will send you the download link to
                the version you are requesting and activation code after review.
            </p>
            <br />
            <p class="normal-bold-text">
                Please note: If you need the source code of CLAMP, please contact 
                Dr. Anupama E. Gururaj at <a href="mailto:Anupama.E.Gururaj@uth.tmc.edu">Anupama.E.Gururaj@uth.tmc.edu</a>
            </p>            
        </div>

        <hr />

        <div class="col-lg-6">            
            <form id="requestForm" action="./get-clamp.php" method="post" class="form-horizontal">
                <br />
                <div class="form-group">
                    <h2>CLAMP Request Form</h2>
                </div>

                <div class="row" style="margin: 0 -30px;">
                    <div class="col-md-6">
                        <label for="inputFName">First Name <label style="color: red;">*</label></label>
                        <input type="text" class="form-control input-md" id="inputFName" name="inputFName" required aria-required="true" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputLName">Last Name <label style="color: red;">*</label></label>
                        <input type="text" class="form-control input-md" id="inputLName" name="inputLName" required aria-required="true" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail">Email address <label style="color: red;">*</label></label>
                        <input type="email" class="form-control input-md" id="inputEmail" name="inputEmail" required aria-required="true" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputJobTitle">Job Title <label style="color: red;">*</label></label>
                        <input type="text" class="form-control input-md" id="inputJobTitle" name="inputJobTitle" required aria-required="true" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputOrganization">Organization <label style="color: red;">*</label></label>
                    <input type="text" class="form-control input-md" id="inputOrganization" name="inputOrganization" required aria-required="true" >
                </div>
                <div class="form-group">
                    <label>Please choose the best description of your institution/organization type. <label
                            style="color: red;">*</label></label>
                    <div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Commercial" checked required aria-required="true" >Commercial</label>
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Non-profit" required aria-required="true" >Non-profit</label>
                        </div>
                        <div>
                            <label for="inputOtherUseRadio" class="radio-inline"> 
                                <input id="inputOtherUseRadio" type="radio" name="orgType" value="Other" required aria-required="true" >
                                Other
                            </label>
                            <input id="inputOtherUse" class="text-inline input-md" type="text" name="orgTypeOther">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>How would CLAMP be used at your organization? <label style="color: red;">*</label></label>
                    <div>
                        <div>
                            <label for="input-operational-use" class="radio-inline"> 
                                <input id="input-operational-use" type="radio" name="useType" value="Operational" checked required aria-required="true" >
                                Operational
                            </label>
                            <label for="input-research-use" class="radio-inline"> 
                                <input id="input-research-use" type="radio" name="useType" value="Research" required aria-required="true" > 
                                Research
                            </label>
                            <label for="input-educational-use" class="radio-inline"> 
                                <input id="input-educational-use" type="radio" name="useType" value="Educational" required aria-required="true" > 
                                Educational
                            </label>
                        </div>
                        <div>
                            <label for="input-other-use" class="radio-inline"> 
                                <input id="input-other-use" type="radio" name="useType" value="Other" required aria-required="true" > 
                                Other
                            </label>
                            <input class="text-inline input-md" type="text" data-other="useType" name="useTypeOther">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDetails">Please provide more details about your project (at least 250 characters) <label
                            style="color: red;">*</label> </label>
                    <textarea class="form-control" id="inputDetails" rows="5" name="inputDetails" required="" aria-required="true" minlength="250"></textarea>
                </div>

                <div class="form-group">
                    <strong>Please select the version of CLAMP that you would like to receive 
                        <span style="color: red;">*</span>
                    </strong>
                    <div>
                        <label for="CommandLineDownload" class="radio-inline">
                            <input id="CommandLineDownload" type="radio" name="clampType" value="CLAMP-CMD (Commandline)" checked required aria-required="true" >
                            CLAMP-CMD (Commandline)
                        </label>
                        <br />
                        <label for="WinGUIDownload" class="radio-inline">
                            <input id="WinGUIDownload" type="radio" name="clampType" value="CLAMP-GUI (Windows)" required aria-required="true" >
                            CLAMP-GUI (Windows) 
                        </label>
                        <br />
                        <label id="MacGUIDownload" class="radio-inline"> 
                            <input id="MacGUIDownload" type="radio" name="clampType" value="CLAMP-GUI (Mac OS X)" required aria-required="true" >
                            CLAMP-GUI (Mac OS X)
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-danger">
                        We respect your privacy and will not share your personal 
                        information except as needed for access to CLAMP. If you elect, we may share 
                        the name of your institution to publicize where CLAMP is being used.
                    </label>

                    <label>Do you consent to the use of your name and affiliation as a user of our system? <label style="color: red;">*</label></label>
                    <div>
                        <label for="ConsentYes" class="radio-inline">
                            <input id="ConsentYes" type="radio" name="consent" value="Yes" checked required aria-required="true" >
                            Yes
                        </label>
                        <label for="ConsentNo" class="radio-inline">
                            <input id="ConsentNo" type="radio" name="consent" value="No">
                            No
                        </label>
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