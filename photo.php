<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo - Land | Street</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="photo.css">
</head>
<body>
    <!-- Nagłówek -->
    <div id="header">
        <div id="back">
            <a href="index.php">
                <span id="arrow" class="material-icons">
                    keyboard_backspace
                </span>
            </a>    
        </div>
        <img src="row_black_photoland300px.png" alt="Photo - Land" id="logo">
    </div>
    <div id="main">
        <?php 
            $servername="localhost";
            $serverpass="";
            $serveruser="root"; 
            $dbname="photoland";    
            $conn = mysqli_connect($servername, $serveruser, $serverpass, $dbname);
            if(!$conn){
                die("Błąd połączenia: ". mysqli_connect_error());
            };      
        ?>
        <!-- zdjęice + Tytuł -->
        <div id="img">
            <?php 
                $id = $_GET['id'];
                $query = $conn -> query("SELECT * FROM photos WHERE `id_photo` = '".$id."'");
                $row = mysqli_fetch_assoc($query);
            ?>
            <p><?php echo $row['title']?></p>
            <img src="img/<?php echo $row['photo']?>" alt="<?php echo $row['title']?>" id="photo">
        </div>
        <!-- Gwiazdy -->
        <div id="star">
            <span class="material-icons star">
                star
            </span>
            <span class="material-icons star">
                star
            </span>
            <span class="material-icons star">
                star
            </span>
            <span class="material-icons star">
                star_border
            </span>
            <span class="material-icons star">
                star_border
            </span>
        </div>
        <!-- email + komentarz -->
        <div id="form">
        <form action="" method="POST">
            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="text" name="kom" id="kom" placeholder="Komentarz">
            <input type="submit" value="WYŚLIJ" name="wyslij" id="wyslij" placeholder="WYŚLIJ">
        </form>
        <?php
            if(isset($_POST['wyslij'])){
                $id = $_GET['id'];
                $email = $_POST['email'];
                $com = $_POST['kom'];
                $data=date('Y-m-d');
                $com_query = $conn -> query("INSERT INTO comments (`conntent`, `email`, `id_photo`, `add_date`) VALUES ('".$com."', '".$email."', '".$id."',  '".$data."')");
            }
        ?>
        <!-- Komentarze -->
        <div id="komentarze">
            <?php 
                $id = $_GET['id'];
                $query1 = $conn -> query("SELECT DISTINCT * FROM comments WHERE `id_photo` = '".$id."' ORDER BY `add_date` DESC");
                while($row1 = mysqli_fetch_assoc($query1)){
            ?>
                <div class="com">
                    <p class="date"><?php echo $row1['add_date']."  ".$row1['email']?></p>
                    <p class="content"><?php echo $row1['conntent']?></p>
                </div>
            <?php } ?>
        </div>  
        </div>
    </div>
    
</body>
</html>