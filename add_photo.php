<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo - Land | Dodaj Zdjęcie</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="add_photo.css">
</head>
<body>
    <!-- nagłówek -->
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
    <!-- Formularz -->
    <form action="#" method="POST">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <input type="text" name="title" id="title" placeholder="Title">
        <!-- Napis "Dodaj zdjęcie" -->
        <div id="add_photo">
            <span id="img" class="material-icons">
                image
            </span>
            <p>Dodaj Zdjęcie</p>
        </div>
        <div id="kreska"></div>
        <!-- Input[file] -->
        <input type="file" name="Photo" id="Photo" placeholder="Prześlij">
        <label for="Photo" class="custom-file-upload">
            <p>Dodaj zdjęcie</p>
        </label>
        <!-- przyciski -->
        <div id="button">
            <input type="submit" value="Dodaj" class="btn">
            <input type="button" value="Anuluj" class="btn">
        </div>
    </form>
</body>
</html>