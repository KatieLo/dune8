<?php

include("lib.php");

$title = "Our Work";
$nav_item_highlighted = "work";
echo get_header($title, $nav_item_highlighted);

include("work_content.html");

echo get_footer();

?>