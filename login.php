<!-- INORDE -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css" />
</head>

<body>
    <?php
    require('conn.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['mail'])) {
        // removes backslashes
        $mail = stripslashes($_REQUEST['mail']);
        //escapes special characters in a string
        $mail = mysqli_real_escape_string($conn, $mail);

        $password_new = stripslashes($_REQUEST['password_new']);
        $password_new = mysqli_real_escape_string($conn, $password_new);

        //Checking whetever user is an admin in the database or not

        if ($query = "SELECT * FROM `users` WHERE mail='$mail' and password_new='$password_new' and user_id=7") {
            $result = mysqli_query($conn, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['mail'] = $mail;
                // Redirect user to index.php
                header("Location: admin.php");
            }
            if ($rows == 0) {
                //Checking whetever user is uberhaupt an user in the database or not
                if ($query = "SELECT * FROM `users` WHERE mail='$mail' and password_new='$password_new'") {
                    $result = mysqli_query($conn, $query) or die(mysql_error());
                    $rows = mysqli_num_rows($result);
                    if ($rows == 1) {
                        $_SESSION['mail'] = $mail;
                        // Redirect user to index.php
                        header("Location: calendar.php");
                    }
                    //Checking whetever user is uberhaupt an user in the database or not
                    if ($rows == 0) {
                        if ($query = "SELECT * FROM `users` WHERE mail='$mail' and password_new!='$password_new'") {
                            $result = mysqli_query($conn, $query) or die(mysql_error());
                            $rows = mysqli_num_rows($result);
                            if ($rows == 1) {
                                echo "<div class='form'>
                                        <h3>password is incorrect.</h3>
                                        <br/>Click here to <a href='login.php'>login</a>
                                        </div>";
                            }
                            if ($rows == 0) {
                                if ($query = "SELECT * FROM `users` WHERE mail!='$mail' and password_new!='$password_new'") {
                                    $result = mysqli_query($conn, $query) or die(mysql_error());
                                    $rows = mysqli_num_rows($result);
                                    if ($rows > 1) {
                                        echo "<div class='form'>
                                                    <h3>mail not existed pls register.</h3>
                                                    <br/>Click here to <a href='register.php'>register</a></div>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
    ?>
        <div class="container">
            <div class="left-section">
                <div class="center">
                    <h1>Welcome back!</h1>
                    <form method="POST">
                        <!-- Email -->
                        <div class="txt_field">
                            <label class="input-label">Email</label>
                            <br>
                            <input class="inputfield" type="text" name="mail" placeholder="" required>
                        </div>

                        <!-- Password -->
                        <div class="txt_field" id="password">
                            <label>Password</label>
                            <br>
                            <input class="inputfield" type="password" name="password_new" placeholder="" required>
                        </div>


                        <input class="input-submit d-block mr-0 ml-auto" type="submit" value="Login">
                    </form>


                </div>
                <div class="signup-link d-block mb-0">
                    Not a member? <a href="register.php"> Sign up</a>
                </div>

            </div>
            <div class="right-section">
                <!-- <h2>Care <br> About <br> You</h2> -->
                <img src="assets/images/kado.jpg" class="picture" />
                <!-- <p> Some gifts are big. Others are small. But the ones that come from the heart are the best gifts of all.
                    <br> – Tinku Razoria
                </p> -->
            </div>



            <!-- Hier komt nog validation accounts daarom is er nog geen action -->


        </div>
    <?php
    }
    ?>
</body>

</html>