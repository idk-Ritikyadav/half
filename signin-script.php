<?php 

include('connection.php');




if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
// $username = "ritikso";
// $password = "2357";
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $hash = $user['password'];
        if (password_verify($password, $hash)) {
            session_start();
            $_SESSION['username'] = $username;



$sql ="SELECT `name`, `stream`, `shift`, `year`, `address`, `phone` FROM userdetails WHERE username = '$username'";
            // Retrieve the user's profile data from the database
            // $sql = "SELECT `name`, `stream`, `shift`, `year`, `address`, `phone` FROM userdetails WHERE username = $username";
            $result = mysqli_query($conn, $sql);
      
            // Check if the query was successful and if the user's profile data exists
            if (mysqli_num_rows($result) == 1) {
              $row = mysqli_fetch_assoc($result);
              // Store the user's profile data in session variables
              $_SESSION["name"] = $row["name"];
              $_SESSION["stream"] = $row["stream"];
              $_SESSION["shift"] = $row["shift"];
              $_SESSION["year"] = $row["year"];
              $_SESSION["address"] = $row["address"];
              $_SESSION["phone"] = $row["phone"];
            }
            
            // Close the database connection
            mysqli_close($conn);

            header("Location: profile.php");
        } else {
            echo "Incorrect username or password";
        }
    } else {
        echo "Incorrect username or password";
    }
}





?>


