<?php $pageTitle = "Documentation" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Read Clinical Annotation Manual. To Learn More About Medical Bio-Informatics NLP Tool, Read Starter Guide." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

    <div class="container page-container">
        <br/>
        <div class="section-header">
            <h1>Manual PDF Download </h1>
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
                                    <a href="#nlp-components">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        <strong>NLP Component</strong>
                                    </a>
                                    <a href="#run-pipeline">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        <strong>Build and Run a Pipeline</strong>
                                    </a>
                                    <a href="#annotate-corpus">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        <strong>Annotate Corpus</strong>
                                    </a>
                                    <a href="#model-development">
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
                                        <a href="manual.php#installation" target="_blank">
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
                                        User Manual <a style="font-size: 15px" href="./res/CLAMP-Manual_2017.pdf" target="_blank">(Download PDF file...)</a>
                                    </h3>
                                </div>
                                <div id="gui-manual" class="manual-list">
                                    <a href="manual.php#nlpcomponents">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        <strong>NLP Component</strong>
                                    </a>
                                    <a href="manual.php#run_pipeline">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        <strong>Build and Run a Pipeline</strong>
                                    </a>
                                    <a href="manual.php#annotate_corpus">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        <strong>Annotate Corpus</strong>
                                    </a>
                                    <a href="manual.php#building_machine_learning models">
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
        </div>

<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>