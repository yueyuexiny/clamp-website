<?php $pageTitle = "Clamp FAQ" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Read Clinical Annotation Manual. To Learn More About Medical Bio-Informatics NLP Tool, Read Starter Guide." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

    <div class="container page-container">
        <br/>
        <div class="row">
            <div class="col-md-12">

                <h3 class="documentation" style="margin-bottom: 10px">
                    <span class="glyphicon glyphicon-question-sign"></span> FAQ
                </h3>
                <div class="panel-group" id="accordion">

                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <span class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    <strong>What is CLAMP? </strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingOne">
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
                        <div class="panel-heading" role="tab" id="headingOne">
                            <span class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen"
                                   aria-expanded="true" aria-controls="collapseFourteen">
                                    <strong>&#128293; How to upgrade to CLAMP new version 1.4.0 </strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFourteen">
                            <div class="panel-body">
                                <p>
                                    <strong class="text-primary">On Windows</strong>, simply copy contents of your previous work folder (i.e. 
                                    from older Clamp_x.xx.xx_win\workspace\MyPipeline\ contents to new 
                                    ClampWin_1.4.0\workspace\MyPipeline\ contents) using <strong class="text-primary">Windows Explorer</strong> 
                                    and <strong class="text-primary">restart CLAMP</strong> if it’s already running. On startup, CLAMP will recognize 
                                    these projects and import them into your workspace.
                                    <br>
                                    <strong class="text-primary">On MacOSX</strong>, similarly copy contents of your previous work folder (i.e. from older 
                                    ClampMac_x.xx.xx /workspace/MyPipeline/ contents to new ClampMac_1.4.0/workspace/MyPipeline/ 
                                    contents) using <strong class="text-primary">Finder</strong> and <strong class="text-primary">restart CLAMP</strong> if it’s already running. On startup, CLAMP will 
                                    recognize these projects and import them into your new workspace.
                                    <br>
                                    <br>
                                    <strong class="text-primary"> Here is the example how to upgrade CLAMP from old version to 1.4.0.</strong>
                                    <br> 
									1.	Find your pipeline project from old version folder, for example: 
									<br>
                                    <img alt="upgrade1" src="img/upgrade1.png" width="1100" height="400">
                                    <br>
                                    2.	Copy them to a new CLAMP 1.4.0 work folder.
                                    <br>
                                    <img alt="upgrade2" src="img/upgrade2.png" width="1100" height="400">
                                    <br>
                                    3.	Restart CLAMP 1.4.0, CLAMP will recognize these projects and import them into your new workspace.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFour">
                                    <strong>How long does it take to download CLAMP?</strong>
                                </a>
                            </span>
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
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>What if the download stops or is interrupted before it is complete?</strong>
                                </a>
                            </span>
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
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>How do I install CLAMP?</strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>
                                    The CLAMP System is provided as a .zip file. After downloading the compressed file,
                                    unzip the package in the directory of choice and the system is ready for use. You
                                    can
                                    run the system by double clicking on the startCLAMP icon to launch the GUI of CLAMP.
                                    Installation instructions are the same for both Windows and Mac computers.
                                    For the CLAMP command line version please refer to the "ReadMe" file.
                                </p>
                                <br>
                                <p>
                                    <strong>
                                        Remember that in order to run clamp on your machine, you need to have
                                        elevated (administrative) privileges on your machine.
                                        When you run CLAMP on you Mac for the first time,
                                        it asks for your permission to run it as "UnSafe" application.
                                        This is because CLAMP is not downloaded from Apple Store.
                                        You can simply allow your operating system to run CLAMP and use it on your
                                        machine.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFive">
                                    <strong>What are the prerequisites to run CLAMP?</strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFive">
                            <div class="panel-body">
                                <p>
                                    The only prerequisite necessary to compile CLAMP is JRE 1.8 (Java Runtime
                                    Environment).
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
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseSix">
                                    <strong>Where can I download JRE8?</strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingSix">
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
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseSeven">
                                    <strong>What is a license number?</strong>
                                </a>
                            </span>
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
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseEight">
                                    <strong>Where do I get a CLAMP serial number? </strong>
                                </a>
                            </span>
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
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseNine">
                                    <strong>What are the core building blocks of CLAMP? </strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <p>
                                    The high performance language processing framework in CLAMP consists of the
                                    following
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
                                    The CLAMP framework provides alternative components for some tasks, utilizing rule
                                    based
                                    methods and/or machine learning methods such as support vector machines, conditional
                                    random
                                    fields, and neural network based word embedding algorithms.
                                </p>
                                <br/>
                                <p><strong class="text-primary">Corpus Management and Annotation Tool:</strong>
                                    The user interface also provides required tools to maintain and annotate text
                                    corpora.
                                    It hosts an improved version of the brat annotation tool for textual annotations.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingTen">
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTen">
                                    <strong>What components are included in CLAMP?</strong>
                                </a>
                            </span>
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
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseEleven">
                                    <strong>How are CLAMP files/folders organized? </strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <p>
                                    Since CLAMP is a stand-alone eclipse plugin, its folder structure is similar to
                                    other
                                    eclipse plugins. For more information, check out CLAMP user manual at the top of the
                                    page.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingThirteen">
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThirteen">
                                    <strong>Where do the annotated documents included in CLAMP come form?</strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <p>
                                    The pre-annotated notes are crawled from
                                    <a href="http://www.mtsamples.com/">http://www.mtsamples.com</a>
                                    that has lots of publicly available de-identified notes.
                                    But only 'discharge summary' and 'general medicine' are included in CLAMP.
                                    We annotated all the 'problem', 'treatment' and 'test' mentions in the notes, based on the I2B2 2010 NER guideline.
                                    <a href="https://www.i2b2.org/NLP/Relations/assets/Concept%20Annotation%20Guideline.pdf">
                                        i2b2 Concept Annotation Guideline
                                    </a>

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingTwelve">
                            <span class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwelve">
                                    <strong>How can I get support? </strong>
                                </a>
                            </span>
                        </div>
                        <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <p>
                                    The CLAMP System was developed by Dr. Hua Xu's team group from
                                    the School of Biomedical Informatics at the University of Texas Health Science
                                    Center in
                                    Houston.
                                </p>
                                <p>For technical issues, please contact: <strong>Jingqi.Wang@uth.tmc.edu</strong></p>
                                <p>For any other issues, please contact: <strong>Anupama.E.Gururaj@uth.tmc.edu </strong>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>