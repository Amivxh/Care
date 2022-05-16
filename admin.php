<!-- 
NOG DELETE FUNCTION AANMAKEN
 -->


 <!-- https://stackoverflow.com/questions/43020663/button-to-delete-a-user-account -->

 <?php
require('conn.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- https://programmierfrage.com/items/how-to-create-a-delete-button-for-each-row-in-the-table -->

<!-- //poging tot maar nog niet juist, dit is niet de link. Link probeer ik na werk; -->
<?php 
    if($_SESSION['mail'] == 'careaboutyou.cay@gmail.com') {
            $result = mysql_query("DELETE FROM users WHERE user_id=$user_id") or die(mysql_error()); 
            echo "<center>Delete.!</center>";
?> -->


    <label>Insert user_id</label>
    <input  type="text" name= "user_id" placeholder="" required>
    <input type="submit"name="submit_btn" value="Login">

</body>
</html>
