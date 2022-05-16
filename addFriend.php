<!-- SOLUTION VOOR ADD.PHP MAAR NOG NIET DEFINITIEF -->

<?php include 'nav.php' ?>
<?php include 'auth.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/add.css" type="text/css">
    </head>
    <body>

<?php
      require('conn.php');
      if (isset($_REQUEST['firstName'])){
          $firstName = stripslashes($_REQUEST['firstName']);
          $firstName = mysqli_real_escape_string($conn,$firstName); 

          $lastName = stripslashes($_REQUEST['lastName']);
          $lastName = mysqli_real_escape_string($conn,$lastName);
  
          $gender_id = stripslashes($_REQUEST['gender_id']);
          $gender_id = mysqli_real_escape_string($conn,$gender_id); 
  
          $age = stripslashes($_REQUEST['age']);
          $age = mysqli_real_escape_string($conn,$age); 

          $query = "INSERT INTO `friend` (friend_id, firstName, lastName, gender_id, image, age)
           VALUES ('','$firstName', '$lastName', '$gender_id','','$age')";

           $result = mysqli_query($conn,$query);
          if($result){
            echo "<div class='form'>
            <h3 style=text-align:center>friend added.</h3>
            </div>";
            }

          
        }
        else{
        ?>


        <!-- om alles div te centreren, zie figma -->
        <div class="centraal"> 

        <!-- action: code waar alles wordt verstuurd naar db  -->
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form">
    
                    <!-- Image -->
                    <div class=image>
                            <form runat="server">
                                <img id="bestand" src="#" alt="your image" />
                                <br>
                                <input accept="image/*" type='file' id="imgInp" name="image" />
                            </form>
                    </div>

                    <!-- NAME -->
                    <i class="material-icons">perm_identity</i>
               
                    <input class="form-control" type="text" name="firstName" placeholder="Joe" required >
                    <input class="form-control" type="text" name="lastName" placeholder="Doe">
                    <br>
                    <br>


                    <!-- AGE -->
                    <label>Age</label>
                    <input class="form-control" type="number" name="age" required>
                    <br>
                    <br>

                    <label for="gender">Gender</label>
                    <div id="gender">
                        <label for="vrouw"> <input type="radio" name="gender_id" value="01" >vrouw </label>
                        <label for="man"> <input type="radio" name="gender_id" value="02" >man </label>
                        <label for="onz"><input type="radio" name="gender_id" value="03" >x </label>
                    </div> 
                    <input name="save" type="submit" value="Login">
                </div>     
            </form>
       
        </div>
        
        <script src="assets/js/add.js"></script>

    <?php 
        }
    ?>

</body>
</html>

