<?php $pageTitle = "CLAMP Pipeline Library" ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

    <div class="container" xmlns="http://www.w3.org/1999/html">

        <div class="row">
            <a href="#" class="back-to-top" style="display: none;">Back to Top</a>
            <div class="col-md-3">
                <div id="page-wrap">
                    <ul class="manual-nav">
                        <li><label class="tree-toggler nav-header">BEHAVIOR PIPELINE LIBRARY</label>
                            <ul class="tree sublist" style="display: block;">
                                <li><a href="#smoke">Smoking Status Detection</a></li>                                                           
                            </ul>
                            </li>  
                        <li class="divider">
                        </li>
                        <li><label class="tree-toggler nav-header">DISEASE_SYMPTOM PIPELINE LIBRARY</label>
                            <ul class="tree sublist">
                                <li><a href="#bleed">Bleeding Mentions</a></li>
                                <li><a href="#col-cancer">Colorectal Cancer Concept Extraction</a></li>
                                <li><a href="#ppfml">Cancer Pathology Pipeline</a></li>                               
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li>

                            <label class="tree-toggler nav-header">GENERAL PIPELINE LIBRARY</label>
                            <ul class="tree sublist">
                                <li><a href="#ner">General Clinical Concept Extraction</a></li>
                                <li><a href="#ner-att">General Clinical Concept and Attribute Extractione</a></li>
                                <li><a href="#deid">De-identification Pipeline</a></li>
                                <li><a href="#dis-att">Disease Attribute Extraction</a></li>
                                <li><a href="#lab-att">Lab Attribute Extraction</a></li>
                                <li><a href="#med-att">Medication Attribute Extraction</a></li>
                                <li><a href="#tem-att">Temporal Phrase Extraction</a></li>
                            </ul>
                        </li>                     
                        <li class="divider"></li>
                        <li>
                            <a href="#contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-9 manual">
                <section>
                    <h1 class="section-header-manual" id="smoke">BEHAVIOR PIPELINE LIBRARY</h1>

                    <div class="section-body-manual">
                    		<span class="subtitles-manual" id="smoke">• Smoking Status Detection (Smoking_status)</span> 
                    		<p>This is dictionary and rule based pipeline to extract smoking status from notes. 
                    		It will recognize all smoking mentions and then category them into ‘NonSmoker’, ‘PastSmoker’ or ‘Smoker’;</p>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/smoke-comp.png" alt="Smoking-comp" width="700"
                                 height="550"> 
                            <figcaption>Smoking-status Pipeline Components</figcaption>
                            <img src="img/pipeline-library/smoke-output.png" alt="Smoking-out" width="700"
                                 height="800"> 
                            <figcaption>Smoking-status Pipeline Output</figcaption>
                        </figure>                                                
                </section>
                <section>
                    <h1 class="section-header-manual" id="bleed">DISEASE_SYMPTOM PIPELINE LIBRARY</h1>

                    <div class="section-body-manual">
                    		<span class="subtitles-manual" id="bleed">• Bleeding Mentions (Bleeding_extraction)</span> 
                    		<p>This pipeline will extract bleeding related concept and then map them to the UMLS CUI;</p>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/bleed-comp.png" alt="bleed-comp" width="700"
                                 height="550"> 
                            <figcaption>Bleeding_extraction Pipeline Components</figcaption>                           
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="col-cancer">• Colorectal Cancer Concept Extraction	(Colorectal_cancer)</span> 
                    		<p>This pipeline will extract colorectal cancer mentions and then map them to the UMLS CUI;</p>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/colorectal-comp.png" alt="colorectal-comp" width="700"
                                 height="550">                             
                            <figcaption>SColorectal_cancer Pipeline Components</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="ppfml">• Cancer Pathology Pipeline	(PathoPipelineFinalML)</span> 
                    		<p>TThis pipeline will extract Site, Procedure, Histology etc. entities and relations among 
                    		them from pathology notes. </p>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/ppfml-comp.png" alt="ppfml-comp" width="700"
                                 height="550">                              
                            <figcaption>PathoPipelineFinalML Pipeline Output</figcaption>
                        </figure>
                        

                </section>
                <section>
                   <h1 class="section-header-manual" id="ner">GENERAL PIPELINE LIBRARY</h1>

                    <div class="section-body-manual">
                    		<span class="subtitles-manual" id="ner">• General Clinical Concept Extraction (Clamp-ner)</span> 
                    		<p>This is the CLAMP’s default named entity recognition pipeline. It will recognize ‘problem’, 
                    		‘treatment’ and ‘test’ from clinical notes and negation information of each concept. Users can 
                    		add the UMLS encoder component to the end of this pipeline to get the UMLS CUI concept id (UMLS 
                    		account is required for this component).</p>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/clamp-ner-comp.png" alt="Clamp-ner-comp" width="700"
                                 height="550"> 
                            <figcaption>SClamp-ner Pipeline Components</figcaption>
                            <img src="img/pipeline-library/clamp-ner-output.png" alt="Clamp-ner-out" width="700"
                                 height="800"> 
                            <figcaption>Clamp-ner Pipeline Output</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="ner-att">• General Clinical Concept and Attribute 
                    		Extractione (Clamp-ner-attribute)</span> 
                    		<p>This is the default named entity recognition and relation extraction pipeline. The primary 
                    		entities include ‘problem’, ‘treatment’ and ‘test’. For each entity, the pipeline will recognize 
                    		its attribute as well.
                    		<br>
                    		•	Problem	with: 	subject, condition, negation, severity, location, uncertainty;<br>
						•	Lab test	 with:	test value;<br>
						•	Medicine with:	dose, form, route, frequency, duration, necessity;<br>
                    		</p>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/ner-att-comp.png" alt="Ner-att-comp" width="700"
                                 height="550"> 
                            <figcaption>Clamp-ner-attribute Pipeline Components</figcaption>
                            <img src="img/pipeline-library/ner-att-output.png" alt="Ner-att-out" width="700"
                                 height="800"> 
                            <figcaption>Clamp-ner-attribute Pipeline Output</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="deid">• De-identification Pipeline (Deid_pipeline)</span> 
                    		<p>This is the de-identification pipeline. It will recognize all PHI information and then replace them 
                    		with placeholder strings that are defined by the users. It contains 3 sub pipelines which are Disease-attribute, 
                    		Lab-attribute and Medication-attribute. </p>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/deid-comp.png" alt="Deid-comp" width="700"
                                 height="550"> 
                            <figcaption>Deid Pipeline Components</figcaption>                            
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="dis-att">• Disease Attribute Extraction (Disease-attribute)</span> 
                    		<br>                                        
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/disease-att-comp.png" alt="disease-att-comp" width="700"
                                 height="550"> 
                            <figcaption>Disease-attribute Pipeline Components</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="lab-att">• Lab Attribute Extraction (Lab-attribute)</span> 
                    		<br>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/lab-att-comp.png" alt="lab-att-comp" width="700"
                                 height="550"> 
                            <figcaption>Lab-attribute Pipeline Components</figcaption>
                            <img src="img/pipeline-library/lab-att-output.png" alt="lab-att-out" width="700"
                                 height="800"> 
                            <figcaption>Lab-attribute Pipeline Output</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="med-att">• Medication Attribute Extraction (Medication-attribute)</span> 
                    		<br>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/med-att-comp.png" alt="med-att-comp" width="700"
                                 height="550"> 
                            <figcaption>Medication-attribute Pipeline Components</figcaption>
                        </figure>
                        
                        <div class="section-body-manual">
                    		<span class="subtitles-manual" id="tem-att">• Temporal Phrase Extraction (Temporal-attribute)</span> 
                    		<br>                                           
                        <figure class="figure-manual">
                            <img src="img/pipeline-library/temp-att-comp.png" alt="temp-att-comp" width="700"
                                 height="550"> 
                            <figcaption>Temporal-attribute Pipeline Components</figcaption>
                        </figure>
                              
                </section>                    
                <section>
                    <h1 class="section-header-manual" id="contactus">Contact US</h1>
                    <p>The CLAMP System was developed by Dr. Hua Xu’s team from the School of Biomedical Informatics at
                        the University of Texas Health Science Center in Houston.<br>
                        For technical issues, please contact:
                        <a href="mailto:Jingqi.Wang@uth.tmc.edu">
                            Jingqi.Wang@uth.tmc.edu
                        </a>.<br>
                        For any other issues, please contact:
                        <a href="mailto: Anupama.E.Gururaj@uth.tmc.edu">
                            Anupama.E.Gururaj@uth.tmc.edu
                        </a>.
                        <br>
                    </p>
                </section>
                <!-- End of Contact us section-->
            </div>
        </div>
    </div>
<?php include dirname(__FILE__) . '/views/footer.php'; ?>