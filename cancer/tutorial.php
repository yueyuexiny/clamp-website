<?php $pageTitle = "Tutorial" ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

    <div class="container page-container">
        <br />
        <div class="section-header">
            <h1><?php echo $clampVersion?> Tutorial</h1>
        </div>

        <h3>Presentations</h3>
        <div>
            <ul>
                <li>
                    <p>
                        <strong>Hua Xu: 2015 AMIA NLP PreSymposia <?php echo $clampVersion?> Demo.</strong>
                        <a href="./res/2015_AMIA_NLP_PreSymposia_CLAMP_Demo.pptx">Download Presentation...</a>
                    </p>
                </li>
            </ul>
        </div>

        <hr />
        <br />
        <h3>Use Case Videos</h3>
        <br />
        <div class="tutorials">
            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail">
                        <h3><?php echo $clampVersion?> Demo for Smoking Status</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="420" height="315" src="https://www.youtube.com/embed/SYYyUgnv0uE" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div>
                            <span class="label label-primary">Tutorial</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <h3><?php echo $clampVersion?> Demo for Lab Test</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="420" height="315" src="https://www.youtube.com/embed/fvGeK1O16qg" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div>
                            <span class="label label-primary">Tutorial</span>
                            <span class="label" style="background-color: #387f38">Lab Test</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include dirname(__FILE__) . '/views/footer.php'; ?>