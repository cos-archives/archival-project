<?php echo $this->element('dashboard-menu'); ?>
</div>
<div class="row">

    <div class="span3">
        <ul class="nav nav-list osfa-affix-sidenav affix" data-spy="affix">
            <li class="active"><a href="#overview"><i class="icon-chevron-right"></i> Overview</a></li>
            <li><a href="#organization"><i class="icon-chevron-right"></i> Organization</a></li>
            <li><a href="#articles"><i class="icon-chevron-right"></i> &nbsp;&nbsp;Articles</a></li>
            <li><a href="#studies"><i class="icon-chevron-right"></i> &nbsp;&nbsp;Studies</a></li>
            <li><a href="#effects"><i class="icon-chevron-right"></i> &nbsp;&nbsp;Effect tests</a></li>
        </ul>
    </div>
<div class="span9">
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
            <blockquote>An experiment with five conditions, where the overall ANOVA for the experiment shows that there are
                differences among conditions, but the key test is a comparison pitting one condition against two control
                conditions.
            </blockquote>
            <blockquote>An effect that states that men should show a stronger correlation between two variables than women
                do. This is sometimes tested by looking at the size and significance of each correlation separately.
                However, it is better to directly test the difference in size of the two correlations overall, or to carry
                out an equivalent analysis by testing the overall interaction effect between the continuous IV and gender
                upon the DV.
            </blockquote>
            <blockquote>An effect that states that an experimental manipulation should work on people from one culture but not
                from another. Again, this can be tested by looking separately within each culture, or by doing an overall
                2x2 interaction analysis.
            </blockquote>
            <p>In cases such as these, the naming of a test becomes especially important. Code the overall test first,
                and then add the smaller ones afterward. In an experiment where participants perform two tasks, each with their
                own conditions, there may be an overall effect that could be named "Task X Condition ANOVA." There may be smaller
                effects (likely referred to as <strong>main effects</strong>) that could be called "Task Main Effect."
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

    <section id="extracting">
        <h3>Reporting study level data</h3>
        <p>Article level information, such as the DOI, authors, and journal, is extracted automatically, and is not requested
            in the coding form. Coders are only required to identify information from within the article.
        </p>
        <p>Note that you can have multiple tests of one hypothesis or effect, but that each test has its own coding. It is okay
            to repeat statements of variables or hypotheses from test to test if there are multiple tests of the same hypotheses
            or the same variables.
        </p>
        <div id="extracting_studies">
            <dl>
                <dt><h4>Study Number and Name</h4></dt>
                    <dd>Report as labeled in the article (such as Study 1, Study 2, Study 3a, Experiment 1, etc.)</dd>
                <dt><h4>Is Study a Replication?</h4></dt>
                    <dd>To be considered a replication, at least
                    one independent and at least one dependent variable. If the study is a replication, it may not be mentioned
                        in the abstract, but will be mentioned in the introduction to the paper, to the study, or in the study's discussion
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
                    <dd>There is also a common technique called “replicate and extend” in which a study
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
                    <dd>This field only appears in the coding form if the study is marked as a replication</dd>
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
                    <dd>This field only appears in the coding form if the study is marked as a replication</dd>
                    <br>
                    <dd>Use the dropdown menu or paste a citation to identify which study, from within the article or  not,
                    the present study is replicating.</dd>
                <li>Article replicated: Give the DOI number for the article that the authors referenced as the source for the replication effect. If more than one article is cited, give the one from which the methods were most directly taken; if this cannot be determined, give the earliest one chronologically. If the study replicates a previous study in the same article, code as “This article”.</li>
                <li>Study replicated: From the article cited previously, if it is a multi-study article, give the number of the study with methodology closest to the present study’s, or give 1 if there is only one study. This may also include a previous study in the same article</li>
                <li>Author overlap?: Code this as Same if the present study replicates a previous paper in the article; Yes if the present study’s article has at least one author in common with the article being replicated; No if the two articles have no authors in common.</li>
            </ol>
        </div>
    </section>
<section id="effects">
<h4>Dividing studies into effect tests: </h4>

