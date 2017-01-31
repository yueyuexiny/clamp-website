<!-- Start of user_defined-->

<div>
    <h4 id="user_defined">User Defined Components
    </h4>
    <p>
        <span class="subtitles-manual">DF_Drug_Attribute_Connector:</span>

        This is a context free grammar parser which is extracted from Medex. It is used to connect
        medication to its possible attributes such as dose.<br/>
        <span class="subtitles-manual">DF_Relation_connector_after_ruta:</span>
        While connecting two named entities using Ruta is relatively easy, it can not be used to
        provide a name for that relationship.
        Advanced users can generate their own file and replace it with the system’s default file or
        edit the default file.
    </p>
    <div>
        <ol class="manual_alpha">
            <li>To replace the default file:
                <ol class="manual-numbers">
                    <li> Double click on config.conf file to open it</li>
                    <li>Click on the button with three dots to browse for your own file</li>
                    <li>Click on the open button
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/user_defined.png"
                                     alt="Replace the default file">
                                <figcaption>Replace the default file</figcaption>
                            </figure>
                        </div>

                    </li>
                </ol>
            </li>

            <li>
                To edit the current dictionary file:
                <ol class="manual-numbers">
                    <li>Double click on the relationConnection.txt file to open it

                    </li>
                    <li>Add the terms that you want to include in the file
                    </li>
                    <li>Click the Save button at the top of the page
                        <div>
                            <figure class="figure-manual">
                                <img src="img/manual/user_defined_current.png"
                                     alt=" add additional section headers to the current file">
                                <figcaption> Edit the current dictionary file</figcaption>
                            </figure>
                        </div>
                    </li>
                </ol>
            </li>
        </ol>
    </div>
</div>
<!-- End of user_defined-->