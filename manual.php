<?php include_once dirname(__FILE__) . '/views/header.php'; ?>
<link rel="stylesheet" href="css/manual.css">


<div class="container">
    <div class=WordSection1>

        <div class="cover" style="align-content: center">
            <p class=MsoNormal>&nbsp;&nbsp; <b><span style='font-size:25.0pt;line-height:
150%'>&nbsp;</span></b></p>
            <p class=MsoNormal>&nbsp;</p>
            <p class=MsoNormal>&nbsp;</p>
            <p class=MsoNormal><span style='position:absolute;z-index:251673088;margin-left:
313px;margin-top:5px;width:226px;height:81px'><img width=226 height=81
                                                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image001.png"
                                                   alt="CLAMP"></span></p>

            <p class=MsoNormal style="margin-top: 130px"><span class=underclampChar><b><span style='font-size:25.0pt;
line-height:150%;font-family:Roboto;color:black'>A Guide to the Extraction of Clinical Concepts</span></b></p>
            <br><br><br>
            <p class=MsoNormal align=right style='text-align:right'><span style='color:
black'>Reference Manual</span></p>

        </div>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoToc1><a href="#_Toc462667249">CLAMP<span style='color:black;
display:none;text-decoration:none'>. </span><span style='color:black;
display:none;text-decoration:none'>5</span></a></p>


        <div class="just-padding">

            <div class="list-group list-group-root well">

                <a href="#_Toc462667250" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>1. Introduction
                </a>

                <a href="#_Toc462667251" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>2. System Requirements
                </a>

                <a href="#_Toc462667252" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>3. Installation
                </a>

                <a href="#_Toc462667253" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>4. How to run CLAMP
                </a>

                <a href="#_Toc462667254" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>5. Package Description
                </a>

                <a href="#_Toc462667255" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>6. Import existing projects into the new version
                </a>

                <a href="#_Toc462667256" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>7. Contact us
                </a>

                <a href="#item-8" class="list-group-item" data-toggle="collapse">
                    <i class="glyphicon glyphicon-chevron-right"></i>8. NLP Components
                </a>
                <div class="list-group collapse" id="item-8">

                    <a href="#_Toc462667258" class="list-group-item">8.1 NLP Components</a>
                    <a href="#_Toc462667259" class="list-group-item">8.2 Sentence Detector</a>
                    <a href="#_Toc462667260" class="list-group-item">8.3 Tokenizer</a>
                    <a href="#_Toc462667261" class="list-group-item">8.4 Pos Tagger</a>
                    <a href="#_Toc462667262" class="list-group-item">8.5 Chunker</a>
                    <a href="#_Toc462667263" class="list-group-item">8.6 Named Entity Recognizer</a>
                    <a href="#_Toc462667264" class="list-group-item">8.7 Assertion Identifier</a>
                    <a href="#_Toc462667265" class="list-group-item">8.8 Ruta_ Rule_Engine</a>
                    <a href="#_Toc462667266" class="list-group-item">8.9 Section Identifier</a>
                    <a href="#_Toc462667267" class="list-group-item">8.10 UMLS Encoder</a>
                    <a href="#_Toc462667268" class="list-group-item">8.11 User_Defined_Components</a>
                </div>

                <a href="#item-1" class="list-group-item" data-toggle="collapse">
                    <i class="glyphicon glyphicon-chevron-right"></i>9. Machine Learning components
                </a>
                <div class="list-group collapse" id="item-1">

                    <a href="#item-1-1" class="list-group-item" data-toggle="collapse">
                        <i class="glyphicon glyphicon-chevron-right"></i>9.1 NER Feature Extractor
                    </a>
                    <div class="list-group collapse" id="item-1-1">
                        <a href="#_Toc462667271" class="list-group-item">9.1.1 DF_Brown_clustering_feature</a>
                        <a href="#_Toc462667272" class="list-group-item">9.1.2 DF_Dictionary_lookup_feature</a>
                        <a href="#_Toc462667273" class="list-group-item">9.1.3 DF_Ngram_feature</a>
                        <a href="#_Toc462667274" class="list-group-item">9.1.4 DF_prefix_suffix_feature</a>
                        <a href="#_Toc462667275" class="list-group-item">9.1.5 DF_Random_indexing_feature</a>
                        <a href="#_Toc462667276" class="list-group-item">9.1.6 DF_Section_feature</a>
                        <a href="#_Toc462667277" class="list-group-item">9.1.7 DF_Sentence_pattern_feature</a>
                        <a href="#_Toc462667278" class="list-group-item">9.1.8 DF_Word_embedding_feature</a>
                        <a href="#_Toc462667279" class="list-group-item">9.1.9 DF_Word_shape_feature</a>
                        <a href="#_Toc462667280" class="list-group-item">9.1.10 DF_Words_regular_expression_feature</a>

                    </div>
                </div>


                <a href="#item-10" class="list-group-item" data-toggle="collapse">
                    <i class="glyphicon glyphicon-chevron-right"></i>10. Build a Pipeline
                </a>
                <div class="list-group collapse" id="item-10">

                    <a href="#_Toc462667282" class="list-group-item">10.1 Create and Run a Pipeline</a>
                    <a href="#_Toc462667283" class="list-group-item">10.2 Configure the pipeline</a>
                    <a href="#_Toc462667284" class="list-group-item">10.3 Component dependency &amp; Auto fix</a>
                    <a href="#_Toc462667285" class="list-group-item">10.4 Import input files</a>
                </div>


                <a href="#_Toc462667286" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>11. Run the pipeline
                </a>

                <a href="#_Toc462667287" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>12. Output visualization
                </a>

                <a href="#_Toc462667288" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>13. Built-in pipelines
                </a>

                <a href="#_Toc462667289" class="list-group-item">
                    <i class="glyphicon glyphicon-chevron-right" style="color: white;;"></i>14. Export pipeline as a jar
                    file
                </a>

                <a href="#item-15" class="list-group-item" data-toggle="collapse">
                    <i class="glyphicon glyphicon-chevron-right"></i>15. Annotation
                </a>
                <div class="list-group collapse" id="item-15">

                    <a href="#item-15-1" class="list-group-item" data-toggle="collapse">
                        <i class="glyphicon glyphicon-chevron-right"></i>15.1 Annotate corpus
                    </a>
                    <div class="list-group collapse" id="item-15-1">
                        <a href="#_Toc462667292" class="list-group-item">15.1.1 Create a project</a>
                        <a href="#_Toc462667293" class="list-group-item">15.1.2 Import annotation files</a>
                        <a href="#_Toc462667294" class="list-group-item">15.1.3 Define entity &amp; relation types</a>
                        <a href="#_Toc462667295" class="list-group-item">15.1.4 Start Annotation</a>
                        <a href="#_Toc462667296" class="list-group-item">15.1.5 Visualization of entity &amp; relation</a>
                        <a href="#_Toc462667297" class="list-group-item">15.1.6 Pre-Annotation of entity and relation</a>
                    </div>
                </div>


                <a href="#item-16" class="list-group-item" data-toggle="collapse">
                    <i class="glyphicon glyphicon-chevron-right"></i>16. Machine learning model
                </a>
                <div class="list-group collapse" id="item-16">

                    <a href="#_Toc462667299" class="list-group-item">16.1 Building machine learning models</a>
                    <a href="#_Toc462667300" class="list-group-item">16.2 Check output models &amp; logs</a>
                    <a href="#_Toc462667301" class="list-group-item">16.3 Use your own model in pipeline</a>
                    <a href="#_Toc462667302" class="list-group-item">16.4 Visualization for error analysis</a>
                </div>


            </div>

        </div>

    </div>


    <div class=WordSection2>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal><br>
            <br>
        </p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <h1 align=center style='text-align:center'><a name="_Toc462667249">CLAMP</a></h1>

        <p class=clampexplanation align=center style='text-align:center'><span
                style='position:absolute;z-index:251603456;left:0px;margin-left:297px;
margin-top:57px;width:110px;height:24px'><img width=110 height=24
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image002.png"
                                              alt="Version 1.1.7"></span><b><span
                    style='color:#215868'>C</span></b><span
                style='color:windowtext'>linical</span><span style='color:#215868'> L</span>anguage
            <b><span style='color:#215868'>A</span></b>nnotation<br>
            <b><span style='color:#215868'>M</span></b>odeling and <b><span
                    style='color:#215868'>P</span></b>rocessing toolkit System</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667250">1. Introduction</a></h1>

        <p class=MsoNormal>The CLAMP System is a comprehensive clinical Natural
            Language Processing software that enables recognition and automatic encoding of
            clinical information in narrative patient reports. In addition to running a
            clinical concept extraction pipeline as well as an annotation pipeline, the
            individual components of the system can also be used as independent modules.
            The system lends itself for diverse applications in a broad range of clinical
            domains.The high performance language processing framework in CLAMP consists of
            the following key building blocks: </p>

        <p class=titlenormal>NLP pipelines<span class=titlenormalChar><span
                    style='font-family:Roboto'>:</span></span></p>

        <p class=MsoNormal>CLAMP components builds on a set of high performance NLP
            components that were proven in several clinical NLP challenges such as i2b2 ,
            ShARe/CLEF , and SemEVAL. A pipeline can be created and customized by a simple
            drag and drop on the individual &nbsp;CLAMP components in the order that is
            desired. Upon creation of the pipeline, CLAMP checks for errors in sequence and
            directs the user to the appropriate logical order with insertion of the
            required components for a working pipeline. The CLAMP components are supported
            by knowledge resources consisting of medical abbreviations, dictionaries,
            section headers, and a corpus of 400 annotated clinical notes derived from
            MTsamples, a freely available resource of clinical narrative text. CLAMP also
            provides built-in pipelines ready for use out of the box for a series of common
            clinical applications. </p>

        <p class=titlenormal>Machine learning and hybrid approaches: </p>

        <p class=MsoNormal>The CLAMP framework provides alternative components for some
            tasks, utilizing rule based methods and/or machine learning methods such as
            support vector machines, and conditional random fields. These components can be
            customized by re-training on an annotated corpus, or editing the rule sets
            within the CLAMP GUI to achieve a custom NLP task. The CLAMP GUI version also
            provides built-in functionality to test the model, using the annotated corpora
            or n-fold cross validation.</p>

        <p class=titlenormal>Corpus management and annotation tool:</p>

        <p class=MsoNormal>&nbsp;The user interface also provides required tools to
            maintain and annotate text corpora. It hosts an improved version of the brat
            annotation tool (reference?) for textual annotations.</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667251">2. System
                Requirements</a></h1>

        <p class=MsoNormal>CLAMP is a stand-alone Java application based on the Eclipse
            platform technologies. CLAMP uses the Apache UIMA (Unstructured Information
            Management Architecture) framework. The annotation module of CLAMP incorporates
            and enhances the brat rapid annotation tool . For the other individual
            constituents, Apache OpenNLP toolkit, Liblinear and CRF Suite are utilized in
            addition to in-house rule-based components. CLAMP also use the UIMA Ruta (Rule
            based Text Annotation) as a rule engine to help users specify rules.</p>

        <p class=MsoNormal>CLAMP is distributed as a ready-to-use binary package that
            can either be executed at the command line or carries the associated Graphic
            User Interface (GUI). Our distribution package includes components for jar
            files, CRFSuite, and a Lucene <span style='color:windowtext'>index of all levels
of UMLS data. </span></p>

        <p class=MsoNormal><span style='color:windowtext'>The only prerequisite
