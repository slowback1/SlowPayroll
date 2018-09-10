<?php include 'templates/header.php'; ?>
<?php include 'admin_restrictions.php'; ?>
<?php include 'actions/payday_due_date.php'; ?>
<?php include 'actions/get_payroll.php'; ?>
<div class="body">
    <div class="bodyBox">
        <h2>Next Payday: </h2>
        <?php echo payday_due_date('bimonthly'); ?>
        <h2>Amount Owed: </h2>
        <?php echo "$" . get_payroll('bimonthly'); ?>
    </div>
    <div class="bodyBox">
        <h2>Details: </h2>
        <?php// include 'templates/payroll_employee_view.php' ?>
    </div>
</div>


<?php include 'templates/footer.php'; ?>