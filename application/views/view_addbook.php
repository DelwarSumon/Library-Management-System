<html>
<head>
	<title>Add Book</title>
	<style>
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #BDBDBD;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		li a.active {
			background-color: #4CAF50;
			color: white;
		}
		li a:hover:not(.active){
			background-color: #111;
			color: white;
		}
	</style>
</head>

<body style="background-color:#F3FAB6;">
		<ul>
			<li><a href="/library/admin">Home</a></li>
			<li><a class="active" href="/library/addbook">Add Book</a></li>
			<li><a href="/library/userlist">User List</a></li>
			<li><a href="/library/issuelist">Book Confirm List</a></li>
			<li><a href="/library/home/logout">Sign Out</a></li>
		</ul>
	
	<form method="POST" action="/library/addAutCat" enctype="multipart/form-data">
	<br></br>
	<table cellspacing="2" cellpadding="2" border="0" align="center">
			<tr>
				<td><h2>Add Author: </h2></td>
				<td><input type="text" name = "aname" id = "aname" placeholder="Author Name" style ="height:30px;font:20px;width:300px;"></td>
				<td><input type="submit" name="authorsubmit" value="Add" style="background-color:#A4A4A4; height:30px; width:80px"></td>
			</tr>
			<tr>
				<td><h2>Add Category: </h2></td>
				<td><input type="text" name = "catname" id = "catname" placeholder="Category Name" style ="height:30px;font:20px;width:300px;"></td>
				<td><input type="submit" name="categorysubmit" value="Add" style="background-color:#A4A4A4; height:30px; width:80px"></td>
			</tr>
		</table>
	</form>
	
	
	<form method="POST">
		<br></br>
		<table cellspacing="2" cellpadding="2" border="0" align="center">
			<tr>
				<td>
					<ul>
						<li><font size="6">Add Book in Library</font></li>
					</ul>
				</td>
			</tr>
		</table>
		<br></br>
		<table cellspacing="2" cellpadding="2" border="0" align="center">		
			<tr>
				<td><font size="5">Book Name :</font></td>
				<td><input type="text" name = "bname" id = "bname" placeholder="Book Name" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td><font size="5">Author Name :</font></td>
				<td>
					<select name="autname">
					<?php foreach ($resaut as $aut){ ?>
						<option value="<?php echo $aut['a_id']; ?>">	<?php echo $aut['a_name']; ?></option>
					<?php } ?>
					</select> 
				</td>
			</tr>
			<tr>
				<td><font size="5">Category :</font></td>
				<td>
					 <select name="catname">
					<?php foreach ($rescat as $cat){ ?>
						<option value="<?php echo $cat['c_id']; ?>">	<?php echo $cat['c_name']; ?></option>
					<?php } ?>
						
					
					</select> 
				</td>
			</tr>
			<tr>
				<td><font size="5">Book Code :</font></td>
				<td><input type="text" name = "bookcode" id = "bookcode" placeholder="Book Code" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<tr>
				<td><font size="5">Year :</font></td>
				<td><input type="text" name = "year" id = "year" placeholder="Year" style ="height:30px;font:20px;width:300px;"></td>
			</tr>
			<!--<tr>
				<td><font size="5">Cover :</font></td>
				<td><input type="file" name="image"></td>
			</tr>-->
			<tr>
				<td> </td>
				<td><input type="submit" name="buttonAddbook" value="Add Book" style="background-color:#A4A4A4; height:30px; width:80px"></td>
			</tr>	
			</table>
		</form>
</body>
</html>