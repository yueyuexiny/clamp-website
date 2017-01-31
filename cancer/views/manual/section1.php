<section>
    <h3 class="section-header-manual" id="intro">Introduction</h3>
    <div class="section-body-manual">
        <p> The CLAMP-Cancer System is a comprehensive clinical Natural Language Processing software that
            enables recognition and automatic encoding of clinical information in narrative patient
            reports. In addition to running a clinical concept extraction pipeline as well as an
            annotation pipeline, the individual components of the system can also be used as independent
            modules. The system lends itself for diverse applications in a broad range of clinical
            domains. The high performance language processing framework in CLAMP-Cancer consists of the
            following key building blocks:
        </p>

        <div>
            <span class="subtitles-manual">NLP Pipelines</span>
            <p>

                CLAMP-Cancer components builds on a set of high performance NLP components that were proven in
                several clinical NLP challenges such as i2b2 , ShARe/CLEF , and SemEVAL. A pipeline can
                be created and customized by a simple drag and drop on the individual CLAMP-Cancer components
                in the order that is desired. Upon creation of the pipeline, CLAMP-Cancer checks for errors in
                sequence and directs the user to the appropriate logical order with insertion of the
                required components for a working pipeline. The CLAMP-Cancer components are supported by
                knowledge resources consisting of medical abbreviations, dictionaries, section headers,
                and a corpus of 400 annotated clinical notes derived from MTsamples, a freely available
                resource of clinical narrative text. CLAMP-Cancer also provides built-in pipelines ready for
                use out of the box for a series of common clinical applications.
            </p>
        </div>

        <div>
            <span class="subtitles-manual">Machine learning and hybrid approaches</span>
            <p>
                The CLAMP-Cancer framework provides alternative components for some tasks, utilizing rule based
                methods and/or machine learning methods such as support vector machines, and conditional
                random fields. These components can be customized by re-training on an annotated corpus,
                or editing the rule sets within the CLAMP-Cancer GUI to achieve a custom NLP task. The CLAMP-Cancer
                GUI version also provides built-in functionality to test the model, using the annotated
                corpora or n-fold cross validation.
            </p>
        </div>
        <div>
            <span class="subtitles-manual">Corpus management and annotation tool:</span>
            <p>

                The user interface also provides required tools to maintain and annotate text corpora.
                It hosts an improved version of the brat annotation tool (reference?) for textual
                annotations.
            </p>
        </div>


</section>