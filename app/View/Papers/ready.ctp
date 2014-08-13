<?php echo $this->element('dashboard-menu'); ?>
<style>
	th.actions {
		width:320px;
	}
</style>

<div class="papers index">
	<div class='pull-right'>
		<a href='/papers/add' class='btn btn-primary'>Add Paper</a>
		<a href='/codedpapers/index' class='btn btn-primary'>List Coded Papers</a>
	</div>
	<h2>All Papers</h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('first_author'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('journal'); ?></th>
			<th><?php echo $this->Paginator->sort('codings_complete'); ?></th>
			<th><?php echo $this->Paginator->sort('codings_incomplete'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	function shortensome($x) {
		if(strlen($x)>9) $x = substr($x,0,8). "…";
		return $x;
	}
	foreach ($papers as $paper): ?>
	<tr>
		<td><a href="<?php echo $paper['Paper']['URL']; ?>"><?php echo $paper['Paper']['title']; ?></a></td>
		<td><?php echo h($paper['Paper']['first_author']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['year']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['journal']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['codings_complete']); ?></td>
		<td><?php echo h($paper['Paper']['codings_incomplete']); ?></td>
		<td class="actions">
			<div class="btn-toolbar">
				<div class="actions btn-group">
					<a class="btn btn-default" href="/papers/view/<?php echo $paper['Paper']['id']; ?>">View Paper</a>
					<a class="btn btn-primary" href="/codedpapers/add/<?php echo $paper['Paper']['id']; ?>?review">Claim for Review</a>
				</div>
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="pagination pagination-centered">
		<ul>
	<?php
		echo "<li>";
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo "</li><li>";
		echo $this->Paginator->numbers(array('separator' => '</li><li>'));
		echo "</li><li>";
		echo $this->Paginator->next(__('next') . ' >',array(), null, array('class' => 'next disabled'));
		echo "</li><li>";
	?>
		</ul>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
</div>

