<div>
    <h4 id="check_output">
        Check output models & logs
    </h4>
    <p>
        By default the built models, their associated logs, and the named entities predicted by each
        model (in the output sub-folder) are stored in the models folder. As shown in the figures
        below,
        the model built during n-fold cross validation and the model trained on the whole
        training set are also stored in this directory. The content of the log files includes
        the output information of the training process and the evaluation performance of each
        specific
        folder for cross validation.
    </p>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/annotation_pause.png"
                 alt="Annotations on the training file will be paused during the model building process">
            <figcaption>Annotations on the training file will be paused during the model
                building process
            </figcaption>
        </figure>
    </div>
    <div>
        <figure class="figure-manual">
            <img src="img/manual/crooss_validation.png"
                 alt="Cross-validation performance in training.fold0.log">
            <figcaption>Cross-validation performance in training.fold0.log
            </figcaption>
        </figure>
    </div>
</div>