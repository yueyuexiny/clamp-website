<?php $pageTitle = "Manual" ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

    <div class="container" xmlns="http://www.w3.org/1999/html">

        <div class="row">
            <a href="#" class="back-to-top" style="display: none;">Back to Top</a>
            <div class="col-md-3">
                <div id="page-wrap">
                    <ul class="manual-nav">
                        <li>
                            <a href="#intro">INTRODUCTION</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#system_requirement">SYSTEM REQUIREMENTS</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#installation">INSTALLATION</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#run_clamp">HOW TO RUN CLAMP</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#package_description">PACKAGE DESCRIPTION</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#existing_projects">IMPORT EXISTING PROJECTS</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li><label class="tree-toggler nav-header">NLP COMPONENTS</label>
                            <ul class="tree sublist">
                                <li><a href="#nlpcomponents">NLP COMPONENTS</a></li>
                                <li><a href="#sentence_detector">SENTENCE DETECTOR</a></li>
                                <li><a href="#tokenizer">TOKENIZER</a></li>
                                <li><a href="#postagger">POS TAGGER</a></li>
                                <li><a href="#chunker">CHUNKER</a></li>
                                <li><a href="#name_entity_recognizer">NAMED ENTITY RECOGNIZER</a></li>
                                <li><a href="#assertation_identifier">ASSERTION IDENTIFIER</a></li>
                                <li><a href="#ruta">RUTA_ RULE_ENGINE</a></li>
                                <li><a href="#section_identifier">SECTION IDENTIFIER</a></li>
                                <li><a href="#umls">UMLS Encoder</a></li>
                                <li><a href="#user_defined">USER DEFINED COMPONENTS</a></li>
                            </ul>

                        </li>
                        <li class="divider"></li>
                        <li>

                            <label class="tree-toggler nav-header">MACHINE LEARNING COMPONENTS
                            </label>
                            <ul class="tree sublist">
                                <li><a href="#run_pipeline">CREATE AND RUN A PIPELINE</a></li>
                                <li><a href="#config_pipeline">CONFIGURE THE PIPELINE</a></li>
                                <li><a href="#component_dependency">COMPONENT DEPENDENCY & AUTO FIX</a></li>
                                <li><a href="#import_input_files">IMPORT INPUT FILES</a></li>

                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#output_visualization">OUTPUT VISUALIZATION</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#built_in_pipeline">BUILT-IN PIPELINES</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#export_jar">EXPORT PIPELINE AS A JAR FILE</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <label class="tree-toggler nav-header">ANNOTATION</label>
                            <ul class="tree sublist">
                                <li><a href="#annotate_corpus">ANNOTATE CORPUS</a></li>
                                <li><a href="#import_annotation">IMPORT ANNOTATION FILES</a></li>
                                <li><a href="#define_entity">DEFINE ENTITY & RELATION TYPES</a></li>
                                <li><a href="#start_annotation">START ANNOTATION</a></li>
                                <li><a href="#visualization_entity_relation">VISUALIZATION OF ENTITY & RELATION</a></li>
                                <li><a href="#pre_annotation">PRE-ANNOTATION OF ENTITY AND RELATION</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <label class="tree-toggler nav-header">MACHINE LEARNING MODEL DEVELOPMENT</label>
                            <ul class="tree sublist">
                                <li><a href="#building_machine_learning models">NER MODEL</a></li>
                                <li><a href="#check_output">CHECK OUTPUT MODELS & LOGS</a></li>
                                <li><a href="#use_own_model">USE YOUR OWN MODEL IN PIPELINE</a></li>
                                <li><a href="#visualization_error">VISUALIZATION FOR ERROR ANALYSIS</a></li>
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
                    <h1 class="section-header-manual" id="intro">Introduction</h1>
                    <div class="section-body-manual">
                        <p> The CLAMP System is a comprehensive clinical Natural Language Processing software that
                            enables recognition and automatic encoding of clinical information in narrative patient
                            reports. In addition to running a clinical concept extraction pipeline as well as an
                            annotation pipeline, the individual components of the system can also be used as independent
                            modules. The system lends itself for diverse applications in a broad range of clinical
                            domains. The high performance language processing framework in CLAMP consists of the
                            following key building blocks:
                        </p>

                        <div>
                            <span class="subtitles-manual">NLP Pipelines</span>
                            <p>

                                CLAMP components builds on a set of high performance NLP components that were proven in
                                several clinical NLP challenges such as i2b2 , ShARe/CLEF , and SemEVAL. A pipeline can
                                be created and customized by a simple drag and drop on the individual CLAMP components
                                in the order that is desired. Upon creation of the pipeline, CLAMP checks for errors in
                                sequence and directs the user to the appropriate logical order with insertion of the
                                required components for a working pipeline. The CLAMP components are supported by
                                knowledge resources consisting of medical abbreviations, dictionaries, section headers,
                                and a corpus of 400 annotated clinical notes derived from MTsamples, a freely available
                                resource of clinical narrative text. CLAMP also provides built-in pipelines ready for
                                use out of the box for a series of common clinical applications.
                            </p>
                        </div>

                        <div>
                            <span class="subtitles-manual">Machine learning and hybrid approaches</span>
                            <p>
                                The CLAMP framework provides alternative components for some tasks, utilizing rule based
                                methods and/or machine learning methods such as support vector machines, and conditional
                                random fields. These components can be customized by re-training on an annotated corpus,
                                or editing the rule sets within the CLAMP GUI to achieve a custom NLP task. The CLAMP
                                GUI version also provides built-in functionality to test the model, using the annotated
                                corpora or n-fold cross validation.
                            </p>
                        </div>
                        <div>
                            <span class="subtitles-manual">Corpus management and annotation tool:</span>
                            <p>

                                The user interface also provides required tools to maintain and annotate text corpora.
                                It hosts an improved version of the brat annotation tool (reference?) for textual
                                annotations.
                            </p>
                        </div>


                </section>
                <section>
                    <h1 class="section-header-manual" id="system_requirement">System Requirements</h1>

                    <div class="section-body-manual">
                        <p> CLAMP is a stand-alone Java application based on the Eclipse platform technologies. CLAMP
                            uses the Apache UIMA (Unstructured Information Management Architecture) framework. The
                            annotation module of CLAMP incorporates and enhances the brat rapid annotation tool . For
                            the other individual constituents, Apache OpenNLP toolkit, Liblinear and CRF Suite are
                            utilized in addition to in-house rule-based components. CLAMP also use the UIMA Ruta (Rule
                            based Text Annotation) as a rule engine to help users specify rules.
                            CLAMP is distributed as a ready-to-use binary package that can either be executed at the
                            command line or carries the associated Graphic User Interface (GUI). Our distribution
                            package includes components for jar files, CRFSuite, and a Lucene index of all levels of
                            UMLS data.

                        </p>
                        <p>
                            The only prerequisite necessary to compile CLAMP is JRE 1.8 (Java Runtime Environment).
                            Please ensure that you have Java 8 or higher installed in your system. Run the following
                            command in both Mac and Windows to check your version:
                            <br/>
                            <code>java –version</code>
                            <br/>
                            Here is an example of what you will see when running the command in Windows:
                        </p>
                        <figure class="figure-manual">
                            <img src="img/manual/system.png" alt="System Requirenment" width="498"
                                 height="142">
                            <figcaption>Running the code in windows</figcaption>
                        </figure>

                        <p>

                            If your java version is not 1.8, it is available for download from the
                            <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">
                                Oracle website</a>. An UMLS account is required in order to use Level 2 and higher data
                            in the UMLS
                            encoding component of the system. The account can be created at
                            <a href="https://uts.nlm.nih.gov/home.html">https://uts.nlm.nih.gov/home.html</a>. You will
                            have to enter your UMLS username and password
                            when prompted by CLAMP in order to utilise the UMLS encoding component.
                            CLAMP also uses the computer’s default browsers to visualize the clinical documents. Since
                            all browsers do not completely support all the aspects of the technologies used to implement
                            the visualization, limitations exist in term of running the CLAMP annotation module in the
                            browsers. On the Windows OS, the Internet Explorer should be higher than IE9; On Macintosh
                            computers, Safari (all versions) works well with CLAMP.

                        </p>

                </section>
                <section>
                    <h1 id="installation" class="section-header-manual">Installation</h1>
                    <div class="section-body-manual">
                        <p> The CLAMP System is provided as a .zip file. After downloading the compressed file, unzip
                            the package in the directory of choice and voila!! the system is ready for use. Installation
                            instructions are the same for both Windows and Macintosh computers. For the CLAMP command
                            line version please refer to the readme file.
                        </p>
                </section>
                <section>
                    <h1 id="run_clamp" class="section-header-manual">How to run CLAMP</h1>
                    <div class="section-body-manual">
                        <p> You can run the GUI version of CLAMP by double clicking on the startCLAMP icon. Once the
                            software is completely loaded, you will notice a welcome tab. Close the tab to go to CLAMP
                            working environment
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/run_clamp.png" alt="Clamp Welcome Tab" width="314"
                                     height="155">
                                <figcaption>Clamp welcome tab</figcaption>
                            </figure>
                        </div>
                </section>
                <section>
                    <h1 id="package_description" class="section-header-manual">Package Description</h1>
                    <div class="section-body-manual">
                        <p> Since CLAMP is a stand-alone eclipse plugin, its folder structure is similar to other
                            eclipse plugins.
                            <br/> <span class="subtitles-manual">Configuration Folder:</span>

                            This folder contains CLAMP configuration files.
                            <br/> <span class="subtitles-manual">StartCLAMP:</span>
                            This is the launching point for the CLAMP GUI. In Windows,
                            this is an executable file while in Mac, this is an application.
                        </p>
                        <figure class="figure-manual">
                            <img src="img/manual/pachake_desc.png" alt="Clamp Package Description" width="501"
                                 height="152">
                            <figcaption>Clamp GUI</figcaption>
                        </figure>
                        <br>
                        <span class="subtitles-manual">Workspace Folder:</span>
                        <p>
                            This folder contains seven sub-folders:</p>
                        <ol class="manual-numbers">
                            <li><strong>ComponentLibrary:</strong> contains the components used in machine learning
                                feature extraction
                                and NLP functions.
                            </li>
                            <li><strong>MyCorpus:</strong> contains the customized corpus built by the users.</li>
                            <li><strong>MyPipeline: </strong>contains the customized pipeline created by users for
                                clinical notes
                                processing.
                            </li>
                            <li>
                                <strong>PipelineLibrary: </strong>contains the built-in pipelines ready to use for a
                                series of common
                                clinical applications.

                            </li>
                            <li><strong>Log:</strong> Includes CLAMP run-time log files</li>
                            <li><strong>Metadata: </strong>The metadata used by CLAMP are included in this folder.</li>
                            <li><strong>Resources:</strong> This folder includes third-party libraries. Currently it has
                                two items:

                                <ol class="nesting">
                                    <li>CRFSuite: the CRF implementation for Name Entity Recognition tasks</li>
                                    <li>Umls_index: the Lucene index built for CLAMP based on the UMLS thesaurus.</li>

                                </ol>
                            </li>
                        </ol>
                        <p>
                            If you want to use UMLS terminologies,
                            then you will need to create an UMLS account. Please follow the following link
                            to create an UMLS account if you do not have any.
                            <a href="https://uts.nlm.nih.gov//license.html">https://uts.nlm.nih.gov//license.html</a>

                            <br/> The following table lists libraries included in CLAMP. </p>
                        <div class="tbl_manual_container">


                            <table class="tbl_clamp_manual">
                                <caption>Libraries included in CLAMP</caption>
                                <thead>
                                <tr>
                                    <th>groupId</th>
                                    <th>artifactId</th>
                                    <th>version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>org.cleartk</td>
                                    <td>cleartk-ml-liblinear</td>
                                    <td>2.0.0</td>
                                </tr>
                                <tr>
                                    <td>org.ini4j</td>
                                    <td>ini4j</td>
                                    <td>0.5.2</td>
                                </tr>
                                <tr>
                                    <td> org.apache.uima</td>
                                    <td> uimafit-core</td>
                                    <td> 2.1.0</td>
                                </tr>
                                <tr>
                                    <td>com.google.code.gson</td>
                                    <td>gson</td>
                                    <td> 2.3</td>
                                </tr>
                                <tr>
                                    <td> org.apache.uima</td>
                                    <td> uimaj-core</td>
                                    <td> 2.6.0</td>
                                </tr>
                                <tr>
                                    <td> org.apache.uima</td>
                                    <td> uimaj-document-annotation</td>
                                    <td> 2.6.0</td>
                                </tr>
                                <tr>
                                    <td> de.bwaldvogel</td>
                                    <td> liblinear</td>
                                    <td> 1.94</td>
                                </tr>
                                <tr>
                                    <td>org.apache.lucene</td>
                                    <td> lucene-core</td>
                                    <td> 5.2.1</td>
                                </tr>
                                <tr>
                                    <td> org.apache.lucene</td>
                                    <td>lucene-analyzers-common</td>
                                    <td> 5.2.1</td>
                                </tr>
                                <tr>
                                    <td>org.apache.lucene</td>
                                    <td>lucene-queryparser</td>
                                    <td> 5.2.1</td>
                                </tr>
                                <tr>
                                    <td>org.apache.opennlp</td>
                                    <td> opennlp-tools</td>
                                    <td> 1.5.1-incubating</td>
                                </tr>
                                <tr>
                                    <td>org.apache.ctakes</td>
                                    <td>ctakes-type-system</td>
                                    <td> 3.2.0</td>
                                </tr>
                                <tr>
                                    <td>org.cleartk</td>
                                    <td>cleartk-named-entity</td>
                                    <td> 0.6.6</td>
                                </tr>
                                <tr>
                                    <td>com.googlecode.clearnlp</td>
                                    <td> clearnlp</td>
                                    <td> 1.3.1</td>
                                </tr>
                                <tr>
                                    <td>commons-codec</td>
                                    <td> commons-codec</td>
                                    <td> 20041127.091804</td>
                                </tr>
                                <tr>
                                    <td> dom4j</td>
                                    <td> dom4j</td>
                                    <td> 1.6.1</td>
                                </tr>
                                <tr>
                                    <td>org.apache.uima</td>
                                    <td> ruta-ep-engine</td>
                                    <td> 2.3.0</td>
                                </tr>
                                <tr>
                                    <td>javax.servlet</td>
                                    <td> servlet-api</td>
                                    <td> 3.0-alpha-1</td>
                                </tr>
                                <tr>
                                    <td>com.sun.jersey</td>
                                    <td>jersey-client</td>
                                    <td> 1.19</td>
                                </tr>
                                <tr>
                                    <td>junit</td>
                                    <td> junit</td>
                                    <td> 4.12</td>
                                </tr>
                                <tr>
                                    <td> commons-cli</td>
                                    <td> commons-cli</td>
                                    <td> 1.3</td>
                                </tr>
                                <tr>
                                    <td>net.jodah</td>
                                    <td>concurrentunit</td>
                                    <td> 0.4.2</td>
                                </tr>
                                <tr>
                                    <td> org.javatuples</td>
                                    <td>javatuples</td>
                                    <td>1.2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                </section>
                <section>
                    <h1 id="existing_projects" class="section-header-manual">Import existing projects into the new
                        version</h1>

                    <div class="section-body-manual">
                        <p><strong>On Windows</strong>, simply copy contents of your previous work folder (i.e. from
                            older
                            Clamp_x.xx.xx_win\workspace\MyPipeline\ contents to new
                            Clamp_x.xx.xx_win\workspace\MyPipeline\ contents) using <strong>Windows Explorer </strong>and
                            <strong>restart CLAMP</strong> if it’s already running. On startup, CLAMP will recognize
                            these projects and
                            import them into your workspace.
                        </p>
                        <p><strong>On MacOSX</strong>, similarly copy contents of your previous work folder (i.e. from
                            older
                            Clamp_x.xx.xx_win/workspace/MyPipeline/ contents to new
                            Clamp_x.xx.xx_win/workspace/MyPipeline/ contents) using <strong>Finder </strong>and <strong>
                                restart CLAMP</strong>
                            if it’s already running. On startup, CLAMP will recognize these projects and import them
                            into your new workspace.
                        </p>
                </section>

                <section>
                    <h1 class="section-header-manual" id="nlpcomponents">NLP Components
                    </h1>
                    <div>
                        <h2>NLP Components
                        </h2>
                        <p> NLP components are used for processing text. CLAMP offers multiple NLP components
                            that are the building blocks for performing any of the NLP tasks. The individual
                            components are provided as pre-built modules that are to be used in building pipelines for
                            automatic text processing, as well as training customized machine learning models. The
                            following picture
                            displays the CLAMP NLP components, as well as its associated tools, algorithms and
                            resources. In this section, we will provide details about each NLP component including their
                            function as well as ways to customize them using your own dictionary/model. In "Build a
                            Pipeline" section, we have tutorials that touch on use cases wherein the components are
                            utilized in various applications.</p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/nlp_components_1.png" alt="NLP Components" width="318"
                                     height="312">
                                <figcaption>Schema of NLP Components</figcaption>
                            </figure>
                        </div>

                    </div>

                    <div>
                        <h2 id="sentence_detector">Sentence Detector</h2>
                        <p>
                            A sentence is defined as the longest whitespace trimmed character sequence between two
                            punctuation marks. A Sentence Detector utilizes different methods to detect a sentence. As
                            shown in picture below, CLAMP provides three different models to detect a sentence:</p>
                        <ol class="manual-numbers">
                            <li>
                                <a href="#DF_CLAMP_Sentence_Detector">DF_CLAMP_Sentence_Detector</a>
                            </li>
                            <li>
                                <a href="#DF_CLAMP_Sentence_by_newline">DF_CLAMP_Sentence_by_newline</a>
                            </li>

                            <li>
                                <a href="#DF_CLAMP_OpenNLP_sentence_detector">DF_CLAMP_OpenNLP_sentence_detector</a>
                            </li>
                        </ol>
                        <p>Each model is described in details in the following sections.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/sentence_detector.png" alt="Sentence Detector" width="302"
                                     height="367">
                                <figcaption> Three sentence detectors and their configuration files
                                </figcaption>
                            </figure>
                        </div>
                        <div id="DF_CLAMP_Sentence_Detector">
                        <span class="subtitles-manual">
                                DF_CLAMP_Sentence_Detector
                            </span>
                            <p>
                                DF_CLAMP_Sentence_Detector is the default sentence detector in CLAMP. It is designed
                                specifically for clinical notes and takes into account the distinctive characteristics
                                observed in sentences found in clinical texts.
                                To configure the DF_CLAMP_Sentence_Detector, please click on the config file. A pop-up
                                window opens where you can modify two parameters: Medical Abbreviation, and Max
                                Sentence Length.

                            </p>
                            <div>
                                <span class="subtitles-manual">Medical Abbreviation:</span>
                                <p>

                                    There are some medical abbreviations that have punctuation marks at their beginning
                                    (".NO2) while some of them have it at the end (spec.). Providing a list of such
                                    abbreviations
                                    would help the detector to identify sentences more accurately. By default, CLAMP has
                                    provided a comprehensive list of medical abbreviation which can be found in this
                                    file:
                                    defaultAbbrs.txt
                                <ol class="manual_alpha">
                                    <li>
                                        To replace the abbreviation file:
                                        <ol class="manual-numbers">
                                            <li> Double click on config.conf file to open it</li>
                                            <li>Click on the button with three dots to browse for your own file</li>
                                            <li>Click on the open button
                                                <div>
                                                    <figure class="figure-manual">
                                                        <img src="img/manual/sentence_detector_2.png"
                                                             alt="Sentence Detector"
                                                             width="478"
                                                             height="350">
                                                        <figcaption>How to replace the abbreviation file</figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        To edit the current file:
                                    </li>
                                </ol>
                                <ol class="manual-numbers">
                                    <li>Double click on the defaultAbbrs.txt file to open it</li>
                                    <li>Add the terms that you want to include in the abbreviation file</li>
                                    <li>Click on the Save button on the toolbar</li>
                                </ol>
                                <div>
                                    <figure class="figure-manual">
                                        <img src="img/manual/sentence_detector_2.png" alt="Sentence Detector"
                                             width="478"
                                             height="350">
                                        <figcaption>How to replace the abbreviation file</figcaption>
                                    </figure>
                                </div>

                            </div>
                            <div>
                                <span class="subtitles-manual">Max Sentence Length</span>
                                <p> Checking the checkbox for "Break long sentences or not?" allows users to break long
                                    sentences into the number of words that they have specified in the input textbox.
                                    Please
                                    refer to the following picture for more information.
                                </p>
                                <div>
                                    <figure class="figure-manual">
                                        <img src="img/manual/max_sen.jpg" alt="Max Sentence Length" width="547"
                                             height="170">
                                        <figcaption> Interface for config.conf of the DF_CLAMP_Sentence_Detector
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div id="DF_CLAMP_Sentence_by_newline">
                        <span class="subtitles-manual">
                                DF_CLAMP_Sentence_by_newline
                            </span>
                            <p>
                                This detector will identify new sentences using the line breaks in the file, i.e., each
                                line
                                in
                                the file is treated as a single sentence.

                            </p>
                        </div>
                        <div id="DF_CLAMP_OpenNLP_sentence_detector">
                        <span class="subtitles-manual">
                                DF_CLAMP_OpenNLP_sentence_detector
                            </span>
                            <p>
                                This is an OpenNLP sentence detector which advanced users can use its config.conf
                                file
                                to
                                change its default model.

                            </p>
                            <div>
                                <ol class="manual_alpha">
                                    <li>
                                        To replace the default model:
                                        <ol class="manual-numbers">
                                            <li> Double click on config.conf file to open it</li>
                                            <li>Click on the button with three dots to browse for your own file</li>
                                            <li>Click on the open button
                                                <div>
                                                    <figure class="figure-manual">
                                                        <img src="img/manual/sentence_openNlp.png"
                                                             alt="Sentence Detector_OpenNlp"
                                                             width="634"
                                                             height="402">
                                                        <figcaption>How to replace the default Model</figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- Starting Tokenizer-->
                    <div>
                        <h2 id="tokenizer">Tokenizer</h2>
                        <p>
                            A Tokenizer segments the text into a sequence of tokens. As shown in Figure 8.4, CLAMP
                            provides three different models of tokenizer: </p>
                        <ol class="manual-numbers">
                            <li>
                                <a href="#DF_CLAMP_Tokenizer"> DF_CLAMP_Tokenizer
                                </a>
                            </li>
                            <li>
                                <a href="#DF_ OpenNLP_Tokenizer">DF_ OpenNLP_Tokenizer
                                </a>
                            </li>

                            <li>
                                <a href="#DF_Tokenize_by_spaces"> DF_Tokenize_by_spaces
                                </a>
                            </li>
                        </ol>
                        <p>Each model will be described in more details.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/tokenizer.png" alt="Three tokenizers and their configuration files"
                                     width="356"
                                     height="436">
                                <figcaption> Three tokenizers and their configuration files
                                </figcaption>
                            </figure>
                        </div>
                        <div id="DF_CLAMP_Tokenizer">
                        <span class="subtitles-manual">
                                 DF_CLAMP_Tokenizer
                            </span>
                            <p>
                                DF_CLAMP_Tokenizer is the default tokenizer designed specifically for clinical notes.
                                Advanced users can use the config.conf file to change the default tokenization.

                            </p>
                            <div>

                                <ol class="manual_alpha">
                                    <li>
                                        To replace the default file:
                                        <ol class="manual-numbers">
                                            <li> Double click on config.conf file to open it</li>
                                            <li>Click on the button with three dots to browse for your own file</li>
                                            <li>Click on the open button
                                                <div>
                                                    <figure class="figure-manual">
                                                        <img src="img/manual/tokenizer_default_file.png"
                                                             alt="Sentence Detector"
                                                             width="494"
                                                             height="315">
                                                        <figcaption>How to replace the default file</figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                            </div>
                        </div>

                        <div id="DF_ OpenNLP_Tokenizer">
                        <span class="subtitles-manual">
                               DF_ OpenNLP_Tokenizer
                            </span>
                            <p>
                                This is an OpenNLP tokenizer. Advanced users can use its config.conf file to change its
                                default model, en-token.bin.

                            </p>
                            <div>
                                <ol class="manual_alpha">
                                    <li>
                                        To replace the default model:
                                        <ol class="manual-numbers">
                                            <li> Double click on config.conf file to open it</li>
                                            <li>Click on the button with three dots to browse for your own file</li>
                                            <li>Click on the open button
                                                <div>
                                                    <figure class="figure-manual">
                                                        <img src="img/manual/nlp_tokenizer.png"
                                                             alt=" OpenNLP_Tokenizer"
                                                             width="473"
                                                             height="304">
                                                        <figcaption>How to replace the default Model</figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>

                                </ol>
                            </div>
                        </div>
                        <div id="DF_Tokenize_by_spaces">
                        <span class="subtitles-manual">
                                 DF_Tokenize_by_spaces
                            </span>
                            <p>
                                This tokenizer uses the spaces in a sentence to separate the tokens.
                            </p>
                        </div>
                    </div>
                    <!-- End of Tokenizer-->
                    <!-- Starting Pos Tagger-->

                    <div>
                        <h2 id="postagger">Pos Tagger
                        </h2>
                        <p>
                            A Pos tagger allows users to assign parts of speech to each token. As shown in Figure 8.5,
                            CLAMP currently provides only one pos tagger, DF_OpenNLP_pos_tagger, designed
                            specifically for clinical text. This tagger is built from re-training the OpenNLP pos tagger
                            on
                            a dataset of clinical notes, namely, the MiPACQ corpus.
                            <a href="http://clear.colorado.edu/compsem/index.php?page=endendsystems&sub=mipacq">(http://clear.colorado.edu/compsem/index.php?page=endendsystems&sub=mipacq)</a>
                            .
                            Advanced users can use the config.conf file to change the default pos tagger
                            modelmipacq_pos.bin.
                        </p>

                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/postagger.png"
                                     alt=" OpenNLP_Tokenizer"
                                     width="342" height="408">
                                <figcaption>DF_OpenNLP_pos_tagger and its configuration files</figcaption>
                            </figure>
                        </div>
                    </div>

                    <!-- End of Pos Tagger -->
                    <!-- Starting Chunker-->

                    <div>
                        <h2 id="chunker">Chunker
                        </h2>
                        <p>
                            A chunker does a shallow parsing of a sentence and identifies the syntactic constituents
                            such as noun phrases, verb phrases, and etc. As shown in Figure 8.6, CLAMP currently
                            provides only one single chunker, DF_OpenNLP_chunker, which is a wrapper of the chunker
                            in OpenNLP. Advanced users can use the config.conf file to change the default chunker
                            model- en-chunker.bin.

                        </p>

                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/chunker.png"
                                     alt=" OpenNLP_Tokenizer"
                                     width="359" height="422">
                                <figcaption>DF_OpenNLP_chunker and its configuration files</figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- End of Chunker-->
                    <!-- Start of NER-->

                    <div>
                        <h2 id="name_entity_recognizer">Named Entity Recognizer
                        </h2>
                        <p>
                            A named entity recognizer identifies named entities and their semantic types in text.
                            Typically, named entities refer to clinical concepts in CLAMP. As shown in Figure below,
                            CLAMP provides two different models for named entity recognition:
                        </p>
                        <ol class="manual-numbers">
                            <li>
                                <a href="#DF_CRF_based_named_entity_recognizer"> DF_CRF_based_named_entity_recognizer
                                    ,and
                                </a>
                            </li>
                            <li>
                                <a href="#DF_Dictionary_lookup"> DF_Dictionary_lookup
                                </a>
                            </li>

                            <li>
                                <a href="#DF_Regular_expression_NER"> DF_Regular_expression_NER
                                </a>
                            </li>
                        </ol>
                        <p>Each model will be described in more details.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/ner.png"
                                     alt="Three named entity recognizers and their configuration files"
                                     width="406"
                                     height="466">
                                <figcaption>Three named entity recognizers and their configuration files
                                </figcaption>
                            </figure>
                        </div>
                        <div id="DF_CRF_based_named_entity_recognizer">
                        <span class="subtitles-manual">
                                 DF_CRF_based_named_entity_recognizer
                            </span>
                            <p>
                                DF_CRF_based_named_entity_recognizer is the default named entity recognizer used in
                                CLAMP. The recognizer identifies three types of clinical concepts:
                                <br>
                                <strong>Problems, treatments, and tests.</strong>

                                It is built from training the CRF model on a dataset of clinical notes, namely, the i2b2
                                2010
                                challenge corpus <a href="https://www.i2b2.org/NLP/Relations/">(https://www.i2b2.org/NLP/Relations/)</a>.
                                Advanced users can use the
                                config.conf file to change the default recognizer model as in the file defaultModel.jar.
                            </p>
                            <div>
                                <ol class="manual_alpha">
                                    <li>
                                        To replace the default file:
                                        <ol class="manual-numbers">
                                            <li> Double click on config.conf file to open it</li>
                                            <li>Click on the button with three dots to browse for your own file</li>
                                            <li>Click on the open button

                                                <div>
                                                    <figure class="figure-manual">
                                                        <img src="img/manual/ner_default_file.png"
                                                             alt="Sentence Detector"
                                                             width="500"
                                                             height="323">
                                                        <figcaption>How to replace the default file</figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                            </div>
                        </div>
                        <div id="DF_Dictionary_lookup">
                        <span class="subtitles-manual">
                               DF_Dictionary_lookup
                            </span>
                            <p>
                                DF_Dictionary_lookup uses terms in the dictionary to match them directly with
                                the identified named entities. Currently the defaultDic.txt used in CLAMP consists of
                                terms and their semantic types from UMLS
                                <a href="https://www.nlm.nih.gov/research/umls/">(https://www.nlm.nih.gov/research/umls/)</a>
                                . The semantic type of the matched term in UMLS is assigned to the recognized named
                                entity.
                                <br>
                                <span class="subtitles-manual"> To configure DF_Dictionary_lookup:</span>
                                First, click on the config file under the DF_Dictionary_matcher folder. This will open
                                up a
                                new window that takes the following three parameters: Case sensitive, Stemming and
                                Dictionaries.(Shown in the picture below)<br>
                                <strong>Case sensitive</strong><br>
                                If you check the checkbox for "Case sensitive", the matcher will differentiate between
                                capital and lowercase letters when searching for a term in the dictionary. For example,
                                "Breast Cancer” will not matched with "breast cancer".
                                <br>
                                <strong>Stemming</strong>
                                <br>
                                If you check the checkbox for "Stemming", the matcher will match the stemmed form of a
                                candidate named entity with the terms in the dictionary. For example, "breast cancers"
                                will
                                be matched to "breast cancer".<br>
                                <strong>Dictionaries</strong><br>
                                You can also replace or edit the dictionary file suggested for this function.
                            </p>
                            <div>
                                <ol class="manual_alpha">
                                    <li>
                                        To replace the default dictionary file:
                                        <ol class="manual-numbers">
                                            <li> Double click on config.conf file to open it</li>
                                            <li>Click on the button with three dots to browse for your own file</li>
                                            <li>Click on the open button
                                                <div>
                                                    <figure class="figure-manual">
                                                        <img src="img/manual/ner_dic_lookup.png"
                                                             alt="Replace the default dictionary file">
                                                        <figcaption> Replace the default dictionary file</figcaption>
                                                    </figure>
                                                </div>

                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        To edit the current dictionary file:
                                        <ol class="manual-numbers">
                                            <li> Double click on the defaultDict.txt file to open it</li>
                                            <li>Add the terms that you want to include in the dictionary file</li>
                                            <li>Click the Save button at the top of the page
                                                <div>
                                                    <figure class="figure-manual">
                                                        <img src="img/manual/ner_current.png"
                                                             alt="Edit the current dictionary file">
                                                        <figcaption>Edit the current dictionary file</figcaption>
                                                    </figure>
                                                </div>

                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div id="DF_Regular_expression_NER">
                        <span class="subtitles-manual">
                                 DF_Regular_expression_NER
                            </span>
                            <p>
                                Using the defaultRegExpr.txt file, this module can identify named entities.
                                defaultRegExpr.txt file can contain several regular expression. If a phrase matches a
                                regular expression, it is recognized as a named entity. You can add your own regular
                                expression to the existing file by double clicking the file and add the items that you
                                want to
                                include.
                            </p>
                        </div>
                    </div>
                    <!-- End of NER-->
                    <!-- Start of Assertion Identifier-->
                    <div>
                        <h2 id="assertation_identifier">Assertion Identifier
                        </h2>
                        <p>
                            An Assertion identifier checks whether there is a negation related to a specific clinical
                            concepts in the text. A negation means the absence or opposite of something positive.
                            CLAMP Assertion Identifier provides a mechanism to examine the real-world implications
                            of annotations in a given clinical text. The defaultNegexDict.txt file which
                            contains common negation patterns is used by CLAMP to check for negation in a clinical
                            text. You can either replace or edit this file by following the steps below. (See the
                            picture below)
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/asser_ide.png"
                                     alt="Assertion identifier and its configuration file">
                                <figcaption>Assertion identifier and its configuration file
                                </figcaption>
                            </figure>
                        </div>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the Negation list file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/asser_neg.png"
                                                         alt="Replace the Negation list file">
                                                    <figcaption>Replace the Negation list file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    To edit the current dictionary file:
                                    <ol class="manual-numbers">
                                        <li>Double click on the defaultNegexDict.txt file to open it
                                        </li>
                                        <li>Add the terms that you want to include in the dictionary file
                                        </li>
                                        <li>Click the Save button at the top of the page
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/asser_curr.png"
                                                         alt="Edit the current dictionary file">
                                                    <figcaption>Edit the current dictionary file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- End of Assertion Identifier-->
                    <!-- Start of Ruta_ Rule_Engine-->

                    <div>
                        <h2 id="ruta">Ruta_ Rule_Engine
                        </h2>
                        <p>
                            UIMA Ruta rules can be used to create or modify annotations as well as create features for
                            annotations. Ruta rules in general can consist of a sequence of rule elements. A simple rule
                            elements consist of four parts: A matching condition, an optional quantifier, an optional
                            list
                            of conditions and an optional list of actions. For more information please visit:
                            <a href=" https://uima.apache.org">https://uima.apache.org</a>
                            (See the picture below)
                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the Negation list file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/ruta_def.png"
                                                         alt="Replace the Negation list file">
                                                    <figcaption>Replace Ruta default file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    To edit the current dictionary file:

                                    <ol class="manual-numbers">
                                        <li>Double click on the defaultNegexDict.txt file to open it
                                        </li>
                                        <li>Add the terms that you want to include in the dictionary file
                                        </li>
                                        <li>Click the Save button at the top of the page

                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/ruta_dic.png"
                                                         alt="Edit the current dictionary file">
                                                    <figcaption>Edit the current dictionary file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- End of Ruta_ Rule_Engine-->
                    <!-- Start of Section Header-->
                    <div>
                        <h2 id="section_identifier">Section Identifier
                        </h2>
                        <p>
                            The section header identifier component identifies the section headers in a clinical note
                            based on a predefined dictionary and categorizes them into general categories (Figure
                            below). E.g. the section header "ICD 10 code" will be assigned to the "icd_code" category.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/sec_header.png"
                                     alt="Section header identifier and its configuration file">
                                <figcaption> Section header identifier and its configuration file</figcaption>
                            </figure>
                        </div>
                        <p> You can replace or edit the default dictionary, section_map.txt, following the steps below:
                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the default file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/sec_iden.png"
                                                         alt="Replace the default file">
                                                    <figcaption> Replace the default file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    To add additional section headers to the current file:
                                    <ol class="manual-numbers">
                                        <li>Double click on the section_map.txt file to open it
                                        </li>
                                        <li>Add the terms that you want to include in the file
                                        </li>
                                        <li>Click the Save button at the top of the page
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/sec_header_addi.png"
                                                         alt=" add additional section headers to the current file">
                                                    <figcaption>Add additional section headers to the current file
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>

                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- End of Section Header-->
                    <!-- Start of Umls-->

                    <div>
                        <h2 id="umls">UMLS Encoder
                        </h2>
                        <p>
                            A UMLS Encoder matches the terms of clinical concepts to its corresponding CUIs in
                            UMLS. For example, the term "breast cancer" will be encoded into the CUI of "C6006142" in
                            UMLS. Currently CLAMP provides a default dictionary based on the UMLS encoder as
                            shown in figure below</p>

                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/umls.png"
                                     alt="Dictionary based UMLS encoder">
                                <figcaption>Dictionary based UMLS encoder</figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- End of Umls-->
                    <!-- Start of user_defined-->

                    <div>
                        <h2 id="user_defined">User Defined Components
                        </h2>
                        <p>
                            <span class="subtitles-manual">DF_Drug_Attribute_Connector:</span>

                            This is a context free grammar parser which is extracted from Medex. It is used to connect
                            medication to its possible attributes such as dose.<br/>
                            <span class="subtitles-manual">DF_Relation_connector_after_ruta:</span>
                            While connecting two named entities using Ruta is relatively easy, it can not be used to
                            provide a name for that relationship.
                            Advanced users can generate their own file and replace it with the system’s default file or
                            edit the default file.
                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>To replace the default file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/user_defined.png"
                                                         alt="Replace the default file">
                                                    <figcaption>Replace the default file</figcaption>
                                                </figure>
                                            </div>

                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    To edit the current dictionary file:
                                    <ol class="manual-numbers">
                                        <li>Double click on the relationConnection.txt file to open it

                                        </li>
                                        <li>Add the terms that you want to include in the file
                                        </li>
                                        <li>Click the Save button at the top of the page
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/user_defined_current.png"
                                                         alt=" add additional section headers to the current file">
                                                    <figcaption> Edit the current dictionary file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>
                <!-- End of user_defined-->
                <!-- Starting machine learning-->
                <section>

                    <h1 class="section-header-manual">Machine Learning components
                    </h1>
                    <h2 id="ner_feature">NER Feature Extractor
                    </h2>
                    <p>
                        This component consists of different feature extractors (Figure 9.1), which are used for
                        extracting different types of features for named entity recognition, CLAMP users will use
                        this component to build their own named entity recognizer in a corpus annotation project
                        (Refer to Section 4.2) . Similar to the previous components, we can customize these
                        features by changing or replacing their default config files. Explanation of each extractor is
                        as follows:
                    </p>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/machine_ner.png" alt="Three tokenizers and their configuration files">
                            <figcaption>List of NER feature extractors
                            </figcaption>
                        </figure>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Brown_clustering_feature
                            </span>
                        <p>
                            It is a type of word representation feature generated on the unlabeled data which is
                            provided by the SemEval 2014 Challenge. Advanced users can eplace their own Brwon
                            clustering file with the system’s default file.
                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the default file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/machine_default.png"
                                                         alt="DF_Brown_clustering_feature">
                                                    <figcaption>How to replace the default file</figcaption>
                                                </figure>
                                            </div>

                                        </li>
                                    </ol>
                                </li>
                        </div>
                        <p>For more information on how to create your own Brown Clustring file visit:
                            <br>
                            <a href="https://github.com/percyliang/brown-cluster">
                                https://github.com/percyliang/brown-cluster
                            </a>
                        </p>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Dictionary_lookup_feature
                            </span>
                        <p>
                            This extractor uses a dictionary consisting of terms and their semantic types from UMLS to
                            extract potential features.
                            Advanced users can replace or edit the default file following the steps below:
                            <br>
                            <strong>Note:</strong>The format of the content should be as the same as the default file:
                            (phrase then tab
                            then semantic type)
                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the default file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/machin_dic.png"
                                                         alt="How to replace the default file">
                                                    <figcaption>How to replace the default file</figcaption>
                                                </figure>
                                            </div>

                                        </li>
                                    </ol>

                                </li>
                                <li>
                                    To edit the default file:
                                    <ol class="manual-numbers">
                                        <li>Double click on the word_path.txt file to open it
                                        </li>
                                        <li>Add the terms that you want to include in the file
                                        </li>
                                        <li>Click the Save button at the top of the page

                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/machine_edit_default.png"
                                                         alt="How to edit the default file">
                                                    <figcaption>How to edit the default file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>

                                </li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Ngram_feature
                            </span>
                        <p>
                            This module uses the words along with their part-of-speech (pos) tagging as NER features.
                        </p>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_prefix_suffix_feature
                            </span>
                        <p>
                            This function extracts the prefix and suffix of words that may be a representative of a
                            specific type of named entities.

                        </p>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Random_indexing_feature
                            </span>
                        <p>
                            Similar to the brown clustering, it is a type of word representation feature generated on
                            unlabeled data using a 3
                            rd party package. For more information visit:
                            <a href="https://jcheminf.springeropen.com">https://jcheminf.springeropen.com</a>

                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the default file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/random_index.png"
                                                         alt="How to replace the default file">
                                                    <figcaption>How to replace the default file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>

                                </li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Section_feature
                            </span>
                        <p>
                            This function extracts the section in which a candidate named entity presents.


                        </p>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Sentence_pattern_feature
                            </span>
                        <p>
                            This function distinguishes the pattern of a sentence by CLAMP built in rules.

                        </p>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Word_embedding_feature
                            </span>
                        <p>
                            Similar to the brown clustering and random indexing, it is a type of distributed word
                            representation feature generated on the unlabeled data (MIMIC II) provided by the SemEval
                            2014 Challenge using a neural network.Advanced users can replace the default file with
                            their own file.
                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the default file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/word_embed.png"
                                                         alt="How to replace the default file">
                                                    <figcaption>How to replace the default file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Word_shape_feature
                            </span>
                        <p>
                            This function extracts the type of a word; it identifies whether or not it begins with an
                            english letter, number, and etc.
                        </p>
                    </div>
                    <div>
                        <span class="subtitles-manual">
                                DF_Words_regular_expression_feature
                            </span>
                        <p>
                            This function extracts the regular expression patterns of words that may indicate a specific
                            type of named entity. Advanced users can create their own regular expressions or edit the
                            default file
                        </p>
                        <div>
                            <ol class="manual_alpha">
                                <li>
                                    To replace the default file:
                                    <ol class="manual-numbers">
                                        <li> Double click on config.conf file to open it</li>
                                        <li>Click on the button with three dots to browse for your own file</li>
                                        <li>Click on the open button
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/words_reg.png"
                                                         alt="How to replace the default file">
                                                    <figcaption>How to replace the default file</figcaption>
                                                </figure>
                                            </div>

                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    To edit the default file:
                                    <ol class="manual-numbers">
                                        <li>Double click on the reglist.txt file to open it
                                        </li>
                                        <li>Add the terms that you want to include in the file
                                        </li>
                                        <li>Click the Save button at the top of the page
                                            <div>
                                                <figure class="figure-manual">
                                                    <img src="img/manual/words_reg_se.png"
                                                         alt="How to edit the default file">
                                                    <figcaption>How to edit the default file</figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>
                <!-- End of machine learning-->
                <!-- starting Build a Pipeline section-->

                <section>

                    <h1 class="section-header-manual">Build a Pipeline
                    </h1>
                    <h2 id="run_pipeline">Create and Run a Pipeline
                    </h2>
                    <p>
                        Running a pipeline refers to the use of a set of NLP components to identify the specified
                        information , including sentence segmentation, tokenization, part of speech tagging,
                        abbreviations, etc. The NLP components are executed in a sequence based on the
                        functional dependency amongst them.
                        <br>
                        <span class="subtitles-manual">
                            In order to recognize clinical concepts within clinical text:
                        </span>
                    </p>
                    <div>
                        <ol class="manual-numbers">
                            <li>You need to create a project</li>
                            <li>You need to configure the pipeline</li>
                            <li>You need to import the files that you want to be analyzed</li>
                            <li>You need to process the imported files by running them through the pipeline.</li>
                        </ol>
                    </div>
                    <p><span class="subtitles-manual">
                    Follow the steps below to build a pipeline:</span></p>
                    <div>
                        <ol class="manual_alpha">
                            <li>
                                Create a new project:
                                <ol class="manual-numbers">
                                    <li> Click on the plus (+) sign at the top left corner of the screen as shown in the
                                        Figure below.
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/pipeline_buid_project.png"
                                                     alt="Create a new project">
                                                <figcaption>Create a new project</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>On the pop-up window (Figure below), enter a name for your project, for example:
                                        "Clinical_concept_recognition".
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/pipeline_clinicalconcept.png"
                                                     alt="Creating a new NLP pipeline project">
                                                <figcaption> Creating a new NLP pipeline project</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>Select NLP Pipeline as the project type.</li>
                                    <li>Click the Finish button.
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/pipeline_created_pro.png"
                                                     alt="A project with the specified name is created ">
                                                <figcaption> A project with the specified name is created and is placed
                                                    under
                                                    Mypipeline folder
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                    <p>Double click the pipeline name to view its content. As you can see, it contains two folders
                        "Components", and "Data". The Components folder contains the pipeline configuration file.
                        The Data folder includes two folders: Input, and Output. The Input folder holds the files
                        that are processed by the pipeline. The results obtained by running the pipeline are saved
                        in the output folder.
                    </p>
                    <div>
                        <h2 id="config_pipeline">Configure the pipeline
                        </h2>
                        <p>
                            To configure a pipeline double click on the .pipeline file from the newly created pipeline
                            project to open it in the middle window on the screen.
                            Here you can drag and drop the NLP components from the Component panel. Since we
                            want to recognize clinical concepts using NLP components, we drag the
                            DF_CRF_based_name_entity_recognizer from the NLP_components to the pipeline.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/pipeline_config.png"
                                     alt=" Pipeline configuration window">
                                <figcaption> Pipeline configuration window
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div>
                        <h2 id="component_dependency">Component dependency & Auto fix
                        </h2>
                        <p>
                            As shown in the figure below, there is a <span style="color:red;">red X </span>sign in front
                            of the newly added component, "CRF
                            based named entity recognizer". This sign indicates that the named entity recognizer
                            component is dependant on other NLP components that are missing from the current
                            pipeline. In our example, the clinical notes first need to be processed by the sentence
                            detector, tokenizer, section identifier, and POS tagger components before processing by
                            the named entity recognizer.
                            To fix this issue, simply click on the Auto fix button at the top of the panel. This
                            automatically adds the required components to the pipeline. The sequence of the individual
                            components from top to bottom reflect the order in which they will run to process your
                            input data.
                            After the required components are added (figure below), the <span
                                style="color:red;">red X </span>
                            sign changes to the <span style="color:green;">green
                            circle </span>sign indicating the accuracy of the order of the components. Once you see the
                            green
                            sign for each of the displayed NLP components, click on the Save button at the top of the
                            screen to save your changes.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/pipeline_component_dependency.png"
                                     alt="A wrong pipeline for clinical concept recognition needs to be fixed with dependent
                                    NLP models">
                                <figcaption>A wrong pipeline for clinical concept recognition needs to be fixed with
                                    dependent
                                    NLP models
                                </figcaption>
                            </figure>
                        </div>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/pipeline_corrected.png"
                                     alt="A correct pipeline for clinical concept recognition with all necessary NLP models">
                                <figcaption>A correct pipeline for clinical concept recognition with all necessary NLP
                                    models
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div>
                        <h2 id="import_input_files">Import input files
                        </h2>
                        <p>
                            Once the pipeline is configured, you will need to import your desired files to the Input
                            folder
                            using the the following steps:
                        </p>
                        <div>
                            <ol class="manual-numbers">
                                <li>In the PipelineView, right click on the Input folder under the Data folder, then
                                    select the
                                    import (figure below). A pop-up menu appears which lets you select the files that
                                    you
                                    want to import.
                                    <div>
                                        <figure class="figure-manual">
                                            <img src="img/manual/pipeline_dropdown.png"
                                                 alt="Drop-downContext menu for importing the input files">
                                            <figcaption> Drop-downContext menu for importing the input files
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>Click on the small arrow next to the General folder to expand it, then select File
                                    System
                                    as the import source.
                                </li>
                                <li>Click on the Next button
                                    <div>
                                        <figure class="figure-manual">
                                            <img src="img/manual/pipeline_resources.png"
                                                 alt=" Import resources from the local file system into an existing project">
                                            <figcaption> Import resources from the local file system into an existing
                                                project
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    Next, as shown in figure below, click on the Browse button on the top of the window
                                    to
                                    choose the folder of your choice. The selected folder will be displayed on the left
                                    side of
                                    the window, and the files inside the folder will be displayed on the right side.
                                    <div>
                                        <figure class="figure-manual">
                                            <img src="img/manual/pipeline_wind_input.png"
                                                 alt=" Import resources from the local file system into an existing project">
                                            <figcaption> Import resources from the local file system into an existing
                                                project
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    Click the checkbox for the files that you want to run the pipeline on; currently the
                                    CLAMP pipeline can only process files with the .txt extension. Also, CLAMP assists
                                    you
                                    in selecting your desired files in three different ways: Filter Types, Select All
                                    and Deselect
                                    All.
                                    <br>

                                    <strong>Filter Types: </strong> Allows you to define the type of files that will be
                                    imported. For example, you
                                    may only want to import files with the .txt extension
                                    <br>
                                    <strong>
                                        Select All: </strong> Allows you to choose all displayed files<br>
                                    <strong>Deselect All: </strong> Allow you to deselect the files that have already
                                    been selected

                                </li>
                                <li>
                                    Click on the Browse button next to the "Into folder" field to choose the folder that
                                    you
                                    want to import your files to. Here, we keep the default directory.
                                </li>
                                <li>
                                    Click on the Finish button.
                                </li>
                            </ol>
                        </div>
                        <p>Now, you can double click on the Input folder to see the imported files </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/clamp_pipeline_inputFolder.png"
                                     alt="Imported files under the Input folder">
                                <figcaption> Imported files under the Input folder
                                </figcaption>
                            </figure>
                        </div>

                        <p>
                            Similarly, you can also double click on each file to view its content (figure below).
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/clamp_inputFile_sample.png"
                                     alt="View the content of input file sample_1054.txt directly in the interface">
                                <figcaption> View the content of input file sample_1054.txt directly in the interface
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </section>
                <!-- End of Build a Pipeline section-->
                <!-- Start Run a pipeline section-->
                <section>
                    <h1 id="Run the pipeline" class="section-header-manual">Run the pipeline
                    </h1>
                    <p>
                        After you have configured the pipeline and imported the input files, you can start running
                        the pipeline. To run a pipeline, simply click on the run icon at the top of the screen as
                        shown in the figure below.</P>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/run_clamp.png"
                                 alt="Running the pipeline">
                            <figcaption>Running the pipeline
                            </figcaption>
                        </figure>
                    </div>
                    <p>Once the pipeline starts running, you can check the progress of the input file processing
                        from the Console window and the progress bar at the bottom of the screen.
                        You can always stop the processing at anytime by clicking on the red stop button next to
                        the progress bar.
                    </p>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/progressFile.png"
                                 alt="Check the progress of the input file processing from the Console window ">
                            <figcaption> Check the progress of the input file processing from the Console window
                            </figcaption>
                        </figure>
                    </div>
                </section>
                <!-- End of Run a pipeline section-->
                <!-- Start Output visualization section-->
                <section>
                    <h1 class="section-header-manual" id="output_visualization">Output visualization
                    </h1>
                    <p>
                        Once running the pipeline is completed, the generated files are displayed in the Output
                        folder. These files can be viewed in two different formats <strong>(.xmi , .txt)</strong>:
                        <br>
                        Clicking on a file with the .xmi extension allows you to view its original content
                        annotated with recognized clinical concepts. Different types of clinical concepts will be
                        highlighted with different colors.
                    </P>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotated_text.png"
                                 alt="View of text annotated with recognized clinical concepts">
                            <figcaption>View of text annotated with recognized clinical concepts
                            </figcaption>
                        </figure>
                    </div>
                    <p>Clicking on a file with the .txt extension will display a view of tab delimited,
                        detailed output
                        information in a new window. As shown in the figure below, each line in the file illustrates the
                        detailed information of one recognized clinical concept. The following information
                        is included in a tab delimited output:
                    </p>
                    <ol class="manual-numbers">
                        <li><strong>Start Index:</strong> Starting position of the recognized concept.</li>
                        <li><strong>End Index:</strong> Ending position of the recognized concept.</li>
                        <li><strong>Semantic Type:</strong> Semantic type of the recognized concept.</li>
                        <li><strong>CUI: </strong>The Concept Unique Identifier of the concept in Unified Medical
                            Language System
                            (UMLS). If the pipeline does not include the model of UMLS encoder, the value of this
                            column will be "null".
                        </li>
                        <li><strong>Assertion: </strong>If the pipeline does not include the model of Assertion
                            identifier, the value of
                            this column will be "null".
                        </li>
                        <li><strong>Concept Mention:</strong> Referring to a concept, i.e., named entity in the text
                        </li>
                    </ol>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/tab_delimited.png"
                                 alt="Tab delimited format of output files">
                            <figcaption>Tab delimited format of output files
                            </figcaption>
                        </figure>
                    </div>
                </section>
                <!-- End of Output visualization section-->
                <!-- Start Built-in pipelines section-->
                <section>
                    <h1 class="section-header-manual" id="built_in_pipeline">Built-in pipelines
                    </h1>
                    <p>
                        In order to facilitate a convenient utility of CLAMP, a series of pipelines that could be
                        directly adopted in common clinical applications are pre_built and displayed in
                        PipelineLibrary. Users can directly drag one of them (e.g., smoking_status,
                        ) from the PipelineLibrary and drop it under My Pipeline (see figures below). The required NLP
                        components of these pipelines are already configured. CLAMP
                        allows you to customize each of these components to fit your needs. <br>
                        First, you need to
                        import your files; for more information go to
                        <a href="#Import input files">"Import input files”
                        </a> section.
                    </P>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/builtInLibrary.png"
                                 alt="Built-in pipeline library in CLAMP">
                            <figcaption>Built-in pipeline library in CLAMP
                            </figcaption>
                        </figure>
                    </div>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/smoking_status.png"
                                 alt="Dragging smoking_status and drop it under MyPipeline">
                            <figcaption>Dragging smoking_status and drop it under MyPipeline
                            </figcaption>
                        </figure>
                    </div>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/built_in_pipeline.png"
                                 alt="Built-in pipeline library in CLAMP">
                            <figcaption>Built-in pipeline library in CLAMP
                            </figcaption>
                        </figure>
                    </div>
                    <p>Depending on what your use case is, the current built-in pipelines are divided into the
                        following categories:

                    </p>
                    <ol class="manual-numbers">
                        <li>
                            <strong>General: </strong>automatically annotates concepts and their attribute for general
                            use, including:
                            <br>
                            <strong>
                                <span class="subtitles-manual">CLAMP-ner:</span>
                            </strong> annotates the disease, procedure and medication concepts
                            <br>
                            <strong>
                                <span class="subtitles-manual">CLAMP-ner-attribute:
                                </span>
                            </strong>
                            annotates the attributes of disease (e.g., body
                            location of a
                            disease), lab procedure (e.g., value of a lab test ) and medication (e.g., dosage of a
                            medication) concepts
                            <br>
                            <strong>
                                <span class="subtitles-manual">Disease-attribute:
                                </span>
                            </strong> annotate the attributes of diseases, including body
                            locations (e.g.,
                            left atrium), severity degrees (e.g., mild, severe) and uncertainty (e.g., probably).<br>
                            <strong><span class="subtitles-manual">Lab-attribute:</span> </strong>annotates the
                            attributes of lab procedures<br>
                            <strong>
                                <span class="subtitles-manual">Medication-attribute:
                                </span>
                            </strong> annotates the attributes of medications
                            <br>
                        </li>
                        <li>
                            <strong>
                                Disease_symptom:
                            </strong>automatically annotates symptoms of diseases, including:

                            <br>
                            <strong>
                                <span class="subtitles-manual">Bleeding_extraction:
                                </span>
                            </strong>
                            annotates bleeding symptoms
                            <br>
                            <strong>
                                <span class="subtitles-manual">Colorectal_cancer:
                                </span>
                            </strong>
                            annotates symptoms of colorectal cancer

                        </li>
                        <li>
                            <strong>Behavior:</strong>automatically annotates behaviors of patients , including: <br>

                            <strong><span class="subtitles-manual">Smoking_status:</span></strong>
                            annotates whether or not the patient is in a smoking status, and
                            whether the patient has a smoking history.
                            The figure below illustrates an example of using the disease-attribute pipeline in our
                            pipeline
                            library to annotate attributes and their relations with diseases.
                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/diseas_attribute.png"
                                         alt="An example of disease attribute annotation using the pipeline library in CLAMP">
                                    <figcaption>An example of disease attribute annotation using the pipeline library in
                                        CLAMP
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </section>
                <!-- End of Built-in pipelines section-->
                <!-- Start of Export pipeline as a jar file section-->
                <section>
                    <h1 class="section-header-manual" id="export_jar">Export pipeline as a jar file
                    </h1>
                    <p>
                        In order to export a pipeline as a jar file and use it in the command line version, please
                        follow the steps below (See picture below):

                    </P>
                    <ol class="manual-numbers">
                        <li>
                            Go to your desired pipeline folder
                        </li>
                        <li>
                            Click on the small arrow next to it to expand it
                        </li>
                        <li>
                            Right click on the Components folder and select "Export as jar"
                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/pipeline_as_jar.png"
                                         alt="Export a pipeline as a jar ">
                                    <figcaption> Export a pipeline as a jar
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </section>
                <!-- End of Export pipeline as a jar file section-->
                <!-- Start of Annotation section-->
                <section>
                    <h1 class="section-header-manual">Annotation
                    </h1>
                    <h2 id="annotate_corpus">Annotate corpus
                    </h2>
                    <p>
                        The CLAMP annotation module enables you to annotate customized entities and specify
                        relations between them in your desired corpus . These annotations enable you to assign
                        additional clinical information to a selected text and develop an annotated corpus that’s
                        more suitable to the specific task that you have. Task-specific models can be developed
                        and used in the machine-learning modules of CLAMP or any other system of your choice.
                        <span class="subtitles-manual"> Before using this function, you need to:</span>
                    </P>
                    <ol class="manual-numbers">
                        <li>
                            Create a project
                        </li>
                        <li>
                            Import the files that you want to annotate
                        </li>
                    </ol>
                    <p>
                        After completing these steps, you will be able to annotate the imported files based on some
                        predefined structure. The following steps will guide you on how to perform the steps
                        mentioned above.
                    </p>
                    <div>
                        <ol class="manual_alpha">
                            <li>
                                Create a new project:
                                <ol class="manual-numbers">
                                    <li> Click on the plus (+) sign at the top left corner of the screen
                                        as shown figure below.
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/step1.png"
                                                     alt="Step 1 to create a new project">
                                                <figcaption>Step 1 to create a new project</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>On the pop-up window, enter a name for your project, e.g., Drug_name_annotation.
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation.png"
                                                     alt=" Creating a new Corpus Annotation project">
                                                <figcaption> Creating a new Corpus Annotation project</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>Select Corpus Annotation as the project type.</li>
                                    <li>Click the Finish button.
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                    <div>
                        <p>
                            A new project with the name that you have specified is created and placed in the Corpus
                            panel.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/corpos_annotation.png"
                                     alt="Creating a new Corpus Annotation project">
                                <figcaption>Creating a new Corpus Annotation project</figcaption>
                            </figure>
                        </div>
                        <p>
                            Double click the project name to view its content. The created project contains two main
                            folders:
                            <br>
                            <span class="subtitles-manual">Corpus:</span> Contains the files that will be annotated
                            <br>
                            <span class="subtitles-manual">Models: </span>Contains the machine learning models generated
                            from the annotated files.In
                            addition, the prediction results generated from
                            the n-fold cross-validation process and gold
                            standard annotations are included in this folder.
                        </p>
                    </div>
                    <div>
                        <h2 id="import_annotation">Import annotation files</h2>
                        <p>
                            After you have created a project, follow the steps defined below to import the files that
                            you
                            want to annotate:
                            (Please note that you can import the files to either train or test folders.)
                        </p>
                        <ol class="manual_alpha">
                            <li>
                                To import the files that you want to annotate:
                                <ol class="manual-numbers">
                                    <li>Right click on the train folder under the corpus folder in the CorpusView panel

                                    </li>
                                    <li>
                                        Select the import function from the context menu. A pop-up window will
                                        appear.
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/importing_input_file.png"
                                                     alt="Context menu for importing the input files">
                                                <figcaption> Context menu for importing the input files</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        On the pop-up window, select the import source. Here, you need to select "File
                                        System"
                                        which is already selected by default.
                                    </li>
                                    <li>Click on the Next button
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/next_btn.png"
                                                     alt="Click on the Next button ">
                                                <figcaption>Click on the Next button
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        Click on the Browse button on the top of the window to choose the folder of your
                                        choice. The selected folder will be displayed on the left side of the window,
                                        and the
                                        content of the folder will be displayed on the right side. To import you desired
                                        files,
                                        check the checkboxes next to the files of your choice.
                                        <p>
                                            You also have three options to choose from:
                                            <br>
                                            <strong>Filter Types/ Select All/ Deselect All</strong>
                                            <br>
                                            <strong>Filter Types:</strong> Allows you to define the type of files that
                                            will be imported. The only
                                            extensions that you will work with in CLAMP are txt, and .xmi. For example,
                                            you may only
                                            want to import files with the .txt extension
                                            <strong>Select All: </strong>Allows you to choose all displayed files
                                            <strong>Deselect All:</strong> Allow you to deselect the files that have
                                            already been selected
                                        </p>
                                    </li>
                                    <li>
                                        Click on the Browse button next to the "Into folder" field to choose the folder
                                        that you
                                        want to import your files to. Here, we keep the default directory
                                    </li>
                                    <li>
                                        Click on the Finish button.
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/filter_types.png"
                                                     alt="Click on the Next button ">
                                                <figcaption>Illustrating steps 5-7
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                        <p>
                            Now that the selected files have been imported to your desired folder, you can start
                            annotating them. Double click on the files to open theim in the middle window and annotate
                            them. Upon double clicking each file, you will notice that another file with the same name
                            but a different extension (.xmi) has been added to your folder and displayed on the screen.
                            This is the file type used by CLAMP for display and interaction purposes.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/annotating_content.png"
                                     alt="The content of an annotation file">
                                <figcaption> The content of an annotation file
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div>
                        <h2 id="define_entity">Define entity & relation types</h2>
                        <p>
                            Before starting annotation, you need to define the semantic types that you will use for this
                            purpose. Semantic types in CLAMP refer to entities(e.g, ‘problem/treatment/test’) and the
                            relations between them.
                        </p>
                        <ol class="manual_alpha">
                            <li>
                                To define a new entity type:
                                <ol class="manual-numbers">
                                    <li>
                                        Double click on the typedef.xmi file under the models folder to open it. Using
                                        this file,
                                        you will be able to define a schema for entities and the relation types among
                                        them.
                                    </li>
                                    <li>
                                        Right click on the Entities node
                                    </li>
                                    <li>
                                        Go to "Add Child"

                                    </li>
                                    <li>Click on New Element
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation_define_entity.png"
                                                     alt="Illustrating steps 2-4">
                                                <figcaption>Illustrating steps 2-4
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        In the pop up window, enter a name for the element

                                    </li>
                                    <li>
                                        Click the OK button
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation_rel.png"
                                                     alt="Illustrating steps 5-6">
                                                <figcaption>Illustrating steps 5-6
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <p>
                                            The created element will be added to the Entity node (See the picture below)
                                        </p>
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation_entity.png"
                                                     alt="The created element will be added to the Entity node">
                                                <figcaption> The created element will be added to the Entity node
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                To define a new relation type:
                                <ol class="manual-numbers">
                                    <li>Right click on the Relations node
                                    </li>
                                    <li>
                                        Go to "Add Child"
                                    <li>
                                        Click on New Element
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation_new_element.png"
                                                     alt="Context menu for importing the input files">
                                                <figcaption>Illustrating steps 1-3</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>In the pop up window, enter a name for the relation
                                    </li>
                                    <li>
                                        Click the OK button
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation_rel-se.png"
                                                     alt="Illustrating steps 4-5">
                                                <figcaption>Illustrating steps 4-5</figcaption>
                                            </figure>
                                        </div>
                                        <p>Then, you need to decide which entities are involved in this relation. There
                                            are two roles of
                                            arguments an entity can hold in a relation: From, and To.
                                            "From" refers to an independent entity while "To" indicates the dependent
                                            entity.
                                        </p>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                To select the entities that are involved in a relation:
                                <ol class="manual-numbers">
                                    <li>Right click on the newly created relation
                                    </li>
                                    <li>
                                        Go to "Add Attribute"
                                    <li>
                                        Click on "New Attribute"
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation_entity_involved.png"
                                                     alt="Illustrating steps 1-3">
                                                <figcaption>Illustrating steps 1-3</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        In the pop up window, enter a name for the new attribute (you will use "from"
                                        for the
                                        independent entity, and "to" for the dependent entity)
                                    </li>
                                    <li>
                                        Enter the actual name of the entities for the Value field
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/annotation_rel_third.png"
                                                     alt="Illustrating steps 4-6">
                                                <figcaption>Illustrating steps 4-6</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        Click the OK button
                                    </li>
                                    <li>
                                        Click on Save at the top of the window
                                    </li>
                                </ol>
                            </li>
                    </div>
                    <div>
                        <h2 id="start_annotation">Start Annotation</h2>
                        <p>
                            Now that you have set your desired schema, you are ready to start annotating your corpus.
                            First, open your desired .xmi file, then:
                            <br>
                            <strong> To assign entity: </strong>
                            Place your mouse over a word/phrase to highlight it and assign an
                            appropriate entity to the selected text.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/annotation_assign_entity.png"
                                     alt="Named entity annotation">
                                <figcaption> Named entity annotation</figcaption>
                            </figure>
                        </div>
                        <p>
                            Now that you have set your desired schema, you are ready to start annotating your corpus.
                            First, open your desired .xmi file, then:
                            <br>
                            <strong> To assign relation:</strong>
                            By dragging your mouse from an independent entity and dropping it to a
                            dependent entity, the names of possible relations will occur. Choose the appropriate
                            relation name by clicking on one of the displayed names.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/annotation_assign_rel.png"
                                     alt="Relation annotation">
                                <figcaption> Relation annotation</figcaption>
                            </figure>
                        </div>
                        <p>
                            Please remember that you can only assign a relation to the entities that have already been
                            defined in that relation.
                            <br>
                            Once you have completed annotating the corpus, save your changes by clicking on the save
                            button at the top of the screen.
                        </p>
                    </div>
                    <div>
                        <h2 id="visualization_entity_relation">Visualization of entity & relation</h2>
                        <p>
                            Although different colors are automatically assigned to the different items in the "Display
                            Option", you are able to change them at any time.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/visualization_color.png"
                                     alt="Change visualization of the annotated entity/relation">
                                <figcaption>Change visualization of the annotated entity/relation</figcaption>
                            </figure>
                        </div>
                        <ol class="manual_alpha">
                            <li>
                                To change the default colors for semantic types:
                                <ol class="manual-numbers">
                                    <li>
                                        Double click on the default color for the entity of your choice
                                    </li>
                                    <li>
                                        Pick a new color from the color picker window
                                    </li>
                                    <li>
                                        Press the OK button
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/change_default_color.png"
                                                     alt="Change the default colors for semantic types">
                                                <figcaption>Change the default colors for semantic types</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>

                    </div>
                    <div>
                        <h2 id="pre_annotation">Pre-Annotation of entity and relation</h2>
                        <p>
                            As annotating a corpus from scratch may be a time-consuming and costly process, CLAMP
                            offers an advanced feature called "pre-annotation" function which facilitates this
                            process. The "pre-annotation" function relies on the existing models in CLAMP and is
                            highly customizable.

                        </p>
                        <ol class="manual_alpha">
                            <li>
                                Using pre-annotation function

                                <ol class="manual-numbers">
                                    <li>
                                        Choose your desired pipeline to annotate your files in a corpus project.
                                        For more information on how to run a pipeline, go to <a
                                            href="#Run the pipeline">"Run the pipeline" </a> section.
                                    </li>
                                    <li>
                                        Select the .xmi files which contains the predicted named entities from the
                                        output folder.
                                    </li>
                                    <li>
                                        Copy them into the train/test folder of your desired corpus annotation project.
                                        To copy,
                                        right click on the selected files and choose copy.
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/preannotation.png"
                                                     alt="Illustrating steps 1-3">
                                                <figcaption>Illustrating steps 1-3</figcaption>
                                            </figure>
                                        </div>
                                        <p>Double click on the files to view their contents in a new window. As you can
                                            see in the figure
                                            below, the identified named entities in the file are already highlighted.
                                            Now you can start your
                                            own annotation.
                                        </p>
                                        <div>
                                            <figure class="figure-manual">
                                                <img src="img/manual/preannotated_ne.png"
                                                     alt=" A file with pre-annotated named entities">
                                                <figcaption> A file with pre-annotated named entities</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </section>
                <!-- End of Annotation section-->
                <!-- Start of Machine learning model development-->
                <section>
                    <h1 class="section-header-manual" id="machine_learning_dev">Machine learning model development
                    </h1>
                    <p>
                        Clamp enables you to build your own machine learning model based on a corpus that you
                        have already annotated or a pre annotated one that you have imported into a corpus
                        annotation project. The model can be used for predictions on new files. In the current
                        version of Clamp, CRF (Conditional Random Field) is used to build machine-learning model
                        for named entity recognition (NER).
                        <br>
                        The first step to build a Machine Learning model is to configure its schema. After
                        configuring the schema, you will be able to start running the training model and evaluation
                        processes. Once these processes are completed, you can view the generated model, its
                        associated log files, and named entities predicted by the model in the output folder. The
                        following steps will guide you on how to perform the steps mentioned above.

                    </P>
                    <div>
                        <h2 id="building_machine_learning models">
                            Building machine learning models <br>(NER model)
                        </h2>
                        <ol class="manual-numbers">
                            <li>
                                Select your desired train folder on the Corpus panel

                            </li>
                            <li>
                                Click on the "Train Model" button at the top of the window as shown
                                in the figure below.
                                <div>
                                    <figure class="figure-manual">
                                        <img src="img/manual/ml_train_btn.png"
                                             alt="Train Model button">
                                        <figcaption>Train Model button</figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                On the pop up window as shown in the figure below, enter a name for the model that you
                                are
                                building.
                                <div>
                                    <figure class="figure-manual">
                                        <img src="img/manual/ml_enter_name.png"
                                             alt="Configuration window for machine learning model building">
                                        <figcaption>Configuration window for machine learning model building
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                Click the checkbox for the features that you want to include in your model
                            </li>
                            <li>
                                In the Evaluation box, choose if you want to test the built model against a test dataset
                                and/or if you want to do a n-fold cross-validation during the training process.
                                <p>
                                    If you choose to test the model against a test set, make sure that you have your
                                    desired
                                    annotated xmi files in the folder of your choice. You can browse for the folder by
                                    clicking on
                                    the three dot button next to the checkboxes. With the n-fold cross validation, you
                                    are not
                                    required to do so as the training data will be used to test the model performance.
                                </p>
                            </li>
                            <li>
                                Click on the Finish button to start building the model.
                                <p>
                                    Once the building process starts, you can check the progress in the Console window,
                                    as
                                    well as the progress bar at the bottom of the screen. You can also stop the building
                                    process at anytime by clicking the red stop button in the Progress window.
                                    <br>
                                    <strong>Note:</strong>During the model building process, the training files can not
                                    be annotated. Clicking on
                                    the text of the training files pops up an alert window indicating that the user
                                    operation is
                                    waiting for a function to complete.
                                </p>
                                <div>
                                    <figure class="figure-manual">
                                        <img src="img/manual/training_pause.png"
                                             alt="Annotations on the training file will be paused during the model building process">
                                        <figcaption>Annotations on the training file will be paused during the model
                                            building process
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                    </div>
                    <div>
                        <h2 id="check_output">
                            Check output models & logs
                        </h2>
                        <p>
                            By default the built models, their associated logs, and the named entities predicted by each
                            model (in the output sub-folder) are stored in the models folder. As shown in the figures
                            below,
                            the model built during n-fold cross validation and the model trained on the whole
                            training set are also stored in this directory. The content of the log files includes
                            the output information of the training process and the evaluation performance of each
                            specific
                            folder for cross validation.
                        </p>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/annotation_pause.png"
                                     alt="Annotations on the training file will be paused during the model building process">
                                <figcaption>Annotations on the training file will be paused during the model
                                    building process
                                </figcaption>
                            </figure>
                        </div>
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/crooss_validation.png"
                                     alt="Cross-validation performance in training.fold0.log">
                                <figcaption>Cross-validation performance in training.fold0.log
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div>
                        <h2 id="use_own_model">
                            Use your own model in pipeline
                        </h2>
                        <p>
                            The steps below show how you should use your own model to recognize named entities:
                        </p>
                        <ol class="manual-numbers">
                            <li>
                                Make sure that you have selected your desired project folder on the Corpus panel
                            </li>
                            <li>
                                Go to models> model_xxx> output, then, right click on the file labled model.jar and
                                select copy (See the figure below)

                            </li>
                            <li>
                                Go to the pipeline panel and select the pipeline of your choice

                            </li>
                            <li>
                                Click on the small arrow next to it to expand it

                            </li>
                            <li>
                                Go to Components -> Named Entity Recognizer ->DF_CRF_based_named_entity_recognize
                                <div>
                                    <figure class="figure-manual">
                                        <img src="img/manual/own_model.png"
                                             alt="How to use your own model to recognize name entities">
                                        <figcaption>How to use your own model to recognize name entities

                                        </figcaption>
                                    </figure>
                                </div>

                            </li>
                            <li>
                                Paste the copied file into "CRF based name entity recognizer" folder by righ clicking on
                                the folder and choosing past

                            </li>
                            <li>
                                Double click on the Config.conf file in the "CRF based named entity recognizer" folder
                                to
                                open it

                            </li>
                            <li>Click on the three dots button to replace the default model for "CRF based named entity
                                recognizer" with your own model.
                                <div>
                                    <figure class="figure-manual">
                                        <img src="img/manual/own_model_default.png"
                                             alt=" Replace the default model with your own model">
                                        <figcaption> Replace the default model with your own model
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                Click on the Open button
                            </li>
                            <li>
                                Click the save button at the top of the page to save the changes.
                                <figure class="figure-manual">
                                    <img src="img/manual/own_model_save.png"
                                         alt="Click the Save button at the top of the page ">
                                    <figcaption>Click the Save button at the top of the page
                                    </figcaption>
                                </figure>
                            </li>
                        </ol>
                    </div>
                    <div>
                        <h2 id="visualization_error">
                            Visualization for error analysis

                        </h2>
                        <p>
                            You will be able to evaluate the performance of the NER model only if you have already
                            checked the checkbox(es) for “Use test set” or/and “CV, fold” when creating the model. For
                            more information on creating a new NER model, go to
                            <a href="#Building machine learning models">
                                Building machine learning models
                            </a>
                            section. Once the model is built, you can conduct an error analysis to compare the
                            goldstandard
                            annotations with the predicted ones (the annotations that are built based on the
                            model that you have specified).
                            <br>
                            <span class="subtitles-manual"> To perform error analysis:</span>
                            Double click on one of the .xmi files listed in the output folder of your choice on the
                            corpus
                            panel. This will open a new window where you can see the original text along with both
                            gold-standard and predicted annotations.
                        </p>
                        <figure class="figure-manual">
                            <img src="img/manual/error_analysis.png"
                                 alt="The .xmi file content which includes the original text along with both gold-standard and predicted annotations">
                            <figcaption>
                                The .xmi file content which includes the original text along with both
                                gold-standard
                                and predicted annotations
                            </figcaption>
                        </figure>
                        <p>
                            Please note that all named entities in both gold-standard and predicted
                            annotations are listed on the "Display Options" panel.
                            You can choose which named entities to be highlighted in the text file and assign different
                            colors to them as
                            described in <a href="#Visualization_entity_relation">"Visualization of entity and relation
                                types"</a> section.
                        </p>
                    </div>
                </section>
                <!-- End of Machine learning model development section-->
                <!-- Start of Contact us section-->
                <section>
                    <h1 class="section-header-manual" id="contactus">Contact US
                    </h1>
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