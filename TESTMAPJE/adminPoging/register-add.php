<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>
        Add User/admin
        <a href="view-register.php">BACK</a>
    </h4>

    <form action="code.php" method="POST">
        <div class="row">
            <label >Firstname</label>
            <input type="text" name="firstName">
           
            <label>Name</label>
            <input type="text" name="lastName">
            
            <label >Email</label>
            <input  type="email" name="mail">
          
            <label >Password</label>
            <input type="password" name="password_new" >

            <label class="input-label">Confirm Password</label>
            <input class="inputfield" type="password">
      

        <label >Gender</label>
        <div id="gender">
            <label for="vrouw"> <input type="radio" name="gender_id" value="01" required="required">vrouw </label>
            <label for="man"> <input type="radio" name="gender_id" value="02">man </label>
            <label for="x"><input type="radio" name="gender_id" value="03">x </label>
        </div> <br>

       
            <label >Date of Birth</label>
            <input type="date" name="birthday" >
  

        <input  name="save" type="submit" value="Login">









        </div>






</body>
</html>