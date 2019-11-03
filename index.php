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
</style>
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
    <td id="row1_1"><input type="button" value="100" id="points" onclick="" /></td>
    <td id="row1_2"><input type="button" value="100" id="points" onclick="" /></td>
    <td id="row1_3"><input type="button" value="100" id="points" onclick="" /></td>
    <td id="row1_4"><input type="button" value="100" id="points" onclick="" /></td>
    <td id="row1_5"><input type="button" value="100" id="points" onclick="" /></td>
  </tr>
  <tr id="row2">
    <td id="row2_1"><input type="button" value="200" id="points" onclick="" /></td>
    <td id="row2_2"><input type="button" value="200" id="points" onclick="" /></td>
    <td id="row2_3"><input type="button" value="200" id="points" onclick="" /></td>
    <td id="row2_4"><input type="button" value="200" id="points" onclick="" /></td>
    <td id="row2_5"><input type="button" value="200" id="points" onclick="" /></td>
  </tr>
  <tr id="row3">
    <td id="row3_1"><input type="button" value="300" id="points" onclick="" /></td>
    <td id="row3_2"><input type="button" value="300" id="points" onclick="" /></td>
    <td id="row3_3"><input type="button" value="300" id="points" onclick="" /></td>
    <td id="row3_4"><input type="button" value="300" id="points" onclick="" /></td>
    <td id="row3_5"><input type="button" value="300" id="points" onclick="" /></td>
  </tr>
  <tr id="row4">
    <td id="row4_1"><input type="button" value="400" id="points" onclick="" /></td>
    <td id="row4_2"><input type="button" value="400" id="points" onclick="" /></td>
    <td id="row4_3"><input type="button" value="400" id="points" onclick="" /></td>
    <td id="row4_4"><input type="button" value="400" id="points" onclick="" /></td>
    <td id="row4_5"><input type="button" value="400" id="points" onclick="" /></td>
  </tr>
  <tr id="row5">
    <td id="row5_1"><input type="button" value="500" id="points" onclick="" /></td>
    <td id="row5_2"><input type="button" value="500" id="points" onclick="" /></td>
    <td id="row5_3"><input type="button" value="500" id="points" onclick="" /></td>
    <td id="row5_4"><input type="button" value="500" id="points" onclick="" /></td>
    <td id="row5_5"><input type="button" value="500" id="points" onclick="" /></td>
  </tr>
</table>
<table id="score">
<tr><td>Name: </td><td>Score: </td></tr>
</table>
</div>
</body>