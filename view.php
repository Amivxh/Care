<!-- ANOUK GAAT VRAGEN AAN ZUS HOE DIT OP TE LOSSEN DAT IE FRIENDID ERAAN KOPPELT AAN BUTTON -->

<?php include 'nav.php' ?>
<?php include 'auth.php' ?>

<?php
    require_once 'conn.php';
    $sql = "SELECT friend_id, firstName, lastName FROM friend";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["friend_id"]. " - Name: ". $row["firstName"]. " " . $row["lastName"] . "<br>";
            // echo "<form action=\"editForm.php\" method=\"get\"><input type=\"hidden\" name=\"id\" value=\"$data['id']\" style=\"text-decoration: none\" /><input type=\"submit\" value=\"Edit\" /></form></td>";

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>