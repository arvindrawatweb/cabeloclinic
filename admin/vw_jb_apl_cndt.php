<?php
@ob_start();
//session_start();
require_once 'config/config.php';
require_once 'config/helper.php';





if (isset($_GET['active'])) {
    
    $activate = $_GET['active'];
    $sql=$db->query("UPDATE users SET status='0' WHERE user_id=$activate ");
    echo "<script>alert(' Deactivate Successfully.'); window.location = 'users_list.php';</script>";
}
if (isset($_GET['deactivate'])) {
    $deactivate = $_GET['deactivate'];
    $sql1=$db->query("UPDATE users SET status='1' WHERE user_id=$deactivate");
    echo "<script>alert('Activate Successfully.'); window.location = 'users_list.php';</script>";
}






if (!empty($_SESSION['ibc'])) {
if ($_SESSION['ibc'] != session_id()) {
header('Location: index.php');
exit;
}
} else {
header('Location: login.php');
exit;
}
$logintype = $_SESSION['logintype'];
$a_idchk = $_SESSION['a_id'];

$ausernmae = $_SESSION['a_name'];
ob_start("ob_html_compress");
$comp_select = $db->query("SELECT * FROM `admin`");
$comp_fetch = $comp_select->fetch_object();
$a_company = $comp_fetch->a_company;
$check_a_name = $_SESSION['a_name'];
function facebook_time_ago($timestamp)
{
$time_ago = strtotime($timestamp);
$current_time = time();
$time_difference = $current_time - $time_ago;
$seconds = $time_difference;
$minutes      = round($seconds / 60);           // value 60 is seconds
$hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec
$days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;
$weeks          = round($seconds / 604800);          // 7*24*60*60;
$months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60
$years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60
if ($seconds <= 60) {
return "Just Now";
} else if ($minutes <= 60) {
if ($minutes == 1) {
return "one minute ago";
} else {
return "$minutes minutes ago";
}
} else if ($hours <= 24) {
if ($hours == 1) {
return "an hour ago";
} else {
return "$hours hrs ago";
}
} else if ($days <= 7) {
if ($days == 1) {
return "yesterday";
} else {
return "$days days ago";
}
} else if ($weeks <= 4.3) //4.3 == 52/12
{
if ($weeks == 1) {
return "a week ago";
} else {
return "$weeks weeks ago";
}
} else if ($months <= 12) {
if ($months == 1) {
return "a month ago";
} else {
return "$months months ago";
}
} else {
if ($years == 1) {
return "one year ago";
} else {
return "$years years ago";
}
}
}
?>

<?php include 'header.php'; ?>
<?php

?>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid">
<h2 class="mt-30 page-title">All Services</h2>
<ol class="breadcrumb mb-30">
<li class="breadcrumb-item active">All Services</li>
</ol>


<div class='col-md-12 table table-responsive'>
    <table class='table'>

<tr>
<th>Sno.</th>
<th>Date.</th>
<th>Name</th>
<th>number</th>
<th>Email </th>
<th>Location</th>
<th>Preffered Location</th>
<th>Total Experience</th>
<th>Relivant Work Experience</th>
<th>job Category</th>
<th>position</th>
<th>cover Note</th>
<th>view Attached CV</th>


</tr>
        
    <?php 
    $usr_lst="select * from career";
    $qst_usr_lst=$db->query($usr_lst);
    $sno=1;
    while($clct_usr_lst=$qst_usr_lst->fetch_assoc())
    {
       $det=$clct_usr_lst['date'];
        $nemm=$clct_usr_lst['name'];
        $mbl=$clct_usr_lst['mobile'];
        $emnl=$clct_usr_lst['email'];
        $lctn=$clct_usr_lst['location'];
        $prftd_lctn=$clct_usr_lst['preffered_location'];
        $ttl_exprnc=$clct_usr_lst['total_experience'];
        $rlvt_wrk=$clct_usr_lst['relivant_work_experience'];
        $jb_ctgy=$clct_usr_lst['job_category'];
        $pstn=$clct_usr_lst['position'];
        $resume=$clct_usr_lst['cv'];
        $cvr_net=$clct_usr_lst['cover_note'];
       
        
         
    ?><tr>
<td><?php echo $sno++;?></td>
<td><?php echo $det;?></td>
<td><?php echo $nemm;?></td>
<td><?php echo $mbl;?></td>
<td><?php echo $emnl;?></td>
<td><?php echo $lctn;?></td>
<td><?php echo $prftd_lctn;?></td>
<td><?php echo $ttl_exprnc;?></td>
<td><?php echo $rlvt_wrk;?></td>
<td><?php echo $jb_ctgy;?></td>
<td><?php echo $pstn;?></td>
<td><?php echo $cvr_net;?></td>
<td><a href='user_cv/<?php echo $resume;?>' target="_blank">View Resume</a></td>




        
        </tr>
        
        
        
        
        <?php
    }
    ?>
        
        
    </table>
    </div>




</div>
</main>

<?php include 'footer.php'; 

ob_flush();

?>