<?php
  if(!strpos($_SERVER['REQUEST_URI'], '_all')) {
    echo $this->element('dashboard-menu');
  }
?>

<div class="papers index">
  <h2><?php echo $title; ?></h2>
  <table  class="table">
  <tr>
      <th>DOI</th>
      <th>APA reference</th>
      <th>Coder</th>
      <th class="actions"><?php echo __('Actions'); ?></th>
  </tr>
  <?php foreach ($incomplete as $paper) {
    echo $this->element('reviewed_coding_row', array('paper' => $paper)); } ?>
  </table>

</div>
<div class="actions btn-group">
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Actions'); ?><span class="caret"></span>
    </a>
  <ul class="dropdown-menu">
    <li><?php echo $this->Html->link(__('Select a new paper for coding'), '/papers/index'); ?></li>
  </ul>
</div>