<!DOCTYPE html>
<html>
<head>
	<title>ABMPro</title>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
</head>
<body>
	<div class="website">
		<h2 id="messagedisplay"></h2>
	</div>
	<div class="formpost">
		<form id="formid" method="post">
		  NAME:
		  <input id="input" type="text" name="name" id="name"><br>
          AGE:
		  <input id="input" type="text" name="age" id="age"><br>
		  <input type="submit" name="insertbtn" id="insertbtn" value="InsertData">

		  <input type="submit" name="displaybtn" id="displaybtn" value="DisplayData">

		</form>

	</div>
		<div id="displaydata"></div>
<script type="text/javascript" src="js/ajax.js" ></script>
</body>
</html>
