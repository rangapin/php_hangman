<?php 

include "header.php";

if(!isset($_SESSION['word'])){
    $words = file("words.txt");
    $word = rtrim(strtoupper($words[array_rand($words)]));
    $_SESSION['word'] = $word;
    $_SESSION['guesses'] = [];
    $_SESSION['lives'] = 6;
    if(!isset($_SESSION['gamesWon'])){
        $_SESSION['gamesWon'] = 0;
    }
    if(!isset($_SESSION['gamesLost'])){
        $_SESSION['gamesLost'] = 0;
    }
}

if(isset($_POST['guess'])){
    if(!in_array($_POST['guess'], $_SESSION['guesses'])){
        if(strpos($_SESSION['word'], $_POST['guess']) === FALSE){
            $_SESSION['lives']--;
        }
        $_SESSION['guesses'][] = $_POST['guess'];
    } else {
        echo "You have already guessed that letter<br>";
    }

}

$remainingLetters = array_diff(range('A', 'Z'), $_SESSION['guesses']);

if($_SESSION['lives'] <= 0){
    ?>
    <div class="alert alert-danger text-center" id="lostAlertBox" role="alert">
        Oh dear, you lost!
    </div>
    <div class="text-center">
        The word was:
        <h1><?php echo $_SESSION['word'] ?></h1>
        <a href="hangman.php" class="btn btn-success" role="button">Play Again?</a>
    </div>


    <?php
    $_SESSION['gamesLost']++;
    unset($_SESSION['word']);
} else {
    $lettersLeftToGuess = 0;
    $currentStateOfPlay = '';
    $wordLength = strlen($_SESSION['word']);
    for($i = 0; $i < $wordLength; $i++){
        if(in_array($_SESSION['word'][$i], $_SESSION['guesses'])){
            $currentStateOfPlay .= $_SESSION['word'][$i];
        } else {
            $currentStateOfPlay .= "_";
            $lettersLeftToGuess++;
        }
        $currentStateOfPlay .= " ";
    }

    ?>

    <div class="text-center" id="currentStateOfPlay">
        <h1><?php echo $currentStateOfPlay; ?></h1>
    </div>

    <?php

    if($lettersLeftToGuess == 0){
        ?>
        <div class="alert alert-success text-center" role="alert">
            You Won!
        </div>
        <div class="text-center">
        <a href="hangman.php" class="btn btn-success" role="button">Play Again?</a>
        </div>
        <?php
        $_SESSION['gamesWon']++;
        unset($_SESSION['word']);
    }

}


if($_SESSION['lives'] !=0 && $lettersLeftToGuess !=0){
?>

<form class="row g-3" method = "post" action = "">
  <div class="col-auto">
    <select class="form-select" name="guess">
        <?php
            foreach($remainingLetters AS $letter){
                echo '<option value = "'.strtoupper($letter).'">'.strtoupper($letter).'</option>';
            }   
        ?>
    </select>
  </div>
  <div class="col-auto">
    <button type="submit" name = "submit" class="btn btn-primary mb-3">GUESS</button>
  </div>
</form>

<?php
}
?>
<div class="row" id="scoreboardRow">
    <div class="col-md-6">canvas</div>
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item active">SCOREBOARD</li>
            <li class="list-group-item d-flex justify-content-between">Games Won<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Lost<span class="badge bg-primary"><?php echo $_SESSION['gamesLost'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Total Games Played<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] + $_SESSION['gamesLost'] ?></span></li>
        </ul>
    </div>
</div>
<?php
include "footer.php";