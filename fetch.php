<? // Start the session
session_start();

// Connect to the database
include('connection.php');
include('signin-script.php');
// start session
session_start();


// Query the database to fetch the user details
$stmt = $conn->prepare("SELECT name, address, year, stream, shift, phone FROM userdetails WHERE username = $username");
$stmt->bind_param("i", $id);
$username = $_SESSION['username']; // Rplace with the ID of the user whose details you want to fetch
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Store the user details in session variables
$_SESSION['name'] = $row['name'];
$_SESSION['address'] = $row['address'];
$_SESSION['year'] = $row['year'];
$_SESSION['stream'] = $row['stream'];
$_SESSION['shift'] = $row['shift'];
$_SESSION['phone'] = $row['phone'];

// Close the database connection
$stmt->close();
$conn->close();

?>