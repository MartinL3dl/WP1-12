<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$birthyear = filter_input(INPUT_POST,'birthyear');
$guessage = date('Y') - $birthyear;
$class = filter_input(INPUT_POST, 'class');
$school = filter_input(INPUT_POST, 'school');
$hobbies = filter_input(INPUT_POST, 'hobbies');
$discription = filter_input(INPUT_POST, 'description');
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Formulář byl odeslán</p>
    <ul>
    <li>jméno a příjmení : <?= $firstname ?> <?= $lastname ?></li>
    <li>odhadovaný věk : <?= $guessage ?></li>
    <li>škola : <?= $school ?></li>
    <li>koníčky : <?= $hobbies ?></li>
    <li>Třída : <?= $class ?></li>
    </ul>
    <p>Popis : <?= $discription ?> </p>
</body>
</html>