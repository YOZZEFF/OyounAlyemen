<?php
require('../includes/connectdb.php');
?>

<?php
$cust_id=($_GET['id']);
$sql="DELETE FROM `customers` WHERE `id`='$cust_id'";
$stmtDelete = mysqli_query($connection,$sql);
header('location: control_panel.php');
?>

<?php
if (isset($connection)) {
    mysqli_close($connection);
}
?>