<html>
<head>
	<title>Admin Panel</title>
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
<script>
/*function showHint(str) {
	document.getElementById("spinner").style.visibility= "visible";
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
				document.getElementById("spinner").style.visibility= "hidden";
            }
        }
        xmlhttp.open("GET", "/library/admin/gethint?q="+str, true);
        xmlhttp.send();
    }
}*/
</script>
</head>
<body style="background-color:#F3FAB6;">
		<ul>
			<li><a class="active" href="/library/admin">Home</a></li>
			<li><a href="/library/addbook">Add Book</a></li>
			<li><a href="/library/userlist">User List</a></li>
			<li><a href="/library/issuelist">Book Confirm List</a></li>
			<li><a href="/library/home/logout">Sign Out</a></li>
		</ul>
		
		<h2 align='center'><?php echo $this->session->userdata('login_myname').' Login Successfully'."<br><br>";?></h2>
		<h2 align='center'>Book List</h2>
		
		<!--<p align="center">Search: <input type="text" placeholder="Type Book Name" onkeyup="showHint(this.value)"> <img id="spinner" src="/library/image/loading.gif" width="20px" height="20px" style="visibility:hidden"></p>
		<p align="center">Suggestions: <span id="txtHint"></span></p>-->
		
		<form method = 'post'>
		<p align="center">Search: <input type="text" name = 'search_bname' placeholder="Type Book Name"></p> 
		<input type="submit" value="Search" name= "buttonsearch" style="background-color:#A4A4A4; height:30px; width:80px">
		<p align="center">Suggestions: <?php 
		if($this->input->post('buttonsearch')){
			foreach ($results as $val)
			{
				echo $val['BookName']." ";
			}
			}?></p>
		</form>
		<hr>
	</body>
</html>

<?php
	//echo $this->session->userdata('login_names').' Login Successfully'."<br><br><br><br>";
	echo "<table cellspacing='2' cellpadding='10' border='1' align='center'>
			<tr>
				<th>SL</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>Category</th>
				<th>Book Code</th>
				<th>Year</th>
			</tr>";
		//</table>";
		
		$serial = 1;
		foreach($resbook as $r) {         
        //echo "<tr align='center'>";
        echo "<td>".$serial++."</td>";  
        echo "<td><a href='bookdetails.php?viewbook=$r[BookName]'>".$r['BookName']."</td>";
        echo "<td>"."<select>";
		
		foreach($resaut as $aut){
			if($aut['a_id']== $resbook['Author']){
				echo "<option selected='selected' value='".$aut['a_id']."'>".$aut['a_name']."</option>";
			}
			
			
		}
		echo "</select>"."</td>";
		
		
		echo "<td>"."<select>";
		foreach($rescat as $cat){
			if($cat['c_id']== $resbook['Category']){
				echo "<option selected='selected' value='".$cat['c_id']."'>".$cat['c_name']."</option>";
			}
			
		}
		
		echo "</select>"."</td>";
		
		echo "<td>".$r['BookCode']."</td>";
        echo "<td>".$r['Year']."</td>";
		echo "<tr>";
		}
		echo "</table>";
		echo "<br></br>";
		//mysqli_close($con);
?>