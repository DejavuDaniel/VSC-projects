<div class="signup-form">
        <form action="" method="post">
            <h2>CONGRATULATIONS!</h2>
            <div class="form-group">
                <h2>WINNER!</h2>
            </div>
            <div class="form-group">
        <?php
            echo '<h2 class="winner name" style="color:Yellow;-webkit-text-stroke: 2px black;font-size:50px;">'.strtoupper($_SESSION['Winner']).'</h2>';
        ?>
            </div>      
            <div class="form-group">
                <button type="submit" class="btn-danger btn btn-lg redButton" name="playAgain">Play Again</button>
            </div>
        </form>
</div>

<?php 

    if(isset($_POST['playAgain'])) {
        session_destroy();
    }

?>
