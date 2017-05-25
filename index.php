<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>stone-paper-scissors</title>
  </head>
  <body>
    <form class="initial-setting" action="game.php" method="post">
      <table>
        <tr>
          <td>Enter your name</td>
          <td>:</td>
          <td><input type="text" name="myname" value=""></td>
        </tr>
        <tr>
          <td>Enter enemy name</td>
          <td>:</td>
          <td><input type="text" name="enemyname" value=""></td>
        </tr>
        <tr>
          <td>Number of fight</td>
          <td>:</td>
          <td><select class="fight-num" name="fight-num">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="3"><button type="submit" name="button">GO!!</button></td>
        </tr>
      </table>
    </form>
  </body>
</html>
