<!-- KAN PAS NADAT SCRAPING GELUKT IS XX -->

<?php include 'nav.php' ?>
<?php include 'auth.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
h1 {
    text-align: center;
    font-size: 10em !important;
}
</style>
<body>

<div class="container">
        <h1> Game Time </h1>
    </div>
    

<?php
$command = escapeshellcmd('python scraper.py');
$output = shell_exec($command);
echo $output;
?>


</body>
</html>