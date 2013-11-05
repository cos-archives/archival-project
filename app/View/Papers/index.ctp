<?php echo $this->element('dashboard-menu'); ?>

<div class="papers index">
	<div class='pull-right'>
		<a href='/papers/add' class='btn btn-primary'>Add Paper</a>
		<a href='/codedpapers/index' class='btn btn-primary'>List Coded Papers</a>
	</div>
	<h2>All Papers</h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('DOI'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('first_author'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('journal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	function shortensome($x) {
		if(strlen($x)>9) $x = substr($x,0,8). "…";
		return $x;
	}
	foreach ($papers as $paper): ?>
	<tr>
		<td><?php
		echo $this->Html->link(shortensome($paper['Paper']['DOI']), $paper['Paper']['URL']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['title']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['first_author']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['year']); ?>&nbsp;</td>
		<td><?php echo h($paper['Paper']['journal']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
				<div class="actions btn-group">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $paper['Paper']['id']), array('class' => 'btn')); ?>
		 			<?php if(AuthComponent::user('Group.name')=='admin'): ?>
					 <button class="btn dropdown-toggle" data-toggle="dropdown">
					    <span class="caret"></span>
					 </button>

					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paper['Paper']['id'])); ?></li>
						<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paper['Paper']['id']), null, __('Are you sure you want to delete # %s?', $paper['Paper']['id'])); ?></li>
					</ul>
					<?php endif; ?>
				</div>
			<?php
			echo $this->element('get_multiple', array('paper_id' => $paper['Paper']['id']));
			?>
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

