<!-- MOET NOG EEN LINK ZIEN TE MAKEN VOOR RESET PW VOOR IN DE MAIL -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link href="assets/css/resetpw.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href=" ">
</head>
<body>
    <form method="post">
        <div class="center">
        <h1>Create here your new password</h1>
        <form method="POST">
         <!-- Email -->
         <div class="txt_field">
                    <input  type="text"  placeholder="" required>
                    <label>Email</label>
            </div>

            <!-- Password -->
            <div class="txt_field" id="password">
                <input type="text" placeholder="" required> 
                    <label>Password</label>
            </div>

            <!-- Repeat Password -->
            <div class="txt_field">
                <input  type="text"  placeholder="" required>
                <label>Confirm Password</label>
            </div>
            
            <div class="login">
                <input type="submit" value="Login">
            </div>
</body>
</html>