<p>As previously discussed, tests should be coded if they directly relate to a statement about the study’s hypotheses or results made in the Abstract; or if they are a replication of an effect from a previous study. </p>

<p>Studies in psychology often include multiple hypothesis tests in their Results section. By requiring that tests of non-replication effects be mentioned in the Abstract in order to be coded, we reduce the often numerous hypotheses and statistical tests in a study, keeping only the ones vital to the main points being made.</p>

<p>Each effect within each study may be tested one or more times, depending on how many ways the study has to operationalize the independent and dependent variables of a hypothesis. </p>

<p><i>Example: A study manipulates belief in free will, then measures belief in free will after the manipulation. It tests the hypothesis that <b>low belief in free will relates to less moral orientation</b> by relating the manipulation IV to two different DVs: a self-report measure of moral identity, and a behavioural measure of cheating. Both DVS are tested to see if they vary as a function of the manipulation, and tested correlationally to see if they relate to the measures variable of belief in free will. There are therefore four tests of the hypothesis here.</i></p>

<p>Tests should be stated as a relationship between or among specific variables that are measured or manipulated in the study. Each test should have a statistical test associated with it that leads to a p-value. Statistically, a test can include both a general p-value (for an overall ANOVA, interaction, regression or structural equation model, etc.) and a more specific series of values (for contrasts and comparisons within an ANOVA, simple effects within an interaction, effects of specific variables within a regression, etc.) The coding scheme allows you to enter statistics associated with one general p-value and one or more specific p-values for each test.</p>

<p>Disagreement among coders on the number of tests reported or what the tests involve will of course create discrepancies in coding reports. Therefore, it is important to see if the basic number and meaning of tests is the same, before proceeding to compare codings. The first coder should name and number each test (tests and studies will be ordered by their names), and second or higher coders should follow the names and numbering used by the first coder in their own coding, unless they disagree with the first coder’s scheme of dividing the study up into tests. Such disagreements will eventually be resolved by discussion.</p>

<h5>Test-level information:</h5>

<ol>
	<li>If the test is on a subsample or the overall sample of participants in this study, type which subgroup this effects test is for. For example, if one of the phrases in the Abstract is a summary of the results separately for men and women, create two effects tests, and type that one effects test is “women” on this line, and for the other effects test type “men.”</li>
	<li>Names of any variables that are treated as independent variables(s) in the test, separated by commas. <i>Some examples of independent variables are: categorical variables in an ANOVA or t-test; covariates in an ANCOVA; repeated-measures variables such as “time of testing” or “stimulus type”; moderator in a moderation analysis; predictors in a regression.</i> </li>
	<li>Names of any other variables in the test, including dependent variables, separated by commas. <i>Some examples are: the dependent variable in an ANOVA, t-test or regression; the variables in a correlation or chi-square analysis; the mediator and dependent variable in a mediation analysis.</i></li>
	<li>Does the test correspond to hypotheses presented in the Introduction section of the article? Note that more than one test can correspond to a single hypothesis. Hypothesis are usually stated near the end of an Introduction. They do not have to be presented in a separate “hypothesis” section or as a list; many hypotheses, especially in short articles, are presented informally as a prediction in text, for example, “We expected that people who had exercised recently would be more likely to discount their emotional reaction.” A replication test will have the same hypothesis as the study it is trying to replicate.
		<ul>
			<li>Yes, directional: The test deals with a <strong>directional</strong> hypothesis that is stated in the Introduction – a hypothesis that not only states that two or more variables will be related to each other, but the direction of that relationship. In a simple test, this will be a description of a positive or negative relationship between two variables, or a description of which groups should have the higher means. In a more complex test, a directional hypothesis attempts to use similar language to describe an interaction or model.
				<blockquote>Example 1: “People who had exercised recently should be more likely to discount their emotional reaction.” This is a directional hypothesis says that one variable – exercise – will increase another. In other words, it predicts a positive relationship between the variables.<br><br>
