<div class="papers index">
  <h2><?php echo $title; ?></h2>
  <table class="table">
  <tr>
      <th>Coder</th>
      <th>Title</th>
      <th>First Author</th>
      <th>Year</th>
      <th>Journal</th>
      <th class="actions">Actions</th>
  </tr>
  <?php
    foreach ($papers as $paper){
      echo $this->element(
        'codedpaper_row',
        array(
          'paper' => $paper,
          'asUser' => $asUser,
        )
      );
    }
  ?>
  </table>

</div>
