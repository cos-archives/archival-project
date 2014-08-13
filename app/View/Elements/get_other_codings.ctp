<?php
	$Paper = ClassRegistry::init('Paper');
	$multipleCodings = $Paper->getMultipleCodings($paper['Paper']['id']);
	$codingIds = array_keys($multipleCodings);
	$users = array_values($multipleCodings);
?>


<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Compare…'); ?><span class="caret"></span></a>
<ul class="dropdown-menu">
	<?php for ( $i=0 ; $i < count($users) ; $i++ ): ?>
			<?php
				if( $codingIds[$i] != $paper['Codedpaper']['id'] ) {
					echo "<li><a href='/codedpapers/compare/". $paper['Codedpaper']['id'] . "/" . $codingIds[$i] . "'>" . $paper['User']['username'] . " <-> " . $users[$i] . "</a></li>";
				}
			?>
	<?php endfor; ?>

</ul>