necessary to compile CLAMP is JRE 1.8 (Java Runtime Environment). Please ensure
that you have Java 8 or higher installed in your system. Run the following
command in both Mac and Windows to check your version: &nbsp;</span></p>

        <p class=MsoNormal><span style='color:windowtext'>java �version</span></p>

        <p class=MsoNormal>Here is an example of what you will see when running the
            command in Windows:</p>

        <p class=MsoNormal><img width=483 height=241 id="Picture 1"
                                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image003.png"
                                alt="https://lh4.googleusercontent.com/UZi5yA4rSLlL0RVWWqFc_TyCdIP2oPw2KXsPBKeOwn5pQTdVaycG8jiSJ3wyFAqH7hofZT0zv98lZdoYhJ0ZgVI7jBsvUYS84OCnSuh8XgzTKAw6duZMwXerSDjUhFwkz7NqIWS53cqKXImUTQ">
        </p>

        <p class=MsoNormal><br>
            If your java version is not 1.8, it is available for download from the Oracle
            website at<span style='color:#333333'> </span><a
                href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html"><span
                    style='color:#0563C1'>http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html</span></a>.
        </p>

        <p class=MsoNormal>An UMLS account is required in order to use Level 2 and
            higher data in the UMLS encoding component of the system. The account can be
            created at <a href="https://uts.nlm.nih.gov/home.html">https://uts.nlm.nih.gov/home.html.</a>
            You will have to enter your UMLS username and password when prompted by CLAMP
            in order to utilise the UMLS encoding component. </p>

        <p class=MsoNormal>CLAMP also uses the computer�s default browsers to visualize
            the clinical documents. Since all browsers do not completely support all the
            aspects of the technologies used to implement the visualization, limitations
            exist in term of running the CLAMP annotation module in the browsers. On the
            Windows OS, the Internet Explorer should be higher than IE9; On Macintosh
            computers, Safari (all versions) works well with CLAMP.</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667252">3. Installation</a></h1>

        <p class=MsoNormal>The CLAMP System is provided as a .zip file. After
            downloading the compressed file, unzip the package in the directory of choice
            and voila!! the system is ready for use. Installation instructions are the same
            for both Windows and Macintosh computers. For the CLAMP command line version
            please refer to the readme file. For further information and troubleshooting,
            please refer CLAMP website at <a href="http://clamp.uth.edu">http://clamp.uth.edu</a>.</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667253">4. How to
                run CLAMP</a></h1>

        <p class=MsoNormal>You can run the GUI version of CLAMP by double clicking on
            the startCLAMP icon. Once the software is completely loaded, you will notice a
            welcome tab. Close the tab to go to CLAMP working environment.<br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251698688;left:0px;margin-left:238px;
margin-top:43px;width:42px;height:11px'><img width=42 height=11
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image004.png"></span><span
                style='position:absolute;z-index:251697664;left:0px;margin-left:280px;
margin-top:26px;width:162px;height:51px'><img width=162 height=51
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image005.png"
                                              alt="Close the tab to go to CLAMP working environment"></span><img
                border=0
                width=244 height=239 id="Picture 236"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image006.png"></p>

        <p class=MsoNormal>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667254">5. Package
                Description</a></h1>

        <p class=MsoNormal>Since CLAMP is a stand-alone eclipse plugin, its folder
            structure is similar to other eclipse plugins.</p>

        <p class=MsoNormal><span class=titlenormalChar><span style='font-size:18.0pt;
line-height:150%;font-family:Roboto'>Configuration Folder:</span></span> &nbsp;<br>
            This folder contains CLAMP configuration files.</p>

        <p class=MsoNormal><span class=titlenormalChar><span style='font-size:18.0pt;
line-height:150%;font-family:Roboto'>StartCLAMP:<br>
</span></span>This is the launching point for the CLAMP GUI. In Windows, this
            is an executable file while in Mac, this is an application<span
                style='color:windowtext'>.</span></p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=433 height=126 id="Picture 2"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image007.png"
                                                                       alt="Screen Shot 2016-07-27 at 9.51.55 AM.png">
        </p>

        <p class=MsoNormal><span class=titlenormalChar><span style='font-size:18.0pt;
line-height:150%;font-family:Roboto'>Workspace Folder:<br>
</span></span>This folder contains seven sub-folders:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span><b>ComponentLibrary</b>: contains the components used in machine
            learning feature extraction and NLP functions.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span><b>MyCorpus</b>: contains the customized corpus built by the users.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span><b>MyPipeline</b>: contains the customized pipeline created by users for
            clinical notes processing.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='color:windowtext'>4.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><b>PipelineLibrary</b>:
            contains the built-in pipelines ready to use for a series of common clinical
            applications.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='color:windowtext'>5.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><b>Log:</b> Includes
            CLAMP run-time log files</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='color:windowtext'>6.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><b>Metadata:</b>
            The metadata used by CLAMP are included in this folder.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='color:windowtext'>7.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><b>Resources:</b>
            This folder includes third-party libraries. Currently it has two items:</p>

        <p class=MsoListParagraph style='margin-left:2.25in;text-indent:-.5in'><span
                style='color:windowtext'>7.1<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>CRFSuite: the CRF implementation for Name Entity Recognition
            tasks</p>

        <p class=MsoListParagraph style='margin-left:2.25in;text-indent:-.5in'><span
                style='color:windowtext'>7.2<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span>Umls_index: the Lucene index built for CLAMP based on the UMLS
            thesaurus. If you want to use UMLS terminologies, then you will need to create
            an UMLS account. Please follow the following link to create an UMLS account if
            you do not have any. </p>

        <p class=MsoListParagraph style='margin-left:2.25in;text-indent:-.5in'><span
                style='color:windowtext'>7.3<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='color:#0563C1'>https://uts.nlm.nih.gov//license.html<br>
<br>
</span></p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>The following table lists libraries included in CLAMP. </p>

        <div align=center>

            <table class=GridTable5Dark-Accent51 border=1 cellspacing=0 cellpadding=0
                   style='border-collapse:collapse;border:none'>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-right:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><b><span
                                    style='font-size:12.0pt'>groupId</span></b></p>
                    </td>
                    <td valign=top style='border-top:solid white 1.0pt;border-left:none;
  border-bottom:solid white 1.0pt;border-right:none;background:#4BACC6;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><b><span
                                    style='font-size:12.0pt'>artifactId</span></b></p>
                    </td>
                    <td valign=top style='border:solid white 1.0pt;border-left:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><b><span
                                    style='font-size:12.0pt'>version</span></b></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.cleartk</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>cleartk</span></u><span style='font-size:12.0pt'>-ml-<u>liblinear</u></span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>2.0.0</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.ini4j</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>ini4j</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>0.5.2</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.uima</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>uimafit</span></u><span
                                style='font-size:12.0pt'>-core</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>2.1.0</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>com.google.code.gson</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>gson</span></u></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>2.3</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.uima</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>uimaj</span></u><span style='font-size:12.0pt'>-core</span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>2.6.0</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.uima</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>uimaj</span></u><span style='font-size:12.0pt'>-<u>cpe</u></span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>2.6.0</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.uima</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>uimaj</span></u><span style='font-size:12.0pt'>-document-annotation</span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>2.6.0</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>de.bwaldvogel</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>liblinear</span></u></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>1.94</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.lucene</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>lucene</span></u><span
                                style='font-size:12.0pt'>-core</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>5.2.1</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.lucene</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>lucene</span></u><span style='font-size:12.0pt'>-analyzers-common</span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>5.2.1</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.lucene</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>lucene</span></u><span style='font-size:12.0pt'>-<u>queryparser</u></span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>5.2.1</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.opennlp</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>opennlp</span></u><span
                                style='font-size:12.0pt'>-tools</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>1.5.1-incubating</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.ctakes</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>ctakes</span></u><span style='font-size:12.0pt'>-type-system</span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>3.2.0</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.cleartk</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>cleartk</span></u><span style='font-size:12.0pt'>-named-entity</span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>0.6.6</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>com.googlecode.clearnlp</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>clearnlp</span></u></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>1.3.1</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>commons-<u>codec</u></span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>commons-<u>codec</u></span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>20041127.091804</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>dom4j</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>dom4j</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>1.6.1</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.apache.uima</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>ruta</span></u><span style='font-size:12.0pt'>-<u>ep</u>-engine</span>
                        </p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>2.3.0</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>javax.servlet</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>servlet</span></u><span
                                style='font-size:12.0pt'>-<u>api</u></span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>3.0-alpha-1</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>com.sun.jersey</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>jersey-client</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>1.19</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>junit</span></u></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>junit</span></u></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>4.12</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>commons-<u>cli</u></span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>commons-<u>cli</u></span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>1.3</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>net.jodah</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>concurrentunit</span></u></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#B6DDE8;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>0.4.2</span></p>
                    </td>
                </tr>
                <tr style='height:15.0pt'>
                    <td valign=top style='border:solid white 1.0pt;border-top:none;background:
  #4BACC6;padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>org.javatuples</span></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><u><span
                                    style='font-size:12.0pt'>javatuples</span></u></p>
                    </td>
                    <td valign=top style='border-top:none;border-left:none;border-bottom:solid white 1.0pt;
  border-right:solid white 1.0pt;background:#DAEEF3;padding:0in 5.4pt 0in 5.4pt;
  height:15.0pt'>
                        <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;line-height:normal'><span
                                style='font-size:12.0pt'>1.2</span></p>
                    </td>
                </tr>
            </table>

        </div>

        <p class=MsoNormal>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667255">6. Import
                existing projects into the new version</a></h1>

        <p class=MsoNormal><b>On Windows</b>, simply copy contents of your previous
            work folder <i>(i.e. from older </i><i><span style='font-family:Consolas'>Clamp_x.xx.xx_win\workspace\MyPipeline\</span>
                contents</i> to <i>new </i><i><span
                    style='font-family:Consolas'>Clamp_x.xx.xx_win\workspace\MyPipeline\</span>
                contents</i>) using <b>Windows Explorer</b> and <b>restart CLAMP</b> if it�s
            already running. On startup, CLAMP will recognize these projects and import
            them into your workspace.<br>
            <br>
        </p>

        <p class=MsoNormal><b>On MacOSX</b>, similarly copy contents of your previous
            work folder (<i>i.e. from older </i><i><span style='font-family:Consolas'>Clamp_x.xx.xx_win/workspace/MyPipeline/</span>
                contents </i>to<i> new </i><i><span
                    style='font-family:Consolas'>Clamp_x.xx.xx_win/workspace/MyPipeline/</span>
                contents</i>) using <b>Finder</b> and <b>restart CLAMP</b> if it�s already
            running. On startup, CLAMP will recognize these projects and import them into
            your new workspace.</p>

        <p class=MsoNormal>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667256">7. Contact
                us</a></h1>

        <p class=MsoNormal>The CLAMP System was developed by Dr. Hua &nbsp;Xu�s team
            from the School of Biomedical Informatics at the University of Texas Health
            Science Center in Houston. </p>

        <p class=MsoNormal style='margin-left:.5in'>For technical issues, please
            contact: </p>

        <p class=MsoNormal style='margin-left:.5in'><a
                href="mailto:Jingqi.Wang@uth.tmc.edu">Jingqi.Wang@uth.tmc.edu</a></p>

        <p class=MsoNormal style='margin-left:.5in'>For any other issues, please
            contact: <a href="mailto:Anupama.E.Gururaj@uth.tmc.edu">Anupama.E.Gururaj@uth.tmc.edu</a>
            <br>
            <br>
        </p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667257">8. NLP
                Components</a></h1>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667258">8.1 NLP Components</a>
            &nbsp;</h2>

        <p class=MsoNormal>NLP components are used for processing text. CLAMP offers
            multiple NLP components that are the building blocks for performing any of the
            NLP tasks. The individual components are provided as pre-built modules that are
            to be used in building pipelines for automatic text processing, as well as
            training customized machine learning models. Figure 8.1 displays the CLAMP NLP
            components, as well as its associated tools, algorithms and resources. In this
            section, we will provide details about each NLP component including their
            function as well as ways to customize them using your own dictionary/model. In
            �<a href="#_Build_a_Pipeline">Build a Pipeline</a>� section, we have tutorials
            that touch on use cases wherein the components are utilized in various
            applications.</p>

        <p align=center style='text-align:center'><img border=0 width=296 height=299
                                                       id="Picture 5"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image008.png"
                                                       alt="https://lh6.googleusercontent.com/z213YVDk2BDeCNhqzxzzykRWmE24fTiS3IimolNGjU1dYBt_iKC7VYM8C2A82ITV522VYWf1sXlc_bZ1MH0arVB0D_NHPz_tQFz4_nzY9kwjs4gmLwlrEtQoZ9Nq8i_PcHT5a-p7t4SKCO3Jdg">
        </p>

        <p align=center style='text-align:center'><i><span style='font-family:Roboto'>Figure
8.1 Schema of NLP Components</span></i></p>

        <p align=center style='text-align:center'><i><span style='font-family:Roboto'>&nbsp;</span></i></p>

        <p align=center style='text-align:center'><i><span style='font-family:Roboto'>&nbsp;</span></i></p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667259">8.2 Sentence
                Detector</a></h2>

        <p class=MsoNormal>A sentence is defined as the longest whitespace trimmed
            character sequence between two punctuation marks. A Sentence Detector utilizes
            different methods to detect a sentence. As shown in Figure 8.2, CLAMP provides
            three different models to detect a sentence: </p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_Sentence_Detector </p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_Sentence_by_newline,
            and </p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_OpenNLP_sentence_detector</p>

        <p class=MsoNormal>Each model is described in detail in the following sections.</p>

        <p align=center style='text-align:center'><img border=0 width=229 height=262
                                                       id="Picture 252"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image009.png">
        </p>

        <p class=picTitles>Figure 8.2 Three sentence detectors and their configuration
            files</p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_Sentence_Detector:</p>

        <p class=MsoNormal>DF_CLAMP_Sentence_Detector is the default sentence detector
            in CLAMP. It is designed specifically for clinical notes and takes into account
            the distinctive characteristics observed in sentences found in clinical texts.</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>To configure the DF_CLAMP_Sentence_Detector, please click on
            the config file. A pop-up window opens where you can modify two parameters: <b>Medical
                Abbreviation</b>, and <b>Max Sentence Length</b>.</p>

        <p class=MsoNormal><b>Medical Abbreviation:</b></p>

        <p class=MsoNormal>There are some medical abbreviations that have punctuation
            marks &nbsp;at their beginning (�.NO2) while some of them have it at the end
            (spec.). Providing a list of such abbreviations would help the detector to
            identify sentences more accurately. By default, CLAMP has provided a
            comprehensive list of medical abbreviation which can be found in this file: <i>defaultAbbrs.txt</i>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the abbreviation file:</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Double click on
            config.conf file to open it </p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the button with
            three dots to browse for your own file</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the open
            &nbsp;button </p>

        <p class=MsoListParagraph style='margin-left:.25in'><span style='position:absolute;
