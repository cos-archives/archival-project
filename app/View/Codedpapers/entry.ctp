<style>
    #static-sidebar {
        height:300px;
        background-color:red;
    }
    #coding-form .study {
        padding:20px 0;
        background-color: #eee;
        border-left:5px solid #f89406;
    }
    #coding-form .test {
        border-top: 1px solid #bbb;
        padding:20px 0;
    }
    #coding-form .control-group {
        padding-left:10px;
        padding-right:10px;
    }
    .hide {
        display: none;
    }
    kbd {
        padding: 2px 4px;
        color: #f89406;
        white-space: nowrap;
        background-color: #f7f7f9;
        border: 1px solid #e1e1e8;
        border-radius:3px;
        font-size:12px;
    }


</style>
<div class='span4' id='static-sidebar'>
    Sidebar placeholder
</div>
<div class='span8' id='coding-form'>
    <?php
        echo $this->Form->create(
            'Codedpaper',
            array('class' => 'form-horizontal')
        );
    ?>
    <?php
        echo $this->Form->hidden("Paper.id");
        echo $this->Form->hidden("Paper.DOI");
        echo $this->Form->hidden("Codedpaper.id");
        echo $this->Form->hidden("Codedpaper.paper_id");
    ?>
    <?php for($i=0; $i<sizeof($this->data['Study']); $i++): ?>

        <div class='study' data-study-id='<?php echo $this->data['Study'][$i]['id']; ?>'>

        <?php
            echo $this->FormField->text(
                "Study.$i.name",
                "Study Number & Name",
                "<p>Study number, as written in the article (such as Study 1, Study 2, Study 3a, Study 3b, etc.) If there is only one study put <kbd>1</kbd>.</p>
                <p>If others have coded this study before you, follow the naming and numbering scheme that was used.</p>"
            );

            echo $this->FormField->dropdown(
                "Study.$i.replication",
                "Replication",
                array(
                    '' => '',
                    'Novel' => 'Novel',
                    'Replication' => 'Replication of some sort'
                ),
                'A study is considered to be a replication if the previous paper is cited and explicitly named as a source of methodology for at least one independent and at least one dependent variable. The word "replicate" need not be used.',
                'is-replication'
            );

            echo $this->FormField->inputGroupStart(
                array(
                    'hidden' => true,
                    'class' => 'replication-fields'
                )
            );

            echo $this->FormField->dropdown(
                "Study.$i.replication_code",
                "Type of Replication",
                array(
                    'Direct' => 'Direct',
                    'Direct+X' => 'Direct+X',
                    'Conceptual' => 'Conceptual',
                    'Conceptual+X' => 'Conceptual+X',
                    'E' => 'E'
                ),
                "<dl>
                    <dt>Direct</dt>
                    <dd>The stated goal is, at least in part of the design, to exactly reproduce the hypothesis and methods of the previous study, making only those changes that are necessary to achieve the same psychological meaning among the new participant population.</dd>
                    <dt>Conceptual</dt>
                    <dd>The study’s stated goal is, at least in part of the design, to test the hypothesis of the previous study, using the same conceptual variables but changing their operationalization in ways that go beyond merely adapting the materials for a new population or occasion.</dd>
                    <dt>+X</dt>
                    <dd>The study also contains elements of extension that go beyond the type of replication recorded</dd>
                </dl>"
            );

            echo $this->FormField->dropdown(
                "Study.$i.replicates_study_id",
                "Previous Study from the Paper",
                $this->data['referenced_papers'],
                "<p>The article that the authors referenced as the source for the replication effect.</p><p>If more than one article is cited, give the one from which the methods were most directly taken; if this cannot be determined, give the earliest one chronologically. If the study replicates a previous study in the same article, code as \"This article\".</p>"
            );

            echo $this->FormField->text(
                "Study.$i.replication_freetext",
                "... or paste a free-form reference",
                "If the article is not listed above, paste the citation here.",
                2
            );

            echo $this->FormField->text(
                "Study.$i.replication_freetext_study",
                "Identify Study",
                "If it is a multi-study article, give the number of the study with methodology closest to the present study’s, or give 1 if there is only one study. This may also include a previous study in the same article",
                1
            );

            echo $this->FormField->inputGroupEnd();

        ?>
            <?php for($j=0; $j<sizeof($this->data['Study'][$i]['Test']); $j++): ?>
            <div class='test' data-test-id='<?php echo $this->data['Study'][$i]['Test'][$j]['id']; ?>'>
                <?php

                echo $this->FormField->text(
                    "Study.$i.Test.$j.name",
                    "Test Number & Name",
                    "If others have coded this test before you, follow the naming and numbering scheme that was used."
                );

                // Prior Hypothesis

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.hypothesized",
                    "Prior Hypothesis",
                    array(
                        '' => '',
                        "Yes, directional" => "Yes, directional",
                        "Yes, nondirectional" => "Yes, nondirectional",
                        "No, no hypothesis" => "No, no hypothesis"
                    ),
                    "<dl>
                        <dt>Yes, directional</dt>
                        <dd>The test deals with a directional hypothesis that is stated in the Introduction – a hypothesis that not only states that two or more variables will be related to each other, but the direction of that relationship. In a simple test, this will be a description of a positive or negative relationship between two variables, or a description of which groups should have the higher means. In a more complex test, a directional hypothesis attempts to use similar language to describe an interaction or model.</dd>
                        <dt>Yes, nondirectional</dt>
                        <dd>The test deals with a nondirectional hypothesis that is stated in the Introduction – a hypothesis that only states that two or more variables should be related, but does not specify the expected direction anywhere in the Introduction. This code also applies to an Introduction that proposes multiple alternative hypotheses relevant to different possibilities for the same test, but only if the authors do not commit themselves to supporting one of those hypotheses over the other.</dd>
                        <dt>No</dt>
                        <dd>This code applies to effect mentioned in the Abstract but not relevant to the hypotheses in the Introduction, or to replication effects which were not included in the Introduction’s hypotheses.</dd>
                    </dl>"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.prior_hypothesis",
                    "Prior Hypothesis",
                    "Paste the test's prior hypothesis.",
                    2
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.prior_hypothesis_page",
                    "Prior Hypothesis Page",
                    "The page number where the hypothesis was found."
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_hypothesis",
                    "How certain are you that you correctly identified the test's hypothesis?",
                    array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.subsample",
                    "Subsample",
                    "Was this test done on a subsample/-group? If so, please note its characteristics.",
                    2
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.analytic_design_code",
                    "Analytic Design Code",
                    array(
                        '' => '',
                        'C' => 'C: correlational/multivariate analysis without manipulation',
                        'IA' => 'IA: correlational/multivariate internal analysis of manipulation check',
                        'X' => 'X: experimental analysis of manipulation effect',
                        'RM' => 'RM: experimental analysis of repeated-measures effect',
                        'RMX' => 'RMX: combined experimental and repeated-measures effect',
                        'Q' => 'Q: quasi-experimental analysis of manipulation effect',
                        'O' => 'O: Other, describe in comments'
                    ),
                    "<dl>
                        <dt>C: correlational/multivariate analysis without manipulation</dt>
                        <dd>The test uses a number of variables that were measured at the same or different time – including continuous or categorical variables - but none of the test’s variables relate to the outcome of a controlled experimental manipulation.</dd>
                        <dt>IA: correlational/multivariate internal analysis of manipulation check</dt>
                        <dd>The test takes place within an experimental manipulation, but does not use a variable derived from the manipulation itself as an independent variable. Instead, it substitutes a measured variable which was a “check” on the manipulation’s effects. Example: If I run an experiment in which participants listen to either an expert or inexpert communication, and measure persuasion afterwards, one possible internal analysis would test the correlation between persuasion and participants’ ratings of the communicator’s expertise. Those ratings are measuring the same thing as the experiment tried to manipulate, but do not themselves represent which condition that participant was assigned to.</dd>
                        <dt>X: experimental analysis of manipulation effect</dt>
                        <dd>One or more of the test’s independent variables represents which condition a participant was randomly assigned to. (Many write-ups of research these days do not explicitly mention random assignment because it is assumed to have taken place if a study is reported as an “experiment.”)</dd>
                        <dt>RM: experimental analysis of repeated-measures effect</dt>
                        <dd>One or more of the test’s independent variables is an analysis of differences between different measures given to the same participant. This may be expressed by such phrases as “repeated measures” or “within-participants factor”.</dd>
                        <dt>RMX: combined experimental and repeated-measures effect</dt>
                        <dd>The test has multiple independent variables, at least one of which would be coded “X” and at least one of which would be coded “RM” (that is, a mixed design with both between- and with-participant factors).</dd>
                        <dt>Q: quasi-experimental analysis of manipulation effect</dt>
                        <dd>One or more of the test’s independent variables represents different “treatments” given to participants in situations under the researcher’s control, but without being able to assign participants randomly.</dd>
                        <dt>O: Other</dt>
                        <dd>A design is used that does not fit any of these categories. The coder should briefly describe the design, using whatever short term or label for the design the authors use.</dd>
                    </dl>"
                );

                echo $this->FormField->checkboxes(
                    "Study.$i.Test.$j.methodology_codes",
                    "Methodology Codes",
                    array(
                        'A' => 'archival measures',
                        'BI' => 'brain imaging measures' ,
                        'J' => 'judgment of the participant' ,
                        'P' => 'non-imaging physiological measures',
                        'SR' => 'self-report measures',
                        'I' => 'indirect verbal or response-time measures',
                        'BC' => 'behavioral/choice measures'
                    ),
                    "<dl>
                        <dt>archival measures</dt>
                        <dd>The analysis includes at least one variable derived from data that are found by the researchers rather than specially collected from participants, such as average school grades of students in different states, text analysis of singles’ ads on the internet.</dd>
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
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.independent_variables",
                    "Independent Variables",
                    "One per line",
                    4
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.dependent_variables",
                    "Dependent Variables",
                    "One per line",
                    4
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.other_variables",
                    "Other Variables",
                    "One per line",
                    4
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.N_total",
                    "N Total"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.data_points_excluded",
                    "N Excluded",
                    "This should not include data that were genuinely missing (procedural errors, failure to answer, drop-outs from multiple waves of a study), but should include data that the researchers had, but chose to exclude."
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.reasons for exclusion",
                    "Reasons for Exclusion",
                    "separated by commas if multiple reasons given (using the author’s words as much as possible)"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.N_used_in_analysis",
                    "Number of Cases Used in Analysis",
                    "after exclusion (using the authors’ stated units of analysis; usually participants, but maybe other factors if hierarchical analysis is used)"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.type_of_statistical_test_used",
                    "Type of Statistical Test",
                    "Type of statistical test used, in the authors’ words (examples: ANCOVA; structural equation model; mediation analysis with bootstrapping)"
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.reported_effect_size_statistic",
                    'Effect Size Statistic',
                    array(
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
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.reported_effect_size_statistic_value",
                    "Reported effect size"
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.inferential_test_statistic",
                    "Test stat.",
                    array(
                        '' => '',
                        'chi.sq' => 'χ²',
                        't' => 't',
                        'z' => 'z',
                        'F' => 'F'
                    ),
                    "<p>
                        Inferential test statistic (the F-value, t-value, or chi-square associated with the test.) For example: “F = 3.92,” “t = -1.35.” If this is followed by more specific comparisons or contrasts, report here only the statistic for the overall test.
                    </p>
                    <p>
                        Do not report values of <em>r</em>, <em>B</em> or &beta; from correlations or regressions here because they are better seen as effect size statistics, not inferential test statistics. Often, significance tests of r, B and &beta; are reported without an inferential test statistic, which usually should be <em>t</em>.
                    </p>"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.degrees_of_freedom",
                    "Degrees of Freedom",
                    "<p>For multiple inferential statistics, separate values with a comma, giving the N second if a &Chi;<sup>2</sup>.</p><p>Enter \"None reported\" if these are missing.</p>"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.inferential_test_statistic_value",
                    "Value",
                    "If inferential statistics are missing, enter \"None reported.\""
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.reported_significance_of_test",
                    "Significance (Reported)",
                    array(
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
                    "<p>If the exact p value is not reported, state the possible range of p values from lowest to highest, p1 to p2, with <kbd>~0</kbd> as the lowest possible result. If the value is not a p value (for example, prep) this fact should also be entered (so, <kbd>p-rep .98</kbd>). <kbd>None reported</kbd> if this is missing.</p>
                    <p>Examples:</p>
                    <ul>
                        <li>a value reported only as p < .001 should be reported <kbd>~0 to .001</kbd></li>
                        <li>&quot;not significant&quot; and nothing else should be reported <kbd>.05 to 1</kbd> unless a different alpha criterion less than .05 is explicitly used</li>
                        <li>The entry ** in a table where * = p < .05, ** = p < .01, *** = p < .001 should be reported <kbd>.001 to .01</kbd></li>
                    </ul>"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.computed_significance_of_test",
                    "Computed Significance",
                    "The exact p value of the test, if not reported but calculable from the inferential statistics. This is an optional code that may depend on your statistical knowledge. If the test is reported as a straightforward z, t, F or &Chi;<sup>2</sup> test <a href='http://graphpad.com/quickcalcs/PValue1.cfm'>this online p value calculator</a> may be used."
                );

                /* TODO: This help text doesn't match the options. */
                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.hypothesis_supported",
                    "Was the hypothesis supported?",
                    array(
                        '' => '',
                        'Yes' => 'Yes',
                        'No' => 'No',
                        'Reverse' => 'Reverse',
                        'Complex' => 'Complex'
                    ),
                    "As evaluated by the authors in the Discussion section, does the test provide evidence for their hypotheses that were stated prior to the result? If no relevant hypotheses were stated code <kbd>NH</kbd>; otherwise, code <kbd>Yes</kbd>, <kbd>No</kbd> or <kbd>Complex</kbd> if the authors find only partial support for the hypotheses."
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_meth_var",
                    "How certain are you that you correctly identified the test's methodology and variables?",
                    array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_statistics",
                    "How certain are you that you correctly identified the test's statistcs?",
                    array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_hypothesis_supported",
                    "How certain are you that you correctly identified the test's support for hypothesis?",
                    array(
                        '' => '',
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.comment",
                    "Comments",
                    "Examples:<ul><li>coding format did not apply to the effect test</li><li>difficulties or uncertainties during coding</li></ul>"
                );

                ?>
            </div><!-- .test -->
            <?php endfor; ?>
        </div> <!-- .study -->

    <?php endfor; ?>

    <?php echo $this->Form->end(); ?>
</div><!-- #coding-form -->
<script>
    var studies = <?php
        $studies = array();
        foreach($this->data['Study'] as $s){
            $tests = array();
            foreach($s['Test'] as $t){
                $tests[] = array(
                    'name' => $t['name'],
                    'id' => $t['id'],
                    #'effect_id' => $t['effect_id'],
                    'hypothesized' => $t['hypothesized'],
                    'prior_hypothesis' => $t['prior_hypothesis'],
                    'prior_hypothesis_page' => $t['prior_hypothesis_page'],
                    'subsample' => $t['subsample'],
                    #'analytic_design_cod' => $t['analytic_design_cod'],
                    'methodology_codes' => $t['methodology_codes'],
                    'independent_variables' => $t['independent_variables'],
                    'dependent_variables' => $t['dependent_variables'],
                    'other_variables' => $t['other_variables'],
                    'N_total' => $t['N_total'],
                    'data_points_excluded' => $t['data_points_excluded'],
                    'N_used_in_analysis' => $t['N_used_in_analysis'],
                    'reasons_for_exclusions' => $t['reasons_for_exclusions'],
                    'type_of_statistical_test_used' => $t['type_of_statistical_test_used'],
                    'reported_effect_size_statistic' => $t['reported_effect_size_statistic'],
                    'reported_effect_size_statistic_value' => $t['reported_effect_size_statistic_value'],
                    'inferential_test_statistic' => $t['inferential_test_statistic'],
                    'degrees_of_freedom' => $t['degrees_of_freedom'],
                    'inferential_test_statistic_value' => $t['inferential_test_statistic_value'],
                    'reported_significance_of_test' => $t['reported_significance_of_test'],
                    'computed_significance_of_test' => $t['computed_significance_of_test'],
                    'hypothesis_supported' => $t['hypothesis_supported'],
                    'certainty_hypothesis' => $t['certainty_hypothesis'],
                    'certainty_meth_var' => $t['certainty_meth_var'],
                    'certainty_statistics' => $t['certainty_statistics'],
                    'certainty_hypothesis_supported' => $t['certainty_hypothesis_supported'],
                    'comment' => $t['comment']
                );
            }
            $studies[] = array(
                'id' => $s['id'],
                'name' => $s['name'],
                'codedpaper_id' => $s['codedpaper_id'],
                'replication' => $s['replication'],
                'replication_code' => $s['replication_code'],
                'replicates_study_id' => $s['replicates_study_id'],
                'replication_freetext' => $s['replication_freetext'],
                'replication_freetext_study' => $s['replication_freetext_study'],
                'certainty_key_effect_tests' => $s['certainty_key_effect_tests'],
                'certainty_replication_status' => $s['certainty_replication_status'],
                'study_comment' => $s['study_comment'],
                'tests' => $tests
            );
        }
        echo json_encode($studies); ?>

    var paper = <?php
        $p = $this->data['Paper'];
        echo json_encode(array(
            'id' => $p['id'],
            'DOI' => $p['DOI']
        )); ?>


$(function() {

    $('.is-replication').on('change', function(e) {
        t = $(e.target).closest('.study').find('.replication-fields')
        $(e.target).val() == 'Replication' ? t.slideDown() : t.slideUp();
    }).trigger('change');
});

</script>