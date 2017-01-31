<!-- Starting machine learning-->
<section>
    <h4 id="ner_feature">NER Feature Extractor
    </h4>
    <p>
        This component consists of different feature extractors (Figure 9.1), which are used for
        extracting different types of features for named entity recognition, CLAMP-Cancer users will use
        this component to build their own named entity recognizer in a corpus annotation project
        (Refer to Section 4.2) . Similar to the previous components, we can customize these
        features by changing or replacing their default config files. Explanation of each extractor is
        as follows:
    </p>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/machine_ner.png" alt="Three tokenizers and their configuration files">
            <figcaption>List of NER feature extractors
            </figcaption>
        </figure>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Brown_clustering_feature
                            </span>
        <p>
            It is a type of word representation feature generated on the unlabeled data which is
            provided by the SemEval 2014 Challenge. Advanced users can eplace their own Brwon
            clustering file with the system’s default file.
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
                                    <img src="img/manual/machine_default.png"
                                         alt="DF_Brown_clustering_feature">
                                    <figcaption>How to replace the default file</figcaption>
                                </figure>
                            </div>

                        </li>
                    </ol>
                </li>
        </div>
        <p>For more information on how to create your own Brown Clustring file visit:
            <br>
            <a href="https://github.com/percyliang/brown-cluster">
                https://github.com/percyliang/brown-cluster
            </a>
        </p>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Dictionary_lookup_feature
                            </span>
        <p>
            This extractor uses a dictionary consisting of terms and their semantic types from UMLS to
            extract potential features.
            Advanced users can replace or edit the default file following the steps below:
            <br>
            <strong>Note:</strong>The format of the content should be as the same as the default file:
            (phrase then tab
            then semantic type)
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
                                    <img src="img/manual/machin_dic.png"
                                         alt="How to replace the default file">
                                    <figcaption>How to replace the default file</figcaption>
                                </figure>
                            </div>

                        </li>
                    </ol>

                </li>
                <li>
                    To edit the default file:
                    <ol class="manual-numbers">
                        <li>Double click on the word_path.txt file to open it
                        </li>
                        <li>Add the terms that you want to include in the file
                        </li>
                        <li>Click the Save button at the top of the page

                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/machine_edit_default.png"
                                         alt="How to edit the default file">
                                    <figcaption>How to edit the default file</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>

                </li>
            </ol>
        </div>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Ngram_feature
                            </span>
        <p>
            This module uses the words along with their part-of-speech (pos) tagging as NER features.
        </p>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_prefix_suffix_feature
                            </span>
        <p>
            This function extracts the prefix and suffix of words that may be a representative of a
            specific type of named entities.

        </p>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Random_indexing_feature
                            </span>
        <p>
            Similar to the brown clustering, it is a type of word representation feature generated on
            unlabeled data using a 3
            rd party package. For more information visit:
            <a href="https://jcheminf.springeropen.com">https://jcheminf.springeropen.com</a>

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
                                    <img src="img/manual/random_index.png"
                                         alt="How to replace the default file">
                                    <figcaption>How to replace the default file</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>

                </li>
            </ol>
        </div>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Section_feature
                            </span>
        <p>
            This function extracts the section in which a candidate named entity presents.


        </p>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Sentence_pattern_feature
                            </span>
        <p>
            This function distinguishes the pattern of a sentence by CLAMP-Cancer built in rules.

        </p>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Word_embedding_feature
                            </span>
        <p>
            Similar to the brown clustering and random indexing, it is a type of distributed word
            representation feature generated on the unlabeled data (MIMIC II) provided by the SemEval
            2014 Challenge using a neural network.Advanced users can replace the default file with
            their own file.
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
                                    <img src="img/manual/word_embed.png"
                                         alt="How to replace the default file">
                                    <figcaption>How to replace the default file</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </li>

            </ol>
        </div>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Word_shape_feature
                            </span>
        <p>
            This function extracts the type of a word; it identifies whether or not it begins with an
            english letter, number, and etc.
        </p>
    </div>
    <div>
                        <span class="subtitles-manual">
                                DF_Words_regular_expression_feature
                            </span>
        <p>
            This function extracts the regular expression patterns of words that may indicate a specific
            type of named entity. Advanced users can create their own regular expressions or edit the
            default file
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
                                    <img src="img/manual/words_reg.png"
                                         alt="How to replace the default file">
                                    <figcaption>How to replace the default file</figcaption>
                                </figure>
                            </div>

                        </li>
                    </ol>
                </li>
                <li>
                    To edit the default file:
                    <ol class="manual-numbers">
                        <li>Double click on the reglist.txt file to open it
                        </li>
                        <li>Add the terms that you want to include in the file
                        </li>
                        <li>Click the Save button at the top of the page
                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/words_reg_se.png"
                                         alt="How to edit the default file">
                                    <figcaption>How to edit the default file</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>
</section>
<!-- End of machine learning-->