<?php echo $this->element('dashboard-menu'); ?>
<div class="users index">
	<h2><?php echo __('Leaderboard'); ?></h2>
	<table class='table'>
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('username'); ?></th>
				<th><?php echo $this->Paginator->sort('coded_papers_complete', 'Complete'); ?></th>
				<th><?php echo $this->Paginator->sort('coded_papers_incomplete', 'Incomplete'); ?></th>
				<th><?php echo $this->Paginator->sort('affiliated_institution'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $u): ?>
			<?php $u = $u['User']; ?>
			<tr>
				<td><?php echo $u['username']; ?></td>
				<td><?php echo $u['coded_papers_complete']; ?></td>
				<td><?php echo $u['coded_papers_incomplete']; ?></td>
				<td><?php echo $u['affiliated_institution']; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>