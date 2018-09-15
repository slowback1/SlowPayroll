<?php include 'templates/header.php'; ?>
<?php include 'actions/get_daily_hours.php'; ?>
<div class="body">
    <?php 
        $dow = ['Monday'=>0, "Tuesday"=>1, "Wednesday"=>2, "Thursday"=>3, "Friday"=>4, "Saturday"=>5, "Sunday"=>6];
        foreach($dow as $day=>$day_num) {
            echo "<div class='bodyBoxHour'><h3>$day</h3><div class='hourBox'>" . get_daily_hours($day_num) . "</div></div>";
        }
    ?>
</div>

<?php include 'templates/footer.php'; ?>