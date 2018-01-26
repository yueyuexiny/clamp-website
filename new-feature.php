<?php $pageTitle = "CLAMP Current Users" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Clamp Current Users." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>
<style>
.button {
    background-color: #3399CC;
    border: none;
    color: white;
    padding: 25px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    width: 40%;
    position: relative
    
}
</style>

    <div class="container" xmlns="http://www.w3.org/1999/html">

        <div class="row">
            <a href="#" class="back-to-top" style="display: none;">Back to Top</a>
            <div class="col-md-3">
                <div id="page-wrap">
                    <ul class="manual-nav">                                             
                        <li><label class="tree-toggler nav-header">NEW FEATURES IN CLAMP 1.4.0 </label>
                            <ul class="tree sublist" style="display: block;">
                                <li><a href="#newfeature1.4.0">NEW FEATURES</a></li>
                                <li><a href="#improvement1.4.0">FUNCTION IMPROVEMENT</a></li>
                                <li><a href="#bugfix1.4.0">BUG FIXING</a></li>                               
                            </ul>
                            </li>                       
                        <li class="divider"></li>
                        <li>
                            <a href="get-clamp.php">DOWNLOAD</a>
                        </li>
                    </ul>
                </div>

            </div>
    <br/>
    			<div class="col-md-9 manual">
    			
                    <h1 class="section-header-manual" id="newfeature1.4.0">New Features</h1>

                    <div class="section-body-manual">
                    		<span class="subtitles-manual">•	CLAMP GUI 1.4.0 version support reading/writing database via JDBC driver</span> 
                    		<p>Currently tested on MySQL, PostgreSQL, and Oracle. The setup screenshot as below for the reference.</p>                                           
                        <figure class="figure-manual">
                            <img src="img/new-feature/database-config.png" alt="Database Configration" width="700"
                                 height="550"> 
                            <figcaption>Database Configration</figcaption>
                        </figure>

                        <div class="section-body-manual">
                    		<span class="subtitles-manual">•	Improved concept mapping function</span> 
                    		<p>Currently tested on MySQL, PostgreSQL, and Oracle. The setup screenshot as below for the reference.</p>                                           
                        <figure class="figure-manual">
                            <img src="img/new-feature/mapping.png" alt="Mapping Function" width="800"
                                 height="400">
                            <figcaption>Mapping Function</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual">•	Pre-annotated machine learning based test-value extraction component</span> 
                    		<p>Now CLAMP can Map to selected terminologies (ICD10, SNOMEDCT, LOINC, RxNorm) based on concept semantic types. 
                    		Add ConceptMapping to your pipeline components cluster, then can check the output of the terminologies mapping 
                    		after running the pipeline.</p>                                           
                        <figure class="figure-manual">
                            <img src="img/new-feature/test-value.png" alt="Test-value Extraction" width="800"
                                 height="300">
                            <figcaption>Test-value Extraction</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual">•	Online live demo available now</span> 
                    		<p>By clicking this link (<a href="https://clamp.uth.edu/clampdemo.php">https://clamp.uth.edu/clampdemo.php</a>), you can start surfing with CLAMP as you want.</p>                                           
                        <figure class="figure-manual">
                            <img src="img/new-feature/online-demo.png" alt="Online Demo" width="700"
                                 height="500">
                            <figcaption>Online Demo</figcaption>
                        </figure>

                
                
                
                    <h1 class="section-header-manual" id="improvement1.4.0">Improvements</h1>

                    <div class="section-body-manual">
                    		<span class="subtitles-manual">
                    		•	  Reduce the size of the default CRF NER model, increase memory efficiency.<br>
             			<br>
						•	  Implement a Java-based CRF predictor, improved running speed on large corpus.<br>
						<br>
						•	  Improve the accuracy of NER-attribute / test-value / medication-signature pipeline. <br></span> 
						<br>
                    		
                
                
                
                    <h1 class="section-header-manual" id="bugfix1.4.0">Bug fixing</h1>

                    <div class="section-body-manual">
                    		<span class="subtitles-manual">
                    		•	  Fix one resource leak.<br>
             			<br>
						•	  Fix a bug when selecting the file path from the file system.<br>
						<br>
						•	  Use bright colors to highlight entities in the online demo. <br></span> 
						<br>
                    	
               
                
                <br>
                
                		<div>
  					<a href="get-clamp.php" class="button">Download</a>
  					<a href="clampdemo.php" class="button">Try It Online</a>
  					</div>
  				
						
           		<br>
				<br>
                </div>    


				
     </div>

</div>

<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>