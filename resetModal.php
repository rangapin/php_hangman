<!--MODAL-->
<div class="modal fade" id="resetConfirmModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CAUTION</h5>
                <button type="button" class="btn-close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Do you really want to reset the scoreboard?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">CANCEL</button>
                <form method="post" action="hangman.php">
                    <button class="btn btn-danger" name="reset">RESET SCOREBOARD</button>
                </form>
            </div>
        </div>
    </div>
</div>