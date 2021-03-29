<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login Page</title>
    <!-- Style CSS -->
    <style>
        * {
            font-family: 'Roboto';
        }

        body {
            background-image: url("image.jpg");
            background-position: center;
            min-height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .card-body {
            font-family: 'Poppins';
        }

        .card {
            width: 500px;
            border: 1px solid #ccc;
            padding: 40px;
            margin: auto;
            margin-top: 15%;
            box-shadow: 5px 5px 5px #9A9A9A;

        }

        .card h1 {
            text-align: center;
            text-transform: uppercase;
            padding-bottom: 15px;
        }

        label {
            font-size: 13px;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        #username,
        #pass {
            width: 100%;
            padding: 10px 6px;
            border: 1px solid black;
            border-radius: 5px;
        }

        #shpass {
            display: inline;
        }

        #btn {
            margin-top: 15px;
            ;
        }
    </style>
</head>

<body>
    <!-- Halaman Login -->
    <div class="card">
        <div class="card-body ">
            <?php if(isset($_SESSION['login'])) : ?>
            <?php

            if($_SESSION['login'] == 0) { 
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['login_message']; ?>
                </div>
            <?php } ?>

            <?php endif; ?>

            <h1>Login Page</h1>
            <form action="proseslogin.php" method='POST'>
                <label for="user">Username/E-mail</label>
                <input type="text" name="username" id="username" placeholder="Your username or e-mail" required>

                <label for="password">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Type your password here" required>

                <input type="checkbox" name="showpass" id="showpass" onclick="showPass()">
                <label for="showpass" id="shpass">Show a password</label>
                <br>
                <button class="btn btn-primary" id="btn" type="submit">Login</button>
            </form>
        </div>
    </div>

    <?php
    unset($_SESSION['login']);
    ?>

    <!-- Show password -->
    <script>
        function showPass() {
            var pass = document.getElementById("pass").type;

            if (pass == 'password') {
                document.getElementById("pass").type = 'text';
            } else {
                document.getElementById("pass").type = 'password';
            }
        }
    </script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Javascript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script>
         $('.alert').delay(500).fadeOut(2000);
    </script>
</body>
</html>