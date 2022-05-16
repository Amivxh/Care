<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ol>
        <li>Dashnoard</li>
        <li>users</li>
    </ol>  

    <h4>
        Registered User
        <a href="register-add.php">Add admin</a>
    </h4>
    <thead>
        <tr>
            <th> user_id </th>
            <th> firstName </th>
            <th> lastName </th>
            <th> mail </th>
            <th> birthday </th>
            <th> gender_id </th>
            <th> password </th>
            <!-- <th> edit </th> -->
            <th> delete </th>
        </tr>
    </thead>

    <tbody>
        <?php 
                $query="SELECT * FROM users";
                $query_run= mysqli_query($conn, $query)
                    if(sqli_nuum_rows($query_run)>0)
                    {
                        foreach($query_run as $row)
                        {
                            ?>
                            <tr> 
                                <td> <?= $row["user_id"]; ?>      </td>
                                <td> <?= $row["firstName"]; ?>    </td>
                                <td> <?= $row["lastName"]; ?>     </td>
                                <td> <?= $row["password_new"]; ?> </td>
                                <td> <?= $row["mail"]; ?>         </td>
                                <td> <?= $row["gender_id"]; ?>    </td>
                                <td> <?= $row["birthday"]; ?>     </td>
                                
                                <td> <a href="register_edit.php?id=<?=$row["id"];?>" class="btn">Edit </a></td>
                            
                                
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="button" value="?=$row["user_id"]; ?> " >Delete </button>
                                </td>
                            </tr>

                            <?php
                        }
                    }
                    else{
                        ?>

                            
                        }



                               
                                
</body>
</html>