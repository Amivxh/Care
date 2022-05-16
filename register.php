<!-- INORDE, BUITEN ONDERSTAANDE OPMERKINGEN -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care about you</title>
    <link href="assets/css/register.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- NTH: https://www.delftstack.com/howto/php/php-validation-email/ VALIDATION MAIL BV .123 BESTAAT NIET MAAR WEL .ORG HH maar dat is echt ons laatste zorg ajb -->

    <!--  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" zetten bij pw -> mins 1 uppercase lowercase digit en mins 8charact MAJA dan sws nog 
altijd innerhtml gebruiken om fout uit te leggen aan user #GEBRUIKSVRIENDELIJK YK bij first en last name
moet dit niet cuz das vrij logisch dat er geen cijfer zijn in namen, bij wachtwoorden kan alle combis en elke
site heeft zn eigen vereisten. -->

    <?php
    require('conn.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['mail'])) {
        // removes backslashes
        $firstName = stripslashes($_REQUEST['firstName']);

        //escapes special characters in a string
        $firstName = mysqli_real_escape_string($conn, $firstName);

        $lastName = stripslashes($_REQUEST['lastName']);
        $lastName = mysqli_real_escape_string($conn, $lastName);

        $gender_id = stripslashes($_REQUEST['gender_id']);
        $gender_id = mysqli_real_escape_string($conn, $gender_id);

        $mail = stripslashes($_REQUEST['mail']);
        $mail = mysqli_real_escape_string($conn, $mail);

        $password_new = stripslashes($_REQUEST['password_new']);
        $password_new = mysqli_real_escape_string($conn, $password_new);

        $birthday = stripslashes($_REQUEST['birthday']);
        $birthday = mysqli_real_escape_string($conn, $birthday);


        $select = mysqli_query($conn, "SELECT * FROM users WHERE mail = '" . $_POST['mail'] . "'");
        if (mysqli_num_rows($select)) {
            echo "<div class='form'>
            <h3>Sorry, mail already been used!</h3>
            <br/>Click here to <a href='register.php'>Register</a>
            <br/>Or click here to <a href='login.php'>login</a>
            </div>";
        } else {
            $query = "INSERT into `users` (user_id, firstName, lastName, gender_id, password_new, mail, birthday)
                        VALUES ('','$firstName', '$lastName','$gender_id', '$password_new', '$mail', '$birthday')";

            // '".md5($password_new)."' om te sleutelen bv
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<div class='form'>
                <h3>You are registered Successfully.</h3>
                <br/>Click here to <a href='login.php'>Login</a></div>";
            }
        }
    } else {

    ?>
        <div class="container">
            <div class="right-section">
                <p class="title">CARE <br> ABOUT <br> YOU</p>
            </div>
            <div class="left-section">
                <div class="center">
                    <form action="" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
                        <div class="center">
                            <h1>Hello, sign up and care more!</h1>

                            <!-- Firstname -->
                            <div class="txt_field">
                                <label class="input-label">Firstname</label>
                                <input class="inputfield" type="text" name="firstName" pattern="[a-zA-Z\s]{1,}" placeholder="" required>
                            </div>

                            <!-- Name -->
                            <div class="txt_field">
                                <label class="input-label">Name</label>
                                <input class="inputfield" type="text" name="lastName" pattern="[a-zA-Z\s]{1,}" placeholder="" required>
                            </div>

                            <!-- Email -->
                            <div class="txt_field">
                                <label class="input-label">Email</label>
                                <input class="inputfield" type="email" name="mail" placeholder="" required>
                            </div>

                            <!-- Password -->
                            <div class="txt_field" id="password">
                                <label class="input-label">Password</label>
                                <input class="inputfield" type="password" name="password_new" id="pswd1" placeholder="" required>

                            </div>

                            <!-- Repeat Password -->
                            <div class="txt_field">
                                <label class="input-label">Confirm Password</label>
                                <input class="inputfield" type="password" name="passwordcheck" id="pswd2" placeholder="" required>
                            </div>

                            <!-- gender -->
                            <label class="input-label" for="gender">Gender</label>
                            <div id="gender">
                                <label for="vrouw"> <input type="radio" name="gender_id" value="01" required="required">vrouw </label>
                                <label for="man"> <input type="radio" name="gender_id" value="02">man </label>
                                <label for="x"><input type="radio" name="gender_id" value="03">x </label>
                            </div> <br>

                            <div class="input-wrapper">
                                <label class="input-label">Date of Birth</label>
                                <input class="inputfield" type="date" name="birthday" value="" required>
                            </div>

                            <input class="input-submit d-block mr-0 ml-auto" name="save" type="submit" value="Login">



                        </div>
                    </form>
                    <script src="assets/js/register.js"></script>

                <?php


            }


                ?>
                </div>
            </div>
</body>

</html>