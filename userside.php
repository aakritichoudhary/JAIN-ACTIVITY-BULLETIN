
<?php
include 'config.php';

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message'] ?></p>

		<?php } } ?>