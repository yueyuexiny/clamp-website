<!-- Starting Chunker-->

<div>
    <h4 id="chunker">Chunker
    </h4>
    <p>
        A chunker does a shallow parsing of a sentence and identifies the syntactic constituents
        such as noun phrases, verb phrases, and etc. As shown in Figure 8.6, CLAMP-Cancer currently
        provides only one single chunker, DF_OpenNLP_chunker, which is a wrapper of the chunker
        in OpenNLP. Advanced users can use the config.conf file to change the default chunker
        model- en-chunker.bin.

    </p>

    <div>
        <figure class="figure-manual">
            <img src="img/manual/chunker.png"
                 alt=" OpenNLP_Tokenizer"
                 width="359" height="422">
            <figcaption>DF_OpenNLP_chunker and its configuration files</figcaption>
        </figure>
    </div>
</div>
<!-- End of Chunker-->