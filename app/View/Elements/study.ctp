<?php
if($newadd = isset($sstart)) {
	$this->layout = 'ajax'; # ready for insertion
	$length = $sstart + 1; # if it's supposed to be added anew, tell me where to start
} else {
	if(isset($this->data['Study']))
		$length = count ( $this->data['Study'] ); # data gets only passed if it wasn't added anew
	else $length = 0;
	$sstart = 0; # start from the beginning
}

$codedpaper_id = Set::classicExtract($this->data,"Codedpaper.id"); # we need to give this to the add-button

for($s= $sstart; $s < $length; $s++) {

echo '<div class="row-fluid formblock"><div class="span12">';
	
	$destroylink = $this->webroot.'studies/delete/'.Set::classicExtract($this->data,"Study.$s.id");
	echo "<h3><a href='$destroylink' class='selfdestroyer btn btn-warning btn-mini' rel='tooltip' title='Delete whole study'><i class='icon-trash'></i></a> ";
	echo "Study Nr. ".($s+1)." ";
	echo $this->Form->input("Study.$s.name",array(
		'class' => 'boxless-nameinput', 'label'=> false,'div'=>false, 'placeholder' => 'study title (if any, click to edit)')
	);
	echo "</h3>";
		
	echo $this->Form->hidden("Study.$s.id");
	echo $this->Form->hidden("Study.$s.codedpaper_id");	
	
	echo '<div class="row-fluid"><span class="span1">Replication: </span>';
	echo $this->Form->input("Study.$s.replication_code", array(
		'options' => array('', 'Novel', 'Direct', 'Direct+X', 'Conceptual', 'Conceptual+X', 'E'),
		'label' => false,
		'div' => array('class'=>'span3 offset1')
	));

	echo $this->Form->select("Study.$s.replicates_study_id", $replicable_studies,		
		array(
			'data-placeholder' => 'Replicates study…',
			'data-provide' => 'typeahead',
			'data-min-length' => '1',
			'class' => 'span4 select2single',
			'div' => array('class' => 'span4' ),
			'before' => '<br>' 
		));
	echo '</div>';
	
	echo '<div class="row-fluid"><div class="span11 offset1">';
		$options = array( "s" => $s);
		if($newadd) $options["tstart"] = 0;
		$options["data"] = $this->data;
		echo $this->element('test', $options);
	echo '</div></div>';
echo '</div></div>';
}

$addstudyid = "study_adder";
echo "<h4 id='$addstudyid'>";
echo  $this->Html->link("Add Study ".($s+1),
	array('controller' => 'codedpapers', 'action' => 'morestudies'), array('class' => 'btn')
	);
echo "</h4>";
?>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function () {$("#<?=$addstudyid?>").bind("click", function (event) {$.ajax( {data:"sstart=<?=$s?>&codedpaper_id=<?=$codedpaper_id?>", dataType:"html", success:function (data, textStatus) {
	$("#<?=$addstudyid?>").replaceWith(data);
	}, url:"<?php echo $this->webroot; ?>codedpapers/morestudies"});
return false;});
	$("[rel=popover]").popover();
	$(".select2single").select2({allowClear:true});

});
//]]>;
</script>