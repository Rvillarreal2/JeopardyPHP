<?php
session_start();
function Question() {
	//replace conents of page with question and answers
  echo "question from array";
	echo "answer choices from array";
	//if correct answer $score+$points from question array
	//grey out cell
	//return to gameboard
}
    if(isset($_POST['point101'])){
      Question();
    }elseif(isset($_POST['point102'])){
      //do php stuff  
    }elseif(isset($_POST['point103'])){
      //do php stuff  
    }elseif(isset($_POST['point104'])){
      //do php stuff  
    }elseif(isset($_POST['point105'])){
      //do php stuff  
    }elseif(isset($_POST['point201'])){
      //do php stuff  
    }elseif(isset($_POST['point202'])){
      //do php stuff  
    }elseif(isset($_POST['point203'])){
      //do php stuff  
    }elseif(isset($_POST['point204'])){
      //do php stuff  
    }elseif(isset($_POST['point205'])){
      //do php stuff  
    }elseif(isset($_POST['point301'])){
      //do php stuff  
    }elseif(isset($_POST['point302'])){
      //do php stuff  
    }elseif(isset($_POST['point303'])){
      //do php stuff  
    }elseif(isset($_POST['point304'])){
      //do php stuff  
    }elseif(isset($_POST['point305'])){
      //do php stuff  
    }elseif(isset($_POST['point401'])){
      //do php stuff  
    }elseif(isset($_POST['point402'])){
      //do php stuff  
    }elseif(isset($_POST['point403'])){
      //do php stuff  
    }elseif(isset($_POST['point404'])){
      //do php stuff  
    }elseif(isset($_POST['point405'])){
      //do php stuff  
    }elseif(isset($_POST['point501'])){
      //do php stuff  
    }elseif(isset($_POST['point502'])){
      //do php stuff  
    }elseif(isset($_POST['point503'])){
      //do php stuff  
    }elseif(isset($_POST['point504'])){
      //do php stuff  
    }elseif(isset($_POST['point505'])){
      //do php stuff  
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
    <td id="row1_1"><button name="point101" onclick="this.disabled='disabled';">100</button></td>
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