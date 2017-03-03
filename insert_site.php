<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search Engine php</title>
</head>

<body bgcolor="gray">
	<form action="insert_site.php" method="post" enctype="multipart/form-data">
		<table bgcolor="orange" width="500" border="2" cellspacing="2" align="center">
			<tr>
				<td colspan="5" align="center"><h2>Inserting new website:</h2></td>
			</tr>
			<tr>
				<td align="right">Site Title:</td>
				<td><input type="text" name="site_title" /></td>
			</tr>
			<tr>
				<td align="right">Site Link:</td>
				<td><input type="text" name="site_link" /></td>
			</tr>
			<tr>
				<td align="right">Site Keywords:</td>
				<td><input type="text" name="site_keywords" /></td>
			</tr>
			<tr>
				<td align="right">Site Description:</td>
				<td><textarea cols="24" rows="4" name="site_desc"></textarea></td>
			</tr>
			<tr>
				<td align="right">Site Image:</td>
				<td><input type="file" name="site_image" /></td>
			</tr>
			<tr>
				<td align="center" colspan="5"><input type="submit" name="submit" value="Add Site Now" /></td>
				<!-- the name attribute(submit in this case) is used in the php script (at the bottom of the page)
					    when checking whether the button is pressed (or if the POST variable isset...) -->
			</tr>
	</form>
	
</body>
</html>

<?php 
        
    mysql_connect("localhost", "will_root", "t00r!");
    mysql_select_db("search");

    if(isset($_POST['submit'])) {
        
        $site_title = $_POST['site_title'];
        $site_link = $_POST['site_link'];
        $site_keywords = $_POST['site_keywords'];
        $site_desc = $_POST['site_desc'];
        $site_image = $_FILES['site_image']['name'];
        $site_image_tmp = $_FILES['site_image']['tmp_name'];

        if($site_title=='' OR $site_link=='' OR $site_keywords=='' OR $site_desc==''){

        	echo "<script>alert('please fill all the fields!')</script>";

        	exit();

        } else {
		
		    $insert_query = "insert into sites (site_title, site_link, site_keywords, site_desc, site_image) values ('$site_title', '$site_link', '$site_keywords', '$site_desc', '$site_image')";
		    
		    move_uploaded_file($site_image_tmp, "images/{$site_image}");
	    
		    if(mysql_query($insert_query)){
		    
		        echo "<script>alert('Data inserted into table')</script>";
		    
		    }
		
		}
        // $insert_query = "INSERT INTO sites (site_title,site_link,site_keywords,site_desc,site_image) VALUES ('site_title', 'site_link', 'site_keywords', 'site_desc', 'site_image')";

        // move_uploaded_file($site_image_tmp, "images/{$site_image}");

        // $run_query = mysql_query($insert_query);
    }


 ?>
