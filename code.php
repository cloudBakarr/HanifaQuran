<?php
session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'alfaryad_newuser');
define('DB_PASSWORD', 'alfaryad_newuser');
define('DB_NAME', 'alfaryad_acedamy');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['login'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = 'select * from users where email="'.$email.'" AND password ="'.$password.'" ';


    if ($re = mysqli_query($link,$sql)) {
        $rowcount=mysqli_num_rows($re);
        if ($rowcount == 0){
            $_SESSION['error'] = 'Invalid email or password';
            header("Location: sign-in.php");
        }else{
            unset($_SESSION['error']);
            $res = mysqli_fetch_assoc($re);
            $_SESSION['user'] = $res;
            header("Location: dashboard.php");
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}


if(isset($_POST['register'])) {

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$password_con = $_POST['re-type-password'];

$sql = "INSERT INTO `users` (`first_name`,`middle_name`,`last_name`,`phone_number`,`email`,`address`,`course`,`gender`,`password`)
VALUES
  (
    
    '".$first_name ."',
    '".$middle_name ."',
    '".$last_name ."',
    '".$phone_number ."',
    '".$email ."',
    '".$address ."',
    '".$course ."',
    '".$gender ."',
    '".$password ."'
  );";


    if (mysqli_query($link, $sql)) {
            header("Location: sign-in.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
//$re = ;
}



?>