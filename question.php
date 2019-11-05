<?php
session_start();
//can't recheck this on this page?
    if(isset($_POST['point101'])){
      echo "This is the Question";
			echo "These are the Answers";
    }elseif(isset($_POST['point102'])){
      header("Location:question.php"); 
    }elseif(isset($_POST['point103'])){
      header("Location:question.php");  
    }elseif(isset($_POST['point104'])){
      header("Location:question.php"); 
    }elseif(isset($_POST['point105'])){
      header("Location:question.php"); 
    }elseif(isset($_POST['point201'])){
      header("Location:question.php"); 
    }elseif(isset($_POST['point202'])){
      header("Location:question.php");
    }elseif(isset($_POST['point203'])){
      header("Location:question.php");
    }elseif(isset($_POST['point204'])){
      header("Location:question.php");
    }elseif(isset($_POST['point205'])){
      header("Location:question.php");
    }elseif(isset($_POST['point301'])){
      header("Location:question.php");
    }elseif(isset($_POST['point302'])){
      header("Location:question.php");
    }elseif(isset($_POST['point303'])){
      header("Location:question.php");
    }elseif(isset($_POST['point304'])){
      header("Location:question.php");
    }elseif(isset($_POST['point305'])){
      header("Location:question.php");
    }elseif(isset($_POST['point401'])){
      header("Location:question.php");
    }elseif(isset($_POST['point402'])){
      header("Location:question.php");
    }elseif(isset($_POST['point403'])){
      header("Location:question.php");
    }elseif(isset($_POST['point404'])){
      header("Location:question.php");
    }elseif(isset($_POST['point405'])){
      header("Location:question.php");
    }elseif(isset($_POST['point501'])){
      header("Location:question.php"); 
    }elseif(isset($_POST['point502'])){
      header("Location:question.php");
    }elseif(isset($_POST['point503'])){
      header("Location:question.php");
    }elseif(isset($_POST['point504'])){
      header("Location:question.php");
    }elseif(isset($_POST['point505'])){
      header("Location:question.php");
    }
    ?>
<!DOCTYPE html>
<head>
  <title>Project 2: Jeopardy</title>
  <link type ="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<form method="post">
<div id="container">
Question from array based off which point was selected
Answers
<table id="score">
	<tr><td>Name: <?php echo "testname";?></td><td>Score: </td><td></td><td></td><td><button type="reset" value="Restart">Restart</button></td></tr>
	<tr><td><a href="logout.php">Click here</a> to Logout.</td></tr>
</table>
</div>
</form>
</body>