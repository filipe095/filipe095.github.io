<?php include_once 'dbconfig.php' ?>



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

                <form name="login" method="POST" id="login">
                    <p>Username: </p>
                    <input type="text" name="username" size="30" required>
                    <br>
                    <br>
                    <p>Password: </p>
                    <input type="password" name="password" size="30" required>
                    <br>
                    <br>
                    <button id="loginbtn" type="submit" name="btn-login" style="width: 20%; height: 3em;"> Log In </button>
                    <br>
                    <br>
                </form>
