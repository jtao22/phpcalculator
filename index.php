<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="functions.php" method="get">
			<input type="text" name="val1" placeholder="x">
			<select name="oper">
				<label>Choose Operation!</label>
				<option value ="add">Add (x+y)</option>
				<option value ="subtract">Subtract (x-y)</option>
				<option value="multiply">Multiply (x*y)</option>
				<option value="divide">Divide (x/y)</option>
				<option value="exponent">Exponent (x^y)</option>
				<option value="modulo">Modulo (x mod y)</option>
				<option value="choose">Permutate (x choose y)</option>
			</select>
			<input type="text" name="val2" placeholder="y">
			<button type="submit">Calculate!</button>
		</form>
		
	</body>
</html>