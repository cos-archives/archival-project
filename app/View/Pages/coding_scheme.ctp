<?php echo $this->element('dashboard-menu'); ?>
</div>
<div class="row">

    <div class="span3">
        <ul class="nav nav-list osfa-affix-sidenav affix" data-spy="affix">
            <li class="active"><a href="#overview"><i class="icon-chevron-right"></i> Overview</a></li>
            <li><a href="#organization"><i class="icon-chevron-right"></i> Article Organization</a></li>
            <li><a href="#overall_tests"><i class="icon-chevron-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;Kinds of Tests</a></li>
            <li><a href="#model_tests"><i class="icon-chevron-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;Model Tests</a></li>
            <li><a href="#reporting"><i class="icon-chevron-right"></i> Reporting Data</a></li>
            <li><a href="#reporting_studies"><i class="icon-chevron-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;Reporting Study Data</a></li>
            <li><a href="#reporting_tests"><i class="icon-chevron-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;Reporting Test Data</a></li>
        </ul>
    </div>
<div class="span9" style="padding-bottom: 150px">
    <header id="overview">
       <h1>Coding scheme</h1>
    </header>
    <p>
        In phase one of the Archival Project, articles from the 2008 sample of published psychology articles will be coded
        according to the following scheme. In phase two, we will search the literature forward to present day for articles
        published after 2008 that explicitly replicate one or more of each 2008 article’s key effects. This scheme instructs
        coders on how to identify those key effects.
    </p>
    <section id="organization">
        <h3>Identifying article organization</h3>
        <p>Each article reports one or more <strong>studies</strong>. Studies, sometimes called experiments, are a way of
            investigating a particular question. Articles separate different studies by naming or numbering them.
        </p>
        <p>Each of those studies contains one or more key <strong>effect tests</strong>. Effects are the results of
            statistical tests that examine specific relationships among groups of conceptual variables. The study may conduct
            tests in several different ways with manipulations and measures, resulting in multiple tests per study and multiple
            studies per article. Some complex effect tests – like those supporting mediation or interaction hypotheses – will
            involve more than two variables.
        </p>
        <p>One study may contain many effect tests. We assume that the abstract of an article will report the novel and
            critical effects related to each study. Therefore, to find which effects need to be coded, look only at the abstract.
            Each key effect may be reported either as hypotheses (e.g., “We expected that gender would relate to coping style”),
            as findings (e.g., “Women showed more interdependent coping styles than men”), or as both.</p>
        <div id="overall_tests">
            <h4>Overall versus specific effects</h4>
            <p>Sometimes an effect is phrased in terms of an overall effect, which then has sub-effects that can be tested. Examples of this are:</p>
            <blockquote>The abstract says “Men responded with higher stress in the gender role threat condition than the control
                condition, while women did not.” Later on in the Results, you find that the interaction between gender and condition
                is significant, and you enter its stats into the “general test” section. The authors then go on to do simple
                effects tests and show that among men, the effect of condition on stress is significant, while among women,
                the effect of condition on stress is not. Here you would enter two specific tests, one for each simple effects test.
            </blockquote>
            <blockquote>An effect that states that an experimental manipulation should work on people from one culture but not
                from another. Again, this can be tested by looking separately within each culture, or by doing an overall
                2x2 interaction analysis.
            </blockquote>
            <p>In cases such as these, the naming of a test becomes especially important. Code the overall test first,
                and then add the smaller ones afterward. In an experiment where participants perform two tasks, each with their
                own conditions, there may be an overall effect that could be named "Task X Condition ANOVA." There may be smaller
                effects (likely referred to as <strong>main effects</strong>) that could be called "DV vs IV Main Effect."
            </p>
        </div>
        <div id="model_tests">
            <h4>Model testing</h4>
            <p>Some statistical analyses – in particular, structural equation modeling – take an approach called “model
                testing” where the authors propose a complex model involving multiple variables and are interested in how well
                the model fits the data.
            </p>
            <p>When the goal is to test a model, there is no need to list all the relationships among variables separately;
                simply create one effect for each model tested. However, if the authors focus in on specific effects within
                models (for example, they place special importance on a path linking three variables) then these should get
                their own effect.
            </p>
        </div>
    </section>

    <section id="reporting">
        <div id="reporting_studies">
            <h3>Reporting study level data</h3>
            <p>Article level information, such as the DOI, authors, and journal, is extracted automatically, and is not requested
                in the coding form. Coders are only required to identify information from within the article.
            </p>
            <p>Note that you can have multiple tests of one hypothesis or effect, but that each test has its own coding. It is okay
                to repeat statements of variables or hypotheses from test to test if there are multiple tests of the same hypotheses
                or the same variables.
            </p>
            <dl>
                <dt><h4>Study Number and Name</h4></dt>
                    <dd>Report as labeled in the article (such as Study 1, Study 2, Study 3a, Experiment 1, etc.)</dd>
                <dt><h4>Is Study a Replication?</h4></dt>
                    <dd>To be considered a <strong>replication</strong>, at least one independent and at least one
                        dependent variable. If the study is a replication, it may not be mentioned in the abstract, but
                        will be mentioned in the introduction to the paper, to the study, or in the study's discussion
                        section.
                    </dd>
                    <br>
                    <dd>References to replication effects may or may not use the word “replicate” – some alternatives are:<br>
                        <blockquote>
                            As in [previous study], we expected that …<br>
                            Unlike [previous study], we used a general population sample, which may explain why we did not find [X] as they did.
                        </blockquote>
                    </dd>
                    <dd>The variables need not literally be the same as in the previous study but must be presented as representing the
                        same concepts. For example, in a study of the effects of attractiveness on face memory, the concept of “attractiveness”
                        can be represented by ratings of a photo or by how drastically one would alter a face to make it more attractive.
                    </dd>
                    <br>
                    <dd>There is also a common technique called “<strong>replicate and extend</strong>” in which a study
                        incorporates the measures and manipulations corresponding to a previous study. Under this technique, the study is
                        able to replicate the previous study’s hypothesis, but it can also answer novel questions by using additional new
                        measures or manipulations. A replication and extension study should be marked as a replication.
                    </dd>
                    <br>
                    <dd>Examples:
                        <br>
                        <blockquote><strong>[Replication]</strong> The current paper cites a previous paper that initially developed and validated a
                            previously used methodology to measure attitudes, the Implicit Color Test (ICT). If the current
                            paper’s hypothesis is that the ICT would also be valid among a community sample of adults, not
                            just university students, then this is a replication. If the current paper’s hypothesis is that
                            people subjected to a mindfulness exercise would show more favorable ICT scores, then this is a
                            use of the method, not a replication of the validation article.
                        </blockquote>
                        <blockquote><strong>[Replicate and extend]</strong> If a study reports that two of its conditions
                            replicate conditions and measures from a previous study, but there are two additional conditions
                            to answer additional questions and three additional measures, this should be counted as a replication
                            based on the conditions and measures that do replicate previous work.
                        </blockquote>
                    </dd>
                    <dd>
                        Note: it is possible for a study to replicate and extend a previous one, but not report a statistical test of the replication
                        effect corresponding to the original study’s finding. In this case, the test associated with the extension should be
                        entered into the coding scheme but with the statistics left missing.
                    </dd>
                <dt><h4>Type of Replication</h4></dt>
                    <dd>This field only appears in the coding form if the study is marked as a replication.</dd>
                    <br>
                    <dd><strong>Direct:</strong> In a direct replication, the stated goal is, at least in part of the design, to exactly
                    reproduce the hypothesis and methods of the previous study, making only those changes that are necessary
                    to achieve the same psychological meaning among the new participant population. For example:
                        <blockquote>A study of stereotypes in Canada that used ice hockey players as a target group might be
                            directly replicated in Australia by changing the target group to rugby players and pretesting
                            for new stereotypical associations, while keeping everything else the same.
                        </blockquote>
                        <blockquote>A study of psychological resilience in the aftermath of the Hurricane Katrina disaster in
                            the US is directly replicated among those affected by the 2011 tornado outbreak, changing only
                            references to the event.
                        </blockquote>
                    </dd>
                    <dd><strong>Conceptual:</strong> In a conceptual replication the study’s stated goal is, at least in part of the design,
                        to test the hypothesis of the previous study, using the same conceptual variables but changing their
                        operationalization in ways that go beyond merely adapting the materials for a new population or occasion.
                        For example:
                        <blockquote>A study of stereotypes in Canada that saw whether the Authoritarianism Scale predicted
                            stereotypes of hockey players is conceptually replicated in Australia by instead manipulating levels
                            of authoritarianism through a priming procedure and seeing the effects on stereotypes of rugby players.
                        </blockquote>
                        <blockquote>A study of the effect of subject-target gender match on face recognition using forced-choice
                            measures is followed up by a similar one using multiple-response probabilistic measures and more natural
                            stimuli.
                        </blockquote>
                    </dd>
                    <dd><strong>+X:</strong> The letter X goes into the code after "conceptual" or "direct" if the study
                        is also an extension. For example 1:
                        <blockquote>A study of stereotypes in Canada that used ice hockey players as a target group was directly replicated
                        in Australia by changing the target group to rugby players and pretesting for new stereotypical associations,
                        but they also extended the study by including ethnic and sexual outgroups (Aboriginal people, gays)
                        to see if the results would generalize.</blockquote>
                    </dd>
                </dt>
                <dt><h4>Previous Study Name</h4></dt>
                    <dd>This field only appears in the coding form if the study is marked as a replication.</dd>
                    <br>
                    <dd>Use the dropdown menu or paste a citation to identify which study, from within the article or  not,
                        the present study is replicating. The dropdown menu will show the names of studies you have coded within
                        this article. That means, that if this is the first study in the article, you should not be using
                        the dropdown menu.
                    </dd>
            </dl>
        </div>
        <div id="reporting_tests">
            <h3>Reporting test level data</h3>
            <p>As previously discussed, tests should be coded if they directly relate to a statement about the study’s
                hypotheses or results made in the Abstract; or if they are a replication of an effect from a previous study.
                Studies in psychology often include multiple hypothesis tests in their Results section. By requiring that
                tests of non-replication effects be mentioned in the Abstract in order to be coded, we reduce the often
                numerous hypotheses and statistical tests in a study, keeping only the ones vital to the main points being made.
            </p>
            <p>Each effect within each study may be tested one or more times, depending on how many ways the study has to
                operationalize the independent and dependent variables of a hypothesis. These tests will lead to p-values.
                For example:
                <blockquote>A study manipulates belief in free will, then measures belief in free will after the manipulation.
                    It tests the hypothesis that low belief in free will relates to less moral orientation by relating the manipulation
                    IV to two different DVs: a self-report measure of moral identity, and a behavioural measure of cheating. Both DVS
                    are tested to see if they vary as a function of the manipulation, and tested correlationally to see if they relate
                    to the measures variable of belief in free will. There are therefore four tests of the hypothesis here, each with
                    their own p-values.
                </blockquote>
            </p>
            <dl>
                <dt><h4>Test Number and Name</h4></dt>
                    <dd>Articles do not explicitly name tests, but to compare your responses to other coders' you should
                        intelligently name your tests. A good scheme would be to name a test after the effect it examines. For example:
                        <blockquote>
                            The DV, frequency of cheating, is tested to see if it varies as a function of the IV, the free will
                            manipulation. You could name this test "Cheating vs Free Will." If frequency of cheating was
                            tested for a second time using a different statistical test but the same data set was used, you could
                            name this test "Cheating vs Free Will 2." If a subsample of data was used, women's data only, for instance,
                            you might name this test "Cheating vs Free Will 3" or "Female Cheating vs Free Will."
                        </blockquote>
                    </dd>
                <dt><h4>Hypothesis</h4></dt>
                    <dd>Do the authors state a specific hypothesis about this test? In other words, do the authors specifically
                        indicate that they expect some relation between the exact variables tested here? Keep in mind, if
                        the test is not related to an effect mentioned in the abstract of the paper, it should not be coded.
                    </dd>
                    <br>
                    <dd><strong>Yes, directional:</strong> The test deals with a directional hypothesis that is stated in the
                        Introduction – a hypothesis that not only states that two or more variables will be related to each other,
                        but the direction of that relationship. In a simple test, this will be a description of a positive or
                        negative relationship between two variables, or a description of which groups should have the higher means.
                        In a more complex test, a directional hypothesis attempts to use similar language to describe an interaction or model.
                    </dd>
                    <br>
                    <dd><strong>Yes, nondirectional:</strong> The test deals with a nondirectional hypothesis that is stated
                        in the Introduction – a hypothesis that only states that two or more variables should be related, but
                        does not specify the expected direction anywhere in the Introduction. This code also applies to an Introduction
                        that proposes multiple alternative hypotheses relevant to different possibilities for the same test, but only
                        if the authors do not commit themselves to supporting one of those hypotheses over the other.
                    </dd>
                    <br>
                    <dd><strong>No, no hypothesis:</strong> This code applies to effects mentioned in the Abstract but not
                        relevant to the hypotheses in the Introduction or introduction to the study.
                    </dd>
                    <br>
                    <dd>For the second "hypothesis" field, copy and paste the article text where the researchers indicated their
                         hypotheses. Two examples of hypotheses stated within a study:</dd>
                    <dd>
                    <img src="/app/webroot/img/exp1_intro.png"><img src="/app/webroot/img/exp1_intro2.png" style="padding-bottom: 30px"></dd>
                <dt><h4>Subsample</h4></dt>
                    <dd><strong>Subsample: </strong>If the test is on a subsample or the overall sample of participants in
                        this study, type which subgroup this effects test is for. For example, if one of the phrases in the
                        Abstract is a summary of the results separately for men and women, create two effects tests, and type
                        that one effects test is “women” on this line, and for the other effects test type “men.”
                    </dd>
                <dt><h4>Analytic Design Code</h4></dt>
                    <dd><strong>Correlational/multivariate analysis without manipulation: </strong>The test uses a number
                        of variables that were measured at the same or different time – including continuous or categorical
                        variables - but none of the test’s variables relate to the outcome of a controlled experimental manipulation.
                    <dd>
                    <br>
                    <dd><strong>Correlational/multivariate internal analysis of manipulation check: </strong> The test
                        takes place within an experimental manipulation, but does not use a variable derived from the manipulation
                        itself as an independent variable. Instead, it substitutes a measured variable which was a “check”
                        on the manipulation’s effects. For example:
                        <blockquote>If I run an experiment in which participants listen to either an expert or inexpert
                            communication, and measure persuasion afterwards, one possible internal analysis would test the
                            correlation between persuasion and participants’ ratings of the communicator’s expertise. Those
                            ratings are measuring the same thing as the experiment tried to manipulate, but do not themselves
                            represent which condition that participant was assigned to.
                        </blockquote>
                    </dd>
                    <dd><strong>Experimental analysis of manipulation effect: </strong>One or more of the test’s independent
                        variables represents which condition a participant was randomly assigned to. Note that many write-ups of research
                        do not explicitly mention random assignment because it is assumed to have taken place if a
                        study is reported as an “experiment.”
                    </dd>
                    <br>
                    <dd><strong>Experimental analysis of repeated-measures effect: </strong> One or more of the test’s
                        <em>independent</em> variables is an analysis of differences between different measures given to the
                        same participant. This may be expressed by such phrases as “repeated measures” or “within-participants factor”.
                    </dd>
                    <br>
                    <dd><strong>Combined experimental and repeated-measures effect: </strong>The test has multiple
                        independent variables, at least one of which would be coded “X” and at least one of which would be coded “RM”
                        In other words, it is a mixed design with both between- and within-participant factors).
                    </dd>
                    <br>
                    <dd><strong>Quasi- experimental analysis of manipulation effect: </strong>One or more of the test’s
                        independent variables represents different “treatments” given to participants in situations under the
                        researcher’s control, but without being able to assign participants randomly.
                    </dd>
                    <br>
                    <dd><strong>Other: </strong>A design is used that does not fit any of these categories. Use the comment
                        field at the bottom of the page to briefly describe the design, using whatever term or label for the design the authors use.
                    </dd>
                <dt><h4>Methodology Codes</h4></dt>
                    <dd>Select all of the methodologies used in conducting the experiment that this test examines.</dd>
                    <br>
                    <dd><strong>Archival measures: </strong>The analysis includes at least one variable derived from data
                        that are found by the researchers rather than specially collected from participants, such as average
                        school grades of students in different states, text analysis of singles’ ads on the internet.
                    </dd>
                    <br>
                    <dd><strong>Brain imaging measures: </strong>The analysis involves at least one variable derived from
                        fMRI or other spatial brain imaging techniques. (Do not include EEG or other non-spatial brain measurement techniques).
                    </dd>
                    <br>
                    <dd><strong>Judgment of the participant: </strong>The analysis involves at least one variable that is the judgment
                        of participants by other people for a trait that is more general than the participant’s specific behavior or responses.
                        For example: attractiveness ratings from a photo, or personality ratings on the basis of a 5 minute interaction.
                    </dd>
                    <br>
                    <dd><strong>Non-imaging physiological measures: </strong>The analysis involves at least one variable derived
                        from physiological measures other than brain imaging; that is, measures taken directly from the human
                        body or its products. Do not include self-reported physiological phenomena such as time of menstrual
                        cycle, hunger, etc. For example: heart rate, skin conductance, event-related potentials in electrencephalography (EEG),
                        electromyography (EMG), direct analysis of DNA, grip strength, measuring chemicals in blood or saliva, etc.
                    </dd>
                    <br>
                    <dd><strong>Self-report measures: </strong>The analysis involves at least one variable assessing the
                        participant’s thoughts, feelings, intentions or behavior using controlled self-report through written,
                        verbal, numeric, or visual analogue measures. This includes variables that are presented as a test of
                        ability with a correct answer (for example, memory or reasoning tests) and choices that the participants
                        believe to have no consequences outside the experimental context (for example, choosing how to
                        allocate money in an explicitly hypothetical task).
                    </dd>
                    <br>
                    <dd><strong>Indirect verbal or response-time measures: </strong>The analysis involves at least one
                        variable assessing the participant’s thoughts, feelings, or intentions with an indirect measure. This variable
                        does not directly measure the participant’s body or brain but is based on analysis of verbal
                        or response-time output, and is intended to bypass controlled, conscious responding.
                    </dd>
                    <br>
                    <dd><strong>Other: </strong>A methodology is used that does not fit any of these categories. The coder
                        should briefly describe the methodology, using whatever short term or label for the methodology the authors use.
                    </dd>
                <dt><h4>Independent Variables</h4></dt>
                    <dd>Independent variables are those variables that the experimenter has control over.
                    </dd>
                <dt><h4>Dependent Variables</h4></dt>
                    <dd>Dependent variables are those variables that the researcher has no control over, and is looking for a change in.
                    </dd>
                <dt><h4>Data and Exclusions</h4></dt>
                    <dd>Authors sometimes exclude data points, generally for being outliers. In these fields, log the number
                        of exclusions and the authors' reasons for why the data was left out. Copying and pasting is encouraged.
                        Note that exclusion of data is different from a subsample, which generally looks at a specific part of the
                        data pool in order to see if the effect changes with some mediator like gender or age.
                    </dd>
                    <dd>The total reported here should be N prior to the exclusions (if any). Used will be the actual N, and will
                        be calculated automatically.
                    </dd>
                <dt><h4>Type of Statistical Test</h4></dt>
                    <dd>The authors will either state the test they ran, or you can refer to the results reported to determine
                        the statistical test used. Some examples are: ANCOVA; structural equation model; mediation analysis with bootstrapping.
                    </dd>
                <dt><h4>Effect Size</h4></dt>
                    <dd>In the results section, the authors will provide an effect size. Log the effect size statistic and
                        its value. If none is reported, leave the field blank and report this in the comments section.
                    </dd>
                    <br>
                    <dd>Effect size tells you how strong the effect is, in terms of the ratio between “signal”
                        (for example, difference between means for men and woman) to “noise” (for example, variability in scores.)
                        For many tests, finding the effect size is easy:</dd>
                    <dd><ul>
                        <li>Correlation and regression coefficients (r, R<sup>2</sup>,beta and B) are themselves actually effect size statistics.
                        Although technically you cannot have a negative effect size, you should leave any minus signs on r,
                        beta and B you report here, to keep clear which direction they go in.</li>
                        <li>T-tests usually report the associated effect size d.</li>
                        <li>ANOVA and related procedures have a number of possible effect sizes that can be reported; d,
                        f<sup>2</sup> , h<sup>2</sup>(eta squared), partial h<sup>2</sup>,w<sup> 2 </sup> (omega squared).
                        If an ANOVA’s mean squared error is reported without any effect size stat, report this in the comments section.
                        Mean square error is not an effect size stat, but will allow it to be computed with the rest of
                        the information about the ANOVA.</li>
                        <li>For chi square tests, there is no clearly accepted effect size statistic. However, phi
                        coefficient or Cramer’s V are sometimes reported.</li>
                        <li>Effect size in SEM is complicated; if hypotheses depend on specific parameters (paths),
                        use the standardized coefficient for that particular path.</li>
                        </ul>
                    </dd>
                <dt><h4>Test Statistics and Degrees of Freedom</h4></dt>
                    <dd>Report here the type of test statistic, its value and degrees of freedom.</dd>
                    <br>
                    <dd>If the test statistic and its value are reported then followed by more specific comparisons or
                        contrasts, report here only the statistic for the overall test. For example, “F = 3.92,” “t = -1.35.”
                    </dd>
                    <br>
                    <dd>Do not report values of r, B or beta from correlations or regressions here because they are better
                        seen as effect size statistics, not inferential test statistics. Often, significance tests of r, B
                        and beta are reported without an inferential test statistic, which usually should be t. If this is
                        the case, or in other cases where inferential statistics are missing, enter this into the comments field.
                    </dd>
                    <br>
                    <dd>For degrees of freedom, if there are multiple reported, separate them by commas. Provide the N second
                        if it is a chi-square test. Enter "none-reported" if this information is missing.
                    </dd>
                <dt><h4>Significance</h4></dt>
                    <dd>Significance tells you the probability of confirming a hypothesis via random sampling when the null
                    hypothesis is actually true (i.e. the probability of type I error).</dd>
                    <br>
                    <dd>Report here the significance reported in the article.  If the exact p value is not reported,
                    state the possible range of p values:
                        <ul>
                        <li><strong>NS: </strong>not significant</li>
                        <li><strong>p<.10: </strong>any reported value that is less than 0.10 but greater than 0.05</li>
                        <li><strong>marginal: </strong>select this option when the authors say that the effect size was of "marginal" significance, but provide no exact value</li>
                        <li><strong>significant: </strong>select this option when the authors say that the effect size was significant, but provide no exact value</li>
                        <li><strong>p<.05: </strong>any reported value that is less than 0.05 but greater than 0.01</li>
                        <li><strong>p<.01: </strong>any reported value that is less than 0.05 but greater than 0.001</li>
                        <li><strong>p<.001: </strong>any reported value that is less than 0.001</li>
                        </ul>
                    </dd>
                    <dd>If the exact p value is reported, or you can calculate it on your own, report this in the "Computed significance"
                        field.
                    </dd>
                <dt><h4>Hypothesis Support</h4></dt>
                    <dd> As evaluated by the authors in the Discussion section, does the test provide evidence for their
                        hypotheses that were stated prior to the result? Code “Yes”, “No” or “Complex” if the authors find
                        only partial support for the hypotheses.
                    </dd>
                <dt><h4></h4></dt>

        </div>
    </section>
</div>








