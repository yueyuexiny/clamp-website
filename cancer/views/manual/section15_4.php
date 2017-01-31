<div>
    <h4 id="visualization_error">
        Visualization for error analysis

    </h4>
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