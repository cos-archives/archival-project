<tr>
  <td><?php echo $paper['User']['username']; ?></td>
  <td><a href="<?php echo $paper['Paper']['URL']; ?>"><?php echo $paper['Paper']['title']; ?></a></td>
  <td><?php echo h($paper['Paper']['first_author']); ?>&nbsp;</td>
  <td><?php echo h($paper['Paper']['year']); ?>&nbsp;</td>
  <td><?php echo h($paper['Paper']['journal']); ?>&nbsp;</td>
  <td class="actions">
    <div class="btn-group">
    <?php
      if ( $asUser ) {
        $Paper = ClassRegistry::init('Paper');
        $userID = AuthComponent::user('id');
        $coding_complete = $Paper->hasUserCoded($paper['Paper']['id'],$userID);

        if ( $userID === $paper['Codedpaper']['user_id'] ) {
          if($coding_complete === true) {
            echo '<button class="btn btn-success disabled">Coding complete</button>';
          } else {
            echo '<a class="btn btn-primary" href="/codedpapers/entry/' . $paper['Codedpaper']['id'] . '">Continue Coding</a>';
          }
        }
      }
    ?>

    <?php
    echo $this->element(
      'get_other_codings',
      array(
        'paper' => $paper,
        'asUser' => $asUser,
      )
    );
    ?>

    </div>
  </td>
</tr>