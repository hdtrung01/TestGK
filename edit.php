<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Edit</h3>

            <form class="px-md-2"  action ="checkedit.php" method="POST">
            <input type="text" id="id" class="form-control" name ="oldid" />
                <label class="form-label" for="form3Example1q">OLD ID</label>
              </div>  
            <input type="text" id="id" class="form-control" name ="id" />
                <label class="form-label" for="form3Example1q">New ID</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control" name= "name" />
                <label class="form-label" for="form3Example1q">New Name</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input
                      type="date"
                      class="form-control"
                      id="date"
                      name = "date"
                    />
                    <label for="exampleDatepicker1" class="form-label">New date</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                    
                  <select class="select" id= "gender" name = "gender">
                  <option value="1" disabled>New Gender</option>
                  <option value="2">nu</option>
                    <option value="3">nam</option>
                  </select>
                </div>
              </div>

              <div class="mb-4">

                <select class="select" name= "group">
                  <option value="1" disabled>New Blood Group</option>
                  <option value="2">A</option>
                  <option value="3">B</option>
                  <option value="4">AB</option>
                  <option value="5">O</option>
                </select>

              </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">
                <div class="form-outline">
                    <input type="text" id="age" class="form-control" name ="age" />
                    <label class="form-label" for="form3Example1w">New age</label>
                  </div>
                  <div class="form-outline">
                    <input type="text" id="phone" class="form-control" name= "nb" />
                    <label class="form-label" for="form3Example1w">New Phone number</label>
                  </div>
                 
                  

                </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1" name ="add">Edit</button>

            </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>