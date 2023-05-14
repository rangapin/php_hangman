<div class="row" id="scoreboardRow">
    <div class="col-md-6 text-center">
        <canvas id="canvas" width="350" height="300"></canvas>
    </div>
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item active">SCOREBOARD</li>
            <li class="list-group-item d-flex justify-content-between">Games Won<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Games Lost<span class="badge bg-primary"><?php echo $_SESSION['gamesLost'] ?></span></li>
            <li class="list-group-item d-flex justify-content-between">Total Games Played<span class="badge bg-primary"><?php echo $_SESSION['gamesWon'] + $_SESSION['gamesLost'] ?></span></li>
        </ul>
    </div>
</div>