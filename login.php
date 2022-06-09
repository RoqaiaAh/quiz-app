<?php include  "connection.php";?>
<?php session_start();?>
<?php
$number = (int) $_GET['n'];//to get the question number
// get question
$query = "select * from questions where Question_Number='$number'";  
//get result 
$result=$db->query($query) or die ($db->error.__LINE__);
$question = $result->fetch_assoc();
// get choice
$query = "select * from choices where Question_Number='$number'";
// get results 
$choices= $db->query($query) or die ($db->error.__LINE__);
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" />
    <title>Questions</title>

</head>
<body>
<img class ="flower"src="img/flower.png"/>
    <div class="quiz-container" id="quiz">
    
        <div class="quiz-header">
           
                 <h2 class="current"> Question <?php echo $question['Question_Number']?> of 10</h2>
                 <p class= "question" style="font-size:25px;">
                     <?php echo $question['Question'];?>
                 </p>
                 <form method="post" action="process.php">
            <ul class ="choices">
                <?php while ($row = $choices->fetch_assoc()):?>
                    <li>
                    <input type="radio" name="choice" value = <?php echo $row['ID'];?> class="answer">
                    <?php echo $row['Choice'];?>
                </li>
                    <?php endwhile;?>
            </ul>
            <button type="submit" class="submit" value="submit">Submit</button>
            <input type="hidden" name="number" value="<?php echo $number;?>"/>
                </form>
            
        </div>
       
  
    </div>
    
</body>
</html>
