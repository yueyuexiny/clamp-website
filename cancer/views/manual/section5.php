<section>
    <h3 id="package_description" class="section-header-manual">Package Description</h3>
    <div class="section-body-manual">
        <p> Since CLAMP-Cancer is a stand-alone eclipse plugin, its folder structure is similar to other
            eclipse plugins.
            <br/> <span class="subtitles-manual">Configuration Folder:</span>

            This folder contains CLAMP-Cancer configuration files.
            <br/> <span class="subtitles-manual">StartCLAMP:</span>
            This is the launching point for the CLAMP-Cancer GUI. In Windows,
            this is an executable file while in Mac, this is an application.
        </p>
        <figure class="figure-manual">
            <img src="img/manual/pachake_desc.png" alt="CLAMP-Cancer Package Description" width="501"
                 height="152">
            <figcaption>CLAMP-Cancer GUI</figcaption>
        </figure>
        <br>
        <span class="subtitles-manual">Workspace Folder:</span>
        <p>
            This folder contains seven sub-folders:</p>
        <ol class="manual-numbers">
            <li><strong>ComponentLibrary:</strong> contains the components used in machine learning
                feature extraction
                and NLP functions.
            </li>
            <li><strong>MyCorpus:</strong> contains the customized corpus built by the users.</li>
            <li><strong>MyPipeline: </strong>contains the customized pipeline created by users for
                clinical notes
                processing.
            </li>
            <li>
                <strong>PipelineLibrary: </strong>contains the built-in pipelines ready to use for a
                series of common
                clinical applications.

            </li>
            <li><strong>Log:</strong> Includes CLAMP-Cancer run-time log files</li>
            <li><strong>Metadata: </strong>The metadata used by CLAMP-Cancer are included in this folder.</li>
            <li><strong>Resources:</strong> This folder includes third-party libraries. Currently it has
                two items:

                <ol class="nesting">
                    <li>CRFSuite: the CRF implementation for Name Entity Recognition tasks</li>
                    <li>Umls_index: the Lucene index built for CLAMP-Cancer based on the UMLS thesaurus.</li>

                </ol>
            </li>
        </ol>
        <p>
            If you want to use UMLS terminologies,
            then you will need to create an UMLS account. Please follow the following link
            to create an UMLS account if you do not have any.
            <a href="https://uts.nlm.nih.gov//license.html">https://uts.nlm.nih.gov//license.html</a>

            <br/> The following table lists libraries included in CLAMP-Cancer. </p>
        <div class="tbl_manual_container">


            <table class="tbl_clamp_manual">
                <caption>Libraries included in CLAMP-Cancer</caption>
                <thead>
                <tr>
                    <th>groupId</th>
                    <th>artifactId</th>
                    <th>version</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>org.cleartk</td>
                    <td>cleartk-ml-liblinear</td>
                    <td>2.0.0</td>
                </tr>
                <tr>
                    <td>org.ini4j</td>
                    <td>ini4j</td>
                    <td>0.5.2</td>
                </tr>
                <tr>
                    <td> org.apache.uima</td>
                    <td> uimafit-core</td>
                    <td> 2.1.0</td>
                </tr>
                <tr>
                    <td>com.google.code.gson</td>
                    <td>gson</td>
                    <td> 2.3</td>
                </tr>
                <tr>
                    <td> org.apache.uima</td>
                    <td> uimaj-core</td>
                    <td> 2.6.0</td>
                </tr>
                <tr>
                    <td> org.apache.uima</td>
                    <td> uimaj-document-annotation</td>
                    <td> 2.6.0</td>
                </tr>
                <tr>
                    <td> de.bwaldvogel</td>
                    <td> liblinear</td>
                    <td> 1.94</td>
                </tr>
                <tr>
                    <td>org.apache.lucene</td>
                    <td> lucene-core</td>
                    <td> 5.2.1</td>
                </tr>
                <tr>
                    <td> org.apache.lucene</td>
                    <td>lucene-analyzers-common</td>
                    <td> 5.2.1</td>
                </tr>
                <tr>
                    <td>org.apache.lucene</td>
                    <td>lucene-queryparser</td>
                    <td> 5.2.1</td>
                </tr>
                <tr>
                    <td>org.apache.opennlp</td>
                    <td> opennlp-tools</td>
                    <td> 1.5.1-incubating</td>
                </tr>
                <tr>
                    <td>org.apache.ctakes</td>
                    <td>ctakes-type-system</td>
                    <td> 3.2.0</td>
                </tr>
                <tr>
                    <td>org.cleartk</td>
                    <td>cleartk-named-entity</td>
                    <td> 0.6.6</td>
                </tr>
                <tr>
                    <td>com.googlecode.clearnlp</td>
                    <td> clearnlp</td>
                    <td> 1.3.1</td>
                </tr>
                <tr>
                    <td>commons-codec</td>
                    <td> commons-codec</td>
                    <td> 20041127.091804</td>
                </tr>
                <tr>
                    <td> dom4j</td>
                    <td> dom4j</td>
                    <td> 1.6.1</td>
                </tr>
                <tr>
                    <td>org.apache.uima</td>
                    <td> ruta-ep-engine</td>
                    <td> 2.3.0</td>
                </tr>
                <tr>
                    <td>javax.servlet</td>
                    <td> servlet-api</td>
                    <td> 3.0-alpha-1</td>
                </tr>
                <tr>
                    <td>com.sun.jersey</td>
                    <td>jersey-client</td>
                    <td> 1.19</td>
                </tr>
                <tr>
                    <td>junit</td>
                    <td> junit</td>
                    <td> 4.12</td>
                </tr>
                <tr>
                    <td> commons-cli</td>
                    <td> commons-cli</td>
                    <td> 1.3</td>
                </tr>
                <tr>
                    <td>net.jodah</td>
                    <td>concurrentunit</td>
                    <td> 0.4.2</td>
                </tr>
                <tr>
                    <td> org.javatuples</td>
                    <td>javatuples</td>
                    <td>1.2</td>
                </tr>
                </tbody>
            </table>
        </div>
</section>