<div>
    <h4 id="define_entity">Define entity & relation types</h4>
    <p>
        Before starting annotation, you need to define the semantic types that you will use for this
        purpose. Semantic types in CLAMP-Cancer refer to entities(e.g, ‘problem/treatment/test’) and the
        relations between them.
    </p>
    <ol class="manual_alpha">
        <li>
            To define a new entity type:
            <ol class="manual-numbers">
                <li>
                    Double click on the typedef.xmi file under the models folder to open it. Using
                    this file,
                    you will be able to define a schema for entities and the relation types among
                    them.
                </li>
                <li>
                    Right click on the Entities node
                </li>
                <li>
                    Go to "Add Child"

                </li>
                <li>Click on New Element
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotation_define_entity.png"
                                 alt="Illustrating steps 2-4">
                            <figcaption>Illustrating steps 2-4
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    In the pop up window, enter a name for the element

                </li>
                <li>
                    Click the OK button
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotation_rel.png"
                                 alt="Illustrating steps 5-6">
                            <figcaption>Illustrating steps 5-6
                            </figcaption>
                        </figure>
                    </div>
                    <p>
                        The created element will be added to the Entity node (See the picture below)
                    </p>
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotation_entity.png"
                                 alt="The created element will be added to the Entity node">
                            <figcaption> The created element will be added to the Entity node
                            </figcaption>
                        </figure>
                    </div>
                </li>
            </ol>
        </li>
        <li>
            To define a new relation type:
            <ol class="manual-numbers">
                <li>Right click on the Relations node
                </li>
                <li>
                    Go to "Add Child"
                <li>
                    Click on New Element
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotation_new_element.png"
                                 alt="Context menu for importing the input files">
                            <figcaption>Illustrating steps 1-3</figcaption>
                        </figure>
                    </div>
                </li>
                <li>In the pop up window, enter a name for the relation
                </li>
                <li>
                    Click the OK button
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotation_rel-se.png"
                                 alt="Illustrating steps 4-5">
                            <figcaption>Illustrating steps 4-5</figcaption>
                        </figure>
                    </div>
                    <p>Then, you need to decide which entities are involved in this relation. There
                        are two roles of
                        arguments an entity can hold in a relation: From, and To.
                        "From" refers to an independent entity while "To" indicates the dependent
                        entity.
                    </p>
                </li>
            </ol>
        </li>
        <li>
            To select the entities that are involved in a relation:
            <ol class="manual-numbers">
                <li>Right click on the newly created relation
                </li>
                <li>
                    Go to "Add Attribute"
                <li>
                    Click on "New Attribute"
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotation_entity_involved.png"
                                 alt="Illustrating steps 1-3">
                            <figcaption>Illustrating steps 1-3</figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    In the pop up window, enter a name for the new attribute (you will use "from"
                    for the
                    independent entity, and "to" for the dependent entity)
                </li>
                <li>
                    Enter the actual name of the entities for the Value field
                    <div>
                        <figure class="figure-manual">
                            <img src="img/manual/annotation_rel_third.png"
                                 alt="Illustrating steps 4-6">
                            <figcaption>Illustrating steps 4-6</figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    Click the OK button
                </li>
                <li>
                    Click on Save at the top of the window
                </li>
            </ol>
        </li>
</div>