<?php $pageTitle = "Software Documentation" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Read Clinical Annotation Manual. To Learn More About Medical Bio-Informatics NLP Tool, Read Starter Guide." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

    <div class="container page-container">
        <br/>
        <div class="section-header">
            <h1>Documentation</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2 class="section-subheader">Command Line Version</h2>
                        <img class="img-responsive img-rounded" src="img/screenshot.console.jpg"
                             style="margin-bottom: 20px;" alt=""/>
                        <hr/>
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
                                <hr/>
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
                        <img class="img-responsive img-rounded" src="img/screenshot.gui.jpg"
                             style="margin-bottom: 20px;" alt=""/>
                        <hr/>
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
                                <hr/>
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
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                <strong>What is CLAMP? </strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>
                                CLAMP is a comprehensive clinical Natural Language Processing software that enables
                                recognition
                                and automatic encoding of clinical information in narrative patient reports.
                                In addition to running clinical concept extraction as well as annotation pipelines,
                                the individual components of the system can also be used as independent modules.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseFour">
                                <strong>How long does it take to download CLAMP?</strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <p>
                                The download time varies by location, and internet connection speed.
                                We recommend only use high-speed broadband connections to download CLAMP.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>What if the download stops or is interrupted before it is complete?</strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>If you become disconnected while files are being downloaded, simply reconnect to the
                                internet and retry your download.</p>

                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>How do I install CLAMP?</strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>
                                The CLAMP System is provided as a .zip file. After downloading the compressed file,
                                unzip the package in the directory of choice and the system is ready for use. You can
                                run the system by double clicking on the startCLAMP icon to launch the GUI of CLAMP.
                                Installation instructions are the same for both Windows and Mac computers.
                                For the CLAMP command line version please refer to the "ReadMe" file.
                            </p>
                            </br>
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
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseFive">
                                <strong>What are the prerequisites to run CLAMP?</strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingFive">
                        <div class="panel-body">
                            <p>
                                The only prerequisite necessary to compile CLAMP is JRE 1.8 (Java Runtime Environment).
                                Please ensure that you have Java 8 or higher installed in your system.
                            </p>
                            <br/>
                            <p>
                                Run the following command in both Mac and Windows to check your version:
                            </p>
                            <code>java –version</code>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseSix">
                                <strong>Where can I download JRE8?</strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                            <p>
                                You can download JRE 8 from <strong><a
                                        href="http://www.oracle.com/technetwork/java/javase/downloads">Oracle
                                        website</a></strong>.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingSeven">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseSeven">
                                <strong>What is a license number?</strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <p>
                                It is a number that will be provided for you by CLAMP technical team. You need this
                                number to activate the full version of CLAMP GUI version.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingEight">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEight">
                                <strong>Where do I get a CLAMP serial number? </strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <p>
                                For more information, visit <a href="get-clamp.php">download page</a>.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingNine">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseNine">
                                <strong>What are the core building blocks of CLAMP? </strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <p>
                                The high performance language processing framework in CLAMP consists of the following
                                key building blocks:
                            </p>
                            <br/>
                            <p>
                                <strong class="text-primary">NLP Pipelines:</strong>
                                CLAMP components builds on a set of high performance NLP components that were proven
                                in several clinical NLP challenges such as i2b2 , ShARe/CLEF , and SemEVAL.
                            </p>
                            <br/>
                            <p><strong class="text-primary">Machine Learning and Hybrid Approaches:</strong>
                                The CLAMP framework provides alternative components for some tasks, utilizing rule based
                                methods and/or machine learning methods such as support vector machines, conditional
                                random
                                fields, and neural network based word embedding algorithms.
                            </p>
                            <br/>
                            <p><strong class="text-primary">Corpus Management and Annotation Tool:</strong>
                                The user interface also provides required tools to maintain and annotate text corpora.
                                It hosts an improved version of the brat annotation tool for textual annotations.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingTen">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTen">
                                <strong>What components are included in CLAMP?</strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <p>
                                Here is the list of the components that are included in CLAMP:
                            <p><strong class="text-primary">Sentence Detector</strong></p>
                            <p><strong class="text-primary">Tokenizer</strong></p>
                            <p><strong class="text-primary">POS Tagger</strong></p>
                            <p><strong class="text-primary">Section Identifier</strong></p>
                            <p><strong class="text-primary">Named Entity Recognizer</strong></p>
                            <p><strong class="text-primary">Negation Assertion Recognizer</strong></p>
                            <p><strong class="text-primary">Chunker</strong></p>
                            <p><strong class="text-primary">Ruta Rule-Engin</strong></p>
                            <p><strong class="text-primary">UMLS Encoder</strong>, and finally</p>
                            <p><strong class="text-primary">User-Defined components</strong></p>

                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingEleven">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseEleven">
                                <strong>How are CLAMP files/folders organized? </strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <p>
                                Since CLAMP is a stand-alone eclipse plugin, its folder structure is similar to other
                                eclipse plugins. For more information, check out CLAMP user manual at the top of the page.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingTwelve">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwelve">
                                <strong>How can I get support? </strong>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <p>
                                The CLAMP System was developed by Dr. Hua Xu's team group from
                                the School of Biomedical Informatics at the University of Texas Health Science Center in
                                Houston.
                            </p>
                            <p>For technical issues, please contact: <strong>Jingqi.Wang@uth.tmc.edu</strong></p>
                            <p>For any other issues, please contact: <strong>Anupama.E.Gururaj@uth.tmc.edu </strong></p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>