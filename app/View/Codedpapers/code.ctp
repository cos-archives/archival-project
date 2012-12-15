<?php $this->start('sidebar'); ?>
<div class="well span3">
<h3>Tips</h3>
<p>You can save at any time with Ctrl+Enter (simply Enter works in single-line fields as well), <strong>use it</strong>, so you aren't interrupted by autosaves.</p>
<p>Autosaves should disturb you as little as possible, but when you're caught in the process of typing, they may be confusing. <br>
	<button type="button" id="toggle_autosave" class="btn btn-inverse" data-toggle="button">Toggle Autosave <i class="icon-refresh icon-white"></i></button></p>
<h4><?= $this->Html->link('Coding scheme', array('controller' => 'pages','action' => 'coding_scheme')); ?></h4>
<h4>Coded by others</h4>
<?php
echo $this->element('get_other_codings', array('paper_id' => $this->data['Paper']['id'],'user_name' => $this->data['User']['username']));
?>
<h4>Replication codes</h4>
<div class="accordion" id="accordion2">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseNovel">Novel</a>
		</div>	
		<div id="collapseNovel" class="accordion-body collapse">
			<div class="accordion-inner">No replication mentioned.</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseDirect">Direct</a>
		</div>
		<div id="collapseDirect" class="accordion-body collapse">
			<div class="accordion-inner">Direct replication. The stated goal is , at least in part of the design, to exactly reproduce the hypothesis and methods of the previous study, making only those changes that are necessary to achieve the same psychological meaning among the new participant population. Example 1:  A study of stereotypes in Canada that used ice hockey players as a target group might be directly replicated in Australia by changing the target group to rugby players and pretesting for new stereotypical associations, while keeping everything else the same. Example 2: A study of lexical decision times done in Romania using Romanian words is directly replicated in Spain, with the necessary alteration of using Spanish words. Example 3: A study of psychological resilience in the aftermath of the Hurricane Katrina disaster in the US is directly replicated among those affected by the 2011 tornado outbreak, changing only references to the event.</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseConceptual">Conceptual</a>
		</div>
		<div id="collapseConceptual" class="accordion-body collapse">
			<div class="accordion-inner">Conceptual replication. The study’s stated goal is, at least in part of the design, to test the hypothesis of the previous study, using the same conceptual variables but changing their operationalization in ways that go beyond merely adapting the materials for a new population or occasion. <br>
		A conceptual replication can be done to increase internal validity (seeing if an effect replicates if the method excludes an alternate explanation), ecological validity (seeing if an effect replicates if an analogous procedure is followed using more naturalistic stimuli or setting), or external validity (seeing if the effect replicates across different conceptual incarnations of the same manipulations and measures). Note that a test of the same theory covered by previous research is not enough to warrant the “conceptual replication” label: the hypothesis (that is, a statement of relationships among variables) leading to a previous effect must be replicated.
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseX">+X</a>
		</div>
		<div id="collapseX" class="accordion-body collapse">
			<div class="accordion-inner">The letter X goes into the code after E, C, or D if the study also contains elements of extension that go beyond the type of replication recorded (thus, EX, CX or DX). For example, a study may replicate a previous two-condition experiment but then add on a third condition; it may measure a new construct that serves as an additional dependent variable, mediator or moderator; it may cross a new manipulation with the design of the old study, in which case the control group of the manipulation is essentially a replication of the old study. 
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseNr">+#</a>
		</div>
		<div id="collapseNr" class="accordion-body collapse">
			<div class="accordion-inner">After the letter code, a number code without brackets is placed to show that the study is presented as a replication/extension of an earlier study in the article itself, instead of, or in addition to, replicating another article.
			</div>
		</div>
	</div>

</div>
</div>
<?php $this->end(); ?>
<?php $this->start('more_nav'); ?>
<li class="divider-vertical"></li>
<li class="progress-nav">
	<div class="progress progress-striped span4">
    <div class="bar" style="width: 0%;" id="codingprogress"></div>
    </div>
</li>
<li class="divider-vertical"></li>
<li class="btn-nav">
	<button id="navSave" class="btn" disabled="disabled">Saved</button>
</li>
<?php $this->end(); ?>
<h1>Code paper <?php echo $this->Html->link('View <span class="icon-eye-open"></span>', 
	array('controller' => 'papers','action' => 'view', $this->data['Paper']['id']), 
	array('escape' => false, 'class' => 'btn btn-large'));?></h1>

<p class="lead span8"><?php 
	echo $this->data['Paper']['title'];
	?></p> 
<p class="span6">
	<?php  echo $this->data['Paper']['abstract']; ?>
</p>
<?php
echo $this->Form->create("Codedpaper");
echo $this->Session->flash();
echo $this->Form->hidden("Paper.id");
echo $this->Form->hidden("Paper.DOI");
echo $this->Form->hidden("id");
echo $this->Form->hidden("paper_id");

echo $this->element('study', array(
	"data" => $this->data
));

