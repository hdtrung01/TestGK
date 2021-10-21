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
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://vinmec-prod.s3.amazonaws.com/images/20191022_050222_090448_hien-mau-co-tac-dun.max-1800x1800.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add</h3>

            <form class="px-md-2"  action ="checkadd.php" method="POST">

              <div class="form-outline mb-4" >
              
                <input type="text" id="id" class="form-control" name ="id" />
                <label class="form-label" for="form3Example1q">ID</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control" name= "name" />
                <label class="form-label" for="form3Example1q">Name</label>
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
                    <label for="exampleDatepicker1" class="form-label">Select a date</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                    
                  <select class="select" id= "gender" name = "gender">
                  <option value="1" disabled>Gender</option>
                  <option value="2">nu</option>
                    <option value="3">nam</option>
                  </select>
                </div>
              </div>

              <div class="mb-4">

                <select class="select" name= "group">
                  <option value="1" disabled>Blood Group</option>
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
                    <label class="form-label" for="form3Example1w">age</label>
                  </div>
                  <div class="form-outline">
                    <input type="text" id="phone" class="form-control" name= "nb" />
                    <label class="form-label" for="form3Example1w">Phone number</label>
                  </div>
                 
                  

                </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1" name ="add">Add</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>