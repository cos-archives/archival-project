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
                "Study Number & Name"
            );

            echo $this->FormField->dropdown(
                "Study.$i.replication",
                "Replication",
                array('Novel', 'Replication of some sort')
            );

            echo $this->FormField->dropdown(
                "Study.$i.replication_code",
                "Type of Replication",
                array(
                    'Direct',
                    'Direct+X',
                    'Conceptual',
                    'Conceptual+X',
                    'E'
                )
            );

            echo $this->FormField->inputGroupStart(
                array(
                    'hidden'=>true
                )
            );

            echo $this->FormField->dropdown(
                "Study.$i.replicates_study_id",
                "Previous Study from the Paper",
                $this->data['referenced_papers']
            );

            echo $this->FormField->text(
                "Study.$i.replication_freetext",
                "... or paste a free-form reference",
                null,
                2
            );

            echo $this->FormField->text(
                "Study.$i.replication_freetext_study",
                "Identify Study",
                null,
                2
            );

            echo $this->FormField->inputGroupEnd();

        ?>
            <?php for($j=0; $j<sizeof($this->data['Study'][$i]['Test']); $j++): ?>
            <div class='test' data-test-id='<?php echo $this->data['Study'][$i]['Test'][$j]['id']; ?>'>
                <?php

                echo $this->FormField->text(
                    "Study.$i.Test.$j.name",
                    "Study Number & Name"
                );

                // Prior Hypothesis

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.hypothesized",
                    "Prior Hypothesis",
                    array(
                        "Yes, directional",
                        "Yes, nondirectional",
                        "No, no hypothesis"
                    )
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.prior_hypothesis",
                    "Paste Hypothesis",
                    null,
                    2
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.prior_hypothesis_page",
                    "Page"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.subsample",
                    "Subsample",
                    "Was this test done on a subsample/group? If so, please note its characteristics.",
                    2
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.analytic_design_code",
                    "Analytic Design Code",
                    array(
                        'C' => 'C: correlational/multivariate analysis without manipulation',
                        'IA' => 'IA: correlational/multivariate internal analysis of manipulation check',
                        'X' => 'X: experimental analysis of manipulation effect',
                        'RM' => 'RM: experimental analysis of repeated-measures effect',
                        'RMX' => 'RMX: combined experimental and repeated-measures effect',
                        'Q' => 'Q: quasi-experimental analysis of manipulation effect',
                        'O' => 'O: Other, describe in comments'
                    )
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
                    )
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
                    "N Excluded"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.N_used_in_analysis",
                    "N Used"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.type_of_statistical_test_used",
                    "Type of Statistical Test",
                    "Examples: ANOVA, SEM, regresssion"
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.reported_effect_size_statistic",
                    'Effect Size Statistic',
                    array(
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
                        'chi.sq' => 'χ²',
                        't' => 't',
                        'z' => 'z',
                        'F' => 'F'
                    )
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.degrees_of_freedom",
                    "Degrees of Freedom"
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.inferential_test_statistic_value",
                    "Value"
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.reported_significance_of_test",
                    "Reported Significance",
                    array(
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
                    )
                );

                echo $this->FormField->text(
                    "Study.$i.Test.$j.computed_significance_of_test",
                    "Computed Significance"
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.hypothesis_supported",
                    "Was the hypothesis supported?",
                    array(
                        'Yes' => 'Yes',
                        'No' => 'No',
                        'Reverse' => 'Reverse',
                        'Complex' => 'Complex'
                    )
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_hypothesis",
                    "How certain are you that you correctly identified the test's hypothesis?",
                    array(
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_meth_var",
                    "How certain are you that you correctly identified the test's methodology and variables?",
                    array(
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_statistics",
                    "How certain are you that you correctly identified the test's statistcs?",
                    array(
                        '1' => 'not at all',
                        '2' => 'somewhat',
                        '3' => 'very'
                    )
                );

                echo $this->FormField->dropdown(
                    "Study.$i.Test.$j.certainty_hypothesis_supported",
                    "How certain are you that you correctly identified the test's support for hypothesis?",
                    array(
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


</script>