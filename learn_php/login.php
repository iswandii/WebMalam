<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Submit</button>
                    </form>

                </form>
            </div>
            <div class="col-md-4"></div>


        </div>
    </div>


    <?php
    if (isset($_POST['login'])) {
        $username   = $_POST['email'];
        $password   = $_POST['pass'];

        if ($username == 'Iswandi@budi' && $password == '123') {
            echo "window.location.href='admin'";
        } else {
            echo "<script?>alert('Username atau Password salah')</script>";
        }
    }
    ?>










    <!-- <?php
            $username = "Iswandi";
            $password = "admin";

            if ($username == "Iswandi" && $password == "admin") {
                echo "Selamat datang kembali $username";
            } else {
                echo "Username atau Password salah";
            }

            ?> -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>