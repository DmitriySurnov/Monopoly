<?php

require_once "Classes/Dices.php";
use Classes\Dices;

$dices = new Dices();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monopoly</title>
    <link rel="stylesheet" href="Styles/footer.css">
    <link rel="stylesheet" href="Styles/Dice.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
<?php echo $dices ->getDicesValueImage(); ?>
</body>
<footer>
    <div>
        <span> Crated by Surnov Dmitriy (2023) </span>
    </div>
</footer>
<script src="js/DicesThrower.js"></script>
</html>

