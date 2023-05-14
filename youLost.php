<div class="alert alert-danger text-center" id="lostAlertBox" role="alert">
    Oh dear, you lost!
</div>
<div class="text-center">
    The word was:
    <h1><?php echo $_SESSION['word'] ?></h1>
    <a href="hangman.php" class="btn btn-success" role="button">Play Again?</a>
</div>