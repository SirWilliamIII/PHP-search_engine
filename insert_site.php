<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search Engine php</title>
	
</head>
<body bgcolor="gray">
	<form action="insert_site.php" method="post" enctype="multipart/form-date">
		<table bgcolor="orange" width="500" border="2" cellspacing="2" align="center">
			<tr>
				<td colspan="5" align="center"><h2>Inserting new website:</h2></td>
			</tr>
			<tr>
				<td align="right">Site Title:</td>
				<td><input type="text" name="site_title"></td>
			</tr>
			<tr>
				<td align="right">Site Link:</td>
				<td><input type="text" name="site_link"></td>
			</tr>
			<tr>
				<td align="right">Site Keywords:</td>
				<td><input type="text" name="site_keywords"></td>
			</tr>
			<tr>
				<td align="right">Site Description:</td>
				<td><input type="text" name="site_desc"></td>
			</tr>
			<tr>
				<td align="right">Site Image:</td>
				<td><input type="text" name="site_image"></td>
			</tr>
			<tr>
				<td align="center" colspan="5"><input type="submit" name="submit" value="Add Site Now" /></td>
			</tr>
	</form>
	
</body>
</html>