<!-- Start of Annotation section-->
<section>
    <h4 id="annotate_corpus">Annotate corpus
    </h4>
    <p>
        The CLAMP-Cancer annotation module enables you to annotate customized entities and specify
        relations between them in your desired corpus . These annotations enable you to assign
        additional clinical information to a selected text and develop an annotated corpus that’s
        more suitable to the specific task that you have. Task-specific models can be developed
        and used in the machine-learning modules of CLAMP-Cancer or any other system of your choice.
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
    </section>