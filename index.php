<?php


?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit.php" method="post">
    <label for="i-lastname">příjmení:</label><input type="text" name="lastname" id="i-lastname">
    <br>
<label for="i-firstname">křestní jméno:</label><input type="text" name="firstname" id="i-firstname">
<br>
<label for="">rok narození:</label><input type="number" min="1940" max="2020" name="birthyear" id="i-birthyear">
<br>
<label for="i-school">Škola do které chodíte:</label><input type="text" name="school" id="i-school">
<br>
<label for="i-hobbies">koníčky které máte:</label><input type="text" name="hobbies" id="i-hobbies">
<br>
<label for="i-class">Třída :</label><input type="text" name="class" id="i-class">
<br>

<label for="">popište se ve větách:</label>
<br>
<textarea name="description" id="i-discription" cols="30" rows="10">
Toto je popisek který je potřeba vyplnit
</textarea>
<br>
<input type="submit" value="odeslat">    
    </form>


</body>
</html>