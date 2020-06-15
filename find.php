<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		$name = $_POST["name"];
		echo $name;
       ?>
	</title>
</head>
<body>
	<?php
	$name = $_POST["name"];
	$conn = new mysqli('localhost','root','','2nd_yr_pro');
	$query = "SELECT * FROM registration WHERE name = '".$name."';";
	$result = mysqli_query($conn , $query);
	$lenRel = mysqli_num_rows($result);
	?>
	

    <h1> Details </h1>
    <div><?php
    if($lenRel > 0 ){
		while ( $row = mysqli_fetch_assoc($result)){
	     echo "<h2>Name : " .  $row['name'] . "</h4>";
	     echo "<h3>Address : " .  $row['address'] . "</h3>";
	     echo "<h3>Email : " .  $row['email'] . "</h3>";
	     echo "<h3>Phone : " .  $row['ph_no'] . "</h3>";
	     echo "<h3>Gender : " .  $row['gender'] . "</h3>";
	     echo "<h3>Class : " .  $row['class'] . "</h3>";
	     echo "<br><a href='edit.html'><button>Edit</button></a>";
	 }
	 
	}else{
		echo "not found";
	}
	?>
</div>


</body>
</html>