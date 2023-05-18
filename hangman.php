<?php

include "functions.php";

include "header.php";

setUpGame();

include ("categorySelection.php");

if ($_SESSION['lives'] <= 0) {

    include "youLost.php";

    youLost();
} else {
    $currentStateOfPlay = currentStateOfPlay();

    include "currentStateOfPlay.php";

    youWon();
}

if ($_SESSION['lives'] != 0 && $_SESSION['lettersLeftToGuess'] != 0) {
    include "form.php";
}
$returnedArray = getRating();
$returnedGrade = $returnedArray[0];
$returnedColor = $returnedArray[1];
include "scoreboard.php";
include "footer.php";
