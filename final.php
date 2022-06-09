<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <script src="myscript.js"></script>
    <title>Final score</title>
  </head>
  <body>
  <img class ="flower final"src="img/flower.png"/>
    <div class="quiz-container">
      <div class="quiz-header">
        <h2>You're Done!!</h2>
        <p>Congrats! You have completed the quiz</p>
        <p>Final score : <?php echo $_SESSION['score']; ?></p>
        
        <button class="again" onclick="window.location.href='login.php?n=1'">again</button>
        <?php $_SESSION['score']=null;?>

        <button class="exit" onclick="window.location.href='index.php'" >exit</button>

      </div>
    </div>
  </body>
</html>
