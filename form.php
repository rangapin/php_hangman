<div class="row text-center justify-content-center mt-4">
    <div class="col-6">
        <?php
            foreach (range('A', 'Z') as $letter) {
                if (in_array($letter, $_SESSION['guesses'])) {
                    echo "<button class='btn btn-secondary disabled alphabetButton' id='$letter'>$letter</button>";
                } else {
                    echo "<button class='btn btn-info alphabetButton' id='$letter'>$letter</button>";
                }
            }
        ?>
    </div>
</div>