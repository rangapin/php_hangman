<div class="row" id="scoreboardRow">
    <div class="col-md-6 text-center">
        <canvas id="canvas" width="350" height="300"></canvas>
    </div>
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item active">SCOREBOARD</li>
            <li class="list-group-item d-flex justify-content-between">Correct Guesses<span class="badge bg-primary"><?php echo $_SESSION['correctGuesses'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Incorrect Guesses<span class="badge bg-primary"><?php echo $_SESSION['incorrectGuesses'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Won<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Lost<span class="badge bg-primary"><?php echo $_SESSION['gamesLost'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Total Games Played<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] + $_SESSION['gamesLost'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">
                <button class="btn btn-danger" data-toggle="modal" data-target="#resetConfirmModal">RESET SCOREBOARD</button>
                <button class="btn btn-outline-<?php echo $returnedColor; ?>"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="Your rating is based on your percentage of correct guesses."                
                >RATING: <?php echo $returnedGrade; ?></button>
            </li>
        </ul>
    </div>
</div>
<?php include "resetModal.php" ?>