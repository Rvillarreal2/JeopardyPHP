<?php
session_start();

    if(isset($_POST['point101'])){
      header("Location:question.php");
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
<table id="board">
  <tr id="categories">
    <td id="categories1">Javascript</td>
    <td id="categories2">Java</td>
    <td id="categories3">PHP</td>
    <td id="categories4">Databases</td>
    <td id="categories5">Data Structures</td>
  </tr>
  <tr id="row1">
    <td id="row1_1"><button name="point101">100</button></td> <!-- onclick="this.disabled='disabled';" -->
    <td id="row1_2"><button name="point102">100</button></td>
    <td id="row1_3"><button name="point103">100</button></td>
    <td id="row1_4"><button name="point104">100</button></td>
    <td id="row1_5"><button name="point105">100</button></td>
  </tr>
  <tr id="row2">
    <td id="row2_1"><button name="point201">200</button></td>
    <td id="row2_2"><button name="point202">200</button></td>
    <td id="row2_3"><button name="point203">200</button></td>
    <td id="row2_4"><button name="point204">200</button></td>
    <td id="row2_5"><button name="point205">200</button></td>
  </tr>
  <tr id="row3">
    <td id="row3_1"><button name="point301">300</button></td>
    <td id="row3_2"><button name="point302">300</button></td>
    <td id="row3_3"><button name="point303">300</button></td>
    <td id="row3_4"><button name="point304">300</button></td>
    <td id="row3_5"><button name="point305">300</button></td>
  </tr>
  <tr id="row4">
    <td id="row4_1"><button name="point401">400</button></td>
    <td id="row4_2"><button name="point402">400</button></td>
    <td id="row4_3"><button name="point403">400</button></td>
    <td id="row4_4"><button name="point404">400</button></td>
    <td id="row4_5"><button name="point405">400</button></td>
  </tr>
  <tr id="row5">
    <td id="row5_1"><button name="point501">500</button></td>
    <td id="row5_2"><button name="point502">500</button></td>
    <td id="row5_3"><button name="point503">500</button></td>
    <td id="row5_4"><button name="point504">500</button></td>
    <td id="row5_5"><button name="point505">500</button></td>
  </tr>
</table>
<table id="score">
	<tr><td>Name: <?php echo "testname";?></td><td>Score: </td><td></td><td></td><td><button type="reset" value="Restart">Restart</button></td></tr>
	<tr><td><a href="logout.php">Click here</a> to Logout.</td></tr>
</table>
</div>
</form>
</body>