<?php
$name = $_POST['name'];
$id = $_POST['id'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$group = $_POST['group'];
$nb = $_POST['nb'];
$age = $_POST['age'];
echo $group;
$conn =mysqli_connect('localhost','root','','blood_bank');
if(!$conn){
die("kết nối thất bại");
}

$sql_1 = "INSERT INTO blood_donor values('$id','$name','$gender','$age','$group','$date','$nb')";
echo $sql_1;
    $result_1 = mysqli_query($conn,$sql_1);
    if($result_1 > 0)
    {
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }



?>