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

								//include connect.php file
								include('connect.php');

								$sql = "SELECT * FROM comment";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								  // output data of each row
					?>

					<table style="width:100%" border="1">
					  		<tr>
							    <th>Name</th>
							    <th>Email</th>
							    <th>Comment</th>
					 	 	</tr>


					<?php
								  while($row = $result->fetch_assoc()) {

									  echo '<tr>';
									    echo '<td>'. $row["name"] .'</td>';
									    echo '<td>'. $row["email"] .'</td>';
									    echo '<td>'. $row["comment"] .'</td>';
									  echo '</tr>';

					
								  }
								} else {
								  echo "No comment found!";
								}

								$conn->close();

						?>
						
						</table>
<br>
						<a href="index.php">Back to form page</a>
						

	</div>
</div>



</body>
</html>