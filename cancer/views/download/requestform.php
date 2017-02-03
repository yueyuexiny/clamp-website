<!-- =========================
     Get CLAMP
   ============================== -->
<div class="download" style="margin-top: 30px">
    <div class="container page-container">
        <div class="section-content">
            <p>
                CLAMP-Cancer is free for academic use/research purposes.
                Please fill up the form below with your project information. We will send you the download link to
                the version you are requesting and activation code after review.
            </p>
            <br />
            <p class="normal-bold-text">
                Please note: If you need the source code of CLAMP-Cancer, please contact
                Dr. Anupama E. Gururaj at <a href="mailto:Anupama.E.Gururaj@uth.tmc.edu">Anupama.E.Gururaj@uth.tmc.edu</a>
            </p>
        </div>

        <hr />

        <div class="col-lg-8 col-sm-offset-2 center">
            <form id="requestForm" action="./cancer.php#download" method="post" class="form-horizontal">
                <br />
                <div class="form-group">
                    <h2>CLAMP-Cancer Request Form</h2>
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
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Commercial" checked required>Commercial</label>
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Non-profit" required>Non-profit</label>
                        </div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="orgType" value="Other" required>Other</label>
                            <label for="orgTypeOther" class="sr-only">Specify other type</label><input class="text-inline input-md" type="text" name="orgTypeOther" id="orgTypeOther">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>How would CLAMP-Cancer be used at your organization? <label style="color: #b50000;">*</label></label>
                    <div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Operational" checked required>Operational</label>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Research" required> Research</label>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Educational" required> Educational</label>
                        </div>
                        <div>
                            <label class="radio-inline"> <input type="radio" name="useType" value="Other" required> Other</label>
                            <label for="useTypeOther" class="sr-only">Specify other use</label><input class="text-inline input-md" type="text" data-other="useType" name="useTypeOther" id="useTypeOther">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputDetails">Please provide more details about your project (at least 250 characters) <label
                            style="color: #b50000;">*</label> </label>
                    <textarea class="form-control" id="inputDetails" rows="5" name="inputDetails" required="" minlength="250"></textarea>
                </div>

                <div class="form-group">
                    <label>Please select the version of CLAMP that you would like to receive
                        <span style="color: #b50000;">*</span>
                    </label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="clampType" value="CLAMP-Cancer" checked required>
                            CLAMP-Cancer
                        </label>
                    </div>
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
