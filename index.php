<?php
require BASE_PATH . '/vendor/autoload.php';

require BASE_PATH . '/components/templates/head.component.php';
require BASE_PATH . '/components/templates/foot.component.php';
?>

<?php
head();
?>

<section class = "container">
    <div class = "description">
        <h2>Welcome To Movie Schedule</h2>
        <p>Click Below to View Featured Movie Schedules!</p>
        <a href ="/pages/schedule.php" class = "button"> View Schedules</a>
    </div>
</section>

<?php
footer();
?>