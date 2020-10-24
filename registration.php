<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
        <?php
        require './vendor/autoload.php';

        use deemru\Blake2b;

        require('db.php');
        // If form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
                // removes backslashes
                $username = stripslashes($_REQUEST['username']);
                // escapes special characters in a string
                $username = mysqli_real_escape_string($con, $username);
                $email = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($con, $email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                $trn_date = date("Y-m-d H:i:s");
                $blake2b = new Blake2b();
                $hash = $blake2b->hash($password);
                $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '" . md5($hash) . "', '$email', '$trn_date')";
                $result = mysqli_query($con, $query);
                if ($result) {
                        echo "<div class='container'>
                        <div class='mt-5 white-box text-center'>
                            <h1 class='text-center'>You have been registered successfully!</h1>
                            <p class='mt-3'>Time to proceed! <a href='login'>Login Here</a>.</p>
                        </div>
                    </div>";
                }
        } else {
                ?>
                <div class="container">
                        <div class="form mt-5">
                                <form name="registration" action="" method="post" class="text-center p-5">
                                        <h1>Registration</h1>
                                        <input type="text" name="username" placeholder="Username" required class="form-control mt-5" />
                                        <input type="email" name="email" placeholder="Email" required class="form-control mt-3" />
                                        <input type="password" name="password" placeholder="Password" required class="form-control mt-3" />
                                        <input type="submit" name="submit" value="Register" class="btn btn-security mt-5" />
                                        <p class="mt-5">Already have an account? <a href='login'>Login Here</a>.</p>
                                </form>
                        </div>
                </div>
        <?php } ?>
</body>

</html>