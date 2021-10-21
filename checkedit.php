<?php
$oldid = $_POST['oldid'];
echo $oldid;
$name = $_POST['name'];
$id = $_POST['id'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$group = $_POST['group'];
$nb = $_POST['nb'];
$age = $_POST['age'];
$conn =mysqli_connect('localhost','root','','blood_bank');
if(!$conn){
die("kết nối thất bại");
}
$sql="UPDATE `blood_donor` SET `bd_id`='$id',`bd_name`='$name',`bd_Gender`='$gender',`bd_age`='$age',`bd_bgroup`='$group',`bd_reg_date`='$date',`bd_phno`='$nb' WHERE bd_id ='$oldid'";
$result =  mysqli_query($conn,$sql);
if($result > 0)
    {
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }
?>
