<html>
<head>
	<title>User Home</title>
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
function showHint(str) {
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
        xmlhttp.open("GET", "gethint.php?q="+str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body style="background-color:#F3FAB6;">
		<h2 align='center'><?php echo $this->session->userdata('login_names').' Login Successfully'."<br><br>";?></h2>
		<h2 align='center'>Book List</h2>
		
		<p align="center">Search: <input type="text" placeholder="Type Book Name" onkeyup="showHint(this.value)"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden"></p>
		<p align="center">Suggestions: <span id="txtHint"></span></p>
		<hr>
	</body>
</html>

<?php
	echo "<table cellspacing='2' cellpadding='10' border='1' align='center'>
			<tr>
				<th>SL</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>Category</th>
				<th>Book Code</th>
				<th>Year</th>
				<th>Cover</th>
			</tr>";
		//</table>";
		
		$serial = 1;
		foreach($result as $res) {         
        //echo "<tr align='center'>";
        echo "<td>".$serial++."</td>";  
        echo "<td><a href='bookdetails.php?viewbook=$res[BookName]'>".$res['BookName']."</td>";
        echo "<td>"."<select>";
		
		//foreach($authorar as $aut){
			//if($aut['id']== $res['Author']){
				echo "<option selected='selected' value='".$aut['id']."'>".$aut['AuthorName']."</option>";
			//}
			
			
		//}
		echo "</select>"."</td>";
		
		
		echo "<td>"."<select>";
		//foreach($catar as $cat){
			//if($cat['id']== $res['Catid']){
				echo "<option selected='selected' value='".$cat['id']."'>".$cat['CatName']."</option>";
			//}
			
		//}
		
		echo "</select>"."</td>";
		echo "<td>".$res['BookCode']."</td>";
        echo "<td>".$res['Year']."</td>";
		echo "<td>"."<img src ='".$res['Cover']."' width='40' height='50'></img>"."</td>";
		echo "<tr>";
		}
		echo "</table>";
		echo "<br></br>";
		//mysqli_close($con);
?>