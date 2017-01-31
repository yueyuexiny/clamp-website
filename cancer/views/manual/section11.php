<!-- Start Output visualization section-->
<section>
    <h3 class="section-header-manual" id="output_visualization">Output visualization
    </h3>
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