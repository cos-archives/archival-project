    <script>
    var count = 0;
    </script>

    <div class="span3 nav-list-spy">
        <ul class="nav nav-list osfa-affix-sidenav affix" id="tutorial-nav">
            <li class="active"><a href="#overview"><i class="icon-chevron-right"></i> Overview</a></li>
            <li><a href="#abstracts"><i class="icon-chevron-right"></i> Abstracts</a></li>
            <li><a href="#hypotheses"><i class="icon-chevron-right"></i> Hypotheses</a></li>
            <li><a href="#methodology"><i class="icon-chevron-right"></i> Methodology</a></li>
            <li><a href="#analytic_design_code"><i class="icon-chevron-right"></i> Analytic Design Code</a></li>
        </ul>
    </div>
    <div class="span9 offset3 content-body">
        <div id="overview">
            <h1>Learning to Code for the Archival Project</h1>
            <p class="lead">The Archival Project has developed a specific coding scheme for volunteers to follow. As a supplement to that scheme,
             the following tutorial can be used to gain more facility with identifying article structure and understanding terminology.</p>
        </div>
        <div id="abstracts">
            <h3>Abstracts</h3>
            <p>An article's abstract summarizes the most important contents of the article. Because it summarizes the most important questions
                asked by the researchers, and usually their results, we use the abstract as a guide as to which information needs to be coded.
                In the Archival Project, we <strong>only code results mentioned in the abstract</strong>.</p>
            <p>This doesn't mean, however, that you only need to read the abstract. What it means is that you should identify the topics
                mentioned there, and look for them in the rest of the article.</p>
            <p>As you read an article, scan the abstract for results and general statements about relationships between variables.</p>
            <h4>Example 1</h4>
            <blockquote>
            <img src="/img/tutorial_abst1.png">
            </blockquote>
            <p>Abstract from Fischer, Greitemeyer, and Frey (2008).</p>
            <br>
            <p>In the abstract above, the  highlighting indicates the relationships that the researchers investigated. As stated
                in the first sentence, Fischer et al "investigated the impact of self-regulation resources on confirmatory information processing."
                If that was all that the abstract said, we would code any test that had to do with the relationship between self-regulation
                resources (the IV) and confirmatory information processing (the DV).</p>
            <p>This is still the case, however, these highlighted portions give us more direction. The green highlighting
                indicates that in at least four tests, the authors examined depletions of the IV and their impacts on the DV.
                Blue highlighting indicates that the researchers tested three different IVs (eg. ego threat) and their
                impact on the DV. Lastly, the yellow highlighting indicates that the original IV was tested against a new DV, "commitment
                to their [the participant's] standpoint," and how that DV impacted the original DV of confirmatory information processing.
                Based on our look at the abstract then, we will likely see nine tests in this article that need to be coded.</p>
            <br>
            <h4>Practice Questions</h4>
            <br>

            <!-- Question 1 -->
            <div class="well well-lg">
                <p class="lead">Read the following abstract:</p>
                <p>"Research has found that positive affect broadens
                    attention. However, these studies have manipulated
                    positive affect that is low in approach motivation. Positive
                    affect that is high in approach motivation should reduce
                    the breadth of attention, as organisms shut out irrelevant
                    stimuli as they approach desired objects. Four studies examined
                    the attentional consequences of approach-motivated
                    positive-affect states. Results were consistent with
                    predictions. Participants showed less global attentional
                    focus after viewing high-approach-motivating positive
                    stimuli than after viewing low-approach-motivating positive
                    stimuli (Study 1) or neutral stimuli (Study 2). Study 3
                    found that greater trait approach motivation resulted in
                    less global attentional focus after participants viewed
                    approach-motivating positive stimuli. Study 4 manipulated
                    affect and approach motivation independently.
                    Greater approach-motivated positive affect caused lower
                    global focus. High-approach-motivated positive affect
                    reduces global attentional focus, whereas low-approachmotivated
                    positive affect increases global attentional
                    focus. Incorporating the intensity of approach motivation
                    into models of positive affect broadens understanding of
                    the consequences of positive affect."</p>
                <p>Gable and Harmon-Jones (2008)</p>
                <p class="lead">Which sentence describes an effect to be coded?</p>

                <script type = "text/javascript">
                        function revealAnswers1() {
                        document.getElementById("abstbutton1").className = "btn btn-success";
                        document.getElementById("abstbutton1").disabled = true;
                        document.getElementById("abstbutton2").className = "btn btn-danger";
                        document.getElementById("abstbutton2").disabled = true;
                        count = count + 1;
                        }
                </script>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#abst_right" id="abstbutton1" style="float: left">
                                   A
                        </button>
                        <p style="padding-left: 60px">"Participants showed less global attentional
                            focus after viewing high-approach-motivating positive
                            stimuli than after viewing low-approach-motivating positive
                            stimuli (Study 1) or neutral stimuli (Study 2)."
                        </p>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#abst_wrong" id="abstbutton2" style="float: left">
                               B
                        </button>
                        <p style="padding-left: 60px">"Positive affect that is high in approach motivation should reduce
                        the breadth of attention, as organisms shut out irrelevant
                        stimuli as they approach desired objects."
                        </p>
                    </div>
                </form>

                <!-- Modal -->
                <div class="modal fade" id="abst_right" tabindex="-1" role="dialog" aria-labelledby="right" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                           </div>
                           <div class="modal-body">
                                This sentence describes two of the studies, their results, the IVs (stimuli), and the DV (global attentional focus).
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal" onclick="revealAnswers1()">Close</button>
                           </div>
                       </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Modal -->
                <div class="modal fade" id="abst_wrong" tabindex="-1" role="dialog" aria-labelledby="wrong" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                           </div>
                           <div class="modal-body">
                               This sentence discusses past literature. While it is relevant to the effects the researchers are looking for, it is not specific to any of their studies.
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal" onclick="revealAnswers1()" >Close</button>
                           </div>
                       </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div>
            <!-- End Question 1 -->

            <!-- Question 2 -->
            <br>
            <div class="well well-lg">
                <p class="lead">Read the following abstract:</p>
                <p>"People often diverge from members of other social groups: They select cultural tastes (e.g., possessions,
                    attitudes, or behaviors) that distinguish them from outsiders and abandon tastes when outsiders adopt
                    them. But while divergence is pervasive, most research on the propagation of culture is based on
                    conformity. Consequently, it is less useful in explaining why people might abandon tastes when others
                    adopt them. The 7 studies described in this article showed that people diverge to avoid signaling
                    undesired identities. A field study, for example, found that undergraduates stopped wearing a particular
                    wristband when members of the “geeky” academically focused dormitory next door started wearing
                    them. Consistent with an identity-signaling perspective, the studies further showed that people often
                    diverge from dissimilar outgroups to avoid the costs of misidentification. Implications for social
                    influence, identity signaling, and the popularity and diffusion of culture are discussed."</p>
                <p>Berger and Heath (2008)</p>
                <p class="lead">Which sentence describes an effect to be coded?</p>

                <script type = "text/javascript">
                        function revealAnswers2() {
                        document.getElementById("abstbutton3").className = "btn btn-danger";
                        document.getElementById("abstbutton3").disabled = true;
                        document.getElementById("abstbutton4").className = "btn btn-success";
                        document.getElementById("abstbutton4").disabled = true;
                        count = count + 1;
                        }
                </script>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#abst2_wrong" id="abstbutton3" style="float: left">
                               A
                        </button>
                        <p style="padding-left: 60px">"But while divergence is pervasive, most research on the propagation of culture is based on
                            conformity."
                        </p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#abst2_right" id="abstbutton4" style="float: left">
                               B
                        </button>
                        <p style="padding-left: 60px">"Consistent with an identity-signaling perspective, the studies further showed that people often
                            diverge from dissimilar outgroups to avoid the costs of misidentification."
                        </p>
                    </div>
                </form>

                <!-- Modal 1 -->
                <div class="modal fade" id="abst2_wrong" tabindex="-1" role="dialog" aria-labelledby="abst2_wrongLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                           </div>
                           <div class="modal-body">
                                This sentence describes past research and a DV used in other researchers work, it does not tell you about the relationships that the present researchers are investigating.
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal" onclick="revealAnswers2()">Close</button>
                           </div>
                       </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- Modal 2-->
                <div class="modal fade" id="abst2_right" tabindex="-1" role="dialog" aria-labelledby="abst2_rightLabel" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                           </div>
                           <div class="modal-body">
                                Correct. This sentence identifies the IV (divergence) and a DV, similarity of the outgroup, even telling you that divergence occurs more often from a dissimilar outgroup.
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal" onclick="revealAnswers2()">Close</button>
                           </div>
                       </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- End Question 2 -->
        </div>
        <div id="hypotheses">
            <h3>Hypotheses</h3>
            <p>Hypotheses are the researchers' expectations of their experiments' results. Hypotheses can be directional or non-directional.</p>
            <p>A directional hypothesis means that the researchers have a specific idea of how the dependent variables will relate to one another.
             In other words, the researchers make a prediction that one group's average dependent variable will be different from another group's
             average dependent variable. Sometimes this can mean one is expected to be larger, or faster, or more memorable.</p>
            <p>A non-directional hypothesis means that the researchers do not make specific predictions of how the dependent variables of different
            groups will relate to one another. In other words, they say that they anticipate a difference, but not that a particular group will be
            larger, faster, or more memborable.</p>
            <h4>Examples</h4>
            <h5>Directional:</h5>
            <blockquote>"We expected that participants who were shown the visual stimulus would have greater recall than those who were not."</blockquote>
            <blockquote>"We predicted that more errors would be made in the group without time for practice."</blockquote>
            <h5>Non-directional:</h5>
            <blockquote>"Do breakfast eaters differ in weight on average from non-breakfast eaters?"</blockquote>
            <blockquote>"We will explore the relationship between depth perception and distance estimates."</blockquote>

            <h4>Practice Questions</h4>
            <br>

            <!-- Question 3 -->
            <div class="well">
                <p class="lead">What kind of hypothesis is found in Santos, 2008?</p>
                <p>"If this is the case, and if adults with ASD have reduced top-down influence, then categorization should have a smaller influence on perceptual processing in adults with ASD than in control subjects."</p>
                <br>
                <script type = "text/javascript">
                        function revealAnswers3() {
                        document.getElementById("hypbutton1").className = "btn btn-success";
                        document.getElementById("hypbutton1").disabled = true;
                        document.getElementById("hypbutton2").className = "btn btn-danger";
                        document.getElementById("hypbutton2").disabled = true;
                        count = count + 1;
                        }
                </script>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hyp1_right" id="hypbutton1" style="float: left">
                               A
                        </button>
                        <p style="padding-left: 60px">Directional hypothesis
                        </p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hyp1_wrong" id="hypbutton2" style="float: left">
                               B
                        </button>
                        <p style="padding-left: 60px">Non-directional hypothesis
                        </p>
                    </div>
                </form>

                <!-- Modal 1-->
                    <div class="modal fade" id="hyp1_right" tabindex="-1" role="dialog" aria-labelledby="hyp_rightLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                               </div>
                               <div class="modal-body">
                                    It is a directional hypothesis.
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal" onclick="revealAnswers3()">Close</button>
                               </div>
                           </div><!-- /.modal-content -->
                       </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                <!-- Modal 2-->
                <div class="modal fade" id="hyp1_wrong" tabindex="-1" role="dialog" aria-labelledby="hyp_wrongLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                               <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                            </div>
                            <div class="modal-body">
                                Because the authors say that that the DV will affect certain groups less than others, this is a directional hypothesis.
                            </div>
                            <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal"  onclick="revealAnswers3()">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <!-- End Question 3 -->

            <!-- Question 4 -->
            <br>
            <div class="well">
                <p class="lead">What kind of hypothesis is found in Goshke, 2008?</p>
                <p>"We predicted that PM cues would be overlooked (i.e., not acted upon) more often on high- than on low-conﬂict trials because on high-conﬂict trials the current goal (i.e., to perform the ongoing task) is automatically shielded from distracting information."</p>
                <br>
                <script type = "text/javascript">
                        function revealAnswers4() {
                        document.getElementById("hypbutton3").className = "btn btn-success";
                        document.getElementById("hypbutton3").disabled = true;
                        document.getElementById("hypbutton4").className = "btn btn-danger";
                        document.getElementById("hypbutton4").disabled = true;
                        count = count + 1;
                        }
                </script>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hyp2_right" id="hypbutton3" style="float: left">
                               A
                        </button>
                        <p  style="padding-left: 60px">Directional hypothesis
                        </p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hyp2_wrong" id="hypbutton4" style="float: left">
                               B
                        </button>
                        <p style="padding-left: 60px">Non-directional hypothesis
                        </p>
                </div>
                </form>

                <!-- Modal 1-->
                    <div class="modal fade" id="hyp2_right" tabindex="-1" role="dialog" aria-labelledby="hyp2_rightLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                               </div>
                               <div class="modal-body">
                                    This is a directional hypothesis.
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal" onClick="revealAnswers4()">Close</button>
                               </div>
                           </div><!-- /.modal-content -->
                       </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Modal 2-->
                <div class="modal fade" id="hyp2_wrong" tabindex="-1" role="dialog" aria-labelledby="hyp2_wrongLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                           </div>
                           <div class="modal-body">
                                The authors specify that the IV (number of PM cues overlooked) will be greater in some trials, based on the DV (conflict level). This means it is a directional hypothesis.
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal" onClick="revealAnswers4()">Close</button>
                           </div>
                       </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <!-- End Question 4 -->
        </div>
        <div id="methodology">
            <h3>Methodology</h3>
            <p>Methodology coding requires you to examine the processes researchers undertook to gather their data.</p>
            <p><strong>Archival measures: </strong> Some or all of the data used in the analysis was already collected, prior to the study,
            and was simply obtained by the researcher. For example:</p>
            <blockquote>A researcher compares population densities listed on government websites to traffic conditions</blockquote>
            <p><strong>Brain Imaging: </strong> The analysis involves at least one variable derived from fMRI or other
            spatial brain imaging techniques. For example:</p>
            <blockquote>A researcher uses an fMRI to see brain activity in participants while they complete word puzzles</blockquote>
            <p><strong>Judgment measures: </strong> Some or all of the data included in the analysis is an evaluation of the participant,
            made by other people. For example:</p>
            <blockquote>A researcher tests how perceptions of how personable participants are correlate with the participants' usual
            tip amount on a check</blockquote>
            <p><strong>Non-imaging physiological measures: </strong> Some or all of the data included in the analysis is a methodology
            that takes information directly form the participant's body. For example:</p>
            <blockquote>Glucose levels derived from blood samples are compared to performance on a self-control task</blockquote>
            <p><strong>Self report: </strong> Participants respond to a question and their answer is coded and used as data. For example:</p>
            <blockquote>Participants respond to a survey about their free time activities</blockquote>
            <p><strong>Indirect verbal or response time: </strong> Data comes from the participants' responses to a question, but
            is not the actual response; instead, the data is some sort of assessment of their answers. For example:</p>
            <blockquote>A participant categorizes colors as good or bad and their response times are used to assess implicit bias</blockquote>
            <p><strong>Behavioral/Choice measures: </strong> Some or all of the data is an analysis of the participant's actions
            and responses when presented with a decision. For example:</p>
            <blockquote>Participants are asked to take a snack, either a banana or chocolate bar, and researchers compare these decisions
            to the weight of the participants</blockquote>
            <h3>Practice Questions</h3>

            <!--Question 5-->
            <div class="well">
                <p class="lead">Based on the following quote, which  methodologies were used in Burt, 2008?</p>
                <p>"After 45 to 60 min, participants adjourned to individual rooms to complete sociometric rankings (on a scale of 1-4, with 1 meaning 'I liked this person best')...DNA was obtained via Oragene...saliva collection kits."</p>
                <p>The researchers compared how well liked a person was to information found in their DNA.</p>
                <div id="methodology_quiz1">
                    <form name = "methodology_form">
                        <input type = "checkbox" name = "question1" id ="question1"> &nbsp;&nbsp;Archival Measures<br>
                        <input type = "checkbox" name = "question2" id ="question2"> &nbsp;&nbsp;Brain Imaging Measures<br>
                        <input type = "checkbox" name = "question3" id ="question3"> &nbsp;&nbsp;Judgment Measures<br>
                        <input type = "checkbox" name = "question4" id ="question4"> &nbsp;&nbsp;Non-imaging Physiological Measures<br>
                        <input type = "checkbox" name = "question5" id ="question5"> &nbsp;&nbsp;Self Report Measures<br>
                        <input type = "checkbox" name = "question6" id ="question6"> &nbsp;&nbsp;Indirect Verbal or Response Time Measures<br>
                        <input type = "checkbox" name = "question7" id ="question7"> &nbsp;&nbsp;Behavioral/Choice Measures<br><br>
                        <input type = "button" class="btn btn-primary" value = "Submit" onClick = "scoreQuiz();">
                     </form>


                    <script type = "text/javascript">
                        function scoreQuiz() {
                            var correct = 0;
                            if (window.document.methodology_form.question1.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question1").disabled = true;
                            } else {
                                window.document.methodology_form.question1.checked = false;
                                document.getElementById("question1").disabled = true;
                            }
                            if (window.document.methodology_form.question2.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question2").disabled = true;
                            } else {
                                window.document.methodology_form.question2.checked = false;
                                document.getElementById("question2").disabled = true;
                            }
                            if (window.document.methodology_form.question3.checked == true) {
                                correct = correct + 1;
                                document.getElementById("question3").disabled = true;
                            } else {
                                window.document.methodology_form.question3.checked = true;
                                document.getElementById("question3").disabled = true;
                            }
                            if (window.document.methodology_form.question4.checked == true) {
                                correct = correct + 1;
                                document.getElementById("question4").disabled = true;
                            } else {
                                window.document.methodology_form.question4.checked = true;
                                document.getElementById("question4").disabled = true;
                            }
                            if (window.document.methodology_form.question5.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question5").disabled = true;
                            } else {
                                window.document.methodology_form.question5.checked = false;
                                document.getElementById("question5").disabled = true;
                            }
                            if (window.document.methodology_form.question6.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question6").disabled = true;
                            } else {
                                window.document.methodology_form.question6.checked = false;
                                document.getElementById("question6").disabled = true;
                            }
                            if (window.document.methodology_form.question7.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question7").disabled = true;
                            } else {
                                window.document.methodology_form.question7.checked = false;
                                document.getElementById("question7").disabled = true;
                            }

                            if (correct == 7) {
                                $('#methodology_right').modal('show');
                                count = count + 1;

                            } else {
                                $('#methodology_wrong').modal('show');
                                count = count + 1;
                            }

                        }
                    </script>

                    <!-- Modal: methodology_right-->
                    <div class="modal fade" id="methodology_right" tabindex="-1" role="dialog" aria-labelledby="methodology_rightLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                               </div>
                               <div class="modal-body">
                                    Judgment and non-imaging physiological measures are the correct choices.
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               </div>
                           </div><!-- /.modal-content -->
                       </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                     <!-- Modal: methodology_wrong-->
                     <div class="modal fade" id="methodology_wrong" tabindex="-1" role="dialog" aria-labelledby="methodology_wrongLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                                </div>
                                <div class="modal-body">
                                    There are two correct choices: judgment and non-imaging physiological measures. The judgment measures are the opinions others formed about the participants, and the non-imaging physiological measures are the DNA samplings that were collected and used as data.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div><!-- /.modal -->
                </div> <!--End Quiz Div-->
            </div>
            <!--End Question 5-->

            <!--Question 6-->
            <div class="well">
                <p class="lead">Based on the following quote, which  methodologies were used in Demany, 2008?</p>
                <p>"On each trial, the listener was presented with two successive ‘‘chords’’ (sums of pure tones) and had to indicate if they were identical or not. The listener, sitting in a sound attenuated booth, gave his or her responses by clicking a computer mouse on two virtual buttons."</p>
                <p>The researchers compared how well liked a person was to information found in their DNA.</p>

                <div id="methodology_quiz2">
                    <form name = "methodology_form2">
                        <input type = "checkbox" name = "question1" id = "question21"> &nbsp;&nbsp;Archival Measures<br>
                        <input type = "checkbox" name = "question2" id = "question22"> &nbsp;&nbsp;Brain Imaging Measures<br>
                        <input type = "checkbox" name = "question3" id = "question23"> &nbsp;&nbsp;Judgment Measures<br>
                        <input type = "checkbox" name = "question4" id = "question24"> &nbsp;&nbsp;Non-imaging Physiological Measures<br>
                        <input type = "checkbox" name = "question5" id = "question25"> &nbsp;&nbsp;Self Report Measures<br>
                        <input type = "checkbox" name = "question6" id = "question26"> &nbsp;&nbsp;Indirect Verbal or Response Time Measures<br>
                        <input type = "checkbox" name = "question7" id = "question27"> &nbsp;&nbsp;Behavioral/Choice Measures<br><br>
                        <input type = "button" class="btn btn-primary" value = "Submit" onClick = "scoreQuiz2();">
                     </form>

                    <script type = "text/javascript">
                        function scoreQuiz2() {
                            var correct = 0;
                            if (window.document.methodology_form2.question1.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question21").disabled = true;
                            } else {
                                window.document.methodology_form2.question1.checked = false;
                                document.getElementById("question21").disabled = true;
                            }

                            if (window.document.methodology_form2.question2.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question22").disabled = true;
                            } else {
                                window.document.methodology_form2.question2.checked = false;
                                document.getElementById("question22").disabled = true;
                            }

                            if (window.document.methodology_form2.question3.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question23").disabled = true;
                            } else {
                                window.document.methodology_form2.question3.checked = false;
                                document.getElementById("question23").disabled = true;
                            }

                            if (window.document.methodology_form2.question4.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question24").disabled = true;
                            } else {
                                window.document.methodology_form2.question4.checked = false;
                                document.getElementById("question24").disabled = true;
                            }

                            if (window.document.methodology_form2.question5.checked == true) {
                                correct = correct + 1;
                                document.getElementById("question25").disabled = true;
                            } else {
                                window.document.methodology_form2.question5.checked = true;
                                document.getElementById("question25").disabled = true;
                            }

                            if (window.document.methodology_form2.question6.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question26").disabled = true;
                            } else {
                                window.document.methodology_form2.question6.checked = false;
                                document.getElementById("question26").disabled = true;
                            }

                            if (window.document.methodology_form2.question7.checked == false) {
                                correct = correct + 1;
                                document.getElementById("question27").disabled = true;
                            } else {
                                window.document.methodology_form2.question7.checked = false;
                                document.getElementById("question27").disabled = true;
                            }

                            if (correct == 7) {
                                $('#methodology_right2').modal('show');
                                count = count + 1;

                            } else {
                                $('#methodology_wrong2').modal('show');
                                count = count + 1;
                            }

                        }
                    </script>

                    <!-- Modal: methodology_right2-->
                    <div class="modal fade" id="methodology_right2" tabindex="-1" role="dialog" aria-labelledby="methodology2_rightLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                               </div>
                               <div class="modal-body">
                                    Self report is the correct choice.
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               </div>
                           </div><!-- /.modal-content -->
                       </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                     <!-- Modal: methodology_wrong2-->
                     <div class="modal fade" id="methodology_wrong2" tabindex="-1" role="dialog" aria-labelledby="methodology2_wrongLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                                </div>
                                <div class="modal-body">
                                    There is only one correct answer: self report. Participants responded to questions and those responses were used as data.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div><!-- /.modal -->
                </div>
            </div>
            <!-- End Question 6-->
        </div>

        <div id="analytic_design_code">
            <h3>Analytic Design Code</h3>
            <p>Analytic design code refers to the way in which the researchers analyzed their data–what kinds of tests were run to find effect.</p>
            <p><strong>Correlational/Multivariate internal analysis of manipulation check: </strong>A manipulation is assessed by examining a variable (one that is different from the study's IV) and its relationship with the study's DV. For example:</p>
            <blockquote>In a study that manipulates levels of anger and how they correspond to the force a person hits a punching bag with, the check looks at an anger measurement scale and the force with which a punching bag is hit in order. They do this to be sure that angrier people do actually hit the bag harder.</blockquote>
            <p><strong>Correlational/Multivariate analysis without manipulation: </strong>The researchers look for a relationship among variables that they did not affect themselves, meaning there are no assigned groups. This differs from a quasi experiment in that here, there is no manipulation. For example: </p>
            <blockquote>Researchers look for a relationship between the number of siblings a participant has and how assertive they are.</blockquote>
            <p><strong>Experimental analysis of manipulation effect: </strong>The researchers test the effects of manipulating a variable on randomly assigned groups. For example: </p>
            <blockquote>In a study where one group is asked to read a distracting text and another group isn't, researchers compare each groups' average number of remembered words from a vocabulary list presented before the distracting text.</blockquote>
            <p><strong>Experimental analysis of repeated-measures effect: </strong>The researchers test the same group of participants for all manipulations in an experiment. A common use case is longitudinal studies. For example:</p>
            <blockquote>In a study of cancer patients suffering from depression, researchers measure all of the participants' serotonin levels and reported happiness throughout cancer treatment, looking to find if participants become less depressed as they progress in their treatment.</blockquote>
            <p><strong>Combined experimental and repeated-measures effect: </strong>The study has multiple IVs, where one is between subjects and one is within subjects. In other words, there are at least two groups of participants, and each group is tested multiple times. For example: </p>
            <blockquote>Participants see a series of photos. Some participants see photos of daytime and others see nighttime photos. Within each of these groups, different landscapes, like a desert, city, or rainforest, are presented. The researchers investigate to see which images (night/day, natural/constructed) are considered to be the most soothing.</blockquote>
            <p><strong>Quasi-experimental analysis of manipulation effect: </strong>Participants in the study belong to different groups and there is a manipulation, but the researcher is unable to randomize assignment of the IV. For example:</p>
            <blockquote>Researchers investigate competition by priming participants with a sports rival and compare the effect of the prime between men and women.</blockquote>

            <!-- Question 7 -->
            <div class="well">
                <p class="lead">Based on the following information from Burt, 2008, which analytic design code is appropriate?</p>
                <ul>
                    <li>Participants give DNA samples</li>
                    <li>Participants rank their cohorts' personalities</li>
                    <li>Researchers assess DNA for serotenergic activity and analyze its relationship with personality rankings</li>
                </ul>
                <br>

                <script type = "text/javascript">
                        function revealAnswers7() {
                        document.getElementById("analyticbutton2").className = "btn btn-success";
                        document.getElementById("analyticbutton2").disabled = true;
                        document.getElementById("analyticbutton1").className = "btn btn-danger";
                        document.getElementById("analyticbutton1").disabled = true;
                        document.getElementById("analyticbutton3").className = "btn btn-danger";
                        document.getElementById("analyticbutton3").disabled = true;
                        document.getElementById("analyticbutton4").className = "btn btn-danger";
                        document.getElementById("analyticbutton4").disabled = true;
                        document.getElementById("analyticbutton5").className = "btn btn-danger";
                        document.getElementById("analyticbutton5").disabled = true;
                        document.getElementById("analyticbutton6").className = "btn btn-danger";
                        document.getElementById("analyticbutton6").disabled = true;
                        count = count + 1;
                        }
                </script>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong" id="analyticbutton1" style="float: left">
                               A
                            </button>
                            <p style="padding-left: 50px">Correlational/Multivariate Internal Analysis of Manipulation Check</p>
                    </div><br>
                    <div class="form-group">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_right" id="analyticbutton2" style="float: left">
                               B
                            </button>
                            <p style="padding-left: 50px">Correlational/Multivariate Analysis Without Manipulation</p>
                    </div><br>
                    <div class="form-group">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong" id="analyticbutton3" style="float: left">
                               C
                            </button>
                            <p style="padding-left: 50px">Experimental Analysis of Manipulation Effect</p>
                    </div><br>
                    <div class="form-group">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong" id="analyticbutton4" style="float: left">
                               D
                            </button>
                            <p style="padding-left: 50px">Experimental Analysis of Repeated-measures Effect</p>
                    </div><br>
                    <div class="form-group">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong" id="analyticbutton5" style="float: left">
                               E
                            </button>
                            <p style="padding-left: 50px">Combined Experimental and Repeated-measures Effect</p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong" id="analyticbutton6" style="float: left">
                           F
                        </button>
                        <p style="padding-left: 50px">Quasi-experimental Analysis of Manipulation Effect</p>
                    </div>
                </form>


                <!-- Modal: analytic_right-->
                <div class="modal fade" id="analytic_right" tabindex="-1" role="dialog" aria-labelledby="analytic_rightLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                           </div>
                           <div class="modal-body">
                                Correlational/Multivariate analysis without manipulation is the correct choice.
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal" onClick="revealAnswers7()">Close</button>
                           </div>
                       </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- Modal: analytic_wrong-->
                <div class="modal fade" id="analytic_wrong" tabindex="-1" role="dialog" aria-labelledby="analytic_wrongLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                            </div>
                            <div class="modal-body">
                                There is only one correct answer: correlational/multivariate analysis without manipulation. Participants never received a manipulation, but the researchers looked for a relationship between participant's serotenergic activity and judgment ratings.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onClick="revealAnswers7()">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- End Question 7 -->

            <!-- Question 8 -->
            <div class="well">
                <p class="lead">Based on the following information from Demany, 2008, which analytic design code is appropriate?</p>
                <ul>
                    <li>Participants all listen to pairs of tones where one tone is followed by another tone that has a 50% chance of differing from the first</li>
                    <li>Length of time between the first and second tone varied by trial</li>
                    <li>Participants made same/different judgments on the tones and the researchers compared their accuracy to the length of time between the two tones.</li>
                </ul>
                <br>

                <script type = "text/javascript">
                        function revealAnswers8() {
                        document.getElementById("analyticbutton24").className = "btn btn-success";
                        document.getElementById("analyticbutton24").disabled = true;
                        document.getElementById("analyticbutton21").className = "btn btn-danger";
                        document.getElementById("analyticbutton21").disabled = true;
                        document.getElementById("analyticbutton22").className = "btn btn-danger";
                        document.getElementById("analyticbutton22").disabled = true;
                        document.getElementById("analyticbutton23").className = "btn btn-danger";
                        document.getElementById("analyticbutton23").disabled = true;
                        document.getElementById("analyticbutton25").className = "btn btn-danger";
                        document.getElementById("analyticbutton25").disabled = true;
                        document.getElementById("analyticbutton26").className = "btn btn-danger";
                        document.getElementById("analyticbutton26").disabled = true;
                        count = count + 1;
                        }
                </script>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong2" id="analyticbutton21" style="float: left">
                           A
                        </button>
                        <p style="padding-left: 60px">Correlational/Multivariate Internal Analysis of Manipulation Check</p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong2" id="analyticbutton22" style="float: left">
                           B
                        </button>
                        <p style="padding-left: 60px">Correlational/Multivariate Analysis Without Manipulation</p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong2" id="analyticbutton23" style="float: left">
                           C
                        </button>
                        <p style="padding-left: 60px">Experimental Analysis of Manipulation Effect</p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_right2" id="analyticbutton24" style="float: left">
                           D
                        </button>
                        <p style="padding-left: 60px">Experimental Analysis of Repeated-measures Effect</p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong2" id="analyticbutton25" style="float: left">
                           E
                        </button>
                        <p style="padding-left: 60px">Combined Experimental and Repeated-measures Effect</p>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#analytic_wrong2" id="analyticbutton26" style="float: left">
                           F
                        </button>
                        <p style="padding-left: 60px">Quasi-experimental Analysis of Manipulation Effect</p>
                    </div>
                </form>

                <!-- Modal: analytic_right2-->
                    <div class="modal fade" id="analytic_right2" tabindex="-1" role="dialog" aria-labelledby="analytic2_rightLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title" id="myModalLabel">You're right!</h4>
                               </div>
                               <div class="modal-body">
                                    Experimental analysis of repeated-measures effect is the correct choice.
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal" onClick="revealAnswers8()">Close</button>
                               </div>
                           </div><!-- /.modal-content -->
                       </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                 <!-- Modal: analytic_wrong2-->
                <div class="modal fade" id="analytic_wrong2" tabindex="-1" role="dialog" aria-labelledby="analytic2_wrongLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Incorrect</h4>
                            </div>
                            <div class="modal-body">
                                There is only one correct answer: experimental analysis of repeated-measures effect. There were no separate groups because all of the participants heard the same set of stimuli, and all of the participants were presented with different lengths of time between the tones.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onClick="revealAnswers8()">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
            <!-- End Question 8 -->

        </div>
        <!-- End Tutorial -->
        <Br>

        <script>
        function determineComplete() {
            count=8;
            if (count == 8) {
            location.href = "/pages/complete_tutorial";
            }
            else {
             $('#incomplete').modal('show');
            }
        }
        </script>

        <!-- Modal: incomplete-->
        <div class="modal fade" id="incomplete" tabindex="-1" role="dialog" aria-labelledby="incomplete_tutorial" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="incomplete_header">Tutorial incomplete</h4>
                    </div>
                    <div class="modal-body">
                        Please make sure you have answered all of the questions.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <button type="button" class="btn btn-success btn-lg btn-block" onClick="determineComplete()" id="sendButton">Send tutorial completion report to professor</button>



    </div>
