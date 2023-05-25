<?php 

$con = mysqli_connect('localhost', 'root', '', 'loginPHP');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$username = mysqli_real_escape_string($con, $_POST['user']);
$password = mysqli_real_escape_string($con, $_POST['pass']);

$result = $con -> query("SELECT * from users where username = '$username' and password = '$password'" );
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
    //redirects to desired page if credentials are correct
    header("Location: welcome.php");
    //echos message if credentials are incorrect
} else {
    echo "Sorry. Please try again to re-enter";
}

?>