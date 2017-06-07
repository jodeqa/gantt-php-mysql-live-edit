<?php
	// Connect to MySQL database
	$mysqli = new mysqli("localhost", "anychart_user", "anychart_pass", "le_demo", 18889);

	// check connection
    if ($mysqli->connect_errno) die("Connect failed: " . $mysqli->connect_error);

    $query = "SELECT * FROM tasks";

    if ($result = $mysqli->query($query)) {
        // fetch all data
        while ($tasks[] = $result->fetch_assoc()) {}

        // remove last null
        array_pop($tasks);
    }

	// Return the result and close MySQL connection
	$mysqli->close();
	echo json_encode($tasks);
	mysqli_free_result($result);
?>