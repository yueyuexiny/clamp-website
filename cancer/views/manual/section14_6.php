<div>
    <h4 id="pre_annotation">Pre-Annotation of entity and relation</h4>
    <p>
        As annotating a corpus from scratch may be a time-consuming and costly process, CLAMP-Cancer
        offers an advanced feature called "pre-annotation" function which facilitates this
        process. The "pre-annotation" function relies on the existing models in CLAMP-Cancer and is
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