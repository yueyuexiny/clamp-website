<div>
    <h4 id="component_dependency">Component dependency & Auto fix
    </h4>
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