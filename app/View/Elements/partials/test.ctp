<?php
    echo "<div class='test'";
    echo " id='s" . $s . "t" . $t . "'";
    echo " data-test-id='" . $test['id'] . "'";
    echo " data-test-seq='$t'";
    echo ">";
?>
    <header>
        <button class='btn btn-danger deleteSection'>Delete Test</button>
        <h3><?php echo 'Test ' . ($s+1) . '.' . ($t+1); ?></h3>
    </header>

                <?php

                echo $this->Form->hidden("Study.$s.Test.$t.id");
                echo $this->Form->hidden("Study.$s.Test.$t.effect_id");

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.name",
                    'label' => "Test Number &amp; Name",
                    'class' => 'title_entry',
                    'tip' => "You will only code studies whose findings are mentioned in the abstract. If others have coded this test before you, follow the naming and numbering scheme that was used."
                ));

                // Prior Hypothesis

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.hypothesized",
                    'label' => "Hypothesis",
                    'options' => array(
                        '' => '',
                        "Yes, directional" => "Yes, directional",
                        "Yes, nondirectional" => "Yes, nondirectional",
                        "No, no hypothesis" => "No, no hypothesis"
                    ),
                    'detailedTip' => "<dl>
                        <dt>Yes, directional</dt>
                        <dd>The test deals with a directional hypothesis that is stated in the abstract or introduction. The hypothesis not only states that two or more variables will be related to each other, but the direction of that relationship. In a simple test, this will be a description of a positive or negative relationship between two variables, or a description of which groups should have the higher means. In a more complex test, a directional hypothesis attempts to use similar language to describe an interaction or model.</dd>
                        <dt>Yes, nondirectional</dt>
                        <dd>The test deals with a nondirectional hypothesis that is stated in the abstract or introduction. The hypothesis only states that two or more variables should be related, but does not specify the expected direction. This code also applies to an study that proposes multiple alternative hypotheses relevant to different possibilities for the same test, but only if the authors do not commit themselves to supporting one of those hypotheses over the other.</dd>
                        <dt>No</dt>
                        <dd>This code applies to studies whose effects were mentioned in the abstract, and therefore warrant coding, but did not have a particular hypothesis associated with them.</dd>
                    </dl>"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.prior_hypothesis",
                    'label' => "Hypothesis",
                    'tip' => "Paste the test's hypothesis.",
                    'rows' => 2
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.prior_hypothesis_page",
                    'label' => "Hypothesis Page",
                    'tip' => "The page number where the hypothesis was found."
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.certainty_hypothesis",
                    'label' => "How certain are you that you correctly identified the test's hypothesis?",
                    'options' => array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.subsample",
                    'label' => "Subsample",
                    'tip' => "Was this test done on a subsample/-group? If so, please note its characteristics.",
                    'rows' => 2
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.analytic_design_code",
                    'label' => "Analytic Design Code",
                    'options' => array(
                        '' => '',
                        'C' => 'C: correlational/multivariate analysis without manipulation',
                        'IA' => 'IA: correlational/multivariate internal analysis of manipulation check',
                        'X' => 'X: experimental analysis of manipulation effect',
                        'RM' => 'RM: experimental analysis of repeated-measures effect',
                        'RMX' => 'RMX: combined experimental and repeated-measures effect',
                        'Q' => 'Q: quasi-experimental analysis of manipulation effect',
                        'O' => 'O: Other, describe in comments'
                    ),
                    /* TODO: This is so long the modal scrolls. It may not be apparent that it *can* scroll. */
                    'detailedTip' => "<dl>
                        <dt>C: correlational/multivariate analysis without manipulation</dt>
                        <dd>The test uses a number of variables that were measured at the same or different time – including continuous or categorical variables - but none of the test’s variables relate to the outcome of a controlled experimental manipulation.</dd>
                        <dt>IA: correlational/multivariate internal analysis of manipulation check</dt>
                        <dd>The test takes place within an experimental manipulation, but does not use a variable derived from the manipulation itself as an independent variable. Instead, it substitutes a measured variable which was a “check” on the manipulation’s effects. Example: If I run an experiment in which participants listen to either an expert or inexpert communication, and measure persuasion afterwards, one possible internal analysis would test the correlation between participants’ ratings of the communicator’s expertise and persuasion. Those ratings are measuring the same thing as the experiment tried to manipulate, but do not themselves represent which condition that participant was assigned to.</dd>
                        <dt>X: experimental analysis of manipulation effect</dt>
                        <dd>One or more of the test’s independent variables represents which condition a participant was randomly assigned to. (Many write-ups of research do not explicitly mention random assignment because it is assumed to have taken place if a study is reported as an “experiment.”)</dd>
                        <dt>RM: experimental analysis of repeated-measures effect</dt>
                        <dd>One or more of the test’s independent variables is an analysis of the differences between different measures given to the same participant. This may be expressed by such phrases as “repeated measures” or “within-participants factor”.</dd>
                        <dt>RMX: combined experimental and repeated-measures effect</dt>
                        <dd>The test has multiple independent variables, at least one of which would be coded “X” and at least one of which would be coded “RM” (that is, a mixed design with both between- and with-participant factors).</dd>
                        <dt>Q: quasi-experimental analysis of manipulation effect</dt>
                        <dd>One or more of the test’s independent variables represents different “treatments” given to participants in situations under the researcher’s control, but without being able to assign participants randomly.</dd>
                        <dt>O: Other</dt>
                        <dd>A design is used that does not fit any of these categories. The coder should briefly describe the design, using whatever short term or label for the design the authors use.</dd>
                    </dl>"
                ));

                echo $this->FormField->checkboxes(array(
                    'field' => "Study.$s.Test.$t.methodology_codes",
                    'label' => "Methodology Codes",
                    'options' => array(
                        'A' => 'archival measures',
                        'BI' => 'brain imaging measures' ,
                        'J' => 'judgment of the participant' ,
                        'P' => 'non-imaging physiological measures',
                        'SR' => 'self-report measures',
                        'I' => 'indirect verbal or response-time measures',
                        'BC' => 'behavioral/choice measures'
                    ),
                    'detailedTip' => "<dl>
                        <dt>archival measures</dt>
                        <dd>The analysis includes at least one variable derived from data that are found by the researchers rather than explicitly collected from participants, such as average school grades of students in different states or text analysis of singles’ ads on the internet.</dd>
                        <dt>brain imaging measures</dt>
                        <dd>The analysis involves at least one variable derived from fMRI or other spatial brain imaging techniques. (Do not include EEG or other non-spatial brain measurement techniques).</dd>
                        <dt>judgment measures</dt>
                        <dd>The analysis involves at least one variable that is the judgment of participants by other people for a trait that is more general than the participant’s specific behavior or responses (for example, attractiveness ratings from a photo, or personality ratings on the basis of a 5 minute interaction).</dd>
                        <dt>non-imaging physiological measures</dt>
                        <dd>The analysis involves at least one variable derived from physiological measures other than brain imaging; that is, measures taken directly from the human body or its products. Do not include self-reported physiological phenomena such as time of menstrual cycle, hunger, etc. Some common examples: heart rate, skin conductance, event-related potentials in electrencephalography (EEG), electromyography (EMG), direct analysis of DNA, grip strength, measuring chemicals in blood or saliva, etc.</dd>
                        <dt>self-report measures</dt>
                        <dd>The analysis involves at least one variable assessing the participant’s thoughts, feelings, intentions or behavior using controlled self-report through written, verbal, numeric, or visual analogue measures. This includes variables that are presented as a test of ability with a correct answer (for example, memory or reasoning tests), and choices that the participants believe to have no consequences outside the experimental context (for example, choosing how to allocate money in an explicitly hypothetical task).</dd>
                        <dt>indirect verbal or response-time measures</dt>
                        <dd>The analysis involves at least one variable assessing the participant’s thoughts, feelings, or intentions with an indirect measure: one that that does not directly measure the participant’s body or brain but is based on analysis of verbal or response-time output, and which is intended to bypass controlled, conscious responding. Some common examples: an implicit measurement task inferring attitudes from patterns of response times; a projective story task which is then coded for implicit themes; analyzing participant’s free writing for subtle uses of grammar that reveal attitudes toward groups (as opposed to directly expressed attitudes toward groups).</dd>
                        <dt>behavioral/choice measures</dt>
                        <dd>The analysis involves at least one variable that measures the participant’s behavior by observation, or gives the participant a choice that he or she believes to have consequences outside the immediate experimental context. Some common examples: a gambling task where the participant can win real money (but not a task where everyone is paid the same amount regardless of performance); a choice of whether to interact with another person in the next phase of the experiment, even though the experiment uses deception and the person does not really exist; observations of nonverbal behavior; a choice to give your email address to receive further messages about the environment.</dd>
                        <dt>Other</dt>
                        <dd>A methodology is used that does not fit any of these categories. The coder should briefly describe the methodology, using whatever short term or label for the methodology the authors use.</dd>
                    </dl>"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.independent_variables",
                    'label' => "Independent Variables",
                    'tip' => "One per line",
                    'rows' => 4
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.dependent_variables",
                    'label' => "Dependent Variables",
                    'tip' => "One per line",
                    'rows' => 4
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.other_variables",
                    'label' => "Other Variables",
                    'tip' => "One per line",
                    'rows' => 4
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.N_total",
                    'label' => "N Total"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.data_points_excluded",
                    'label' => "N Excluded",
                    'tip' => "This should not include data that were genuinely missing (procedural errors, failure to answer, drop-outs from multiple waves of a study), but should include data that the researchers had, but chose to exclude."
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.reasons_for_exclusions",
                    'label' => "Reasons for Exclusion",
                    'tip' => "separated by commas if multiple reasons given (using the author’s words as much as possible)"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.N_used_in_analysis",
                    'label' => "Number of Cases Used in Analysis",
                    'tip' => "Use the number of cases totaled after exclusion (using the authors’ stated units of analysis; usually participants, but maybe other factors if hierarchical analysis is used)"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.type_of_statistical_test_used",
                    'label' => "Type of Statistical Test",
                    'tip' => "Type of statistical test used, in the authors’ words (examples: ANCOVA; structural equation model; mediation analysis with bootstrapping)"
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.reported_effect_size_statistic",
                    'label' => 'Effect Size Statistic',
                    'options' => array(
                        '' => '',
                        'r' => 'r',
                        'partial.r' => 'partial r',
                        'r.squared' => 'R²',
                        'delta.r.squared' => 'ΔR²',
                        'regression.b' => 'B (regression coefficient)',
                        'regression.beta' => 'b* (standardized regression coefficient)',
                        'cohens.d' => 'Cohen\'s d\' (t-test)',
                        'anova.d' => 'd (ANOVA)',
                        'f.squared' => 'f²',
                        'eta.squared' => 'η²',
                        'partial.eta.squared' => 'partial η²',
                        'omega.squared' => 'ω²',
                        'odds.ratio' => 'Odds Ratio',
                        'spearmans.rho' => 'Spearman\'s rho (rank order correlation)',
                        'phi.coefficient' => 'Phi coefficient',
                        'cramers.v' => 'Cramer\'s v',
                        'sem.coefficient' => 'SEM coefficient (details in comments please)',
                        'multilevel.coefficient' => 'Multilevel coefficient (details in comments please)'
                    )
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.reported_effect_size_statistic_value",
                    'label' => "Reported effect size"
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.inferential_test_statistic",
                    'label' => "Test stat.",
                    'options' => array(
                        '' => '',
                        'chi.sq' => 'χ²',
                        't' => 't',
                        'z' => 'z',
                        'F' => 'F'
                    ),
                    'detailedTip' => "<p>
                        Report the inferential test statistic (the F-value, t-value, or chi-square associated with the test.) For example: “F = 3.92,” “t = -1.35.” If this is followed by more specific comparisons or contrasts, report here only the statistic for the overall test.
                    </p>
                    <p>
                        Do not report values of <em>r</em>, <em>B</em> or &beta; from correlations or regressions here because they are better seen as effect size statistics, not inferential test statistics. Often, significance tests of r, B and &beta; are reported without an inferential test statistic, which usually should be <em>t</em>.
                    </p>"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.degrees_of_freedom",
                    'label' => "Degrees of Freedom",
                    'tip' => "<p>For multiple inferential statistics, separate values with a comma, giving the N second if a &Chi;<sup>2</sup>.</p><p>Enter <kbd>None reported</kbd> if these are missing.</p>"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.inferential_test_statistic_value",
                    'label' => "Value",
                    'tip' => "If inferential statistics are missing, leave this field blank."
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.reported_significance_of_test",
                    'label' => "Significance (Reported)",
                    'options' => array(
                        '' => '',
                        'ns' => 'ns',
                        '†' => '†',
                        'p<.10' => 'p<.10',
                        'marginal' => 'marginal',
                        '*'  => '*',
                        'significant' => 'significant',
                        'p<.05' => 'p<.05',
                        '**' => '**',
                        'p<.01' => 'p<.01',
                        '***'  => '***',
                        'p<.001' => 'p<.001'
                    ),
                    'detailedTip' => "<p>If the exact p value is not reported, state the possible range of p values from lowest to highest, p1 to p2, with <kbd>~0</kbd> as the lowest possible result. If the value is not a p value (for example, prep) this fact should also be entered (so, <kbd>p-rep .98</kbd>). <kbd>None reported</kbd> if this is missing.</p>
                    <p>Examples:</p>
                    <ul>
                        <li>a value reported only as p < .001 should be reported <kbd>~0 to .001</kbd></li>
                        <li>&quot;not significant&quot; and nothing else should be reported <kbd>.05 to 1</kbd> unless a different alpha criterion less than .05 is explicitly used</li>
                        <li>The entry ** in a table where * = p < .05, ** = p < .01, *** = p < .001 should be reported <kbd>.001 to .01</kbd></li>
                    </ul>"
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.computed_significance_of_test",
                    'label' => "Computed Significance",
                    'detailedTip' => "The exact p value of the test, if not reported but calculable from the inferential statistics. This is an optional code that may depend on your statistical knowledge. If the test is reported as a straightforward z, t, F or &Chi;<sup>2</sup> test <a href='http://graphpad.com/quickcalcs/PValue1.cfm'>this online p value calculator</a> may be used."
                ));

                /* TODO: This help text doesn't match the options. */
                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.hypothesis_supported",
                    'label' => "Was the hypothesis supported?",
                    'options' => array(
                        '' => '',
                        'Yes' => 'Yes',
                        'No' => 'No',
                        'Reverse' => 'Reverse',
                        'Complex' => 'Complex'
                    ),
                    'detailedTip' => "As evaluated by the authors in the Discussion section, does the test provide evidence for their hypotheses that were stated prior to the result? If no relevant hypotheses were stated code <kbd>NH</kbd>; otherwise, code <kbd>Yes</kbd>, <kbd>No</kbd> or <kbd>Complex</kbd> if the authors find only partial support for the hypotheses."
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.certainty_meth_var",
                    'label' => "How certain are you that you correctly identified the test's methodology and variables?",
                    'options' => array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.certainty_statistics",
                    'label' => "How certain are you that you correctly identified the test's statistcs?",
                    'options' => array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                ));

                echo $this->FormField->dropdownbox(array(
                    'field' => "Study.$s.Test.$t.certainty_hypothesis_supported",
                    'label' => "How certain are you that you correctly identified the test's support for hypothesis?",
                    'options' => array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                ));

                echo $this->FormField->textbox(array(
                    'field' => "Study.$s.Test.$t.comment",
                    'label' => "Comments",
                    'tip' => "Examples:<ul><li>coding format did not apply to the effect test</li><li>difficulties or uncertainties during coding</li></ul>"
                ));

                ?>
            </div>