Example 2: “Men, but not women, should show increased threat response in the condition where masculinity is questioned, and not in the other condition.” This is a directional hypothesis for an interaction between gender and condition. It specifically describes the pattern of results that is expected.
</blockquote></li>
			<li>Yes, nondirectional. The test deals with a <strong>nondirectional</strong> hypothesis that is stated in the Introduction – a hypothesis that only states that two or more variables should be related, but does not specify the expected direction anywhere in the Introduction. This code also applies to an Introduction that proposes multiple alternative hypotheses relevant to different possibilities for the same test, but only if the authors do not commit themselves to supporting one of those hypotheses over the other.
				<blockquote>Example 1: “People who had exercised recently and people who had not will show differences in discounting their emotional reaction.” If there are no other clues to the authors’ expectations in the Introduction, this should be taken as a nondirectional hypothesis, because it doesn’t say whether exercise will increase or decrease discounting.<br><br>

							Example 2: “Self-esteem maintenance theory would predict that men, but not women, should show increased threat response in the condition where masculinity is questioned, and not in the other condition. Gender-system justification theory would predict that both women and men should show equally increased threat responses if masculinity is questioned. We carried out this experiment to see which theory was better supported in this context.” If the authors do not elsewhere say that they support one theory over the other, this can be treated as a nondirectional hypothesis.
</blockquote></li>
			<li>No, no hypothesis relevant to the test. This code applies to effect mentioned in the Abstract but not relevant to the hypotheses in the Introduction, or to replication effects which were not included in the Introduction’s hypotheses.</li>
		</ul>
	</li>

	<li>Analytic design codes (use only one) <ol>
		<li><b>C = correlational/multivariate analysis without manipulation</b>
		<br>The test uses a number of variables that were measured at the same or different time – including continuous or categorical variables - but none of the test’s variables relate to the outcome of a controlled experimental manipulation.</li>
		<li><b>IA = correlational/multivariate internal analysis of manipulation check</b>
			<br>The test takes place within an experimental manipulation, but does not use a variable derived from the manipulation itself as an independent variable. Instead, it substitutes a measured variable which was a “check” on the manipulation’s effects. <i>Example: If I run an experiment in which participants listen to either an expert or inexpert communication, and measure persuasion afterwards, one possible internal analysis would test the correlation between persuasion and participants’ ratings of the communicator’s expertise. Those ratings are measuring the same thing as the experiment tried to manipulate, but do not themselves represent which condition that participant was assigned to.</i></li>
		<li><b>X = experimental analysis of manipulation effect</b>
			<br>One or more of the test’s independent variables represents which condition a participant was randomly assigned to. (Many write-ups of research these days do not explicitly mention random assignment because it is assumed to have taken place if a study is reported as an “experiment.”)</li>
		<li><b>RM = experimental analysis of repeated-measures effect</b>
			<br>One or more of the test’s <i>independent</i> variables is an analysis of differences between different measures given to the same participant. This may be expressed by such phrases as “repeated measures” or “within-participants factor”. </li>
		<li><b>RMX = combined experimental and repeated-measures effect</b>
			<br>The test has multiple independent variables, at least one of which would be coded “X” and at least one of which would be coded “RM” (that is, a mixed design with both between- and with-participant factors).</li>
		<li><b>Q = quasi- experimental analysis of manipulation effect</b>
			<br>One or more of the test’s independent variables represents different “treatments” given to participants in situations under the researcher’s control, but without being able to assign participants randomly.</li>
		<li><strong>O = Other</strong>
