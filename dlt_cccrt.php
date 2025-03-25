<?php
@ob_start();
include('admin/config/config.php');

$crt_id=$_GET['id'];

$dlt_crt="delete from cart where id='$crt_id'";
$qst_dlt_crt=$db->query($dlt_crt);
if($qst_dlt_crt)
{
    echo "<script>window.alert('deleted Successfully');window.location='cart.php';</script>";
}



ob_flush();

?>