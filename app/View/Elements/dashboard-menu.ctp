 <?php
 function nav_link($url, $text) {
    $html = '<li';
    if(strpos($_SERVER['REQUEST_URI'], $url) === 0) {
        $html .= ' class="active"';
    }
    $html .= '><a href="' . $url . '"';
    $html .= '>' . $text . '</a>';
    return $html;
 }
 ?>

<ul class="nav-offset3 sub_nav nav nav-pills">
    <?php echo nav_link('/papers/index', 'All papers'); ?>
    <?php echo nav_link('/codedpapers/index_mine', 'My Coded Papers'); ?>
    <?php echo nav_link('/users/leaderboard', 'Leaderboard'); ?>
</ul>
<hr>