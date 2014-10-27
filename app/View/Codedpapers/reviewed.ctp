<?php
  if(!strpos($_SERVER['REQUEST_URI'], '_all')) {
    echo $this->element('dashboard-menu');
  }
?>

<div class="papers index">
  <?php if ( sizeof($myIncompleteReviewCodings) > 0 ): ?>
  <h2>My Incomplete Reviewed Papers</h2>
  <table  class="table">
  <tr>
      <th>DOI</th>
      <th>Title</th>
      <th>Coder</th>
      <th class="actions"><?php echo __('Actions'); ?></th>
  </tr>
  <?php foreach ($myIncompleteReviewCodings as $paper) {
    echo $this->element('reviewed_coding_row', array('paper' => $paper, 'editable' => true)); } ?>
  </table>
  <?php endif; ?>

  <?php if ( sizeof($myCompleteReviewCodings) > 0 ): ?>
  <h2>My Complete Reviewed Papers</h2>
  <table  class="table">
  <tr>
      <th>DOI</th>
      <th>Title</th>
      <th>Coder</th>
      <th class="actions"><?php echo __('Actions'); ?></th>
  </tr>
  <?php foreach ($myCompleteReviewCodings as $paper) {
    echo $this->element('reviewed_coding_row', array('paper' => $paper, 'editable' => true)); } ?>
  </table>
  <?php endif; ?>

  <?php if ( isset($allReviewCodings) && sizeof($allReviewCodings) > 0 ): ?>
  <h2>All Reviewed Papers</h2>
  <table  class="table">
  <tr>
      <th>DOI</th>
      <th>Title</th>
      <th>Coder</th>
      <th class="actions"><?php echo __('Actions'); ?></th>
  </tr>
  <?php foreach ($allReviewCodings as $paper) {
    echo $this->element('reviewed_coding_row', array('paper' => $paper, 'editable' => false)); } ?>
  </table>
  <?php endif; ?>



</div>
<div class="actions btn-group">
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Actions'); ?><span class="caret"></span>
    </a>
  <ul class="dropdown-menu">
    <li><?php echo $this->Html->link(__('Select a new paper for coding'), '/papers/index'); ?></li>
  </ul>
</div>