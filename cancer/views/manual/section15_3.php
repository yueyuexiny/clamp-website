<div>
    <h4 id="use_own_model">
        Use your own model in pipeline
    </h4>
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