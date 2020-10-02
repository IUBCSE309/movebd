<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/styles.css">
</head>

<body>


<div class="container">
	<div class="wrapper">


		<?php

		if ((empty($_POST['name']))||(empty($_POST['email']))||empty($_POST['comment'])) { //if any form field is empty
			header('Location: index.html'); // redirect to form page
		}else{ 
			$name = $_POST['name'];
			$email = $_POST['email'];
			$comment = $_POST['comment'];
		}

		//include connect.php file
		include('connect.php');


		$sql = "INSERT INTO comment (name, email, comment)
		VALUES ('$name', '$email', '$comment')";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully.";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		?>
		<br>
		<br>
		<a href="getdata.php"><button>View All Comments</button></a>

	</div>
</div>



</body>
</html>