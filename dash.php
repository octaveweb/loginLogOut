<?php



session_start();

if(isset($_SESSION["email"])){

    $email = $_SESSION["email"];
    $name = $_SESSION['name'];
    $ph = $_SESSION['phn'];
}else{
    header('Location:log.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h2>Name: <?php echo  $name ?></h2>
    <h2>Name: <?php echo  $email ?></h2>
    <h2>Name: <?php echo  $ph ?></h2>
    <a href="logout.php">Logout</a>
</head>
<body>
    
</body>
</html>