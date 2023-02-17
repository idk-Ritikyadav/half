

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
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
    include('connection.php');
    include('signin-script.php');

    
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

    <section>
      <div class="alpha ab">

      
        <div class="container">

          <form action="" method="post">
            <h1>Signin</h1>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control border" name="username" id="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control border" name="password" id="password">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Signin">
              <p class="already">Don't have an account? <a href="register.php">Register</a></p>

            </div>
          </form>
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
