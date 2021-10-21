<?php
$id=$_POST['id'];
echo $id;

$conn =mysqli_connect('localhost','root','','blood_bank');
if(!$conn){
die("kết nối thất bại");
}
$sql="DELETE FROM blood_donor WHERE bd_id ='$id'";
$result=mysqli_query($conn,$sql);
if($result > 0)
header("Location:index.php");
else
echo 'that bai'
?>