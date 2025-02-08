<?php 
$nameOfpage = "Login Form";



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
        a{
            text-decoration: none;
            color: #fff;
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
            <form action="pross.php" method="post">
               
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
    <button type="submit" class="btn btn-primary btn-lg btn-block hb" name="btn"><a >Login</a></button>

</center>            
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
