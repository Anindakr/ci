<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0">
	<form method="post" enctype="multipart/form-data">
		<tr>
		<td colspan="2" align="center" bgcolor="Grey"><font color="Blue"><h3>Registration Form</h3></td></font>
		</tr>
		<tr>
			<td>
				ENTER NAME: 
				<td><input type="Text" name="name"></td><br>
			</td>
		</tr>
		<tr>
			<td>
				Enter Email:
				<td><input type="email" name="email"></td><br>
			</td>
		</tr>
		<tr>
			<td>
				Enter address:
				<td><textarea name="address"></textarea></td><br>
			</td>
		</tr>
		<tr>
			<td>
				Enter Password:
				<td><input type="password" name="password"></td>
			</td>
		</tr>
		<tr>
			<td>
				Enter Phone no:
				<td><input type="number" name="phone"></td> 
			</td>
		</tr>
		<tr>
			<td>
				Enter Gender:
				<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="others">Other
			</td>
		</tr>
		<tr>
			<td>Enter Degree:</td>
			<td><select name="degree">
				<option>Select</option>
				<option value="B.tech">B.tech</option>
				<option value="B.sc">B.sc</option>
				<option value="BBA">BBA</option>
				<option value="LLB">LLB</option></td>
			</select>
		</tr>
		<tr>
			<td>
				Enter Language:
			</td>
			<td><input type="checkbox" name="language[]" value="english">English
				<input type="checkbox" name="language[]" value="hindi">Hindi
				<input type="checkbox" name="language[]" value="bengali">Bengali</td>
		</tr>
		<tr>
			<td>Upload Image:</td>
			<td><input type="file" name="uploadimage"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="submit"> 
	<input type="reset" name="reset" value="Reset"></td>
		</tr>
	</form>
</table>
</body>
</html>