z-index:251605504;left:0px;margin-left:196px;margin-top:344px;width:161px;
height:29px'><img width=161 height=29
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image010.png"
                  alt="a)3- Click on the Open button "></span><span style='position:absolute;
z-index:251606528;left:0px;margin-left:357px;margin-top:353px;width:12px;
height:11px'><img width=12 height=11
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image011.png"></span><span
                style='position:absolute;z-index:251601408;left:0px;margin-left:520px;
margin-top:55px;width:11px;height:16px'><img width=11 height=16
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image012.png"></span><span
                style='position:absolute;z-index:251600384;left:0px;margin-left:265px;
margin-top:24px;width:256px;height:45px'><img width=256 height=45
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image013.png"
                                              alt="a)2- Click the button with three dots to browse for your own file&#13;&#10;&#13;&#10;"></span><img
                border=0 width=524 height=377 id="Picture 3"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image014.png"></p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            edit the current file:</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Double click on the defaultAbbrs.txt
            file to open it</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Add the terms that you
            want to include in the abbreviation file</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the Save
            button on the toolbar</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251607552;left:0px;margin-left:214px;
margin-top:188px;width:169px;height:48px'><img width=169 height=48
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image015.png"
                                               alt="b)1- Double click on defaultAbbrs.txt file "></span><span
                style='position:absolute;z-index:251609600;left:0px;margin-left:172px;
margin-top:209px;width:42px;height:11px'><img width=42 height=11
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image016.png"></span><span
                style='position:absolute;z-index:251621888;left:0px;margin-left:384px;
margin-top:95px;width:13px;height:11px'><img width=13 height=11
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image017.png"></span><span
                style='position:absolute;z-index:251619840;left:0px;margin-left:169px;
margin-top:11px;width:8px;height:19px'><img width=8 height=19
                                            src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image018.png"></span><span
                style='position:absolute;z-index:251616768;left:0px;margin-left:96px;
margin-top:29px;width:169px;height:27px'><img width=169 height=27
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image019.png"
                                              alt="b)3- Click the Save button"></span><span style='position:absolute;
z-index:251613696;left:0px;margin-left:216px;margin-top:73px;width:169px;
height:46px'><img width=169 height=46
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image020.png"
                  alt="b)2- Add the terms that you want to include in the file "></span><img
                border=0 width=458 height=221 id="Picture 18"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image021.png"></p>

        <p class=MsoNormal><b>Max Sentence Length:</b></p>

        <p class=MsoNormal>Checking the checkbox for �Break long sentences or not?�
            allows users to break long sentences into the number of words that they have
            specified in the input textbox. Please refer to Figure 8.3 for more
            information.</p>

        <p class=MsoNormal align=center style='text-align:center'><br>
            <img border=0 width=524 height=153 id="Picture 137"
                 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image022.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
8.3 Interface for config.conf of the DF_CLAMP_Sentence_Detector<br>
<br>
</span></span></p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_Sentence_by_newline
        </p>

        <p class=MsoNormal>This detector will identify new sentences using the line
            breaks in the file, i.e., each line in the file is treated as a single
            sentence.</p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_OpenNLP_sentence_detector.
        </p>

        <p class=MsoNormal>This is an OpenNLP sentence detector which advanced users
            can use its config.conf &nbsp;file to change its default model.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default model:</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Double click on
            config.conf file to open it </p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the button with
            three dots to browse for your own file</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the open
            &nbsp;button </p>

        <p class=MsoListParagraph style='margin-left:.25in'><span style='position:absolute;
z-index:251617792;left:0px;margin-left:370px;margin-top:303px;width:12px;
height:11px'><img width=12 height=11
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image023.png"></span><span
                style='position:absolute;z-index:251614720;left:0px;margin-left:210px;
margin-top:295px;width:162px;height:29px'><img width=162 height=29
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image024.png"
                                               alt="a)3- Click on the Open button "></span><span style='position:absolute;
z-index:251608576;left:0px;margin-left:346px;margin-top:23px;width:169px;
height:47px'><img width=169 height=47
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image025.png"
                  alt="a)2- Click on the button with three dots to browse for your file"></span><img
                border=0 width=524 height=331 id="Picture 11"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image026.png"></p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <h2 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667260">8.3 Tokenizer</a></h2>

        <p class=MsoNormal>A Tokenizer segments the text into a sequence of tokens. As
            shown in Figure 8.4, CLAMP provides three different models of tokenizer: </p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_Tokenizer</p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_ OpenNLP_Tokenizer</p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_Tokenize_by_spaces</p>

        <p class=MsoNormal>Each model will be described in more details.</p>

        <p align=center style='text-align:center'><img border=0 width=208 height=257
                                                       id="Picture 251"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image027.png">
        </p>

        <p class=picTitles>Figure 8.4 Three tokenizers and their configuration files</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CLAMP_Tokenizer</p>

        <p class=MsoNormal>DF_CLAMP_Tokenizer is the default tokenizer designed
            specifically for clinical notes. Advanced users can use the config.conf file to
            change the default tokenization.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Double click on
            config.conf file to open it </p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the button with
            three dots to browse for your own file</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the open
            &nbsp;button </p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251623936;left:0px;margin-left:498px;
margin-top:53px;width:15px;height:17px'><img width=15 height=17
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image028.png"></span><span
                style='position:absolute;z-index:251602432;left:0px;margin-left:329px;
margin-top:21px;width:169px;height:47px'><img width=169 height=47
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image029.png"
                                              alt="a)2- Click on the button with three dots to browse for your file"></span><span
                style='position:absolute;z-index:251612672;left:0px;margin-left:336px;
margin-top:303px;width:9px;height:11px'><img width=9 height=11
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image030.png"></span><span
                style='position:absolute;z-index:251604480;left:0px;margin-left:175px;
margin-top:298px;width:162px;height:27px'><img width=162 height=27
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image031.png"
                                               alt="a)3- Click on the open button"></span><span
                style='color:windowtext'><img
                    border=0 width=524 height=334 id="Picture 6"
                    src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image032.png"></span></p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_ OpenNLP_Tokenizer</p>

        <p class=MsoNormal>This is an OpenNLP tokenizer. Advanced users can use its config.conf
            &nbsp;file to change its default model, en-token.bin.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Double click on
            config.conf file to open it </p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the button with
            three dots to browse for your own file</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the open
            &nbsp;button</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251624960;left:0px;margin-left:337px;
margin-top:305px;width:14px;height:11px'><img width=14 height=11
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image033.png"></span><span
                style='position:absolute;z-index:251622912;left:0px;margin-left:176px;
margin-top:298px;width:162px;height:26px'><img width=162 height=26
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image034.png"
                                               alt="a)3- Click on the open button"></span><span style='position:absolute;
z-index:251620864;left:0px;margin-left:498px;margin-top:52px;width:15px;
height:19px'><img width=15 height=19
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image035.png"></span><span
                style='position:absolute;z-index:251615744;left:0px;margin-left:329px;
