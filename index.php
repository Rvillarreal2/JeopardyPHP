<?php
session_start();


  $questionsCol1 = array("The tag used to declare an obect in JavaScript", "The keyword used to declare a method", "An operator that test for both the type and the value", "Represents a value that is “not a number”", "An inner function that has access to the variables in the outer (enclosing) function’s scope chain");
  $answersCol1 = array("What is Var", "What is Function", "What is ===", "What is typeof NaN","What is a closure");

  $questionsCol2 = array("The tag used to declare an obect in JavaScript", "The keyword used to declare a method");
  $answersCol2 = array("What is Var", "What is Function");

  $questionsCol3 = array("The tag used to declare an obect in JavaScript", "The keyword used to declare a method");
  $answersCol3 = array("What is Var", "What is Function");

  $questionsCol4 = array("The tag used to declare an obect in JavaScript", "The keyword used to declare a method");
  $answersCol4 = array("What is Var", "What is Function");

  $questionsCol5 = array("The tag used to declare an obect in JavaScript", "The keyword used to declare a method");
  $answersCol5 = array("What is Var", "What is Function");

  $_SESSION["Score"];
  


    if(isset($_POST['point101'])){

      $_SESSION["Question"] = $questionsCol1[0];
      $_SESSION["Answer"] = $answersCol1[0];
      $_SESSION["Points"] = 100;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point102'])){

      $_SESSION["Question"] = $questionsCol2[0];
      $_SESSION["Answer"] = $answersCol2[0];
      $_SESSION["Points"] = 100;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point103'])){

      $_SESSION["Question"] = $questionsCol3[0];
      $_SESSION["Answer"] = $answersCol3[0];
      $_SESSION["Points"] = 100;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point104'])){

      $_SESSION["Question"] = $questionsCol4[0];
      $_SESSION["Answer"] = $answersCol4[0];
      $_SESSION["Points"] = 100;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point105'])){

      $_SESSION["Question"] = $questionsCol5[0];
      $_SESSION["Answer"] = $answersCol5[0];
      $_SESSION["Points"] = 100;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point201'])){

      $_SESSION["Question"] = $questionsCol1[1];
      $_SESSION["Answer"] = $answersCol1[1];
      $_SESSION["Points"] = 200;
      header("Location: questionPage.php");
    }elseif(isset($_POST['point202'])){

      $_SESSION["Question"] = $questionsCol2[0];
      $_SESSION["Answer"] = $answersCol2[0];
      $_SESSION["Points"] = 200; 
    }elseif(isset($_POST['point203'])){

      $_SESSION["Question"] = $questionsCol3[0];
      $_SESSION["Answer"] = $answersCol3[0];
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point204'])){

      $_SESSION["Question"] = $questionsCol4[0];
      $_SESSION["Answer"] = $answersCol4[0];
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point205'])){

      $_SESSION["Question"] = $questionsCol5[0];
      $_SESSION["Answer"] = $answersCol5[0];
      $_SESSION["Points"] = 200;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point301'])){

      $_SESSION["Question"] = $questionsCol1[2];
      $_SESSION["Answer"] = $answersCol1[2];
      $_SESSION["Points"] = 300;   
      header("Location: questionPage.php");
    }elseif(isset($_POST['point302'])){

      $_SESSION["Question"] = $questionsCol2[0];
      $_SESSION["Answer"] = $answersCol2[0];
      $_SESSION["Points"] = 300; 
      header("Location: questionPage.php");
    }elseif(isset($_POST['point303'])){

      $_SESSION["Question"] = $questionsCol3[0];
      $_SESSION["Answer"] = $answersCol3[0];
      $_SESSION["Points"] = 300;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point304'])){

      $_SESSION["Question"] = $questionsCol4[0];
      $_SESSION["Answer"] = $answersCol4[0];
      $_SESSION["Points"] = 300;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point305'])){

      $_SESSION["Question"] = $questionsCol5[0];
      $_SESSION["Answer"] = $answersCol5[0];
      $_SESSION["Points"] = 300;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point401'])){

      $_SESSION["Question"] = $questionsCol1[3];
      $_SESSION["Answer"] = $answersCol1[3];
      $_SESSION["Points"] = 400;   
      header("Location: questionPage.php");
    }elseif(isset($_POST['point402'])){

      $_SESSION["Question"] = $questionsCol2[0];
      $_SESSION["Answer"] = $answersCol2[0];
      $_SESSION["Points"] = 400; 
      header("Location: questionPage.php");
    }elseif(isset($_POST['point403'])){

      $_SESSION["Question"] = $questionsCol3[0];
      $_SESSION["Answer"] = $answersCol3[0];
      $_SESSION["Points"] = 400;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point404'])){

      $_SESSION["Question"] = $questionsCol4[0];
      $_SESSION["Answer"] = $answersCol4[0];
      $_SESSION["Points"] = 400;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point405'])){

      $_SESSION["Question"] = $questionsCol5[0];
      $_SESSION["Answer"] = $answersCol5[0];
      $_SESSION["Points"] = 400;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point501'])){

      $_SESSION["Question"] = $questionsCol1[4];
      $_SESSION["Answer"] = $answersCol1[4];
      $_SESSION["Points"] = 500;   
      header("Location: questionPage.php");
    }elseif(isset($_POST['point502'])){

      $_SESSION["Question"] = $questionsCol2[0];
      $_SESSION["Answer"] = $answersCol2[0];
      $_SESSION["Points"] = 500; 
      header("Location: questionPage.php");
    }elseif(isset($_POST['point503'])){

      $_SESSION["Question"] = $questionsCol3[0];
      $_SESSION["Answer"] = $answersCol3[0];
      $_SESSION["Points"] = 500;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point504'])){

      $_SESSION["Question"] = $questionsCol4[0];
      $_SESSION["Answer"] = $answersCol4[0];
      $_SESSION["Points"] = 500;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['point505'])){

      $_SESSION["Question"] = $questionsCol5[0];
      $_SESSION["Answer"] = $answersCol5[0];
      $_SESSION["Points"] = 500;      
      header("Location: questionPage.php");
    }elseif(isset($_POST['reset'])){
      $_SESSION["Score"]=0;
    }
    ?>
