<!-- Start Built-in pipelines section-->
<section>
    <h3 class="section-header-manual" id="built_in_pipeline">Built-in pipelines
    </h3>
    <p>
        In order to facilitate a convenient utility of CLAMP-Cancer, a series of pipelines that could be
        directly adopted in common clinical applications are pre_built and displayed in
        PipelineLibrary. Users can directly drag one of them (e.g., smoking_status,
        ) from the PipelineLibrary and drop it under My Pipeline (see figures below). The required NLP
        components of these pipelines are already configured. CLAMP-Cancer
        allows you to customize each of these components to fit your needs. <br>
        First, you need to
        import your files; for more information go to
        <a href="#Import input files">"Import input files”
        </a> section.
    </P>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/builtInLibrary.png"
                 alt="Built-in pipeline library in CLAMP-Cancer">
            <figcaption>Built-in pipeline library in CLAMP-Cancer
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
                 alt="Built-in pipeline library in CLAMP-Cancer">
            <figcaption>Built-in pipeline library in CLAMP-Cancer
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
                <span class="subtitles-manual">CLAMP-Cancer-ner:</span>
            </strong> annotates the disease, procedure and medication concepts
            <br>
            <strong>
                                <span class="subtitles-manual">CLAMP-Cancer-ner-attribute:
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
                         alt="An example of disease attribute annotation using the pipeline library in CLAMP-Cancer">
                    <figcaption>An example of disease attribute annotation using the pipeline library in
                        CLAMP-Cancer
                    </figcaption>
                </figure>
            </div>
        </li>
    </ol>
</section>
<!-- End of Built-in pipelines section-->