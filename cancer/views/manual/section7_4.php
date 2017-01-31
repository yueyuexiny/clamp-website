<!-- Starting Pos Tagger-->

<div>
    <h4 id="postagger">Pos Tagger
    </h4>
    <p>
        A Pos tagger allows users to assign parts of speech to each token. As shown in Figure 8.5,
        CLAMP-Cancer currently provides only one pos tagger, DF_OpenNLP_pos_tagger, designed
        specifically for clinical text. This tagger is built from re-training the OpenNLP pos tagger
        on
        a dataset of clinical notes, namely, the MiPACQ corpus.
        <a href="http://clear.colorado.edu/compsem/index.php?page=endendsystems&sub=mipacq">(http://clear.colorado.edu/compsem/index.php?page=endendsystems&sub=mipacq)</a>
        .
        Advanced users can use the config.conf file to change the default pos tagger
        modelmipacq_pos.bin.
    </p>

    <div>
        <figure class="figure-manual">
            <img src="img/manual/postagger.png"
                 alt=" OpenNLP_Tokenizer"
                 width="342" height="408">
            <figcaption>DF_OpenNLP_pos_tagger and its configuration files</figcaption>
        </figure>
    </div>
</div>

<!-- End of Pos Tagger -->