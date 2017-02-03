<a href="#" class="back-to-top" style="display: none;">Back to Top</a>

<section id="Home-Intro" class="feature-box">
    <div class="container">
        <div class="section-header">
            <h2><?php echo $clampVersion?></h2>
            <h5 class="text-center">
                A tool to quickly build customized NLP pipelines for extracting cancer information from pathology reports, though user-friendly interface with minimum programming knowledge.
            </h5>
        </div>
        <div style="margin-top: 50px">
        <div class="col-md-6">
        <div class="description">
            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-line-chart fa-5x center" style="color:#0099cc "></i>
                </div>
                <div class="col-md-8">
                    <h3 style="color: #0099cc">High Performance</h3>
                    <p><?php echo $clampVersion;?> can extract comprehensive types of cancer-related information in pathology reports. (e.g., tumor characteristics, metastasis status, biomarkers, etc.)</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-handshake-o fa-5x" style="color:#75C181 "></i>
                </div>
                <div class="col-md-8">
                    <h3 style="color:#75C181 ">User-Friendly Interface</h3>
                    <p>You can build customized NLP pipelines for your specific needs using the CLAMP-Cancer GUI version.</p>
                </div>



            </div>
            <a class="btn btn-primary btn-md" href="#download">Download CLAMP-Cancer</a>
            <a class="btn btn-secondary btn-md" href="#manual">User Manual</a>

        </div>
        </div>


        <div class="col-md-6" >
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/JbT84mTJToU" frameborder="0" allowfullscreen></iframe>
                </div>
        </div>
            </div>
    </div>
</section>

<hr>

<div class="container">
<section class="feature-box" id="download">
        <h3 class="download" style="color: #0099cc">
           Download CLAMP-Cancer
        </h3>
        <?php include dirname(__FILE__) . '/../../../helper.php'; ?>
        <?php include dirname(__FILE__) . '/../download/requestform.php';?>

</section>
</div>

<hr>
<div class="container">
<section class="feature-box" id="manual">

        <h3 class="download" style="color: #75c181;">
            Manual
        </h3>
        <?php include dirname(__FILE__) . '/../manual/manual.php';?>
    
</section>
</div>