echo '<div class="form-actions"><div class="btn-group">';
echo $this->Form->end(array(
    'label' => 'Save!',
    'id' => 'CodedpaperCodeFormSubmit',
	'class' => 'btn btn-large',
	'div' => false,
));
?>
	<input type="hidden" id="CodedpaperCompleted_" name="data[Codedpaper][completed]" value="0">
	<label id="CodedpaperCompletedLabel" class="btn btn-large btn-primary<?=($this->data['Codedpaper']['completed']===true)?' active':''; ?>">
		<input type="checkbox" id="CodedpaperCompleted" name="data[Codedpaper][completed]" class="hidden" value="1" <?=($this->data['Codedpaper']['completed']===true)?'checked="checked"':''; ?>>
		Complete (for others to view)
	</label>
	</div>
</div>
<?php
debug($this->data);
pr($this->validationErrors);
?>
<?php echo $this->Js->writeBuffer(); ?>
<script type="text/javascript">
//<![CDATA[
function toggleAutosave() {
	autosaveglobal = !autosaveglobal;
	icon = autosaveglobal ? ' <i class="icon-refresh icon-white"></i>' : '';
	$("#toggle_autosave").button('toggle').html('Toggle Autosave' + icon);
	return false;
}
function unsavedChanges () {
//	console.log($("#CodedpaperCodeForm").serialize());
	$('#navSave').addClass('btn-info').removeAttr('disabled').text('Unsaved changes…');
	if(autosaveglobal) {
		if( ($.now() - lastSave ) > 5000) {
			saveform();
		}
	}
}
function updateProgress () {
	formelms = $('#CodedpaperCodeForm input[type=text],#CodedpaperCodeForm input[type=number],#CodedpaperCodeForm input[type=search],#CodedpaperCodeForm select,#CodedpaperCodeForm input[type=radio],#CodedpaperCodeForm input[type=checkbox], #CodedpaperCodeForm textarea');
	
	var nonZ = 0;
	formelms.map(function() {
	  nonZ += ($(this).val()=='') ? 0 : 1;
	});
	prog = 100 * (nonZ / (formelms.length)) + '%';
	$('#codingprogress').css('width',prog);
}
function activateinputs () {
	$('#CodedpaperCodeForm input[type=text],#CodedpaperCodeForm input[type=number],#CodedpaperCodeForm input[type=search],#CodedpaperCodeForm select,#CodedpaperCodeForm input[type=radio],#CodedpaperCodeForm input[type=checkbox], #CodedpaperCodeForm textarea').each(function(i,elm) {
		$(elm).off('change','*');
		$(elm).on('change',unsavedChanges);
		$(elm).on('change',updateProgress);
	});
	$('#CodedpaperCodeForm input[type=number]').each(function(i,elm) {
		if($(elm).attr('name').match(/\[data_points_excluded\]$/)) {
			if($(elm).attr('value')>0)
				$(elm).closest('div.row-fluid').find('.hidden').removeClass('hidden');
			$(elm).on('change',function (event) {
				if($(event.target).attr('value')>0)
					$(event.target).closest('div.row-fluid').find('.hidden').removeClass('hidden');
			});
		}
	});
	
	$('div.chzn-search input').attr("tabindex",null);
	
	$('a.selfdestroyer').each(function(i,elm) {
		$(elm).off('click','*');

		$(elm).confirmDialog({
			message: '<strong>Do you really want to delete this block?</strong>',
			cancelButton: 'Cancel',
			confirmButton: 'Delete',
		});
		
	});
}
function saveform() {
	options = {
		data: $("#CodedpaperCodeFormSubmit").closest("form").serialize(), 
		dataType:"html", 
		success:
		function (data, textStatus) {
			focused = "#" + $(':input:focus').attr("id"); // pseudoselector for focused selects, inputs and textarea
			// fixme: some input is getting lost
			$.when($("#main-content").html(data)).done(function(){
				if(typeof focused != 'undefined') { // if a field was focused upon autosaving
					$(focused).focus()
				}
				$('#navSave').removeClass('btn-info').attr('disabled', 'disabled').text('Saved');
				lastSave = $.now();
			}); // refocus it when the data has been replaced
		}, 
		type:"post", 
		url: $("#CodedpaperCodeFormSubmit").closest("form").attr('action')
	};
	$.ajax(options);
}
$(document).ready(function () {
	if(typeof autosaveglobal == 'undefined') {
		lastSave = $.now(); // only set when loading the first time
		autosaveglobal = true;
		$("#toggle_autosave").button('toggle').on('click', toggleAutosave);
	}
	
	activateinputs();
	$("#flashMessage").delay(2000).fadeOut(1000);
	$("#CodedpaperCodeFormSubmit").click( function (event) {
		saveform();
		return false;
	});
	$("#navSave").attr('disabled','disabled').off('click').click( function (event) {
		saveform();
		return false;
	});
	
	updateProgress();
	$('#CodedpaperCompletedLabel').click(function() {
		$('#CodedpaperCompletedLabel').toggleClass('active', $('#CodedpaperCompleted').prop('checked') ); // switch to checkbox state 
	});
	$(document).off('keydown');
	$(document).keydown(function(event) { // add a key combo to save the form
		if (event.keyCode === 10 || event.keyCode == 13 && event.ctrlKey) {
			saveform();
		    event.preventDefault();
		    return false;
		} else return true;
	});
	
	window.onbeforeunload = function() {
		if ( $('#navSave').text() != 'Saved' ) {
			return 'You have unsaved changes.'
		}
	};
	$("[rel=tooltip]").tooltip();
});
//]]>
</script>