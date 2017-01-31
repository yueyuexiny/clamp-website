<div>
    <h4 id="sentence_detector">Sentence Detector</h4>
    <p>
        A sentence is defined as the longest whitespace trimmed character sequence between two
        punctuation marks. A Sentence Detector utilizes different methods to detect a sentence. As
        shown in picture below, CLAMP-Cancer provides three different models to detect a sentence:</p>
    <ol class="manual-numbers">
        <li>
            <a href="#DF_CLAMP_Sentence_Detector">DF_CLAMP_Sentence_Detector</a>
        </li>
        <li>
            <a href="#DF_CLAMP_Sentence_by_newline">DF_CLAMP_Sentence_by_newline</a>
        </li>

        <li>
            <a href="#DF_CLAMP_OpenNLP_sentence_detector">DF_CLAMP_OpenNLP_sentence_detector</a>
        </li>
    </ol>
    <p>Each model is described in details in the following sections.
    </p>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/sentence_detector.png" alt="Sentence Detector" width="302"
                 height="367">
            <figcaption> Three sentence detectors and their configuration files
            </figcaption>
        </figure>
    </div>
    <div id="DF_CLAMP_Sentence_Detector">
                        <span class="subtitles-manual">
                                DF_CLAMP_Sentence_Detector
                            </span>
        <p>
            DF_CLAMP_Sentence_Detector is the default sentence detector in CLAMP-Cancer. It is designed
            specifically for clinical notes and takes into account the distinctive characteristics
            observed in sentences found in clinical texts.
            To configure the DF_CLAMP_Sentence_Detector, please click on the config file. A pop-up
            window opens where you can modify two parameters: Medical Abbreviation, and Max
            Sentence Length.

        </p>
        <div>
            <span class="subtitles-manual">Medical Abbreviation:</span>
            <p>

                There are some medical abbreviations that have punctuation marks at their beginning
                (".NO2) while some of them have it at the end (spec.). Providing a list of such
                abbreviations
                would help the detector to identify sentences more accurately. By default, CLAMP-Cancer has
                provided a comprehensive list of medical abbreviation which can be found in this
                file:
                defaultAbbrs.txt
            <ol class="manual_alpha">
                <li>
                    To replace the abbreviation file:
                    <ol class="manual-numbers">
                        <li> Double click on config.conf file to open it</li>
                        <li>Click on the button with three dots to browse for your own file</li>
                        <li>Click on the open button
                            <div>
                                <figure class="figure-manual">
                                    <img src="img/manual/sentence_detector_2.png"
                                         alt="Sentence Detector"
                                         width="478"
                                         height="350">
                                    <figcaption>How to replace the abbreviation file</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </li>
                <li>
                    To edit the current file:
                </li>
            </ol>
            <ol class="manual-numbers">
                <li>Double click on the defaultAbbrs.txt file to open it</li>
                <li>Add the terms that you want to include in the abbreviation file</li>
                <li>Click on the Save button on the toolbar</li>
            </ol>
            <div>
                <figure class="figure-manual">
                    <img src="img/manual/sentence_detector_2.png" alt="Sentence Detector"
                         width="478"
                         height="350">
                    <figcaption>How to replace the abbreviation file</figcaption>
                </figure>
            </div>

        </div>
        <div>
            <span class="subtitles-manual">Max Sentence Length</span>
            <p> Checking the checkbox for "Break long sentences or not?" allows users to break long
                sentences into the number of words that they have specified in the input textbox.
                Please
                refer to the following picture for more information.
            </p>
            <div>
                <figure class="figure-manual">
                    <img src="img/manual/max_sen.jpg" alt="Max Sentence Length" width="547"
                         height="170">
                    <figcaption> Interface for config.conf of the DF_CLAMP_Sentence_Detector
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div id="DF_CLAMP_Sentence_by_newline">
                        <span class="subtitles-manual">
                                DF_CLAMP_Sentence_by_newline
                            </span>
        <p>
            This detector will identify new sentences using the line breaks in the file, i.e., each
            line
            in
            the file is treated as a single sentence.

        </p>
    </div>
    <div id="DF_CLAMP_OpenNLP_sentence_detector">
                        <span class="subtitles-manual">
                                DF_CLAMP_OpenNLP_sentence_detector
                            </span>
        <p>
            This is an OpenNLP sentence detector which advanced users can use its config.conf
            file
            to
            change its default model.

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
                                    <img src="img/manual/sentence_openNlp.png"
                                         alt="Sentence Detector_OpenNlp"
                                         width="634"
                                         height="402">
                                    <figcaption>How to replace the default Model</figcaption>
                                </figure>
                            </div>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>
</div>