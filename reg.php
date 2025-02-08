
<?php 

include "conn.php";

$nameOfpage = "Registration Form";

if (isset($_POST["name"])) {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $sql = "INSERT INTO `registration_form` (`id`, `name`, `phone`, `email`, `password`, `time`) VALUES (NULL, '$name', '$phone', '$email', '$password', 'current_timestamp()');";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        $mass = true;
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

$conn->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $nameOfpage ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .con-t {
            height: 96vh;
            width: 100%;
        }
        .hb{
            width: 100%;
        }

        @media (min-width: 1400px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        max-width: 36vw;
    }
}
    </style>
</head>

<body>
    <div class="con-t d-flex justify-content-center align-items-center flex-column position-relative">
        <h2><?php echo $nameOfpage ?></h2>
        <br>
        
        <div class="container ">
            <form action="reg.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Name" name="name" required>
                    <label for="floatingName">Name</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control" id="floatingNumber" placeholder="Phone" name="phone"
                        required>
                    <label for="floatingNumber">Phone</label>
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                        name="email" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingNumber" placeholder="password" name="password"
                        required>
                    <label for="floatingNumber">Password</label>
                </div>
                <br>
<center>
    <button type="submit" class="btn btn-primary btn-lg btn-block hb">Registration</button>

</center>            
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!-- INSERT INTO `registration_form` (`id`, `name`, `phone`, `email`, `password`, `time`) VALUES (NULL, 'Karan Swarnakar', '7003399598', 'karanswarnakar955@gmail.com', '123456789', 'current_timestamp()'); -->