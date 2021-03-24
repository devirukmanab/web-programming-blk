<?php
    include "rumuslingkaran.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Halaman Login</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .card {
            background-color: #93E1D2;
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
       }

       label {
           font-size: 13px;
           margin-top: 5px;
           margin-bottom: 10px;
       }

        #username, #pass {
            width: 100%;
            padding: 10px 6px;
            border: 1px solid black;
            border-radius: 5px;
        }       

        #shpass {
            display: inline;
        }

        #btn {
           margin-top: 15px;;
        }

    </style>
</head>


<!-- Fungsi PHP LOGIN -->
<?php 
   if(isset($_POST['pass'])) {
       $name = $_POST['username'];
       $password = $_POST['pass'];

    // Function
    login($name, $password);
   }
?>

<body>
<!-- Halaman Login -->
<div class="card">
  <div class="card-body ">
    <h1>Login Page</h1>
    <form action="" method='post'>
        <label for="user">Username</label>    
        <input type="text" name="username" id="username" placeholder="Your username" required>

        <label for="password">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Type your password here" required>

        <input type="checkbox" name="showpass" id="showpass" onclick="showPass()">
        <label for="showpass" id="shpass">Show a password</label>
        <br>
        <button class="btn btn-dark" id="btn" type="submit">Login</button>
    </form>    
    </div>
</div>

    <!-- Show password -->
    <script>
        function showPass() {
            var pass = document.getElementById("pass").type;

            if(pass == 'password') {
                document.getElementById("pass").type = 'text';
            } else {
                document.getElementById("pass").type = 'password';
            }
        }
        
    </script>
</body>
</html>