<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style>
		table {
			border-collapse: collapse;
			margin: auto;
		}
		td {
			padding: 10px;
			border: 1px solid black;
			text-align: center;
		}
		input[type="text"] {
			width: 100%;
			height: 50px;
			font-size: 24px;
			text-align: right;
			padding-right: 10px;
		}
		input[type="button"] {
			width: 100%;
			height: 50px;
			font-size: 24px;
			background-color: #4CAF50;
			color: white;
			border: none;
			cursor: pointer;
		}
		input[type="button"]:hover {
			background-color: #3e8e41;
		}
	</style>
	<script>
		function dis(val) {
			document.getElementById("result").value += val;
		}
		function clr() {
			document.getElementById("result").value = "";
		}
	</script>
</head>
<body>
	<table>
		<tr>
			<td colspan="4"><input type="text" id="result" readonly></td>
		</tr>
		<tr>
			<td><input type="button" value="1" onclick="dis('1')"></td>
			<td><input type="button" value="2" onclick="dis('2')"></td>
			<td><input type="button" value="3" onclick="dis('3')"></td>
			<td><input type="button" value="/" onclick="dis('/')"></td>
		</tr>
		<tr>
			<td><input type="button" value="4" onclick="dis('4')"></td>
			<td><input type="button" value="5" onclick="dis('5')"></td>
			<td><input type="button" value="6" onclick="dis('6')"></td>
			<td><input type="button" value="*" onclick="dis('*')"></td>
		</tr>
		<tr>
			<td><input type="button" value="7" onclick="dis('7')"></td>
			<td><input type="button" value="8" onclick="dis('8')"></td>
			<td><input type="button" value="9" onclick="dis('9')"></td>
			<td><input type="button" value="-" onclick="dis('-')"></td>
		</tr>
		<tr>
			<td><input type="button" value="C" onclick="clr()"></td>
			<td><input type="button" value="0" onclick="dis('0')"></td>
			<td><input type="button" value="=" onclick="document.getElementById('result').value = eval(document.getElementById('result').value)"></td>
			<td><input type="button" value="+" onclick="dis('+')"></td>
		</tr>
	</table>
</body>
</html>