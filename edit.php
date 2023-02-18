<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table border="1" cellpadding="0" cellspacing="0">
	<?php 
 	foreach ($data as $row)
  	{
  	?>
		<tr>
		<td colspan="2" align="center" bgcolor="Grey"><font color="Blue"><h3>Registration Form</h3></td></font>
		</tr>
		<tr>
			<td>
				ENTER NAME: 
				<td><input type="Text" name="name" value="<?php echo $row->name?>"></td><br>
			</td>
		</tr>
		<tr>
			<td>
				Enter Email:
				<td><input type="email" name="email" value="<?php echo $row->email?>"></td>
			</td>
		</tr>
		<tr>
			<td>
				Enter address:
				<td><textarea name="address"><?php echo $row->address?></textarea></td>
			</td>
		</tr>
		<tr>
			<td>
				Enter Phone no:
				<td><input type="number" name="phone" value="<?php echo $row->phone?>"></td> 
			</td>
		</tr>
		<tr>
			<td>
				Enter Gender:
				<td><input type="radio" name="gender" value="male" <?php if($row->gender=='male'){echo "checked";} ?> >Male
				<input type="radio" name="gender" value="female" <?php if($row->gender=='female'){echo "checked";} ?>>Female
				<input type="radio" name="gender" value="others" <?php if($row->gender=='others'){echo "checked";} ?>>Other
			</td>
		</tr>
		<tr>
			<td>Enter Degree:</td>
			<td><select name="degree">
				<option>Select</option>
				<option value="B.tech" <?php if(($row->degree)=='B.tech'){echo "selected";} ?>>B.tech</option>
				<option value="B.sc" <?php if(($row->degree)=='B.sc'){echo "selected";} ?>>B.sc</option>
				<option value="BBA" <?php if(($row->degree)=='BBA'){echo "selected";} ?>>BBA</option>
				<option value="LLB" <?php if(($row->degree)=='LLB'){echo "selected";} ?>>LLB</option></td>
			</select>
		</tr>
		<tr>
			<td>
				Enter Language:
				<?php 
				$langarray=explode(",", $row->language);
				?> 
			</td>
			<td><input type="checkbox" name="language[]" value="english" <?php if(in_array("english", $langarray)){echo "checked";}?> >English
				<input type="checkbox" name="language[]" value="hindi" <?php if(in_array("hindi", $langarray)){echo "checked";}?>>Hindi
				<input type="checkbox" name="language[]" value="bengali" <?php if(in_array("bengali", $langarray)){echo "checked";}?>>Bengali</td>
		</tr>
		<tr>
			<td>Enter Image</td>
			<td><input type="file" name="uploadimage"><img src="<?php echo base_url().$row->picsource?>" height="50" width="100"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="submit"> 
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
	<?php 
   	}
   	?>
   	</table>
</form>

</body>
</html>