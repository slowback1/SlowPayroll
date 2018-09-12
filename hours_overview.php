<?php include 'templates/header.php'; ?>
<?php include 'actions/get_daily_hours.php'; ?>
<div class="body">
    
    <div class="bodyBox">
        <h3>Monday:</h3>
        <div class="hourBox">
            <?php echo get_daily_hours(0); ?>
        </div>
    </div>
    <div class="bodyBox">
        <h3>Tuesday:</h3>
        <div class="hourBox">
            <?php echo get_daily_hours(1); ?>
        </div>
    </div>
    <div class="bodyBox">
        <h3>Wednesday:</h3>
        <div class="hourBox">
            <?php echo get_daily_hours(2); ?>
        </div>
    </div>
    <div class="bodyBox">
        <h3>Thursday: </h3>
        <div class="hourBox">
            <?php echo get_daily_hours(3); ?>
        </div>
    </div>
    <div class="bodyBox">
        <h3>Friday: </h3>
        <div class="hourBox">
            <?php echo get_daily_hours(4); ?>
        </div>
    </div>
    <div class="bodyBox">
        <h3>Saturday: </h3>
        <div class="hourBox">
            <?php echo get_daily_hours(5); ?>
        </div>
    </div>
    <div class="bodyBox">
        <h3>Sunday: </h3>
        <div class="hourBox">
            <?php echo get_daily_hours(6); ?>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>