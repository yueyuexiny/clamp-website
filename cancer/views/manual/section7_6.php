<!-- Start of NER-->

<div>
    <h4 id="name_entity_recognizer">Named Entity Recognizer
    </h4>
    <p>
        A named entity recognizer identifies named entities and their semantic types in text.
        Typically, named entities refer to clinical concepts in CLAMP-Cancer. As shown in Figure below,
        CLAMP-Cancer provides two different models for named entity recognition:
    </p>
    <ol class="manual-numbers">
        <li>
            <a href="#DF_CRF_based_named_entity_recognizer"> DF_CRF_based_named_entity_recognizer
                ,and
            </a>
        </li>
        <li>
            <a href="#DF_Dictionary_lookup"> DF_Dictionary_lookup
            </a>
        </li>

        <li>
            <a href="#DF_Regular_expression_NER"> DF_Regular_expression_NER
            </a>
        </li>
    </ol>
    <p>Each model will be described in more details.
    </p>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/ner.png"
                 alt="Three named entity recognizers and their configuration files"
                 width="406"
                 height="466">
            <figcaption>Three named entity recognizers and their configuration files
            </figcaption>
        </figure>
    </div>
    <div id="DF_CRF_based_named_entity_recognizer">
                        <span class="subtitles-manual">
                                 DF_CRF_based_named_entity_recognizer
                            </span>
        <p>
            DF_CRF_based_named_entity_recognizer is the default named entity recognizer used in
            CLAMP-Cancer. The recognizer identifies three types of clinical concepts:
            <br>
            <strong>Problems, treatments, and tests.</strong>

            It is built from training the CRF model on a dataset of clinical notes, namely, the i2b2
            2010
            challenge corpus <a href="https://www.i2b2.org/NLP/Relations/">(https://www.i2b2.org/NLP/Relations/)</a>.
            Advanced users can use the
            config.conf file to change the default recognizer model as in the file defaultModel.jar.
        </p>
        <div>
            <ol class="manual_alpha">
                <li>
                    To replace the default file:
                    <ol class="manual-numbers">
                        <li> Double click on config.conf file to open it</li>
                        <li>Click on the button with three dots to browse for your own file</li>
                        <li>Click on the open button

                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/ner_default_file.png"
                                         alt="Sentence Detector"
                                         width="500"
                                         height="323">
                                    <figcaption>How to replace the default file</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </li>
        </div>
    </div>
    <div id="DF_Dictionary_lookup">
                        <span class="subtitles-manual">
                               DF_Dictionary_lookup
                            </span>
        <p>
            DF_Dictionary_lookup uses terms in the dictionary to match them directly with
            the identified named entities. Currently the defaultDic.txt used in CLAMP-Cancer consists of
            terms and their semantic types from UMLS
            <a href="https://www.nlm.nih.gov/research/umls/">(https://www.nlm.nih.gov/research/umls/)</a>
            . The semantic type of the matched term in UMLS is assigned to the recognized named
            entity.
            <br>
            <span class="subtitles-manual"> To configure DF_Dictionary_lookup:</span>
            First, click on the config file under the DF_Dictionary_matcher folder. This will open
            up a
            new window that takes the following three parameters: Case sensitive, Stemming and
            Dictionaries.(Shown in the picture below)<br>
            <strong>Case sensitive</strong><br>
            If you check the checkbox for "Case sensitive", the matcher will differentiate between
            capital and lowercase letters when searching for a term in the dictionary. For example,
            "Breast Cancer” will not matched with "breast cancer".
            <br>
            <strong>Stemming</strong>
            <br>
            If you check the checkbox for "Stemming", the matcher will match the stemmed form of a
            candidate named entity with the terms in the dictionary. For example, "breast cancers"
            will
            be matched to "breast cancer".<br>
            <strong>Dictionaries</strong><br>
            You can also replace or edit the dictionary file suggested for this function.
        </p>
        <div>
            <ol class="manual_alpha">
                <li>
                    To replace the default dictionary file:
                    <ol class="manual-numbers">
                        <li> Double click on config.conf file to open it</li>
                        <li>Click on the button with three dots to browse for your own file</li>
                        <li>Click on the open button
                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/ner_dic_lookup.png"
                                         alt="Replace the default dictionary file">
                                    <figcaption> Replace the default dictionary file</figcaption>
                                </figure>
                            </div>

                        </li>
                    </ol>
                </li>
                <li>
                    To edit the current dictionary file:
                    <ol class="manual-numbers">
                        <li> Double click on the defaultDict.txt file to open it</li>
                        <li>Add the terms that you want to include in the dictionary file</li>
                        <li>Click the Save button at the top of the page
                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/ner_current.png"
                                         alt="Edit the current dictionary file">
                                    <figcaption>Edit the current dictionary file</figcaption>
                                </figure>
                            </div>

                        </li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>
    <div id="DF_Regular_expression_NER">
                        <span class="subtitles-manual">
                                 DF_Regular_expression_NER
                            </span>
        <p>
            Using the defaultRegExpr.txt file, this module can identify named entities.
            defaultRegExpr.txt file can contain several regular expression. If a phrase matches a
            regular expression, it is recognized as a named entity. You can add your own regular
            expression to the existing file by double clicking the file and add the items that you
            want to
            include.
        </p>
    </div>
</div>
<!-- End of NER-->