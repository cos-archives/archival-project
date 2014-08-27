<tr>
  <td><?php echo $this->Html->link($paper['Paper']['DOI'], $paper['Paper']['URL']); ?>&nbsp;</td>
  <td><?php echo h($paper['Paper']['title']); ?>&nbsp;</td>
  <td><?php echo h($paper['User']['username']); ?>&nbsp;</td>
  <td class="actions">
    <div class="btn-toolbar" style="white-space: nowrap">
    <?php echo $this->Html->link(__('Edit'), "/codedpapers/entry/". $paper['Codedpaper']['id'], array('class' => 'btn btn-primary')); ?>
    <?php echo $this->Html->link(__('Delete'), "/codedpapers/delete/". $paper['Codedpaper']['id'], array('class' => 'btn btn-danger')); ?>
    </div>
  </td>
</tr>