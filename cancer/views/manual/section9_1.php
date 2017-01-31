<section>
    <h4 id="run_pipeline">Create and Run a Pipeline
    </h4>
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
    </section>