<!-- Start of Section Header-->
<div>
    <h4 id="section_identifier">Section Identifier
    </h4>
    <p>
        The section header identifier component identifies the section headers in a clinical note
        based on a predefined dictionary and categorizes them into general categories (Figure
        below). E.g. the section header "ICD 10 code" will be assigned to the "icd_code" category.
    </p>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/sec_header.png"
                 alt="Section header identifier and its configuration file">
            <figcaption> Section header identifier and its configuration file</figcaption>
        </figure>
    </div>
    <p> You can replace or edit the default dictionary, section_map.txt, following the steps below:
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
                                <img src="img/manual/sec_iden.png"
                                     alt="Replace the default file">
                                <figcaption> Replace the default file</figcaption>
                            </figure>
                        </div>
                    </li>
                </ol>
            </li>
            <li>
                To add additional section headers to the current file:
                <ol class="manual-numbers">
                    <li>Double click on the section_map.txt file to open it
                    </li>
                    <li>Add the terms that you want to include in the file
                    </li>
                    <li>Click the Save button at the top of the page
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/sec_header_addi.png"
                                     alt=" add additional section headers to the current file">
                                <figcaption>Add additional section headers to the current file
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ol>

            </li>
        </ol>
    </div>
</div>
<!-- End of Section Header-->