
<div class="flex-container">

  <div class="flex-child magenta">
    <div class="position-relative">
      <img src="dart_board.png" alt="">
      <?php 
       echo $_SESSION['dot'];
      ?>
      <!-- <img class="redDot" src="blackDot.png" width= "50px" height="50px" style="top:250px;left:0px;" alt=""> -->
    </div>
  </div>
  
  <div class="flex-child green">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Round:</th>
        <?php 
          echo '<th scope="col">' .strtoupper($_SESSION['playerNameOne']). ':</th>';
          echo '<th scope="col">' .strtoupper($_SESSION['playerNameTwo']). ':</th>';
        ?>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row"> 1</th>
      <?php
        echo "<td>" .$_SESSION['play1'][0]. "</td>";
        echo "<td>" .$_SESSION['play2'][0]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 2</th>
      <?php
        echo "<td>" .$_SESSION['play1'][1]. "</td>";
        echo "<td>" .$_SESSION['play2'][1]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 3</th>
      <?php
        echo "<td>" .$_SESSION['play1'][2]. "</td>";
        echo "<td>" .$_SESSION['play2'][2]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 4</th>
      <?php
        echo "<td>" .$_SESSION['play1'][3]. "</td>";
        echo "<td>" .$_SESSION['play2'][3]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 5</th>
      <?php
        echo "<td>" .$_SESSION['play1'][4]. "</td>";
        echo "<td>" .$_SESSION['play2'][4]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 6</th>
      <?php
        echo "<td>" .$_SESSION['play1'][5]. "</td>";
        echo "<td>" .$_SESSION['play2'][5]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 7</th>
      <?php
        echo "<td>" .$_SESSION['play1'][6]. "</td>";
        echo "<td>" .$_SESSION['play2'][6]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 8</th>
      <?php
        echo "<td>" .$_SESSION['play1'][7]. "</td>";
        echo "<td>" .$_SESSION['play2'][7]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 9</th>
      <?php
        echo "<td>" .$_SESSION['play1'][8]. "</td>";
        echo "<td>" .$_SESSION['play2'][8]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> 10</th>
      <?php
        echo "<td>" .$_SESSION['play1'][9]. "</td>";
        echo "<td>" .$_SESSION['play2'][9]. "</td>";
      ?>
        </tr>
        <tr>
        <th scope="row"> Score:</th>
      <?php
        echo "<td>" .array_sum($_SESSION['play1']). "</td>";
        echo "<td>" .array_sum($_SESSION['play2']). "</td>";
      ?>
        </tr>
    </tbody>
    </table>
  </div>
</div>
<form method="get">
  <div class="shootButton">
      <button type="submit" class="shootBtn btn btn-danger" name="button1">Shoot!</button>
  </div>
</form>

<?php

  $x1 = 400;
  $y1 = 400;
  $x2 = rand(1, 800);
  $y2 = rand(1, 800);

  $result = sqrt(abs(pow($x2 - $x1, 2) + pow($y2 - $y1, 2)) * 1.0);


  switch (true) {
    case $result <= 40:
      $dartPoint = 10;
      break;

    case $result <= 75:
      $dartPoint = 9;
      break;

    case $result <= 130:
      $dartPoint = 8;
      break;
    
    case $result <= 205:
      $dartPoint = 7;
      break;
  
    case $result <= 280:
      $dartPoint = 6;
      break;
  
    case $result <= 350:
      $dartPoint = 5;
      break;

    case $result <= 425:
      $dartPoint = 4;
      break;
    
    default:
      $dartPoint = 0;
      break;
  }


  if(isset($_GET['button1'])){
    $_SESSION['dot'] = '<img class="redDot" src="pinkDot.png" width= "50px" height="50px" style="top:' .$y2. 'px;left:' .$x2. 'px;" alt="">';
    if($_SESSION['count'] < 20) {
      if($_SESSION['count'] % 2 != 0) {
        $random = rand(0, 10);
        array_push($_SESSION['play2'], $dartPoint);
        $_SESSION['count'] += 1;
      } else {
        $random = rand(0, 10);
        array_push($_SESSION['play1'], $dartPoint);
        $_SESSION['count'] += 1;
      } 
    } else {
      if ($_SESSION['play1'] != $_SESSION['play2']) {
        if($_SESSION['play1'] > $_SESSION['play2']) {
          $_SESSION['Winner'] = $_SESSION['playerNameOne'];
        } else {
          $_SESSION['Winner'] = $_SESSION['playerNameTwo'];
        }
      } else {
        $_SESSION['Winner'] = "DRAW!!!";
      }
    }

    header("location: ./index.php");
    die;
  
  }
  // session_destroy();
?>