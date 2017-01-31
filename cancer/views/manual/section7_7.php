<!-- Start of Assertion Identifier-->
<div>
    <h4 id="assertation_identifier">Assertion Identifier
    </h4>
    <p>
        An Assertion identifier checks whether there is a negation related to a specific clinical
        concepts in the text. A negation means the absence or opposite of something positive.
        CLAMP-Cancer Assertion Identifier provides a mechanism to examine the real-world implications
        of annotations in a given clinical text. The defaultNegexDict.txt file which
        contains common negation patterns is used by CLAMP-Cancer to check for negation in a clinical
        text. You can either replace or edit this file by following the steps below. (See the
        picture below)
    </p>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/asser_ide.png"
                 alt="Assertion identifier and its configuration file">
            <figcaption>Assertion identifier and its configuration file
            </figcaption>
        </figure>
    </div>
    <div>
        <ol class="manual_alpha">
            <li>
                To replace the Negation list file:
                <ol class="manual-numbers">
                    <li> Double click on config.conf file to open it</li>
                    <li>Click on the button with three dots to browse for your own file</li>
                    <li>Click on the open button
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/asser_neg.png"
                                     alt="Replace the Negation list file">
                                <figcaption>Replace the Negation list file</figcaption>
                            </figure>
                        </div>
                    </li>
                </ol>
            </li>
            <li>
                To edit the current dictionary file:
                <ol class="manual-numbers">
                    <li>Double click on the defaultNegexDict.txt file to open it
                    </li>
                    <li>Add the terms that you want to include in the dictionary file
                    </li>
                    <li>Click the Save button at the top of the page
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/asser_curr.png"
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
<!-- End of Assertion Identifier-->