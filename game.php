<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>stone-paper-scissors</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script rel="stylesheet" type="text/javascript" src="js/style.js"></script>
  </head>
  <body>
    <?php
      $myname = $_POST["myname"];
      $enemyname = $_POST["enemyname"];
      $fight_num = $_POST["fight-num"];
      ?>

    <h1>STONE-PAPER-SCISSORS</h1>
    <h2 id="round">
      <?php echo "ROUND ";?>
      <span id="round-col">1</span>
    </h2>

<!-- myself-side -->
    <div class="myself-side">
      <h2><?php echo $myname; ?></h2>
      <img id="img-stone" src="img/stone.jpg" alt="" style="width: 400px;">
      <img id="img-paper" src="img/paper.jpg" alt="" style="width: 400px;">
      <img id="img-scissors" src="img/scissors.jpg" alt="" style="width: 400px;">
      <ul class="select">
        <li><button class="btn" id="btn-stone" type="button" name="action">STONE</button></li>
        <li><button class="btn" id="btn-paper" type="button" name="action">PAPER</button></li>
        <li><button class="btn" id="btn-scissors" type="button" name="action">SCISSORS</button></li>
        <li><button id="btn-reset" type="button" name="reset">RESET</button></li>
      </ul>
    </div>

<!-- fight-rogo -->
    <div class="fight-rogo">
      <table border="1">
        <tr>
          <td><h1 id="result-text">addddddd</h1></td>
        </tr>
        <tr>
          <td><h1>VS</h1></td>
        </tr>
      </table>
    </div>

<!-- enemy-side -->
    <div class="enemy-side">
      <h2><?php echo $enemyname; ?></h2>
      <img class="img-random" src="img/stone.jpg" alt="" style="width: 400px;">
      <!-- <img id="img-paper2" src="img/paper.jpg" alt="">
      <img id="img-scissors2" src="img/scissors.jpg" alt=""> -->
    </div>
  </body>
</html>
