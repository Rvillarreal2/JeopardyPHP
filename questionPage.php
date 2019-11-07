<?php
session_start();
?>


<!DOCTYPE html>
<html>
<style>
body{
    background: blue;
    color: yellow;
}
#container{
    margin-right:20%;
    margin-left:20%;
    text-align:center;
}
.answer{
    background:black;
    color:black;
    border: none;
    margin: 50px;
    padding:50px;
}
.answer:focus{
    background:white;
}
.points{
    width: 100%;
    border: black 2px solid;
    font-size: 48px;
    font-weight: bold;
    text-align: center;
}
.question{
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    color: yellow;
    padding: 50px;

    }
.btn{
    border:black 2px solid;
    background:none;
    font-size: 24px;
    font-weight: bold;
    color: yellow;
    width: 200px;
    height: 60px;
}
.btn:hover,
.btn:focus {
    background: #0053ba;
}
</style>
<body>
<?php
if(isset($_POST['correct'])){
    //do php stuff
    $_SESSION["Score"] += $_SESSION["Points"];

}elseif(isset($_POST['wrong'])){
    //do php stuff
    $_SESSION["Score"] -= $_SESSION["Points"];
}
?>
<div class="points">
    <?php echo $_SESSION["Points"] . "<br>"; ?>
</div>
<div id=container>
<div class="question">
    <?php echo $_SESSION["Question"] . "<br>" ?>
</div> 
<h2>Click for answer >> <button class="answer"><?php echo $_SESSION["Answer"] . "<br>" ?></button><< Click for answer</h2>
<form method="post">
    <button class="btn" name="wrong">Incorrect</button>
    <?php echo "-    Current Score: " . $_SESSION["Score"] . "    -"; ?>
    <button class="btn" name="correct">Correct</button>
</form><br><br><br>
<a href="index.php"><button class="btn" name="home">Home Page</button></a>
</div>
</body>
</html>