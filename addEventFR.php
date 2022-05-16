<!-- WE GAAN BEETJE AANPASSEN NOG -->

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
      if (isset($_REQUEST['save'])){
      
          $budget_max = $_POST['budget_max'];
          $event_name = $_POST['event_name'];

          $date_event = stripslashes($_REQUEST['date_event']);
          $date_event = mysqli_real_escape_string($conn,$date_event); 

          $location = stripslashes($_REQUEST['location']);
          $location = mysqli_real_escape_string($conn,$location);
  
          $budget_min = stripslashes($_REQUEST['budget_min']);
          $budget_min = mysqli_real_escape_string($conn,$budget_min); 
  
          $budget_max = stripslashes($_REQUEST['budget_max']);
          $budget_max = mysqli_real_escape_string($conn,$budget_max); 
  
          $event_name = stripslashes($_REQUEST['event_name']);
          $event_name = mysqli_real_escape_string($conn,$event_name); 
   


          $query1 = "INSERT INTO `event_type` (event_type_id, date_event, location, budget_min, budget_max, event_name, event_friend_id)
          VALUES ('','$date_event','$location, '$budget_min','$budget_max','$event_name','')";
         
        
            $result1 = mysqli_query($conn,$query1);
           
            if($result1){
            echo "<div class='form'>
            <h3>event type added.</h3></div>";
            }
            else{
                echo "<div class='form'>
                <h3>fault</h3></div>";
            }
            
        }
        else{
        ?>

        <!-- om alles div te centreren, zie figma -->
        <div class="centraal"> 

        <!-- action: code waar alles wordt verstuurd naar db  -->
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form">
                    <!-- EVENT DATE -->
                    <i class="material-icons">date_range</i>
                    <input class="form-control" type="date" name="date_event" required> 
                    <br>
                    <br>

                    <!-- TYPE OF EVENT -->
                    <i class="material-icons">event</i>
                    <input class="form-control" type="text" name="event_name" placeholder="birthday brunch" required>
                    <br>
                    <br>

                    <!-- LOCATIE (suggestion of Google Maps) -->
                    
                    <i class="material-icons">assistant_navigation</i>
                    <input class="form-control" type="text" name="location" placeholder="Antwerp">
                    <br>
                    <br>
       
                   
                   <!-- FRIENDS HOBBY -->
                
                    <!-- tabindex houdt gwn in, als je klikt op tab of hij werkelijk mag tappen. tabindex 1 is enkel tabben naar 1e en bij de rest niet. Ik heb geozen voor 50 maar we gaan nooit komen aan 50 events -->
                    <div id="list1" class="dropdown-check-list" tabindex="500">
                    <span class="anchor">Select their Hobbies</span>
                    <ul class="items">

                        <li> <input type="checkbox" name="hobby_friend" value="01" /> Boeken </li>
                        <li> <input type="checkbox" name="hobby_friend" value="02"  /> Muziek, Film & Games </li>
                        <li> <input type="checkbox" name="hobby_friend" value="03" /> Computer & Elektronica </li>
                        <li> <input type="checkbox" name="hobby_friend" value="04"  /> Speelgoud, Hobby & Feest </li>
                        <li> <input type="checkbox" name="hobby_friend" value="05" /> Zwanger, Baby & Peuter </li>
                        <li> <input type="checkbox" name="hobby_friend" value="06"  /> Mooi & Gezond </li>
                        <li> <input type="checkbox" name="hobby_friend" value="07"  /> Kleding, Schoenen & Accessoires </li>
                        <li> <input type="checkbox" name="hobby_friend" value="08"  /> Sport, Outdoor & Reizen </li>
                        <li> <input type="checkbox" name="hobby_friend" value="09"  /> Kantoor & School </li>
                        <li> <input type="checkbox" name="hobby_friend" value="10"  /> Eten & Drinken </li>
                        <li> <input type="checkbox" name="hobby_friend" value="11"  /> Wonen, Koken & Huishouden </li>
                        <li> <input type="checkbox" name="hobby_friend" value="12"  /> Dier, Tuin & Klussen </li>
                        <li> <input type="checkbox" name="hobby_friend" value="13"  /> Auto & Motor </li>
                    </ul>
                    </div>
                    <br>
                    <br>

                    <!-- PRICE RANGE SLIDER -->
                   
                    <div class="info">
                         <!-- output: min INT - max INT -->
                        <div class="price-input">
                            <div class="field">
                            <span>Min</span>
                            <!-- value = default -->
                            <input type="number" class="input-min" value="2500" name="budget_min">
                            </div>

                            <div class="separator">-</div>

                            <div class="field">
                            <span>Max</span>
                            <input type="number" class="input-max" value="7500" name="budget_max">
                            </div>
                        </div>

                        <!-- slider option -->
                        <div class="slider">
                            <div class="progress"></div>
                        </div>

                        <!-- slider option -->
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="2500" step="10">
                            <input type="range" class="range-max" min="0" max="10000" value="7500" step="10">
                        </div>

                    </div>
                    <input type="submit" name="submit" value="Submit"> 
                </div>     
            </form>
        </div>
        <script src="assets/js/add.js"></script>

    <?php 
        }
    ?>

</body>
</html>
