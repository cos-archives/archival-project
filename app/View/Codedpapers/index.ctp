<style>
	td.actions {
		width:200px;
	}
</style>
<?php
function shortensome($x, $length=9) {
		if(strlen($x)>$length) $x = substr($x,0,$length-1). "…";
		return $x;
	}
?>
<?php echo $this->element('dashboard-menu'); ?>

<?php if ( isset($my_codings) ) {
				echo $this->element('codedpapers_table', array('title' => 'My Coded Papers', 'papers' => $my_codings, 'asUser' => True));
			}
?>

<?php if ( isset($all_codings) ) {
				echo $this->element('codedpapers_table', array('title' => 'All Coded Papers', 'papers' => $all_codings, 'asUser' => False));
			}
?>

<div class="actions btn-group">
	<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Actions'); ?><span class="caret"></span>
	  </a>
	<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Select a new paper for coding'), '/papers/index'); ?></li>
	</ul>
</div>