A design is used that does not fit any of these categories. The coder should briefly describe the design, using whatever short term or label for the design the authors use.
</li>
	</ol></li>
	<li>Methodology code (use as many as apply, separated by forward slashes)</li>
	<li><ol>
		<li><b>A = archival measures: </b>The analysis includes at least one variable derived from data that are found by the researchers rather than specially collected from participants, such as average school grades of students in different states, text analysis of singles’ ads on the internet.</li>
		<li><b>BI = brain imaging measures:</b> The analysis involves at least one variable derived from fMRI or other spatial brain imaging techniques. (Do not include EEG or other non-spatial brain measurement techniques).</li>
		<li><b>J = judgment measures: </b>The analysis involves at least one variable that is the judgment of participants by other people for a trait that is more general than the participant’s specific behavior or responses (for example, attractiveness ratings from a photo, or personality ratings on the basis of a 5 minute interaction).</li>
		<li><b>P = non-imaging physiological measures</b>: The analysis involves at least one variable derived from physiological measures other than brain imaging; that is, measures taken directly from the human body or its products. Do not include self-reported physiological phenomena such as time of menstrual cycle, hunger, etc.</li>
		<li><i>Some common examples: heart rate, skin conductance, event-related potentials in electrencephalography (EEG), electromyography (EMG), direct analysis of DNA, grip strength, measuring chemicals in blood or saliva, etc. </i></li>
		<li><b>SR = self-report measures:</b> The analysis involves at least one variable assessing the participant’s thoughts, feelings, intentions or behavior using controlled self-report through written, verbal, numeric, or visual analogue measures. This includes variables that are presented as a test of ability with a correct answer (for example, memory or reasoning tests), and choices that the participants believe to have no consequences outside the experimental context (for example, choosing how to allocate money in an explicitly hypothetical task) .</li>
		<li><b>I = indirect verbal or response-time measures:</b> The analysis involves at least one variable assessing the participant’s thoughts, feelings, or intentions with an indirect measure: one that that does not directly measure the participant’s body or brain but is based on analysis of verbal or response-time output, and which is intended to bypass controlled, conscious responding.
			<br><i>Some common examples: an implicit measurement task inferring attitudes from patterns of response times; a projective story task which is then coded for implicit themes; analyzing participant’s free writing for subtle uses of grammar that reveal attitudes toward groups (as opposed to directly expressed attitudes toward groups).</i></li>
		<li><b>BC = behavioral/choice measures:</b> The analysis involves at least one variable that measures the participant’s behavior by observation, or gives the participant a choice that he or she believes to have consequences outside the immediate experimental context.
			<br><i>Some common examples: a gambling task where the participant can win real money (but not a task where everyone is paid the same amount regardless of performance); a choice of whether to interact with another person in the next phase of the experiment, even though the experiment uses deception and the person does not really exist; observations of nonverbal behavior; a choice to give your email address to receive further messages about the environment.</i></li>
		<li><b>O = Other</b>
