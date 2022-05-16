<!-- WERKT niet WEGENS 2 QUERIES VOOR 2 VERSCH TABELLEN, SQL ONDERSTEUNT DAT NIET -->
<?php
	require_once 'conn.php';

	if(ISSET($_POST['save'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$hobby_friend= $_POST['hobby_friend'];
		$gender_id = $_POST['gender_id'];
		$age = $_POST['age'];


		$date_event = date('Y-m-d', strtotime($_POST['date_event'])) ;
		$location = $_POST['location'];
		$budget_min = $_POST['budget_min'];
		$budget_max = $_POST['budget_max'];
		$event_name = $_POST['event_name'];

		$file = explode(".", $_FILES['image']['name']);
		$ext = array("png", "gif", "jpg", "jpeg");

		if(in_array($file[1], $ext)){
			$file_name = $file[0].'.'.$file[1];
			$tmp_file = $_FILES['image']['tmp_name'];
			
			if(!is_dir('./upload'))
				mkdir('./upload');

			$location = "upload/".$file_name;
			$new_location = addslashes($location);


			if(move_uploaded_file($tmp_file, $location)){
				$conn->query("INSERT INTO `friend` VALUES ('','$firstName', '$lastName', '$age', '$gender_id','$hobby_friend','$new_location')");
				$conn->query("INSERT INTO `event_type` VALUES ('','$date_event','$location, '$budget_min','$budget_max','$event_name')");	
				echo "<script>alert('Data Insert')</script>";
				echo "<script>window.location = 'view.php'</script>"; 
				// moet naar de game 
			}

		}
		else{
			echo "<script>alert('File not available')</script>";
			echo "<script>window.location = 'view.php'</script>";
			// moet naar de game
		}
	}
?> 

