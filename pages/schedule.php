<?php
require  BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/components/cards/display.component.php';

head();

?>
 <link rel="stylesheet" href = "/pages/asset_schedule/css/style.css">

<?php


displayMovies($MovieSchedule);


footer();
?>
