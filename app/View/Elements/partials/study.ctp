<?php
    echo "<div class='study block'";
    echo " id='s" . $i . "'";
    echo " data-study-id='" . $study['id'] . "'";
    echo " data-study-seq='$i'";
    echo ">";
?>
    <header>
        <button class='btn btn-danger deleteSection'>Delete Study</button>
        <h3><?php echo 'Study ' . ($i+1); ?></h3>
    </header>

        <?php

            echo $this->FormField->textbox(array(
                'field' => "Study.$i.name",
                'label' => "Study Number &amp; Name",
                'class' => 'title_entry',
                'tip' => "Use the study's number from the article, if possible",
                'detailedTip' => '<p>Study number, as written in the article (such as Study 1, Study 2, Study 3a, Study 3b). If there is only one study, enter <kbd>1</kbd>.</p>
                <p>If others have coded this study before you, follow the naming and numbering scheme that was used.</p>'
            ));

            echo $this->Form->hidden("Study.$i.id");
            echo $this->Form->hidden("Study.$i.codedpaper_id");

            echo $this->FormField->dropdownbox(array(
                'field' => "Study.$i.replication",
                'label' => 'Is Study a Replication?',
                'options' => array(
                    '' => '-- choose --',
                    'Replication' => 'Yes',
                    'Novel' => 'No'
                ),
                'class' => 'is-replication',
                'tip' => 'The word "replicate" need not be used in the study.',
                'detailedTip' => 'A study is considered to be a replication if the previous paper is cited and explicitly named as a source of methodology for at least one independent and at least one dependent variable. The word "replicate" need not be used.'
            ));

            echo $this->FormField->inputGroupStart(
                array(
                    'hidden' => true,
                    'class' => 'replication-fields'
                )
            );

            echo $this->FormField->dropdownbox(array(
                'field' => "Study.$i.replication_code",
                'label' => "Type of Replication",
                'options' => array(
                    '' => '',
                    'Direct' => 'Direct',
                    'Direct+X' => 'Direct+X',
                    'Conceptual' => 'Conceptual',
                    'Conceptual+X' => 'Conceptual+X',
                    'E' => 'E'
                ),
                'detailedTip' => "<dl>
                    <dt>Direct</dt>
                    <dd>The stated goal is, at least in part of the design, to exactly reproduce the hypothesis and methods of the previous study, making only those changes that are necessary to achieve the same psychological meaning among the new participant population.</dd>
                    <dt>Conceptual</dt>
                    <dd>The study’s stated goal is, at least in part of the design, to test the hypothesis of the previous study, using the same conceptual variables but changing their operationalization in ways that go beyond merely adapting the materials for a new population or occasion.</dd>
                    <dt>+X</dt>
                    <dd>The study also contains elements of extension that go beyond the type of replication recorded</dd>
                </dl>"
            ));

            echo $this->FormField->dropdownbox(array(
                'field' => "Study.$i.replicates_study_id",
                'label' => "Previous Study from the Paper",
                'options' => $referenced_papers,
                'detailedTip' => "<p>The article that the authors referenced as the source for the replication effect.</p><p>If more than one article is cited, give the one from which the methods were most directly taken; if this cannot be determined, give the earliest one chronologically. If the study replicates a previous study in the same article, code as \"This article\".</p>"
            ));

            echo $this->FormField->textbox(array(
                'field' => "Study.$i.replication_freetext",
                'label' => "... or paste a free-form reference",
                'tip' => "If the article is not listed above, paste the citation here.",
                'rows' => 2
            ));

            echo $this->FormField->textbox(array(
                'field' => "Study.$i.replication_freetext_study",
                'label' => "Identify Study",
                /* TODO: I'm not sure we need the last sentence here. */
                'tip' => "Enter <kbd>1</kbd> if there is only one study in the cited paper; otherwise, enter the number of the study with methodology closest to this one. This may also include a previous study in the same paper",
                'rows' => 1
            ));

            echo $this->FormField->inputGroupEnd();

        ?>
            <?php
                    if(isset($this->data['Study'][$i])) {
                        for($j=0; $j<sizeof($this->data['Study'][$i]['Test']); $j++) {
                            echo $this->element('partials/test', array(
                                's' => $i,
                                't' => $j,
                                'data' => $this->data,
                                'test' => $this->data['Study'][$i]['Test'][$j]
                            ));
                        }
                    } else {
                        echo $this->element(
                            'partials/test',
                            array(
                                's' => $i,
                                't' => 0,
                                'data' => $this->data,
                                'test' => $this->data['Study'][0]['Test'][0]
                            )
                        );
                    }
                    // Template called with a datastructure present
            ?>
            <div class='testFooter'>
                <div class='buttons'>
                    <a class='btn btn-primary'>Add Test</a>
                </div>
            </div>
            <?php
                    echo $this->FormField->dropdownbox(array(
                        'field' => "Study.$i.certainty_key_effect_tests",
                        'label' => "How certain are you that you correctly identified the study's key effect tests?",
                        'options' => array(
                            '' => '',
                            '1' => 'not at all',
                            '2' => 'somewhat',
                            '3' => 'very'
                        )
                    ));

                    echo $this->FormField->dropdownbox(array(
                        'field' => "Study.$i.certainty_replication_status",
                        'label' => "How certain are you that you correctly identified the study's status as a replication?",
                        'options' => array(
                            '' => '',
                            '1' => 'not at all',
                            '2' => 'somewhat',
                            '3' => 'very'
                        )
                    ));

                    echo $this->FormField->textbox(array(
                        'field' => "Study.$i.study_comment",
                        'label' => "Comments",
                        'rows' => 2
                    ));
            ?>




        </div>