<tr>
  <td><?php echo $this->Html->link($paper['Paper']['DOI'], $paper['Paper']['URL']); ?>&nbsp;</td>
  <td><?php echo h($paper['Paper']['APA']); ?>&nbsp;</td>
  <td><?php echo h($paper['User']['username']); ?>&nbsp;</td>
  <td class="actions">
    <div class="btn-toolbar">
    <?php echo $this->Html->link(__('View'), "/codedpapers/view/". $paper['Codedpaper']['id'], array('class' => 'btn')); ?>
    <?php
    echo $this->element('get_other_codings', array('paper_id' => $paper['Paper']['id'],'user_name' => $paper['User']['username']));
    ?>
    </div>
  </td>
</tr>