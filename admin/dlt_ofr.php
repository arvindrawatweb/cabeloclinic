<?php 
session_start();
include("config/config.php");
$bnr_id=$_GET['id'];



$dlt_bnr="delete from offer_this_month where id='$bnr_id'";
$qst_dlt_bnr=$db->query($dlt_bnr);

if($qst_dlt_bnr)
{
    echo "<script>window.alert('Offer Deleted Successfully');window.location='view_ofrr.php';</script>";
}



?>