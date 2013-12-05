<style>
	td.actions {
		width:200px;
	}
</style>
<?php
function shortensome($x) {
		if(strlen($x)>9) $x = substr($x,0,8). "…";
		return $x;
	}
?>
<?php echo $this->element('dashboard-menu'); ?>
<div class="papers index">
	<h2><?php echo __('Papers'); ?></h2>
	<table class="table">
	<tr>
			<th>DOI</th>
			<th>Title</th>
			<th>First Author</th>
			<th>Year</th>
			<th>Journal</th>
			<th class="actions">Actions</th>
	</tr>
	<?php
	foreach ($codedpapers as $paper): ?>
	<tr>
		<td><?php echo $this->Html->link(shortensome($paper['Paper']['DOI']), $paper['Paper']['URL']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['title']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['first_author']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['year']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['journal']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
			<?php
				$Paper = ClassRegistry::init('Paper');
				$coding_complete = $Paper->hasUserCoded($paper['Paper']['id'],AuthComponent::user('id'));
				if($coding_complete) {
					echo '<button class="btn btn-success disabled">Coding complete</button>';
				} else {
					echo $this->Html->link(__('Continue coding'), "/codedpapers/entry/". $paper['Codedpaper']['id'], array('class' => 'btn btn-primary'));
				}
			?>

			<?php
			echo $this->element('get_other_codings', array('paper_id' => $paper['Paper']['id'],'user_name' => $paper['User']['username']));
			?>

			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
<div class="actions btn-group">
	<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Actions'); ?><span class="caret"></span>
	  </a>
	<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Select a new paper for coding'), '/papers/index'); ?></li>
	</ul>
</div>