
<?php
    if (isset($_POST['Submit'])) { 
        $_SESSION['playerOne'] = $_POST['Player_one'];
    } 
?> 

<div class="signup-form">
        <form action="" method="post">
            <h2>Start Game</h2>
            <hr>
            <div class="form-group">
            <input type="text" class="form-control" name="Player_one" placeholder="Player One" required="required">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="Player_two" placeholder="Player Two" required="required">
            </div>      
            <div class="form-group">
                <button type="submit" name="Submit" class="btn btn-lg btn-success">Play</button>
            </div>
        </form>
</div>

