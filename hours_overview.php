<?php include 'templates/header.php'; ?>
<?php include 'actions/get_daily_hours.php'; ?>
<div class="body">
    
    <div class="bodyBox">
        <h3>Monday:</h3>
        <div class="hourBox">
            <?php get_daily_hours(0) ?>
        </div>
    </div>
    
</div>

<?php include 'templates/footer.php'; ?>