<?php include 'templates/header.php'; ?>
<?php include 'admin_restrictions.php'; ?>
<?php include 'actions/payday_due_date.php'; ?>
<?php include 'actions/get_payroll.php'; ?>
<div class="body payrollBody">
    <div class="bodyBoxTop">
    <div class="payrollTopBox"><h4>Next Payday: </h4>
        <p><?php echo payday_due_date('bimonthly'); ?></p>
        </div><div class="payrollTopBox"><h4>Amount Owed: </h4>
        <p><?php echo "$" . get_payroll('bimonthly'); ?>

</div>


<?php include 'templates/footer.php'; ?>