<!DOCTYPE html>
<body>
<style>
body {
background-color:blue;
}
body, table, table td {
	border:0px;
	border-collapse:collapse;
	margin:0px;
	padding:0px;
}
a {
	color:#FFFF00;
}
button{
  border:none;
  background:none;
  font-size: 24px;
	font-weight: bold;
  color: yellow;
  width:100%;
  height:100%;
}
button:hover,
button:focus {
    background: #0053ba;
}
#board {
	margin-left:20px;
	color:#FFFF00;
}
	#board #categories td {
	background-color:darkblue;
	background-image:none;
	border:#FFFFFF solid 3px;
}
#board tr td{
	height:100px;
	width:180px;
	border:#000000 solid 3px;
	border-collapse:collapse;
	text-align:center;
	font-size:24px;
}
#container {
	text-align:center;
	padding:20px;
	margin-right:20%;
	margin-left:20%;
}
#points{
	background-color:blue;
	color: yellow;
	border: none;
	padding: 20px;
	font-size: 24px;
	font-weight: bold;
}
#score tr td{
	height:100px;
	width:180px;
	text-align:center;
	font-size:24px;
}
#answered{
  background-color:black;
	color: black;
	border: none;
	padding: 20px;
	font-size: 24px;
	font-weight: bold;
}
</style>
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
    <td id="row1_1"><button name="point101">100</button></td>
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
	<tr><td>Name: </td><td>Score: <?php echo $_SESSION["Score"]?></td><td></td><td></td><td><button name="reset" value="Restart">Restart</button></td></tr>
</table>
</div>
</form>
</body>