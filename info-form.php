





<?php include('info-script.php'); ?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="infostyle.css" />
    <!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-Uz9fQjxuFvN8Y7jRpTIF/dw2nV3q/X+CbfaA/muUVp9nL7JHj4pZ4+WhbtaJNhvo" crossorigin="anonymous">
<!-- tailwind -->
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<!-- fontawasome -->
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <title>Moonlight</title>
  </head>
  <body>
<?php
include 'connection.php';
include ('register-script.php')

?>
    <nav>
      <div class="logo">
<span>        Moonlight Secondary School
</span>
      </div>
      <menu>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Lorem</a></li>
        
      </menu>

    </nav>

    <section id="details">
      <div class="alpha ab">
      
        <div class="container my-5">
            <div class="">
              <div class="col-md mx-auto">
                <form action="" method="post">
          <h3>Please Fill Your Details Correctly</h3>
                  <div class="form-group ">
                    <label for="name" class="col-sm col-form-label">Name</label>
                    <div class="">
                      <input type="text" class="form-control border " name="name" id="name" placeholder="Enter name" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="">
                      <input type="tel" class="form-control border " name="phone" id="phone" placeholder="Enter phone number" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="">
                      <input type="text" class="form-control border " name="address" id="address" placeholder="Enter address" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="stream" class="col-sm-2 col-form-label">Stream</label>
                    <div class="">
                      <input type="text" class="form-control border " name="stream" id="stream" placeholder="Enter stream" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="shift" class="col-sm-2 col-form-label">Shift</label>
                    <div class="">
                      <input type="text" class="form-control border " name="shift" id="shift" placeholder="Enter shift" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="year" class="col-sm-2 col-form-label">Year</label>
                    <div class="">
                      <input type="text" class="form-control border " name="year" id="year" placeholder="Enter your admission year" required>
                    </div>
                  </div>
          
                  <button type="submit" class="btn btn-primary">Submit</button>
          
                </form>
              </div>
            </div>
          </div>
          
        
        
       
   
      </div>
      <div class="beta ab">
        <div class="icontainer">
<img src="" alt="" srcset="">
        </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-N3w+izFNFmDBbs8RyWyzLVvZZfQ+ebKjX06PZ7OuFvCwTfVQOtlJ+O7nn1Ioq3Ez" crossorigin="anonymous"></script>
<script src="script.js"></script>
  </body>
</html>
