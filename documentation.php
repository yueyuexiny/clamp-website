<?php $pageTitle = "Software Documentation" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Read Clinical Annotation Manual. To Learn More About Medical Bio-Informatics NLP Tool, Read Starter Guide." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

<div class="container page-container">
    <br />
    <div class="section-header">
        <h1>Documentation</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="section-subheader">Command Line Version</h2>                    
                    <img class="img-responsive img-rounded" src="img/screenshot.console.jpg" style="margin-bottom: 20px;" alt="" />
                    <hr />
                    <ul>
                        <li>
                            <div class="documentation-row">
                                <h3 class="documentation">
                                    <span class="glyphicon glyphicon-file"></span> 
                                    <a href="./res/CLAMP_v1.1.3_README.pdf" target="_blank">
                                        Getting Started Manual...
                                    </a>                                
                                </h3>                                
                            </div>
                        </li>

                        <li>
                            <hr />
                            <div class="documentation-row">
                                <h3 class="documentation">
                                    <span class="glyphicon glyphicon-book"></span>                                     
                                    User Manual                                    
                                </h3>
                            </div>                           
                            <div id="console-manual" class="manual-list clearfix">
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>NLP Component</strong>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>Build and Run a Pipeline</strong>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>Annotate Corpus</strong>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>Machine learning model development</strong>
                                </a>
                            </div>                            
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="section-subheader">GUI Version</h2>                    
                    <img class="img-responsive img-rounded" src="img/screenshot.gui.jpg" style="margin-bottom: 20px;" alt="" />
                    <hr />
                    <ul>
                        <li>
                            <div class="documentation-row">
                                <h3 class="documentation">
                                    <span class="glyphicon glyphicon-console"></span> 
                                    <a href="./res/CLAMP_v.1.1.3_installation_guide.pdf" target="_blank">                                        
                                        Installation Guide...
                                    </a>                                    
                                </h3>                                
                            </div>
                        </li>

                        <li>
                            <hr />
                            <div class="documentation-row clearfix">
                                <h3 class="documentation">
                                    <span class="glyphicon glyphicon-book"></span>
                                    User Manual
                                </h3>                                
                            </div>                          
                            <div id="gui-manual" class="manual-list">
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>NLP Component</strong>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>Build and Run a Pipeline</strong>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>Annotate Corpus</strong>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> 
                                    <strong>Machine learning model development</strong>
                                </a>
                            </div>                         
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  

    <div>
        <h3 class="documentation" style="margin-bottom: 10px">
            <span class="glyphicon glyphicon-question-sign"></span> FAQ
        </h3>
        <div class="clearfix panel-group" role="tablist" aria-multiselectable="true">

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <strong>Why To Use CLAMP?</strong>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <p>
                            CLAMP is a comprehensive clinical Natural Language Processing software that enables recognition 
                            and automatic encoding of clinical information in narrative patient reports. 
                            In addition to running clinical concept extraction as well as annotation pipelines, 
                            the individual components of the system can also be used as independent modules.                             
                        </p>
                        <br />
                        <p>
                            The system lends itself for diverse applications in a broad range of clinical domains.
                            The high performance language processing framework in CLAMP consists of the following 
                            key building blocks:                            
                        </p>
                        <br />
                        <h3><strong>NLP Pipelines:</strong></h3>
                        <p>

                            CLAMP components builds on a set of high performance NLP components that were proven 
                            in several clinical NLP challenges such as i2b2 , ShARe/CLEF , and SemEVAL.
                        </p>

                        <br />
                        <h3><strong>Machine Learning and Hybrid Approaches:</strong></h3>                        
                        <p>
                            The CLAMP framework provides alternative components for some tasks, utilizing rule based 
                            methods and/or machine learning methods such as support vector machines, conditional random 
                            fields, and neural network based word embedding algorithms.
                        </p>

                        <br />
                        <h3><strong>Corpus Management and Annotation Tool:</strong></h3>                        
                        <p>
                            The user interface also provides required tools to maintain and annotate text corpora.
                            It hosts an improved version of the brat annotation tool for textual annotations.
                        </p>                        
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <strong>Who Are The Maintainers Of CLAMP?</strong>
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <p>
                            The CLAMP System was developed by Dr. Hua Xu's team group from 
                            the School of Biomedical Informatics at the University of Texas Health Science Center in Houston.
                        </p>
                        <p>For technical issues, please contact: <strong>Jingqi.Wang@uth.tmc.edu</strong></p>
                        <p>For any other issues, please contact: <strong>Anupama.E.Gururaj@uth.tmc.edu </strong></p>                        
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>How Can I Get CLAMP License?</strong>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <p><strong>CLAMP is available in two versions:</strong></p>
                        <br />                                       
                        <ol>
                            <li>
                                <p>
                                    1) CLAMP-CMD, a command line program that implements the 
                                    state-of-the-art techniques for extracting clinical concepts from text.
                                </p>                                
                            </li>
                            <li>
                                <p>
                                    2) CLAMP-GUI, which provides GUIs for efficiently building clinical NLP 
                                    pipelines for your individual applications.
                                </p>                                
                            </li>
                        </ol>                        
                        <p>CLAMP-CMD is free to use.</p>
                        <p>For CLAMP-GUI, we may charge a fee, depending on the type of license. For more information, visit <a href="/get_clamp.php">download page</a>.</p>                        
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>What Are The Prerequisites To Run CLAMP?</strong> 
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <p>
                            CLAMP is a stand-alone Java application based on Eclipse platform technologies and 
                            uses the Apache UIMA (Unstructured Information Management Architecture) framework.
                        </p>
                        <br />
                        <p>
                            CLAMP is distributed as a ready-to-use binary package that can either be executed at the 
                            command line or carries the associated Graphic User Interface (GUI).
                            The only prerequisite necessary to compile CLAMP is Java Runtime Environment (JRE) 1.8.
                            Please ensure that you have JRE 1.8 or higher installed in your system.
                            <strong>You can download JRE 8 from <a href="http://www.oracle.com/technetwork/java/javase/downloads">Oracle website</a>.</strong>
                        </p>
                        <br />
                        <p>
                            Run the following command in both Mac and Windows to check your version:
                        </p>
                        <code>java –version</code>                    
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                            <strong>How To Install CLAMP?</strong> 
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        <p>
                            The CLAMP System is provided as a .zip file. After downloading the compressed file, 
                            unzip the package in the directory of choice and the system is ready for use.
                            You can run the system by double clicking on the startCLAMP icon to launch the GUI of CLAMP.
                            Installation instructions are the same for both Windows and Mac computers. 
                            For the CLAMP command line version please refer to the "ReadMe" file.
                        </p>                        
                        <br />
                        <p>
                            <strong>
                                Remember that in order to run clamp on your machine, you need to have 
                                elevated (administrative) privileges on your machine.
                                When you run CLAMP on you Mac for the first time, 
                                it asks for your permission to run it as "UnSafe" application.
                                This is because CLAMP is not downloaded from Apple Store.
                                You can simply allow your operating system to run CLAMP and use it on your machine.
                            </strong>
                        </p>                        
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                            <strong>How CLAMP Packages Directory Organized?</strong> 
                        </a>
                    </h4>
                </div>                
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        <p>
                            Since CLAMP is a stand-alone Eclipse Plugin, its folder structure is similar to 
                            other eclipse plugins:
                        </p>                        
                        <p>
                            <strong class="text-primary">Configuration Folder:</strong>
                            This folder contains CLAMP configuration files.
                        </p>
                        <p>
                            <strong class="text-primary">StartClamp:</strong>
                            This is the launching point for the CLAMP GUI. 
                            In Windows, this is an executable file while in Mac, this is an application.
                        </p>
                        <p>
                            <strong class="text-primary">Workspace Folder:</strong>
                            This folder contains four sub-folders:
                        </p>
                        <ol class="ordered-list">
                            <li>
                                <strong>ComponentLibrary:</strong>
                                Contains the components used in machine learning feature extraction and NLP functions.                            
                            </li>
                            <li>
                                <strong>MyCorpus:</strong>
                                Contains the customized corpus built by the users.
                            </li>
                            <li>
                                <strong>MyPipeline:</strong>
                                Contains the customized pipeline created by users for clinical notes processing.
                            </li>
                            <li>
                                <strong>PipelineLibrary:</strong>
                                Contains the built-in pipelines ready to use for a series of common clinical applications.
                            </li>
                        </ol>
                        <p>
                            <strong class="text-primary">Plugins Folder:</strong>
                            This folder contains the following items:
                        </p>
                        <ol class="ordered-list">
                            <li>
                                All the plugins that are used by CLAMP GUI such as org.eclipse.wst, org.eclipse.ui, etc.
                            </li>
                            <li>
                                The CLAMP dependencies files.
                            </li>
                            <li>
                                .JAR files that are Eclipse generated files.
                            </li>
                            <li>
                                A CLAMP core .jar file called "ClampGUI_1.1.5.jar".
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                            <strong>What Are The Function Modules In CLAMP?</strong> 
                        </a>
                    </h4>
                </div>                
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <p>
                            During the text analysis process of CLAMP, the following seven 
                            functional modules will be executed sequentially as a pipeline:
                        </p>                        
                        <p>
                            <strong class="text-primary">Sentence Detector:</strong>
                            Identifies the boundaries of each single sentence in text.
                        </p>
                        <p>
                            <strong class="text-primary">Tokenizer:</strong>
                            Segments the sentence into a sequence of tokens.
                        </p>
                        <p>
                            <strong class="text-primary">POS tagger:</strong>
                            Assigns part of speech to each token.
                        </p>                        
                        <p>
                            <strong class="text-primary">Section Identifier:</strong>
                            Identifies section headers in a clinical note and maps them into general categories. 
                            For example, the section header "icd10 code" will be generalized to "icd_code".
                        </p>                        
                        <p>
                            <strong class="text-primary">Named Entity Recognizer:</strong>
                            Identifies named entities, i.e. clinical concepts, and their semantic types. 
                            CLAMP by default allows identification of the following three types of clinical 
                            concepts: “problem”, “treatment” and “test”.
                        </p>    
                        <p>
                            <strong class="text-primary">Negation Assertion Recognizer:</strong>
                            Checks whether there is a negation assertion related to a specific clinical concept in the text. 
                            A negation assertion would indicate the absence of the corresponding clinical concept in the 
                            specific context, whereas if there is no negation, it indicates the presence of the concept.
                        </p>
                        <p>
                            <strong class="text-primary">UMLS Encoder:</strong>
                            Maps the terms of clinical concepts to their corresponding CUIs in UMLS. 
                            For example, the term “breast cancer” will be encoded with the CUI of “C6006142” in UMLS.
                        </p>                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>