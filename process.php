<?php include  "connection.php"; ?>
<?php session_start();?>
<?php 
//check the score 
if (!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}
if($_POST){
    $number=$_POST['number']; //number of question
    $selected_choice=$_POST['choice'];//the answer ive made
    $next_question=$number+1;

    //get correct choice
    $query="select * from choices where Question_Number='$number' and Is_Correct=1";
    $result=$db->query($query) or die ($db->error.__LINE__);
    $row =$result->fetch_assoc();
    $correct_choice=$row['ID']; 

    if($correct_choice == $selected_choice)
    {
        $_SESSION['score']++;
    }
    if($number == 10){
        header("location: final.php");
        exit();
    }else {
        header("location: login.php?n=".$next_question);
    }

}
?>