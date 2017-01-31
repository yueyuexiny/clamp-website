<!-- Starting Tokenizer-->
<div>
    <h4 id="tokenizer">Tokenizer</h4>
    <p>
        A Tokenizer segments the text into a sequence of tokens. As shown in Figure 8.4, CLAMP-Cancer
        provides three different models of tokenizer: </p>
    <ol class="manual-numbers">
        <li>
            <a href="#DF_CLAMP_Tokenizer"> DF_CLAMP_Tokenizer
            </a>
        </li>
        <li>
            <a href="#DF_ OpenNLP_Tokenizer">DF_ OpenNLP_Tokenizer
            </a>
        </li>

        <li>
            <a href="#DF_Tokenize_by_spaces"> DF_Tokenize_by_spaces
            </a>
        </li>
    </ol>
    <p>Each model will be described in more details.
    </p>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/tokenizer.png" alt="Three tokenizers and their configuration files"
                 width="356"
                 height="436">
            <figcaption> Three tokenizers and their configuration files
            </figcaption>
        </figure>
    </div>
    <div id="DF_CLAMP_Tokenizer">
                        <span class="subtitles-manual">
                                 DF_CLAMP_Tokenizer
                            </span>
        <p>
            DF_CLAMP_Tokenizer is the default tokenizer designed specifically for clinical notes.
            Advanced users can use the config.conf file to change the default tokenization.

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
                                    <img src="img/manual/tokenizer_default_file.png"
                                         alt="Sentence Detector"
                                         width="494"
                                         height="315">
                                    <figcaption>How to replace the default file</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </li>
        </div>
    </div>

    <div id="DF_ OpenNLP_Tokenizer">
                        <span class="subtitles-manual">
                               DF_ OpenNLP_Tokenizer
                            </span>
        <p>
            This is an OpenNLP tokenizer. Advanced users can use its config.conf file to change its
            default model, en-token.bin.

        </p>
        <div>
            <ol class="manual_alpha">
                <li>
                    To replace the default model:
                    <ol class="manual-numbers">
                        <li> Double click on config.conf file to open it</li>
                        <li>Click on the button with three dots to browse for your own file</li>
                        <li>Click on the open button
                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/nlp_tokenizer.png"
                                         alt=" OpenNLP_Tokenizer"
                                         width="473"
                                         height="304">
                                    <figcaption>How to replace the default Model</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </li>

            </ol>
        </div>
    </div>
    <div id="DF_Tokenize_by_spaces">
                        <span class="subtitles-manual">
                                 DF_Tokenize_by_spaces
                            </span>
        <p>
            This tokenizer uses the spaces in a sentence to separate the tokens.
        </p>
    </div>
</div>
<!-- End of Tokenizer-->