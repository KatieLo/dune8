<?php

include("lib.php");

$title = "Get in Touch";
$nav_item_highlighted = "contact";
echo get_header($title, $nav_item_highlighted);

include("contact_content.html");

echo get_footer();

?>