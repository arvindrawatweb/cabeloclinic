<?php 
session_start();
include("config/config.php");
$bnr_id=$_GET['id'];



$dlt_bnr="delete from current_opening where id='$bnr_id'";
$qst_dlt_bnr=$db->query($dlt_bnr);

if($qst_dlt_bnr)
{
    echo "<script>window.alert('job Opening Deleted Successfully');window.location='vw_jb_crnt_opng.php';</script>";
}



?>