<?php 
session_start();
include "conn.php";

if(isset($_POST["btn"])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

// echo $email." ".$pass."";

$sql = "SELECT * FROM registration_form WHERE email = '$email' AND password = ' $pass'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    
    $row = mysqli_fetch_array($result);
    $email = $row["email"];
    $pass = $row["password"];
    $name = $row["name"];
    $phn = $row["phone"];

    $_SESSION['name'] = $name;
    $_SESSION['phn'] = $phn;
    $_SESSION['email'] = $email;

    header('Location:dash.php');

}else{
    echo "email or password does not match!";
}


}
    

?>

