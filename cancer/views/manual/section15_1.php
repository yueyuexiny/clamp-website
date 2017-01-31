<!-- Start of Machine learning model development-->
<section>
    <h2 class="section-header-manual" id="machine_learning_dev">Machine learning model development
    </h2>
    <p>
        CLAMP-Cancer enables you to build your own machine learning model based on a corpus that you
        have already annotated or a pre annotated one that you have imported into a corpus
        annotation project. The model can be used for predictions on new files. In the current
        version of CLAMP-Cancer, CRF (Conditional Random Field) is used to build machine-learning model
        for named entity recognition (NER).
        <br>
        The first step to build a Machine Learning model is to configure its schema. After
        configuring the schema, you will be able to start running the training model and evaluation
        processes. Once these processes are completed, you can view the generated model, its
        associated log files, and named entities predicted by the model in the output folder. The
        following steps will guide you on how to perform the steps mentioned above.

    </P>
    <div>
        <h4 id="building_machine_learning models">
            Building machine learning models <br>(NER model)
        </h4>
        <ol class="manual-numbers">
            <li>
                Select your desired train folder on the Corpus panel

            </li>
            <li>
                Click on the "Train Model" button at the top of the window as shown
                in the figure below.
                <div>
                    <figure class="figure-manual">
                        <img src="img/manual/ml_train_btn.png"
                             alt="Train Model button">
                        <figcaption>Train Model button</figcaption>
                    </figure>
                </div>
            </li>
            <li>
                On the pop up window as shown in the figure below, enter a name for the model that you
                are
                building.
                <div>
                    <figure class="figure-manual">
                        <img src="img/manual/ml_enter_name.png"
                             alt="Configuration window for machine learning model building">
                        <figcaption>Configuration window for machine learning model building
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li>
                Click the checkbox for the features that you want to include in your model
            </li>
            <li>
                In the Evaluation box, choose if you want to test the built model against a test dataset
                and/or if you want to do a n-fold cross-validation during the training process.
                <p>
                    If you choose to test the model against a test set, make sure that you have your
                    desired
                    annotated xmi files in the folder of your choice. You can browse for the folder by
                    clicking on
                    the three dot button next to the checkboxes. With the n-fold cross validation, you
                    are not
                    required to do so as the training data will be used to test the model performance.
                </p>
            </li>
            <li>
                Click on the Finish button to start building the model.
                <p>
                    Once the building process starts, you can check the progress in the Console window,
                    as
                    well as the progress bar at the bottom of the screen. You can also stop the building
                    process at anytime by clicking the red stop button in the Progress window.
                    <br>
                    <strong>Note:</strong>During the model building process, the training files can not
                    be annotated. Clicking on
                    the text of the training files pops up an alert window indicating that the user
                    operation is
                    waiting for a function to complete.
                </p>
                <div>
                    <figure class="figure-manual">
                        <img src="img/manual/training_pause.png"
                             alt="Annotations on the training file will be paused during the model building process">
                        <figcaption>Annotations on the training file will be paused during the model
                            building process
                        </figcaption>
                    </figure>
                </div>
            </li>
    </div>
    </section>