margin-top:21px;width:169px;height:47px'><img width=169 height=47
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image036.png"
                                              alt="a)2- Click on the button with three dots to browse for your file"></span><span
                style='color:windowtext'><img border=0 width=524 height=334 id="Picture 148"
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image037.png"></span></p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_Tokenize_by_spaces.</p>

        <p class=MsoNormal>This tokenizer uses the spaces in a sentence to separate the
            tokens.</p>

        <h2 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667261">8.4 Pos
                Tagger</a></h2>

        <p class=MsoNormal>A Pos tagger allows users to assign parts of speech to each
            token. As shown in Figure 8.5, CLAMP currently provides only one pos tagger, <b>DF_OpenNLP_pos_tagger</b>,
            designed specifically for clinical text. &nbsp;This tagger is built from
            re-training the OpenNLP pos tagger on a dataset of clinical notes, namely, the
            MiPACQ corpus. (<a
                href="http://clear.colorado.edu/compsem/index.php?page=endendsystems&amp;sub=mipacq">http://clear.colorado.edu/compsem/index.php?page=endendsystems&amp;sub=mipacq</a>).
        </p>

        <p class=MsoNormal>&nbsp;Advanced users can use the config.conf file to change
            the default pos tagger model- mipacq_pos.bin.</p>

        <p align=center style='text-align:center'><img border=0 width=223 height=249
                                                       id="Picture 249"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image038.png"><img
                width=28 height=2 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image039.png"
                alt="https://docs.google.com/a/uth.edu/drawings/d/sGeVXAbCchiGbBnlBDYddJA/image?w=37&amp;h=3&amp;rev=1&amp;ac=1">
        </p>

        <p class=picTitles>Figure 8.5 &nbsp;DF_OpenNLP_pos_tagger and its configuration
            files</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667262">8.5 Chunker</a>
        </h2>

        <p class=MsoNormal>A chunker does a shallow parsing of a sentence and
            identifies the syntactic constituents such as noun phrases, verb phrases, and
            etc. As shown in Figure 8.6, CLAMP currently provides only one single chunker,
            DF_OpenNLP_chunker, <span style='color:windowtext'>which is a wrapper of the
chunker in OpenNLP. Advanced users can </span>use the config.conf file to
            change the default chunker model- en-chunker.bin.</p>

        <p align=center style='text-align:center'><img border=0 width=219 height=254
                                                       id="Picture 248"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image040.png"><img
                width=28 height=2 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image041.png"
                alt="https://docs.google.com/a/uth.edu/drawings/d/slToGMrtu3Z8aqa4r_zKtCg/image?w=37&amp;h=3&amp;rev=1&amp;ac=1">
        </p>

        <p class=picTitles>Figure 8.6 &nbsp;DF_OpenNLP_chunker and its configuration
            files</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667263">8.6 Named
                Entity Recognizer</a></h2>

        <p class=MsoNormal>A named entity recognizer identifies named entities and
            their semantic types in text. Typically, named entities refer to clinical
            concepts in CLAMP. As shown in Figure 8.7, CLAMP provides two different models
            for named entity recognition:</p>

        <p class=titlenormal style='margin-left:.25in;text-indent:0in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CRF_based_named_entity_recognizer
            ,and</p>

        <p class=titlenormal style='margin-left:.25in;text-indent:0in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_Dictionary_lookup</p>

        <p class=titlenormal style='margin-left:.25in;text-indent:0in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_Regular_expression_NER</p>

        <p class=MsoNormal>Each model will be described in more details.</p>

        <p align=center style='text-align:center'><i><span style='font-family:Roboto'><img
                        border=0 width=241 height=268 id="Picture 239"
                        src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image042.png"></span></i><span
                class=picTitlesChar><br>
<br>
Figure 8.7 &nbsp;Three named entity recognizers &nbsp;and their configuration
files</span></p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_CRF_based_named_entity_recognizer</p>

        <p class=MsoNormal>DF_CRF_based_named_entity_recognizer is the default named
            entity recognizer used in CLAMP.<br>
            The recognizer identifies three types of clinical concepts:<br>
            <b>Problems, treatments, and tests.</b></p>

        <p class=MsoNormal>It is built from training the CRF model on a dataset of
            clinical notes, namely, the i2b2 2010 challenge corpus (<a
                href="https://www.i2b2.org/NLP/Relations/">https://www.i2b2.org/NLP/Relations/</a>).
            Advanced users can use the config.conf file to change the default recognizer
            model as in the file defaultModel.jar.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Double click on the config.conf
            file to open it </p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the button with
            three dots to browse for your own file</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the open
            &nbsp;button<br>
            <br>
        </p>

        <p class=MsoListParagraph align=center style='margin-left:.25in;text-align:
center'><span style='position:absolute;z-index:251628032;left:0px;margin-left:
369px;margin-top:298px;width:13px;height:11px'><img width=13 height=11
                                                    src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image043.png"></span><span
                style='position:absolute;z-index:251611648;left:0px;margin-left:209px;
margin-top:292px;width:162px;height:26px'><img width=162 height=26
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image044.png"
                                               alt="a)3- Click on the open button"></span><span style='position:absolute;
z-index:251599360;left:0px;margin-left:346px;margin-top:22px;width:169px;
height:47px'><img width=169 height=47
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image045.png"
                  alt="a)2- Click on the button with three dots to browse for your file"></span><span
                style='position:absolute;z-index:251625984;left:0px;margin-left:514px;
margin-top:52px;width:15px;height:19px'><img width=15 height=19
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image035.png"></span><img
                border=0 width=524 height=328 id="Picture 159"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image046.png"></p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=titlenormal style='margin-left:.7in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_Dictionary_lookup</p>

        <p class=MsoNormal>DF_Dictionary_lookup uses terms in the dictionary to match
            them directly with the &nbsp;identified named entities. &nbsp;Currently the
            defaultDic.txt used in CLAMP consists of terms and their semantic types from
            UMLS (<a href="https://www.nlm.nih.gov/research/umls/">https://www.nlm.nih.gov/research/umls/</a>).
            The semantic type of the matched term in UMLS is assigned to the recognized
            named entity. </p>

        <p class=MsoNormal><b>To configure DF_Dictionary_lookup</b>:</p>

        <p class=MsoNormal>First, click on the config file under the
            DF_Dictionary_matcher folder. This will open up a new window that takes the
            following three parameters: <b><i>Case sensitive, Stemming and Dictionaries</i></b><i>.(</i>
            Figure 6.8)</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal><b><i>Case sensitive</i></b></p>

        <p class=MsoNormal>If you check the checkbox for �Case sensitive�, the matcher
            will differentiate between capital and lowercase letters when searching for a
            term in the dictionary. &nbsp;For example, �Breast Cancer� will not matched
            with �breast cancer�.</p>

        <p class=MsoNormal><b><i>Stemming</i></b></p>

        <p class=MsoNormal>If you check the checkbox &nbsp;&nbsp;for �Stemming�, the
            matcher will match the stemmed form of a candidate named entity with the terms
            in the dictionary. For example, �breast cancers� will be matched to �breast
            cancer�.</p>

        <p class=MsoNormal><b><i>Dictionaries</i></b></p>

        <p class=MsoNormal>You can also replace or edit the dictionary file suggested
            for this function. </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default dictionary file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'><i>2.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></i>Click on the
            button with three dots to browse for your own file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><i>3.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></i>Click on the open
            &nbsp;button<br>
            <br>
        </p>

        <p class=MsoListParagraph align=center style='text-align:center'><span
                style='position:absolute;z-index:251632128;left:0px;margin-left:387px;
margin-top:334px;width:13px;height:11px'><img width=13 height=11
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image047.png"></span><span
                style='position:absolute;z-index:251630080;left:0px;margin-left:226px;
margin-top:325px;width:162px;height:26px'><img width=162 height=26
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image048.png"
                                               alt="a)3- Click on the open button"></span><span style='position:absolute;
z-index:251629056;left:0px;margin-left:365px;margin-top:51px;width:169px;
height:47px'><img width=169 height=47
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image049.png"
                  alt="a)2- Click on the button with three dots to browse for your file"></span><span
                style='position:absolute;z-index:251631104;left:0px;margin-left:533px;
margin-top:82px;width:15px;height:19px'><img width=15 height=19
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image035.png"></span><img
                border=0 width=524 height=359 id="Picture 167"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image050.png"><span
                class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'><br>
<br>
</span></span></p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            edit the current dictionary file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the defaultDict.txt file to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Add the terms that you want to include in the dictionary file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the Save button at the top of the page</p>

        <p class=MsoNormal style='margin-left:.25in'><span style='position:absolute;
z-index:251610624;left:0px;margin-left:108px;margin-top:33px;width:411px;
height:200px'><img width=411 height=200
                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image051.png"></span><img
                border=0 width=524 height=173 id="Picture 175"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image052.png"><br>
            <br>
            <br>
        </p>

        <p class=titlenormal style='margin-left:.5in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>DF_Regular_expression_NER</p>

        <p class=MsoNormal>Using the defaultRegExpr.txt file, this module can identify
            named entities. defaultRegExpr.txt file can contain several regular expression.
            If a phrase matches a regular expression, it is recognized as a named entity.
            You can add your own regular expression to the existing file by double clicking
            the file and add the items that you want to include.</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667264">8.7 Assertion
                Identifier</a></h2>

        <p class=MsoNormal>An Assertion identifier checks whether there is a negation related
            to a specific clinical concepts in the text. A negation means the absence or
            opposite of something positive. CLAMP Assertion Identifier provides a mechanism
            to examine the real-world implications of annotations in a given clinical text.
            The defaultNegexDict.txt file which contains &nbsp;common negation patterns is
            used by CLAMP to check for negation in a clinical text. You can either replace
            or edit this file by following the steps below (Figure 8.8).</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=199 height=272 id="Picture 186"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image053.png">
        </p>

        <p class=picTitles><span class=picTitlesChar>Figure 8.8 Assertion identifier
and its configuration file</span><br>
            <br>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the Negation list file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251618816;left:0px;margin-left:205px;
margin-top:17px;width:309px;height:279px'><img width=309 height=279
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image054.png"></span><img
                border=0 width=524 height=304 id="Picture 15"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image055.png"><br>
            <br>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            edit the current dictionary file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the defaultNegexDict.txt file to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Add the terms that you want to include in the dictionary file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the Save button at the top of the page</p>

        <p align=center style='text-align:center'><span style='position:absolute;
z-index:251633152;left:0px;margin-left:214px;margin-top:34px;width:321px;
height:142px'><img width=321 height=142
                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image056.png"></span><b><span
                    style='font-size:11.0pt;font-family:Cambria;color:red'><br>
</span></b><b><span style='font-size:11.0pt;font-family:Cambria;color:red'><img
                        border=0 width=379 height=139 id="Picture 196"
                        src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image057.png"><br>
<br>
<br>
</span></b></p>

        <h2 style='margin-left:.2in;text-indent:0in'><a name="_Toc462667265">8.8 <span
                    class=Heading2Char>Ruta_ Rule_Engine</span></a></h2>

        <p class=MsoNormal>UIMA Ruta rules can be used to create or modify annotations
            as well as create features for annotations. Ruta rules in general can consist
            of a sequence of rule elements. A simple rule elements consist of four parts: A
            matching condition, an optional quantifier, an optional list of conditions and
            an optional list of actions. For more information please visit: </p>

        <p class=MsoNormal><a
                href="https://uima.apache.org/d/ruta-current/tools.ruta.book.html#ugr.tools.ruta.language.language">https://uima.apache.org</a>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251634176;left:0px;margin-left:204px;
margin-top:13px;width:309px;height:279px'><img width=309 height=279
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image058.png"></span><img
                border=0 width=524 height=300 id="Picture 201"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image059.png"><br>
            <br>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            edit the current dictionary file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the default.Ruta file to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Add the terms that you want to include in the dictionary file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the Save button at the top of the page<br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251640320;left:0px;margin-left:361px;
margin-top:48px;width:8px;height:18px'><img width=8 height=18
                                            src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image060.png"></span><span
                style='position:absolute;z-index:251639296;left:0px;margin-left:126px;
margin-top:209px;width:11px;height:11px'><img width=11 height=11
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image061.png"></span><span
                style='position:absolute;z-index:251637248;left:0px;margin-left:168px;
margin-top:18px;width:8px;height:18px'><img width=8 height=18
                                            src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image060.png"></span><span
                style='position:absolute;z-index:251635200;left:0px;margin-left:136px;
margin-top:35px;width:156px;height:47px'><img width=156 height=47
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image062.png"
                                              alt="b)3- Click the Save button at the top of the page"></span><span
                style='position:absolute;z-index:251598336;left:0px;margin-left:337px;
margin-top:65px;width:156px;height:61px'><img width=156 height=61
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image063.png"
                                              alt="b)2- Add the rules that you want to include in the dictionary file&#13;&#10;&#13;&#10;"></span><span
                style='position:absolute;z-index:251597312;left:0px;margin-left:136px;
margin-top:198px;width:156px;height:47px'><img width=156 height=47
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image064.png"
                                               alt="b)1- Double click on the default.Ruta file to open it&#13;&#10;&#13;&#10;"></span><img
                border=0 width=483 height=223 id="Picture 202"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image065.png"></p>

        <h2 style='margin-left:.2in;text-indent:0in'><a name="_Toc462667266"><span
                    class=Heading2Char>8.9 </span><span class=Heading2Char>Section Identifier</span></a></h2>

        <p class=MsoNormal>The section header identifier component identifies the
            section headers in &nbsp;a clinical note based on a predefined dictionary<span
                style='color:red'> </span>and categorizes them into general categories
            &nbsp;(Figure 8.9). For example, the section header �ICD 10 code� will be
            assigned to to the �icd_code� category. </p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles><img border=0 width=241 height=214 id="Picture 209"
                                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image066.png"></p>

        <p class=picTitles>Figure 8.9 &nbsp;Section header identifier and its
            configuration file</p>

        <p class=MsoNormal>You can replace or edit the default dictionary, section_map.txt,
            &nbsp;following the steps below:</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button<br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251643392;left:0px;margin-left:210px;
margin-top:18px;width:309px;height:279px'><img width=309 height=279
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image067.png"></span><img
                border=0 width=524 height=305 id="Picture 208"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image068.png"><br>
            <br>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            add additional section headers to the current file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the section_map.txt file to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Add the terms that you want to include in the file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the Save button at the top of the page</p>

        <p class=MsoNormal><br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251642368;left:0px;margin-left:90px;
margin-top:14px;width:398px;height:156px'><img width=398 height=156
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image069.png"></span><img
                border=0 width=524 height=177 id="Picture 210"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image070.png"></p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667267">8.10 UMLS
                Encoder</a></h2>

        <p class=MsoNormal>A UMLS Encoder matches the terms of clinical concepts to its
            corresponding CUIs in UMLS. For example, the term �breast cancer� will be
            encoded into the CUI of �C6006142� in UMLS. Currently CLAMP provides a default
            dictionary based on the UMLS encoder as shown in Figure 8.10.</p>

        <p align=center style='text-align:center'><img border=0 width=249 height=242
                                                       id="Picture 224"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image071.png">
        </p>

        <p class=picTitles>Figure 8.10 A dictionary based UMLS encoder</p>

        <p class=MsoNormal>&nbsp;</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667268">8.11 User_Defined_Components</a></h2>

        <p class=MsoNormal><span class=titlenormalChar><span style='font-size:18.0pt;
line-height:150%;font-family:Roboto'>DF_Drug_Attribute_Connector:</span></span><br>
            This is a context free grammar parser which is extracted from Medex. It is used
            to connect medication to its possible attributes such as dose.</p>

        <p class=titlenormal style='margin-left:0in'>DF_Relation_connector_after_ruta: </p>

        <p class=MsoNormal>While connecting two named entities using Ruta is relatively
            easy,&nbsp; it can not be used to provide a name for that relationship. </p>

        <p class=MsoNormal>Advanced users can generate their own file and replace it
            with the system�s default file or edit the default file.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button</p>

        <p class=MsoListParagraph align=center style='text-align:center'><span
                style='position:absolute;z-index:251688448;left:0px;margin-left:211px;
margin-top:212px;width:156px;height:27px'><img width=156 height=27
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image072.png"
                                               alt="a)3- Click on the Open button"></span><span style='position:absolute;
z-index:251689472;left:0px;margin-left:366px;margin-top:217px;width:11px;
height:11px'><img width=11 height=11
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image073.png"></span><span
                style='position:absolute;z-index:251685376;left:0px;margin-left:265px;
margin-top:3px;width:212px;height:51px'><img width=212 height=51
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image074.png"
                                             alt="a)2- Click on the button with three dots to browse for your own file&#13;&#10;&#13;&#10;"></span><span
                style='position:absolute;z-index:251687424;left:0px;margin-left:476px;
margin-top:34px;width:14px;height:21px'><img width=14 height=21
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image075.png"></span><img
                border=0 width=416 height=239 id="Picture 241"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image076.png"><br>
            <br>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            edit the current dictionary file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the relationConnection.txt file to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Add the terms that you want to include in the file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the Save button at the top of the page</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251690496;left:0px;margin-left:132px;
margin-top:110px;width:156px;height:47px'><img width=156 height=47
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image077.png"
                                               alt="b)1- Double click on the relationConnection.txt file to open it&#13;&#10;&#13;&#10;"></span><span
                style='position:absolute;z-index:251691520;left:0px;margin-left:296px;
margin-top:62px;width:156px;height:48px'><img width=156 height=48
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image078.png"
                                              alt="b)2- Add the rules that you want to include in the file&#13;&#10;&#13;&#10;"></span><span
                style='position:absolute;z-index:251692544;left:0px;margin-left:54px;
margin-top:33px;width:156px;height:47px'><img width=156 height=47
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image079.png"
                                              alt="b)3- Click the Save button at the top of the page"></span><span
                style='position:absolute;z-index:251693568;left:0px;margin-left:86px;
margin-top:5px;width:25px;height:29px'><img width=25 height=29
                                            src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image080.png"></span><span
                style='position:absolute;z-index:251694592;left:0px;margin-left:345px;
margin-top:46px;width:8px;height:17px'><img width=8 height=17
                                            src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image081.png"></span><span
                style='position:absolute;z-index:251695616;left:0px;margin-left:112px;
margin-top:156px;width:41px;height:15px'><img width=41 height=15
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image082.png"></span><img
                border=0 width=505 height=180 id="Picture 256"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image083.png"><br>
            <br>
        </p>

        <p><span style='color:windowtext'>&nbsp;</span></p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667269">9. Machine
                Learning components</a></h1>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667270">9.1 NER Feature
                Extractor</a></h2>

        <p class=MsoNormal>This component consists of different feature extractors (Figure
            9.1), which are used for extracting different types of features for named
            entity recognition, CLAMP users will use this component to build their own
            named entity recognizer in a corpus annotation project (Refer to Section 4.2) .
            Similar to the previous components, we can customize these features by changing
            or replacing their default config files. Explanation of each extractor is as
            follows:</p>

        <p class=MsoNormal>&nbsp;</p>

        <p align=center style='text-align:center'><img border=0 width=243 height=206
                                                       id="Picture 226"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image084.png">
        </p>

        <p class=picTitles>Figure 9.1 List of NER feature extractors</p>

        <p class=picTitles>&nbsp;</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667271">9.1.1 DF_Brown_clustering_feature</a>
        </h3>

        <p class=MsoNormal>It is a &nbsp;type of word representation feature generated
            on the unlabeled data which is provided by the SemEval 2014 Challenge. Advanced
            users can eplace their own Brwon clustering file with the system�s default file.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button<br>
            <br>
        </p>

        <p class=MsoNormal><span style='position:absolute;z-index:251641344;margin-left:
219px;margin-top:16px;width:310px;height:282px'><img width=310 height=282
                                                     src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image085.png"></span><img
                border=0 width=540 height=308 id="Picture 227"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image086.png"></p>

        <p class=MsoNormal>For more information on how to create your own Brown
            Clustring file visit:<br>
            <a href="https://github.com/percyliang/brown-cluster">https://github.com/percyliang/brown-cluster</a>
            <br>
            <br>
        </p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667272"><span
                    class=Heading3Char>9.1.2 </span><span class=Heading3Char>DF_Dictionary_lookup_feature</span></a>
        </h3>

        <p class=MsoNormal>This extractor uses a dictionary consisting of terms and
            their semantic types from UMLS to extract potential features. </p>

        <p class=MsoNormal>Advanced users can replace or edit the default file
            following the steps below: </p>

        <p class=MsoNormal><b>Note:</b> The format of the content should be as the same
            as the default file: (phrase then tab then semantic type)</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button</p>

        <p class=MsoNormal><span style='position:absolute;z-index:251627008;margin-left:
218px;margin-top:18px;width:310px;height:282px'><img width=310 height=282
                                                     src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image087.png"></span><img
                border=0 width=540 height=310 id="Picture 253"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image088.png"><br>
            <br>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            edit the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the word_path.txt file to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Add the terms that you want to include in the file </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the Save button at the top of the page</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251644416;left:0px;margin-left:95px;
margin-top:2px;width:414px;height:175px'><img width=414 height=175
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image089.png"></span><b><img
                    border=0 width=477 height=124 id="Picture 254"
                    src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image090.png"></b></p>

        <p class=MsoNormal><b>&nbsp;</b></p>

        <p class=MsoNormal><b>&nbsp;</b></p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667273"><span
                    class=Heading3Char>9.1.3 </span>DF_Ngram_feature</a></h3>

        <p class=MsoNormal>This module uses the words along with their part-of-speech
            (pos) tagging as NER features. </p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667274">9.1.4 DF_prefix_suffix_feature</a></h3>

        <p class=MsoNormal>This function extracts the prefix and suffix of words that
            may be a representative of &nbsp;a specific type of named entities.</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667275">9.1.5 DF_Random_indexing_feature</a>
        </h3>

        <p class=MsoNormal>Similar to the brown clustering, it is a type of word
            representation feature generated on unlabeled data using a 3<sup>rd</sup> party
            package. For more information visit: <a href="https://jcheminf.springeropen.com">https://jcheminf.springeropen.com</a>
        </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal><span style='position:absolute;z-index:251645440;margin-left:
218px;margin-top:19px;width:310px;height:282px'><img width=310 height=282
                                                     src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image091.png"></span><img
                border=0 width=540 height=309 id="Picture 270"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image092.png"></p>

        <p class=MsoNormal><b>&nbsp;</b></p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667276">9.1.6 DF_Section_feature</a></h3>

        <p class=MsoNormal>This function extracts the section in which a candidate named
            entity presents.</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667277">9.1.7 DF_Sentence_pattern_feature</a>
        </h3>

        <p class=MsoNormal>This function distinguishes the pattern of a sentence by CLAMP
            built in rules.</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667278">9.1.8 DF_Word_embedding_feature</a>
        </h3>

        <p class=MsoNormal>Similar to the brown clustering and random indexing, it is a
            type of distributed word representation feature generated on the unlabeled data
            (MIMIC II) provided by the SemEval 2014 Challenge using a neural network.Advanced
            users can replace the default file with their own file. </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251636224;left:0px;margin-left:219px;
margin-top:19px;width:310px;height:282px'><img width=310 height=282
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image093.png"></span><img
                border=0 width=540 height=307 id="Picture 285"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image094.png"></p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667279">9.1.9 DF_Word_shape_feature</a></h3>

        <p class=MsoNormal>This function extracts<b> </b>the type of a word; it
            identifies whether or not it begins with an english letter, number, and etc.</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667280">9.1.10 DF_Words_regular_expression_<br>
                feature</a></h3>

        <p class=MsoNormal>This function extracts the regular expression patterns of
            words that may indicate a specific type of named entity. Advanced users can
            create their own regular expressions or edit the default file.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            replace the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on config.conf file to open it </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the button with three dots to browse for your own file </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the open &nbsp;button</p>

        <p class=MsoNormal><span style='position:absolute;z-index:251638272;margin-left:
217px;margin-top:20px;width:310px;height:282px'><img width=310 height=282
                                                     src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image095.png"></span><img
                border=0 width=540 height=312 id="Picture 309"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image096.png"></p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>b)<span style='font:7.0pt "Times New Roman"'> </span></span>To
            edit the default file:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the reglist.txt file to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Add the terms that you want to include in the file </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the Save button at the top of the page</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='position:absolute;z-index:251653632;left:0px;margin-left:140px;
margin-top:218px;width:21px;height:11px'><img width=21 height=11
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image097.png"></span><span
                style='position:absolute;z-index:251652608;left:0px;margin-left:161px;
margin-top:189px;width:162px;height:52px'><img width=162 height=52
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image098.png"
                                               alt="b)1-Doubel click on the reglist.txt file to open it"></span><span
                style='position:absolute;z-index:251647488;left:0px;margin-left:115px;
margin-top:38px;width:130px;height:28px'><img width=130 height=28
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image099.png"
                                              alt="b)3- Click the save button"></span><span style='position:absolute;
z-index:251648512;left:0px;margin-left:405px;margin-top:119px;width:8px;
height:18px'><img width=8 height=18
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image060.png"></span><span
                style='position:absolute;z-index:251649536;left:0px;margin-left:146px;
margin-top:15px;width:8px;height:24px'><img width=8 height=24
                                            src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image100.png"></span><span
                style='position:absolute;z-index:251651584;left:0px;margin-left:330px;
margin-top:137px;width:162px;height:47px'><img width=162 height=47
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image101.png"
                                               alt="b)2- Add the terms that you want to include in the file file"></span><img
                border=0 width=520 height=236 id="Picture 303"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image102.png"></p>

        <p class=MsoNormal>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:-.25in'><a name="_Toc462667281"><a
                    name="_Build_a_Pipeline"></a>10. Build a Pipeline</a></h1>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667282">10.1 Create
                and Run a Pipeline</a></h2>

        <p class=MsoNormal>Running a pipeline refers to the use of a set of NLP
            components to identify the specified information , including sentence
            segmentation, tokenization, part of speech tagging, abbreviations, etc. The NLP
            components are executed in a sequence based on the functional dependency
            amongst them. </p>

        <p class=titlenormal>In order to recognize clinical concepts within
            &nbsp;clinical text:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>You need to create a project</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>You need to configure the pipeline</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>You need to import the files that you want to be analyzed</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>You need to<b> </b>process the imported files by running them through
            the pipeline. </p>

        <p class=titlenormal>Follow the steps below to build a pipeline: </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'>a)<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>Create a new project</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the plus (+) sign at the top left corner of the screen as shown
            in Figure 10.1.</p>

        <p align=center style='text-align:center'><img border=0 width=266 height=116
                                                       id="Picture 318"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image103.png">
        </p>

        <p class=picTitles>Figure 10.1 Create a new project</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='font-family:
"Times New Roman";color:windowtext'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>On the pop-up window (Figure 10.2), enter a name for your
            project, for example: �Clinical_concept_recognition�.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='font-family:
"Times New Roman";color:windowtext'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>Select NLP Pipeline as the project type. </p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='font-family:
"Times New Roman";color:windowtext'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span>Click the Finish button. </p>

        <p class=MsoNormal>A new project with the specified name is created and is
            placed under Mypipeline folder on the Pipeline panel at the lower left of the
            screen (Figure 10.3)</p>

        <p class=MsoListParagraph align=center style='margin-left:0in;text-align:center'><span
                style='position:absolute;z-index:251656704;left:0px;margin-left:338px;
margin-top:266px;width:8px;height:13px'><img width=8 height=13
                                             src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image104.png"></span><span
                style='position:absolute;z-index:251650560;left:0px;margin-left:262px;
margin-top:239px;width:151px;height:27px'><img width=151 height=27
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image105.png"
                                               alt="a)4- Click the Finish button &#13;&#10;&#13;&#10;"></span><span
                style='position:absolute;z-index:251657728;left:0px;margin-left:162px;
margin-top:195px;width:22px;height:11px'><img width=22 height=11
                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image106.png"></span><span
                style='position:absolute;z-index:251654656;left:0px;margin-left:184px;
margin-top:173px;width:151px;height:45px'><img width=151 height=45
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image107.png"
                                               alt="a)3- Select NLP Pipeline as the project typ  e. &#13;&#10;&#13;&#10;"></span><span
                style='position:absolute;z-index:251646464;left:0px;margin-left:254px;
margin-top:107px;width:151px;height:30px'><img width=151 height=30
                                               src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image108.png"
                                               alt="a)2- Enter a name for the project"></span><span style='position:absolute;
z-index:251655680;left:0px;margin-left:236px;margin-top:123px;width:18px;
height:11px'><img width=18 height=11
                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image109.png"></span><br>
            <img border=0 width=400 height=270 id="Picture 327"
                 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image110.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
10.2 Creating a new &nbsp;NLP pipeline project </span></span></p>

        <p class=MsoListParagraph align=center style='margin-left:0in;text-align:center'><span
                class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>&nbsp;</span></span></p>

        <p class=MsoNormal>&nbsp;</p>

        <p align=center style='text-align:center'><img border=0 width=289 height=164
                                                       id="Picture 331"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image111.png">
        </p>

        <p class=picTitles>Figure 10.3 A new project with the specified name is created
            and is placed under Mypipeline folder</p>

        <p class=MsoNormal>Double click the pipeline name to view its content. As you
            can see, &nbsp;it contains two folders �Components�, and �Data�. <br>
            The Components folder contains the pipeline configuration file. </p>

        <p class=MsoNormal>The Data folder includes two folders: &nbsp;Input, and
            Output.</p>

        <p class=MsoNormal>The Input &nbsp;folder holds the files that are processed by
            the pipeline </p>

        <p class=MsoNormal>Output.The results obtained by running &nbsp;the pipeline
            are saved in this folder.</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667283">10.2 Configure
                the pipeline</a></h2>

        <p class=MsoNormal>To configure a pipeline double click on the .pipeline file
            from the newly created pipeline project to open it&nbsp;in the middle window on
            the screen.</p>

        <p class=MsoNormal>(Figure 10.4).</p>

        <p class=MsoNormal>Here you can drag and drop the NLP components from the
            Component panel. Since we want to recognize clinical concepts using NLP
            components, we drag the DF_CRF_based_name_entity_recognizer from the
            NLP_components to the pipeline. </p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal><br>
            <img border=0 width=540 height=272 id="Picture 334"
                 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image112.png"></p>

        <p class=picTitles>Figure 10.4 Pipeline configuration window</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667284">10.3 Component
                dependency &amp; Auto fix</a></h2>

        <p class=MsoNormal>As shown in Figure 10.5, there is a <span style='color:red'>red
X</span> sign in front of the newly added component, �CRF based named entity
            recognizer�. &nbsp;This sign indicates that the named entity recognizer
            component &nbsp;is dependant on other <span style='color:windowtext'>NLP
components</span><span style='color:windowtext'> </span>that are missing from
            the current pipeline. In our example, the clinical notes first need to be
            processed by the sentence detector, tokenizer, section identifier, and POS
            tagger components before processing by the named entity recognizer. </p>

        <p class=MsoNormal>To fix this issue, simply click on the Auto fix button at
            the top of the panel. This automatically adds the required <span
                style='color:windowtext'>components</span> to the pipeline. The sequence of the
            individual components from top to bottom reflect the order in which they will
            run to process your input data.</p>

        <p class=MsoNormal>After the required components are added (Figure 10.6), the <span
                style='color:red'>red X</span> sign changes to the <span style='color:green'>green
circle</span> sign indicating the accuracy of &nbsp;the order of the
            components. Once you see the green sign for each of the displayed NLP
            components, click on the Save button at the top of the screen to save your
            changes.</p>

        <p align=center style='text-align:center'><img border=0 width=540 height=272
                                                       id="Picture 332"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image113.png"><br>
            <br>
<span class=picTitlesChar>Figure 10.5 A wrong pipeline for clinical concept
recognition needs to be fixed with dependent NLP models</span></p>

        <p class=MsoNormal>&nbsp;</p>

        <p align=center style='text-align:center'><img border=0 width=540 height=272
                                                       id="Picture 333"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image114.png"><span
                class=picTitlesChar>Figure 10.6 &nbsp; A correct pipeline for clinical concept
recognition with all necessary NLP models.</span></p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667285"><a
                    name="_Import_input_files"></a>10.4 Import input files</a></h2>

        <p class=MsoNormal>Once the pipeline is &nbsp;configured, you will need to
            import your desired files to the Input folder using the the following steps:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1. In the PipelineView,
            right click on the Input folder under the Data folder, then select the import
            (Figure 10.7).</p>

        <p class=MsoListParagraph>A pop-up menu appears which &nbsp;lets you select the
            files that you want to import. </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2. Click on the small
            arrow next to the General folder to expand it, then select File System as the
            import source. </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3. Click on the Next
            button (Figure 10.8)</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=258 height=219 id="Picture 335"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image115.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
10.7 Drop-downContext menu for importing the input files</span></span><br>
            <br>
            <img border=0 width=407 height=313 id="Picture 336"
                 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image116.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
10.8 Import resources from the local file system into an existing project </span></span></p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4. Next, as shown in
            Figure 10.9, click on the Browse button on the top of the window to choose the
            folder of your choice. The selected folder will be displayed on the left side
            of the window, and the files inside the folder will be displayed on the right
            side. </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5. Click the checkbox for
            the files that you want to run the pipeline on; currently the CLAMP pipeline
            can only process files with the <b>.txt extension</b>. Also, CLAMP assists you
            in selecting your desired files in three different ways: <i>Filter Types,
                Select All and Deselect All</i>.</p>

        <p class=MsoNormal><b>Filter Types: </b>Allows you to define the type of files
            that will be imported. For example, you may only want to import files with the
            .txt extension</p>

        <p class=MsoNormal><b>Select All:</b> Allows you to choose all displayed files</p>

        <p class=MsoNormal><b>Deselect All:</b> Allow you to deselect the files that
            have already been selected</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>6. Click on the Browse
            button next to &nbsp;the �Into folder� field &nbsp;to choose the folder that
            you want to import your &nbsp;files to. Here, we keep the default directory</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>7. Click on the Finish
            button. </p>

        <p align=center style='margin-left:.5in;text-align:center'><span
                style='font-size:11.0pt;font-family:Cambria'><img border=0 width=396
                                                                  height=360 id="Picture 152"
                                                                  src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image117.png"
                                                                  alt="https://lh6.googleusercontent.com/Fx6NhCqxt3y5cRRykTH7oSP7Lg9n4mB4Px0w2clYZ3rP_iNKSrvchJX7d6CqP0GUIL-Bj8Uq2_N-egkydpTTrQp_AoAYmdqB4y9PB0ezyZNFhkfJQiJBuAWsuYZlRQu148w2jcqPyIyUIPJACQ"></span><span
                class=picTitlesChar><br>
</span><br>
            <span class=picTitlesChar>Figure 10.9 Window of input files selection</span></p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>Now, you can double click on the Input folder to see the
            imported files (Figure 10.10). Similarly, you can also double click on each
            file to view its content (Figure 10.11).</p>

        <p class=MsoNormal><span style='color:windowtext'>&nbsp;</span></p>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

        <p align=center style='text-align:center'><img border=0 width=198 height=140
                                                       id="Picture 143"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image118.png"
                                                       alt="https://lh6.googleusercontent.com/khH27nFGPFx-ivYpNAb2PIdCMbsaPYyIT13dlcrGsxCLRoexYSK5cjz3EoEsbmtfMREaYI9_Co-b18P8C5836a61JeViKaBXKebMI7VCxdsw8EvdRz0OM8zmoL8Z-XaogzxYQBN0JB_GHUvqaQ">
        </p>

        <p class=picTitles>&nbsp;Figure 10.10 Imported files under the Input folder</p>

        <p class=MsoNormal><br>
            <img border=0 width=515 height=178 id="Picture 142"
                 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image119.png"
                 alt="https://lh6.googleusercontent.com/CYgLquY7b8vkbGn9vlyh7a-SPWK7aCE-sBFfTPZ_5koy1xSw1Z2ODIPO8OwMDyYXmh8J8L6Vol8o3g81jaj9NQBNV6aOHErklbzgFjP4u1eVGKn7YfBz26qXHp9vC_2E7AWJWL8Wc002b_m18g">
        </p>

        <p class=picTitles>Figure 10.11 View the content of input file sample_1054.txt
            directly in the interface</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667286"><a
                    name="_Run_the_pipeline"></a>11. Run the pipeline</a></h1>

        <p class=MsoNormal>After you have configured the pipeline and imported the
            input files, you can start running the pipeline.</p>

        <p class=MsoNormal><span class=titlenormalChar><span style='font-size:18.0pt;
line-height:150%;font-family:Roboto'>To run a pipeline</span></span>, simply
            click on the run icon at the top of the screen as shown in Figure 11.1. </p>

        <p class=MsoNormal>Once the pipeline starts running, you can check the progress
            of &nbsp;the input file processing from the Console window and the progress bar
            at the bottom of the screen &nbsp;(Figure 11.2). You can always stop the
            processing at anytime by clicking on the red stop button next to the progress
            bar. </p>

        <p class=MsoNormal><span style='color:windowtext'>&nbsp;</span></p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=354 height=53 id="Picture 354"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image120.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
11.1 Running the pipeline</span></span></p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman"'>&nbsp;</span></p>

        <p><img border=0 width=526 height=86 id="Picture 140"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image121.png"
                alt="https://lh6.googleusercontent.com/II3hdQx-LPaYK3wIFa_u-4dc1L7D-d7WtaUugpJWUnMc_KYk-ebkf-1WC_IY1puTPdo_BHC6PaQG9W62Nr-ZEuI_V8iHjM-10ENVD2gLxq38rgL3iXV5BU124I6hg9ydnISmHUvz0v54Vcfq_g">
        </p>

        <p class=picTitles><span style='font-size:11.0pt;font-family:Cambria'><img
                    border=0 width=528 height=49 id="Picture 139"
                    src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image122.png"
                    alt="https://lh6.googleusercontent.com/nhMlJBoZamXEpUNrVE8P1DpDOYgQkon8_f-vO2eKBTpaYaYauw55WH11vdfd1X3cyGmZ64cb43Wi8KOSv-h61s1yZMwPrbKy6bbLkQlqOdd33rtQQn_W5ECa54H15SVzm5wNAcNlLWTy1JXGfQ"></span>Figure
            11.2 <span class=picTitlesChar><span style='font-style:normal'>&nbsp;</span></span>check
            the progress of &nbsp;the input file processing from the Console window </p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667287">12. Output
                visualization</a></h1>

        <p class=MsoNormal>Once running the pipeline is completed, &nbsp;the generated
            files are displayed in the Output folder. These files can be viewed in two
            different formats (.xmi , .txt):</p>

        <p class=MsoNormal>Clicking on a file with the .xmi extension allows you
            &nbsp;to view its original content annotated &nbsp;with<b><span
                    style='font-size:14.0pt;line-height:150%;color:red'> </span></b>recognized
            clinical concepts. Different types of clinical concepts will be highlighted
            with different colors. (Figure 12.1)</p>

        <p class=MsoNormal>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </p>

        <p><img border=0 width=533 height=186 id="Picture 131"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image123.png"
                alt="https://lh3.googleusercontent.com/dhftTylbTEN1Hsc5KhZHkL4Y19rY9JI49I2c1DPZv11BoXRQdscXaahn_iga2iq51u8sqbwJlqgy5p-EqBwlQfVxSAUyzg4EXmKfvPkgE1pSjWiEACBzseQJ9y8Zm0XLtAJoXC8bOxLcQz2x5g">
        </p>

        <p class=picTitles>Figure 12.1 View of text annotated with recognized clinical
            concepts</p>

        <p class=MsoNormal>Clicking on a file with the .txt extension will display a
            view of tab delimited, detailed output information in a new window. As shown in
            Figure 12.2, each line in the file illustrates the detailed information of one
            recognized clinical concept.<b><span style='font-size:14.0pt;line-height:150%;
color:red'> </span></b>&nbsp;The following information is &nbsp;included in
            &nbsp;a tab delimited output:</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'><b><span
                    style='font-family:Arial'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></b><b>Start Index: &nbsp;</b>Starting position of the recognized
            concept.</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'><b><span
                    style='font-family:Arial'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></b><b>End Index: </b>Ending position of the recognized concept.</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'><b><span
                    style='font-family:Arial'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></b><b>Semantic Type: </b>Semantic type of the recognized
            concept.</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'><b><span
                    style='font-family:Arial'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></b><b>CUI: </b>The <b>C</b>oncept <b>U</b>nique <b>I</b>dentifier<b>
            </b>of the concept in Unified Medical Language System (UMLS). If the pipeline
            does not include the model of UMLS encoder, the value of this column will be
            �null�.</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'><b><span
                    style='font-family:Arial'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></b><b>Assertion: </b>If the pipeline does not include the model
            of Assertion identifier, the value of this column will be �null�.</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'><b><span
                    style='font-family:Arial'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></b><b>Concept Mention:</b> Referring to a &nbsp;concept, i.e.,
            named entity in the text.</p>

        <p class=MsoNormal><br>
            <img border=0 width=545 height=260 id="Picture 130"
                 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image124.png"
                 alt="https://lh3.googleusercontent.com/fjKvlSnI7cISDy_KASky00MoTDU1tpCNvSC70LTl1XviXuWEh7W1NeTWD54r1OwFQ_WvyRPLJNagaiAjPppLlJCMQjKRs0G9mY6s--QvsUfDnAcXQTCYtTqmwy9KQN0MrKquMmHrR9L715k8pw">
        </p>

        <p class=picTitles>Figure 12.2 Tab delimited format of output files</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667288">13. Built-in
                pipelines</a></h1>

        <p class=MsoNormal>In order to facilitate a convenient utility of CLAMP,
            &nbsp;a series of pipelines that could be directly adopted in common clinical
            applications are pre_built and displayed in PipelineLibrary (Figure 13.1).
            Users can directly drag one of them (e.g., &nbsp;smoking_status, Figure 13.2) from
            the PipelineLibrary and drop it under My Pipeline. The required NLP components
            of these pipelines are already configured, as illustrated in Figure 13.3. CLAMP
            allows you to customize each of these components to fit your needs. Now, you
            need to import your files; for more information go to �<a
                href="#_Import_input_files">Import input files</a>� section.</p>

        <p class=picTitles><img border=0 width=257 height=245 id="Picture 238"
                                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image125.png"><br>
            Figure 13.1 Built-in pipeline library in CLAMP</p>

        <p align=center style='text-align:center'>&nbsp;</p>

        <p align=center style='text-align:center'><img border=0 width=193 height=355
                                                       id="Picture 128"
                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image126.png"
                                                       alt="smoking_piple.jpg"></p>

        <p class=picTitles>Figure 13.2 Dragging smoking_status and drop it under
            MyPipeline</p>

        <p><img border=0 width=580 height=171 id="Picture 31"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image127.png"
                alt="https://lh4.googleusercontent.com/zpKMxMasNDqN4xUszUuVScAGOzchz8663-vTdz3PqcUc2QKvjtfiRltwJ_C7pd6KRfzSQfnG34wdWuQJz3NBXU1Xs0w357A-LmQBtSj0TiGMjUFs_SoGSadYlyqbUiq1Hkdc1GrK-APgZWDjTg">
        </p>

        <p class=picTitles>Figure 13.3 Built-in pipeline library in CLAMP</p>

        <p class=MsoNormal>Depending on what your use case is, the current built-in
            pipelines are divided into the following categories:</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'><b>1. </b><b>General</b>:
            automatically annotates concepts and their attribute for general use,
            including:</p>

        <p class=MsoNormal style='margin-left:.5in'><b>CLAMP-ner:</b> annotates the
            disease, procedure and medication concepts </p>

        <p class=MsoNormal style='margin-left:.5in'><b>CLAMP-ner-attribute:</b>
            annotates the attributes of disease (e.g., body location of a disease), lab
            procedure (e.g., value of a lab test ) and medication (e.g., dosage of a
            medication) concepts </p>

        <p class=MsoNormal style='margin-left:.5in'><b>Disease-attribute:</b> annotate
            the attributes of diseases, including body locations (e.g., left atrium),
            severity degrees (e.g., mild, severe) and uncertainty (e.g., probably).</p>

        <p class=MsoNormal style='margin-left:.5in'><b>Lab-attribute:</b> annotates the
            attributes of lab procedures </p>

        <p class=MsoNormal style='margin-left:.5in'><b>Medication-attribute: </b>annotates
            the attributes of medications</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'><b>2. </b><b>Disease_symptom</b>:
            automatically annotates symptoms of diseases, including:</p>

        <p class=MsoNormal style='margin-left:.5in'><b>Bleeding_extraction:</b>
            annotates bleeding symptoms</p>

        <p class=MsoNormal style='margin-left:.5in'><b>Colorectal_cancer:</b> annotates
            symptoms of colorectal cancer</p>

        <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in'><b>3. </b><b>Behavior</b>:
            automatically annotates behaviors of patients , including:</p>

        <p class=MsoNormal style='margin-left:.5in'><b>Smoking_status:</b> annotates
            whether or not the patient is in a smoking status, and whether the patient has
            a smoking history.</p>

        <p class=MsoNormal>Figure 13.4 illustrates an example of using the
            disease-attribute pipeline in our pipeline library to annotate attributes and
            their relations with diseases. </p>

        <p><img border=0 width=552 height=247 id="Picture 30"
                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image128.png"
                alt="attributes_annotation_example.jpg"></p>

        <p class=picTitles>Figure 13.4 &nbsp;An example of disease attribute annotation
            using the pipeline library &nbsp;in CLAMP</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667289">14. Export
                pipeline as a jar file</a></h1>

        <p class=MsoNormal>In order to export a pipeline as a jar file and use it in
            the command line version, please follow the steps below (Figure 14.1):</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Go to your desired
            pipeline folder</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the small
            arrow next to it to expand it</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Right click on the Components
            folder and select �Export as jar�</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=291 height=218 id="Picture 295"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image129.png">
        </p>

        <p class=picTitles>Figure 14.1 Export a pipeline as a jar </p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667290">15. Annotation</a></h1>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667291">15.1 Annotate
                corpus</a></h2>

        <p class=MsoNormal>The CLAMP annotation module enables you to annotate
            customized entities and &nbsp;specify relations between them in your desired
            corpus . These annotations enable you to assign additional clinical information
            to a selected text and develop an annotated corpus that�s more suitable to the
            specific task that you have. Task-specific models can be developed and used in
            the machine-learning modules of CLAMP or any other system of your choice.</p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <p class=titlenormal>Before using this function, you need to:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Create a project</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Import the files that you want to annotate</p>

        <p class=MsoNormal>After completing these steps, you will be able to annotate
            the imported files based on some predefined structure. The following steps will
            guide you on how to perform the steps mentioned above.</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667292">15.1.1 Create
                a project</a></h3>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'>a)<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>To create a project:</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click on the plus (+)
            sign at the top left corner of the screen as shown in Figure15.1.</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=259 height=70 id="Picture 247"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image130.png">
        </p>

        <p class=picTitles>Figure 15.1 Step 1 to create a new project</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>On the pop-up window,
            enter a name for your project, e.g., Drug_name_annotation, (Figure 15.2).</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Select Corpus
            Annotation as the project type.</p>

        <p class=MsoListParagraph style='margin-left:.7in;text-indent:-.25in'>4.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Click the Finish
            button. <br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=409 height=280 id="Picture 271"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image131.png">
        </p>

        <p class=picTitles>Figure 15.2 Creating a new Corpus Annotation project<br>
            <br>
        </p>

        <p class=MsoNormal>A new project with the name that you have specified is
            created and placed in the Corpus panel. (Figure 15.3)</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=199 height=111 id="Picture 284"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image132.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
15.3 Creating a new Corpus Annotation project</span></span></p>

        <p class=MsoNormal>Double click the project name to view its content. The
            created project contains two main folders:<br>
            <b>Corpus</b>: Contains the files that will be annotated<br>
            <b>Models</b>: Contains the machine learning models generated from the annotated
            files.In addition, the prediction results generated from the n-fold
            cross-validation process and gold standard annotations are included in this
            folder.</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667293">15.1.2 Import
                annotation files</a></h3>

        <p class=MsoNormal>After you have created a project, follow the steps defined
            below to import the files that you want to annotate: </p>

        <p class=MsoNormal><b>(Please note that you can import the files to either
                train or test folders.)<br>
                <br>
            </b></p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            import the files that you want to annotate:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Right click on the train folder under the corpus folder in the
            CorpusView panel</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Select the import function from the context menu (Figure 15.4). A pop-up
            window will appear.<br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=255 height=217 id="Picture 292"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image133.png">
        </p>

        <p class=picTitles>Figure 15.4 Context menu for importing the input files</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>On the pop-up window, select the import source. Here, you need to select
            �File System� which is already selected by default.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the Next button </p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=325 height=257 id="Picture 301"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image134.png">
        </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>&nbsp;Click on the Browse button on the top of the window to choose the
            folder of your choice. The selected folder will be displayed on the left side
            of the window, and the content of &nbsp;the folder will be displayed on the
            right side. To import you desired files, check the checkboxes next to the files
            of your choice. </p>

        <p class=MsoNormal>You also have three options to choose from: <i>Filter Types/
                Select All/ Deselect All</i></p>

        <p class=MsoNormal><b>Filter Types:</b> Allows you to define the type of files
            that will be imported. The only extensions that you will work with in CLAMP are
            txt, and .xmi. For example, you may only want to import files with the .txt
            extension</p>

        <p class=MsoNormal><b>Select All:</b> Allows you to choose all displayed files</p>

        <p class=MsoNormal><b>Deselect All:</b> Allow you to deselect the files that
            have already been selected</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the Browse button next to &nbsp;the �Into folder� field
            &nbsp;to choose the folder that you want to import your &nbsp;files to. Here,
            we keep the default directory</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the Finish button. <br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=467 height=407 id="Picture 326"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image135.png">
        </p>

        <p class=MsoNormal>Now that the selected files have been imported to your
            desired folder, you can start annotating them. Double click on the files to open
            theim in the middle window and annotate them. Upon double clicking each file,
            you will notice that another file with the same name but a different extension
            (.xmi) has been added to your folder and displayed on the screen. This is the
            file type used by &nbsp;CLAMP &nbsp;for display and interaction purposes (Figure
            15.5). </p>

        <p class=picTitles><img border=0 width=503 height=158 id="Picture 141"
                                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image136.png"></p>

        <p class=picTitles><br>
            Figure 15.5 The content of an annotation file</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667294">15.1.3 Define
                entity &amp; relation types</a></h3>

        <p class=MsoNormal>Before starting annotation, you need to define the semantic
            types that you will use for this purpose. Semantic types in CLAMP refer to
            entities(e.g, �problem/treatment/test�) and the relations between them. </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'>a)<span
                style='font:7.0pt "Times New Roman"'>&nbsp; </span>To define a new entity type:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Double click on the typedef.xmi file under the models folder to open it.
            Using this file, you will be able to define a schema for entities and the
            relation types among them:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Right click on the Entities node </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Go to �Add Child�</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on New Element</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=281 height=159 id="Picture 369"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image137.png"><br>
            <br>
            <br>
        </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>In the pop up window, enter a name for the element </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the OK button</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=254 height=208 id="Picture 376"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image138.png">
        </p>

        <p class=MsoNormal>The created element will be added to the Entity node
            &nbsp;(Figure 15.6)</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman";
color:windowtext'><img border=0 width=206 height=106 id="Picture 381"
                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image139.png"></span><span
                style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman";
color:windowtext'><br>
</span><span class=picTitlesChar><span style='font-size:12.0pt;line-height:
150%'>Figure 15.6 The created element will be added to the Entity node</span></span></p>

        <p class=MsoNormal><br>
<span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman";
color:windowtext'><br>
</span>The above steps should be repeated for every element that you want to
            add to the Entity node.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'>b)<span
                style='font:7.0pt "Times New Roman"'> </span>To define a new relation type:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Right click on the Relations node </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Go to ��Add Child� </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on New Element</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=326 height=205 id="Picture 184"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image140.png">
        </p>

        <p class=MsoNormal align=center style='text-align:center'>&nbsp;</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>In the pop up window, enter a name for the relation</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the OK button</p>

        <p class=MsoNormal style='text-align:justify'>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=245 height=224 id="Picture 194"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image141.png">
        </p>

        <p class=MsoNormal>Then, you need to decide which entities are involved in this
            relation. There are two roles of arguments an entity can hold in a relation: <br>
            <b>From</b>, and <b>To</b>.<br>
            �From� refers to an independent entity while �To� indicates &nbsp;the dependent
            entity. </p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            select the entities that are involved in a relation:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Right click on the newly created relation</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Go to ��Add Attribute�</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on �New Attribute�</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=284 height=222 id="Picture 387"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image142.png">
        </p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>In the pop up window, enter a name for the new attribute (you will use
            �from� for the independent entity, and �to� for the dependent entity)</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Enter the actual name of the entities for the Value field</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the OK button</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on Save at the top of the window</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=271 height=266 id="Picture 394"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image143.png">
        </p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667295">15.1.4 Start
                Annotation</a></h3>

        <p class=MsoNormal>Now that you have set your desired schema, you are ready to
            start annotating your corpus. First, open your desired .xmi file, then:</p>

        <p class=MsoNormal><b>To assign entity</b>: Place your mouse over a word/phrase
            to highlight it and assign an appropriate entity to the selected text. (Figure 15.6)
        </p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='font-size:11.0pt;line-height:150%;font-family:Cambria'><img border=0
                                                                                   width=385 height=116 id="Picture 400"
                                                                                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image144.png"
                                                                                   alt="https://lh4.googleusercontent.com/fk8HlJGGA1p2RI9h8rJnWbkXYxuwMp0tbEHSj3dX2-wm3xOYKyD-_4O-1OuOuwt-sCF0B4uYi7hpflH7t6pRYOm69gWs2B2jiqRoT9eRcoKKUYuZNICmGP1r3kEQqXTMd0JNERFT32r2Dwykxw"></span><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
15.6 Named entity annotation</span></span></p>

        <p class=MsoNormal><b>To assign relation</b>: By dragging your mouse from an
            independent entity and dropping it to a dependent entity, the names of possible
            relations will occur. Choose the appropriate relation name by clicking on one
            of the displayed names. (Figure 15.7)</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='font-size:11.0pt;line-height:150%;font-family:Cambria'><img border=0
                                                                                   width=331 height=128 id="Picture 401"
                                                                                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image145.png"
                                                                                   alt="https://lh4.googleusercontent.com/VR1hgl-o8m-XqlD-pZVKB10dQomq73IOvShxIZ3D0GIFKPwDp7eC3JIzDqdWo8aefNAxc2dG5Ol82yeeIfuo-8LVPgKNE8aRffaqYCz1NXN1XTdgHs_IKTuknHxJYQDalUb9UWcgBVVXOxszVQ"></span><span
                style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman";
color:windowtext'><br>
</span><span class=picTitlesChar><span style='font-size:12.0pt;line-height:
150%'>Figure 15.7 Relation annotation<br>
<br>
</span></span></p>

        <p class=MsoNormal>Please remember that you can only assign a relation to the
            entities that have already been defined in that relation.</p>

        <p class=MsoNormal>Once you have completed annotating the corpus, save your
            changes by clicking on the save button at the top of the screen.</p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667296"><a
                    name="_Visualization_of_entity"></a>15.1.5 Visualization of entity &amp;
                relation</a></h3>

        <p class=MsoNormal>Although different colors are automatically assigned to the
            different items in the �Display Option�, (Figure 15.8), &nbsp;you are able to
            change them at any time. </p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=256 height=119 id="Picture 402"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image146.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
15.8 Change visualization of the annotated entity/relation</span></span></p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>To
            change the default colors for semantic types:</p>

        <p class=MsoListParagraph style='margin-left:.75in;text-indent:-.25in'>1.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Double click on the
            default color for the entity of your choice</p>

        <p class=MsoListParagraph style='margin-left:.75in;text-indent:-.25in'>2.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Pick a new color from
            the color picker window</p>

        <p class=MsoListParagraph style='margin-left:.75in;text-indent:-.25in'>3.<span
                style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span>Press the OK button</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=253 height=313 id="Picture 403"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image147.png"><br>
            <br>
        </p>

        <h3 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667297">15.1.6 Pre-Annotation
                of entity and relation</a></h3>

        <p class=MsoNormal>As annotating a corpus from scratch may be a time-consuming
            and costly process, CLAMP offers an advanced feature called �pre-annotation�
            function which facilitates this process. &nbsp;The �pre-annotation� function<span
                style='color:red'>&nbsp;</span>relies on the existing models in CLAMP and is
            highly customizable.</p>

        <p class=titlenormal style='margin-left:1.0in;text-indent:-.25in'><span
                style='line-height:150%'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>Using
            pre-annotation function</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Choose&nbsp;your desired pipeline to annotate your files in a corpus
            project.</p>

        <p class=MsoNormal>For more information on how to run a pipeline, go to �<a
                href="#_Run_the_pipeline">Run the pipeline</a>� section.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='color:windowtext'>2.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span>Select the .xmi
            files which contains the predicted named entities from the output folder. </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Copy them into the train/test folder of your desired corpus annotation
            project. To copy,&nbsp; right click on the selected files and choose copy.<span
                style='color:red'> </span><br>
            <br>
        </p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=540 height=223 id="Picture 412"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image148.png">
        </p>

        <p class=MsoNormal><br>
            Double click on the files to view their contents in a new window. As you can
            see in Figure 15.9, the identified named entities in the file are already
            highlighted. Now you can start your own annotation.</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=380 height=259 id="Picture 419"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image149.png"><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
15.9 A file with pre-annotated named entities</span></span></p>

        <h1 style='margin-left:.5in;text-indent:0in'><a name="_Toc462667298">16. Machine
                learning model development</a></h1>

        <p class=MsoNormal>Clamp enables you to build your own machine learning model
            based on a corpus that you have already annotated or a pre annotated one that
            &nbsp;you have imported into a corpus annotation project. The model can be used
            for predictions on new files. In the current version of Clamp, CRF (Conditional
            Random Field) is used to build machine-learning model for named entity
            recognition (NER).</p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <p class=MsoNormal>The first step to build a Machine Learning model is to
            configure its schema. &nbsp;After configuring the schema, you will be able to
            start running the training model and evaluation processes. Once these processes
            are completed, you can view the generated model, its associated log files, and
            named entities predicted &nbsp;by the model &nbsp;in the output folder. The
            following steps will guide you on how to perform the steps mentioned above.</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667299"><a
                    name="_Building_machine_learning"></a>16.1 Building machine learning models
                (NER model)</a></h2>

        <p class=MsoListParagraph style='text-indent:-.25in'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Select your desired train folder on the Corpus panel </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click on the �Train Model� button at the top of the window as shown in
            Figure 16.1</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='font-size:11.0pt;line-height:150%;font-family:Cambria'><img border=0
                                                                                   width=234 height=49 id="Picture 246"
                                                                                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image150.png"
                                                                                   alt="https://lh5.googleusercontent.com/SLzmdyzXm92nsTDnu-2BL3rH0hZfRTf3xmGjmRwlNTDF14fsnjFw3Sep9ZQnx8_1eUQxAFjcmcCmn9pvZxsjFlJJFDjqLhkAmi7wBT8uDdLSk7dV_Sr-uz2wiCHjD7qi0pkczasQTEY-2owSNw"></span>
        </p>

        <p class=picTitles>Figure 16.1 </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>On the pop up window as shown in Figure 16.2, enter a name for the model
            that you are building</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>Click the checkbox for the &nbsp;features that you want to include in
            your model</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span>In the Evaluation box, choose if you want to test the built model against
            a test dataset and/or if you want to do a n-fold cross-validation during the
            training process.</p>

        <p class=MsoNormal>If you choose to test the model against a test set, make
            sure that you have your desired annotated xmi files in the folder of your
            choice. You can browse for the folder by clicking on the three dot button next
            to the checkboxes. With the n-fold cross validation, you are not required to do
            so as the training data will be used to test the model performance.</p>

        <p class=MsoListParagraph style='text-indent:-.25in'><span style='color:windowtext'>6.<span
                    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span>Click on the
            Finish button to start building the model. </p>

        <p class=MsoNormal>Once the building process starts, you can check the progress
            in the Console window, as well as the progress bar at the bottom of the screen.
            You can also stop the building process at anytime by clicking the red stop
            button in the Progress window. </p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=421 height=397 id="Picture 293"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image151.png">
        </p>

        <p class=picTitles>Figure 16.2 Configuration window for machine learning model
            building</p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <p class=MsoNormal><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman";color:windowtext'>&nbsp;</span></p>

        <p class=MsoNormal><b>Note: During the model building process, the training
                files can not be annotated. Clicking on the text of the training files pops up
                an alert window indicating that the user operation is waiting for a function to
                complete, </b>(Figure 16.3).</p>

        <p class=MsoNormal align=center style='text-align:center'><img border=0
                                                                       width=333 height=283 id="Picture 420"
                                                                       src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image152.png">
        </p>

        <p class=picTitles>Figure 16.3&nbsp; Annotations on the training file will be
            paused during the model building process</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667300">16.2 Check
                output models &amp; logs</a></h2>

        <p class=MsoNormal>By default the built models, their associated logs, and the
            named entities predicted by the model (in the output sub-folder) are stored in
            the models folder. As shown in Figure 16.4, both the models built during n-fold
            cross validation and the model trained on the whole training set are stored in
            the directory. The content of the log files includes the output information of
            the training process and the evaluation performance of each specific folder for
            cross validation. (Figure 16.5)</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='font-size:11.0pt;line-height:150%;font-family:Cambria'><img border=0
                                                                                   width=163 height=288 id="Picture 421"
                                                                                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image153.png"
                                                                                   alt="https://lh4.googleusercontent.com/LHqfvAlI1pt8uCKpgTg-hyddbt8FMmTnS2HgYIByrBKOstWY1gWMZw-lRDFpS-QiixFIVnBNEHMKSmx0QOj2S8xKmk5Gqys0ORJ38y1LghGgDs95NeDXASguuIfDUpaB5p6Uv2viVIiyQagCBw"></span><br>
<span class=picTitlesChar><span style='font-size:12.0pt;line-height:150%'>Figure
16.4&nbsp; Annotations on the training file will be paused during the model
building process<br>
<br>
</span></span></p>

        <p class=picTitles align=left style='text-align:left'><span style='font-size:
11.0pt;font-family:Cambria'><img border=0 width=540 height=54 id="Picture 422"
                                 src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image154.png"
                                 alt="https://lh6.googleusercontent.com/csaaCV6GTWwX3Z0AVIIJTPd49l6LYIwccc-ns8T3yqBLyC6KSof2gR7j9EbEZH1eOm9pC2BGZpFcsZBOrQ2Nv5YnhMpsi7SamSjuwplc7bpb3_R3bkFWvuwg4B_JlCbZ8TbDWFPmw0DhUw_log"></span>
        </p>

        <p class=picTitles><span class=picTitlesChar><span style='font-style:normal'>Figure
16.5&nbsp; </span></span>Cross-validation performance in training.fold0.log</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles><span style='color:windowtext'>&nbsp;</span></p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667301">16.3 Use
                your own model in pipeline</a></h2>

        <p class=MsoNormal>The steps below demonstrate how you should use your own
            model to recognize named entities:</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>1. Make sure that you have
            selected your desired annotation project folder on the Corpus panel </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>2. Go to models&gt;
            model_xxx&gt; output, then, right click on the file labled model.jar and select
            copy (Figure 16.6)</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>3. Go to the pipeline
            panel and select the pipeline of your choice</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>4. Click on the small
            arrow next to it to expand it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>5. Go to Components&gt;
            Named Entity Recognizer&gt; DF_CRF_based_named_entity_recognizer</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>6. Paste the copied file
            into �CRF based name entity recognizer� folder by righ clicking on the folder
            and choosing past </p>

        <p class=MsoListParagraph style='text-indent:-.25in'>7. Double click on the
            Config.conf file in the CRF based named entity recognizer� folder to open it</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>8. Click on the three dots
            button to replace the default model for &nbsp;�CRF based named entity
            recognizer� with your own model (Figure 16.7)</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>9. Click on the Open
            button</p>

        <p class=MsoListParagraph style='text-indent:-.25in'>10. Click the save button at
            the top of the page to save the changes (Figure 16.8) </p>

        <p class=MsoListParagraph align=center style='text-align:center'><img border=0
                                                                              width=336 height=417 id="Picture 423"
                                                                              src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image155.png">
        </p>

        <p class=picTitles>Figure 16.6 How to use your own model to recognize name
            entities</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles><img border=0 width=529 height=323 id="Picture 431"
                                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image156.png"></p>

        <p class=picTitles>Figure 16.7 Replace the default model with your own model</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles><img border=0 width=247 height=50 id="Picture 436"
                                src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image157.png"></p>

        <p class=picTitles>Figure 16.8&nbsp; Click the Save button at the top of the
            page </p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <p class=picTitles>&nbsp;</p>

        <h2 style='margin-left:.25in;text-indent:0in'><a name="_Toc462667302">16.4 Visualization
                for error analysis</a></h2>

        <p class=MsoNormal>You will be able to evaluate the performance of the NER
            model only if you have already checked the checkbox(es) for �Use test set� or/and
            �CV, fold� when creating the model. For more information on creating a new NER
            model, go to <a href="#_Building_machine_learning">Building machine learning
                models</a> section.</p>

        <p class=MsoNormal>Once the model is built, you can conduct an error analysis
            to compare the gold-standard annotations with the predicted ones (the
            annotations that are built based on &nbsp;the model that you have specified). </p>

        <p class=titlenormal>To perform error analysis:</p>

        <p class=MsoNormal>Double click on one of the .xmi files listed in the output
            folder of your choice on the corpus panel. </p>

        <p class=MsoNormal>This will open a new window where you can see the original
            text along with both gold-standard and predicted annotations (Figure 16.9).</p>

        <p class=MsoNormal align=center style='text-align:center'><span
                style='font-size:11.0pt;line-height:150%;font-family:Cambria'><img border=0
                                                                                   width=456 height=288 id="Picture 447"
                                                                                   src="CLAMP-Manual2016-FINAL%2010.19.47%20AM.fld/image158.png"
                                                                                   alt="https://lh6.googleusercontent.com/1y3QWigbuO2Lmnpc6WKanYqYke9BrsWnxW_4naij66Z6iwER3PSBey-OcUMezadoETWu6Gxqe2jVjOE29NLP5hqYX7tzZ1K_0T3R2N0NpWmcnMPZD5pWendcerttl_tJrELFodGHm9HIbjYzmw"></span>
        </p>

        <p class=picTitles>Figure 16.9 &nbsp;the .xmi file content which includes the
            original text along with both gold-standard and predicted annotations</p>

        <p class=MsoNormal>&nbsp;Please note that all named entities in both
            gold-standard (Figure 16.20) &nbsp;and predicted annotations (Figure 16.21) are
            listed on the right panel (Figure 4.3.10). You can choose which named entities
            to be highlighted in the text file and assign different colors to them as
            described in �<a href="#_Visualization_of_entity">Visualization of entity and
                relation types</a>� section.</p>

        <p class=picTitles>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

        <p class=MsoNormal>&nbsp;</p>

    </div>
</div>

</body>


<script>
    $(function () {

        $('.list-group-item').on('click', function () {
            $('.glyphicon', this)
                .toggleClass('glyphicon-chevron-right')
                .toggleClass('glyphicon-chevron-down');
        });

    });
</script>

</html>
