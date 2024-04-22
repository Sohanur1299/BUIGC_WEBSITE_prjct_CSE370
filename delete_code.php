<?php include("includes/dbcon.php") ?>
<?php session_start() ?>

<?php
if (isset($_GET['student_id'])) 
    $id_is = $_GET['student_id'];
    $query_ = "DELETE FROM member WHERE student_id = $id_is";
    $res = mysqli_query($con, $query_);

    $_SESSION['status'] = '[ ID: '.$id_is.' ]  Action: Removed. ';
    header('location:memberx_data.php');
    exit;
    
?>






