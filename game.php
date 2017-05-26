<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>stone-paper-scissors</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <!-- <script rel="stylesheet" type="text/javascript" src="js/style.js"></script> -->
  </head>
  <body>
    <?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($severname,$username,$password);
    $db = mysqli_select_db($conn,"game");

    $myname = $_POST["myname"];
    $enemyname = $_POST["enemyname"];
    $fight_num = $_POST["fight-num"];

     $query = "insert into record (id,myname,opponent,fight_num,win_num)values('','$myname','$enemyname','$fight_num','$')";
      ?>

    <h1>STONE-PAPER-SCISSORS</h1>
    <h2 id="round"><span id="round-text"><?php echo "ROUND ";?></span>
      <span id="round-col">1</span>
    </h2>

<!-- myself-side -->
    <div class="myself-side">
      <h2><?php echo $myname; ?></h2>
      <img id="img-stone" src="img/stone.jpg" alt="" style="width: 400px;">
      <img id="img-paper" src="img/paper.jpg" alt="" style="width: 400px;">
      <img id="img-scissors" src="img/scissors.jpg" alt="" style="width: 400px;">
      <ul class="select">
        <li><input class="btn" id="btn-stone" type="submit" name="action" value="stone" /></li>
        <li><input class="btn" id="btn-paper" type="submit" name="action"/ value="paper"></li>
        <li><input class="btn" id="btn-scissors" type="submit" name="action" value="scissors"></li>
        <li><input id="btn-reset" type="submit" name="reset" value="RESET"/></li>
      </ul>
      <div class="win-num-box">
        <table>
          <tr>
            <td>win count</td>
            <td><h1 id="win-num">0</h1></td>
          </tr>
        </table>

      </div>
    </div>

<!-- fight-rogo -->
    <div class="fight-rogo">
      <h1>VS</h1>
      <h1 id="result-text"></h1>
      <form class="" action="index.html" method="post">
        <input type="submit" name="" value="result">
      </form>
    </div>

<!-- enemy-side -->
    <div class="enemy-side">
      <h2><?php echo $enemyname; ?></h2>
      <img class="img-random" src="img/stone.jpg" alt="" style="width: 400px;">
      <!-- <img id="img-paper2" src="img/paper.jpg" alt="">
      <img id="img-scissors2" src="img/scissors.jpg" alt=""> -->
      <div class="lose-num-box">
        <table>
          <tr>
            <td>lose count</td>
            <td><h1 id="lose-num">0</h1></td>
          </tr>
        </table>

      </div>
    </div>


<script type="text/javascript">
    $(document).ready (function(){
      var result1;
      var result2;
      var round_num = 1;
      var win_num = 0;
      var lose_num = 0;
      var fight_num = <?php echo $fight_num; ?>;
      $(".btn").click(function(){
         var pattern = $(this).attr("id");
           //  my choose
           switch (pattern) {
             case "btn-stone":
               $("#img-stone").show();
               $("#img-paper").hide();
               $("#img-scissors").hide();
               result1 = 1;
               break;
            case "btn-paper":
              $("#img-stone").hide();
              $("#img-paper").show();
              $("#img-scissors").hide();
              result1 = 2;
              break;
             default:
             $("#img-stone").hide();
             $("#img-paper").hide();
             $("#img-scissors").show();
             result1 = 3;
             break;
           }
       //  enemy choose
            var images = [
              'img/stone.jpg',
              'img/paper.jpg',
              'img/scissors.jpg'
            ];
            var randImg = images[Math.floor(Math.random() * images.length)];
            $('.img-random').attr('src', randImg);
            switch (randImg) {
              case 'img/stone.jpg':
                result2 = 1;
                break;
              case 'img/paper.jpg':
                result2 = 2;
                break;
              case 'img/scissors.jpg':
                result2 = 3;
                break;
            }
            var result3 = result1 * result2;
            // you LOSE
            if ((result1 < result2 && result3 == 2) || (result1 > result2 && result3 == 3)||(result1 < result2 && result3 ==6)) {
              if (round_num < fight_num) {
                round_num++;
                lose_num++;
                $("#round-col").text(round_num);
                $("#result-text").text("lose");
                $("#lose-num").text(lose_num);
              }
              else {
                lose_num++;
                $("#round-col").text("finish");
                $(".btn").attr('disabled',"");
                $("#round-text").hide();

                $("#result-text").text("lose");
                $("#lose-num").text(lose_num);
              }
            }
            // you WIN
            else if ((result1 > result2 && result3 == 2)||(result1 < result2 && result3 == 3)||(result1 > result2 && result3 == 6)) {
              if (round_num < fight_num) {
                round_num++;
                win_num++;
                $("#round-col").text(round_num);
                $("#result-text").text("win");
                $("#win-num").text(win_num);
              }
              else {
                win_num++;
                $("#round-col").text("finish");
                $(".btn").attr('disabled',"");

                // $("#round").css({display:none});
                $("#round-text").hide();

                $("#result-text").text("win");
                $("#win-num").text(win_num);
              }
            }
            else {
              $("#result-text").text("aiko");
            }
      });

      $("#btn-reset").click(function(){
        round_num = 1;
        win_num = 0;
        lose_num = 0;
        $("#win-num").text(win_num);
        $("#lose-num").text(lose_num);
        $("#round-col").text(round_num);
        $("#result-text").text("");
        $("#round-text").show();
        $(".btn").removeAttr('disabled',"");

      });
      });

    </script>
  </body>
</html>
