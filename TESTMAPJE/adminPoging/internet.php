<?php include 'conn.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th> user_id </th>
            <th> firstName </th>
            <th> lastName </th>
            <th> mail </th>
            <th> birthday </th>
            <th> gender_id </th>
            <th> password </th>
            <th> edit </th>
            <th> delete </th>
            </tr>
        </thead>
        <tbody>

        <?php 
            $query="SELECT * FROM users";
            $query_run= mysqli_query($conn, $query)

                if(sqli_nuum_rows($query_run)>0)
                {
                    foreach($query_run as $row){
                        <tr> 
                            <td> <?php echo $row["user_id"]; ?>      </td>
                            <td> <?php echo $row["firstName"]; ?>    </td>
                            <td> <?php echo $row["lastName"]; ?>     </td>
                            <td> <?php echo $row["password_new"]; ?> </td>
                            <td> <?php echo $row["mail"]; ?>         </td>
                            <td> <?php echo $row["gender_id"]; ?>    </td>
                            <td> <?php echo $row["birthday"]; ?>     </td>
                            
                            <td> <a href="register_edit.php?id=<?=$row["id"];?>" class="btn">Edit </a></td>
                           
                            <td> 
                                <form action="code.php" method="POST">
                                    <button type="button" name="user_delete" value="" class="btn_btn-danger"> Danger </button>
                                </form>
                            </td>
                            </tr>
                    }
                }

                else{
                    ?>
                        <tr>
                            <td colspan="9"></td>
                        </tr>
                    <?php
                }
                ?>
          
            <tr>
                <td> <?php echo $row["user_id"]; ?> </td>
                <td> <?php echo $row["firstName"]; ?> </td>
                <td> <?php echo $row["lastName"]; ?> </td>
                <?php echo $row["password_new"]; ?> </td>
                <td> <?php echo $row["mail"]; ?> </td>
                <td> <?php echo $row["gender_id"]; ?> </td>
                <td> <?php echo $row["birthday"]; ?> </td>
           
            </tr>
        

        <tbody>
    <table>
</body>
</html>