A methodology is used that does not fit any of these categories. The coder should briefly describe the methodology, using whatever short term or label for the methodology the authors use.</li>
	</ol></li>
	<li><b>Number of participants or data points excluded from analysis.</b> This should not include data that were genuinely missing (procedural errors, failure to answer, drop-outs from multiple waves of a study), but should include data that the researchers had, but chose to exclude.</li>
	<li><b>Reasons for excluding data</b>, separated by commas if multiple reasons given (using the author’s words as much as possible)</li>
	<li>Type of statistical test used, in the authors’ words (examples: ANCOVA; structural equation model; mediation analysis with bootstrapping)</li>
	<li><b>N of cases used in the analysis</b>, after exclusion (using the authors’ stated units of analysis; usually participants, but maybe other factors if hierarchical analysis is used)</li>
	<li><b>Inferential test statistic and its value</b> (the value of the F-value, t-value, or chi-square associated with the test.) For example: “F = 3.92,” “t = -1.35.” If this is followed by more specific comparisons or contrasts, report here only the statistic for the overall test. <i>Do not report values of r, B or beta from correlations or regressions here</i> because they are better seen as effect size statistics, not inferential test statistics (see 15 below, “Effect size”). Often, significance tests of r, B and beta are reported without an inferential test statistic, which usually should be <i>t</i>. If this is the case, or in other cases where inferential statistics are missing, enter “None reported.”</li>
	<li><b>Degrees of freedom of the inferential statistic</b> (separated by commas if more than one, and giving the N second if a chi-square). “None reported” if these are missing.</li>
	<li><b>Significance of test as reported</b>: If the exact p value is not reported, state the possible range of p values from lowest to highest, “p1 to p2,”, with “~0” as the lowest possible result. If the value is not a p value (for example, p<sub>rep</sub>) this fact should also be entered (so, “p-rep .98”). “None reported” if this is missing.
		<br>Examples:
		<ul>
			<li><i>a value reported only as p &lt; .001 should be reported “~0 to .001” ; </i></li>
			<li><i>“not significant” and nothing else should be reported “.05 to 1” unless a different alpha criterion than .05 is explicitly used; </i></li>
			<li><i>The entry ** in a table where * = p &lt; .05, ** = p &lt; .01, *** = p &lt; .001 should be reported “.001 to .01”</i></li>
		</ul>
	</li>
	<li>(OPTIONAL) <b>Exact p value of the test:</b> if not reported but calculable from the inferential statistics. This is an optional code that may depend on your statistical knowledge. If the test is reported as a straightforward z, t, F or chi-square test the following online p value calculator may be used: <a href="http://graphpad.com/quickcalcs/PValue1.cfm">http://graphpad.com/quickcalcs/PValue1.cfm</a>.</li>
	<li><b>Main result of the test:</b> Stated in terms of the directional relationship between variables, using the same format as you would to express any hypothesis (see effects section 2). If there are nominal variables with more than three levels involved, report the particular comparisons relevant to the effect. </li>
	<li><b>Supports hypotheses of the article?</b> As evaluated by the authors in the Discussion section, does the test provide evidence for their hypotheses that were stated prior to the result? If no relevant hypotheses were stated code “NH”; otherwise, code “Yes”, “No” or “Complex” if the authors find only partial support for the hypotheses.</li>
	<li><b>Effect size of the test as reported:</b> If significance tells you how likely a result is to have arisen by chance sampling from a population where you wouldn’t say the result is true, effect size tells you how strong the effect is, in terms of the ratio of “signal” (for example, difference between means for men and woman) to “noise” (for example, variability in scores.) Enter the effect size statistic and its value.
		</li><li><ol>
			<li>For some tests, finding effect size statistics is easy. Correlation and regression coefficients (r, R<sup>2</sup>,beta and B) are themselves actually effect size statistics. (Although technically you cannot have a negative effect size, you should leave any minus signs on r, beta and B you report here, to keep clear which direction they go in.)</li>
			<li>t-tests usually report the associated effect size d.</li>
			<li>ANOVA and related procedures have a number of possible effect sizes that can be reported; d, f<sup>2</sup> , h<sup>2</sup>(eta squared), partial h<sup>2</sup>,w<sup> 2 </sup>(omega squared). If an ANOVA’s mean squared error is reported without any effect size stat, report this. Mean square error is not an effect size stat, but will allow it to be computed with the rest of the information about the ANOVA.</li>
			<li>For chi square tests, there is no clearly accepted effect size statistic; phi coefficient or Cramer’s V are sometimes reported but they both have flaws.</li>
			<li>Effect size in SEM is complicated; if hypotheses depend on specific parameters (paths), use the standardized coefficient for that particular path.</li>
			<li>Sometimes effect size is not reported. In that case enter “No ES.”</li>
		</ol></li>
</ol>

<p>Additional “specific test” sections can be generated by requesting additional entries for items 10-13 in the front end. These will hold the results of more specific tests. For example, if the overall test is an interaction, the specific tests can report the results of simple effects tests within that interaction. Only those tests that are relevant to replication effects, or effects mentioned in the Abstract, should be entered.</p>

<h6>Examples of when to enter specific tests</h6>
<ul>
	<li>The abstract says “Men responded with higher stress in the gender role threat condition than the control condition, while women did not.” Later on in the Results, you find that the interaction between gender and condition is significant, and you enter its stats into the “general test” section. The authors then go on to do simple effects tests and show that among men, the effect of condition on stress is significant, while among women, the effect of condition on stress is not. Here you would enter two specific tests, one for each simple effects test.</li>
<li>You determine that this study is a partial replication of a previous study that had two conditions; this study keeps those two conditions but adds a third. The three conditions are the independent variable in an ANOVA, and the authors</li>
</ul>


</section>
</div>
	            </div>









