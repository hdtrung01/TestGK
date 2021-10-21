<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
       h1{ 
           color : red;
           margin: 1px 300px 1px 450px;
       }
</style>   
<body>
<h1>hế lô chào mừng các trym mơ!!</h1>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Old</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Date</th>
      <th scope="col">Phone number</th>
    </tr>
  </thead>
  <tbody>
    <style>
a {
width:80px;
height:40px;
margin:20px;
}

    </style>
<?php
 $conn=mysqli_connect('localhost','root','','blood_bank');
 if(!$conn)
 die('Kết nối thát bại!!');
 $sql= "SELECT * FROM blood_donor";
 $result= mysqli_query($conn,$sql);
 $gender='Nam';
 $nhom="A";
 
 if(mysqli_num_rows($result)>0)
 while($row=mysqli_fetch_assoc($result)){
     if($row['bd_Gender'] ==2)
       $gender="Nữ";
     if($row['bd_bgroup']==3 )
       $nhom ="B";
     if($row['bd_bgroup']==4 )
       $nhom="AB";
     if($row['bd_bgroup']==5 )
       $nhom="O";       
echo    '<tr>';
echo    '<th scope="row">'.$row['bd_id'].'</th>';
echo     '<td>'.$row['bd_name'].'</td>';
echo    '<td>'.$gender. '</td>';
echo    '<td>'.$row['bd_age'].'</td>';
echo    '<td>'.$nhom.'</td>';
echo    '<td>'.$row['bd_reg_date'].'</td>';
echo    '<td>'.$row['bd_phno'].'</td>';
echo  '</tr>';
echo  '</tr>';
 }
?>
  </tbody>
</table>
<?php
echo '<a class="btn btn-primary" href="add.php" role="button">Add</a>';
echo '<a style="background:red" class="btn btn" href="delete.php" role="button">Delete</a>';
echo '<a style="background:green" class="btn btn" href="edit.php" role="button">edit</a>';
?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>