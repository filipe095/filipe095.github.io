<!doctype html>
<html>

    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/loginStyle.css">
        <link rel="stylesheet" href="./node_modules/sweetalert/dist/sweetalert.css" type="text/css">
        <script type="text/javascript" src="./node_modules/sweetalert/dist/sweetalert.min.js"></script>

        <title> PMS </title>

        <?php
            require_once 'dbconfig.php';
        ?>

    </head>



    <body>
    <p>O Pedro é paneleiro</p>
       <header>

            <center><p>Project Manager System</p></center>

        </header>


        <main id="login">

                <h3>Log In</h3>

                <br>


                <?php

                    if(isset($_POST['btn-login']))
                    {
                        $nome = $_POST['username'];
                        $email = $_POST['username'];
                        $pass = $_POST['password'];

                        if($user->login($nome, $email, $pass))
                        {
                            $user->redirect('home.php');
                        }
                        elseif (!$user->login($nome, $email, $pass))
                        {
                            echo "<script>swal('Oops...', 'O Username ou a Password estão incorretas!', 'error');</script>";
                        }
                    }
                ?>

                <form name="login" method="POST">
                    <p>Username: </p>
                    <input type="text" name="username" size="30" required>
                    <br>
                    <br>
                    <p>Password: </p>
                    <input type="password" name="password" size="30" required>
                    <br>
                    <br>
                    <button id="loginbtn" type="submit" name="btn-login" style="width: 100%; height: 3em;"> Log In </button>
                    <br>
                    <br>
                </form>

        </main>

    </body>

</html>
