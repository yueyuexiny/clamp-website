<section>
    <h3 class="section-header-manual" id="system_requirement">System Requirements</h3>

    <div class="section-body-manual">
        <p> CLAMP is a stand-alone Java application based on the Eclipse platform technologies. CLAMP
            uses the Apache UIMA (Unstructured Information Management Architecture) framework. The
            annotation module of CLAMP incorporates and enhances the brat rapid annotation tool . For
            the other individual constituents, Apache OpenNLP toolkit, Liblinear and CRF Suite are
            utilized in addition to in-house rule-based components. CLAMP also use the UIMA Ruta (Rule
            based Text Annotation) as a rule engine to help users specify rules.
            CLAMP is distributed as a ready-to-use binary package that can either be executed at the
            command line or carries the associated Graphic User Interface (GUI). Our distribution
            package includes components for jar files, CRFSuite, and a Lucene index of all levels of
            UMLS data.

        </p>
        <p>
            The only prerequisite necessary to compile CLAMP is JRE 1.8 (Java Runtime Environment).
            Please ensure that you have Java 8 or higher installed in your system. Run the following
            command in both Mac and Windows to check your version:
            <br/>
            <code>java –version</code>
            <br/>
            Here is an example of what you will see when running the command in Windows:
        </p>
        <figure class="figure-manual">
            <img src="img/manual/system.png" alt="System Requirenment" width="498"
                 height="142">
            <figcaption>Running the code in windows</figcaption>
        </figure>

        <p>

            If your java version is not 1.8, it is available for download from the
            <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">
                Oracle website</a>. An UMLS account is required in order to use Level 2 and higher data
            in the UMLS
            encoding component of the system. The account can be created at
            <a href="https://uts.nlm.nih.gov/home.html">https://uts.nlm.nih.gov/home.html</a>. You will
            have to enter your UMLS username and password
            when prompted by CLAMP in order to utilise the UMLS encoding component.
            CLAMP also uses the computer’s default browsers to visualize the clinical documents. Since
            all browsers do not completely support all the aspects of the technologies used to implement
            the visualization, limitations exist in term of running the CLAMP annotation module in the
            browsers. On the Windows OS, the Internet Explorer should be higher than IE9; On Macintosh
            computers, Safari (all versions) works well with CLAMP.

        </p>

</section>