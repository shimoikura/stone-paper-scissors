$(document).ready (function(){
  var result1;
  var result2;
  var round_num = 1;
  var win_num = 1;
  $(".btn").click(function(){
     var pattern = $(this).attr("id");
//  my choose
     if (pattern == "btn-stone") {
        $("#img-stone").show();
        $("#img-paper").hide();
        $("#img-scissors").hide();
        result1 = 1;
     }
     else if (pattern == "btn-paper") {
       $("#img-stone").hide();
       $("#img-paper").show();
       $("#img-scissors").hide();
       result1 = 2;
     }
     else if(pattern == "btn-scissors"){
       $("#img-stone").hide();
       $("#img-paper").hide();
       $("#img-scissors").show();
       result1 = 3;
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
    if ((result1 < result2 && result3 == 2) || (result1 > result2 && result3 == 3)||(result1 < result2 && result3 ==6)) {
      round_num++;
      $("#round-col").text(round_num);
      $("#result-text").text("lose");

    }
    else if ((result1 > result2 && result3 == 2)||(result1 < result2 && result3 == 3)||(result1 > result2 && result3 == 6)) {
      // 勝ち
      round_num++;
      win_num++;
      $("#round-col").text(round_num);
      $("#result-text").text("win");

    }
    else {
      $("#result-text").text("aiko");
    }
  });

  $("#btn-reset").click(function(){
    round_num = 1;
    win_num = 1;
    $("#round-col").text(round_num);
    $("#result-text").text("");
  });
  });
