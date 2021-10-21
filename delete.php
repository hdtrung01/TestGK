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
html{
background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1rtHpbmWPyq7Zjnv1g2fNW7u-REZN5GxWQA&usqp=CAU) ;
}
h2{color: red; 
   }
</style>
<body>
 
    <h2>Nhập ID để xóa  người hiến máu!! </h2>
    <form class="px-md-2"  action ="checkdelete.php" method="POST">

              <div class="form-outline mb-4" >
              <label class="form-label" for="form3Example1q">ID</label>
                <input type="text" id="id" class="form-control" name ="id" />
                
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1" name ="delete">Delete</button>

   </form>         
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>