<?php

// Connect to database
include('functions/connect.php');

// Make an update  query and store to $sql varaiable
$sql_update = "UPDATE employees SET first_name = '" .  $_POST['first_name'] . "', middle_name = '" .  $_POST['middle_name'] . "', last_name = '" .  $_POST['last_name'] . "', age = '" .  $_POST['age'] . "', address = '" .  $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'";

// Execute sql query and if successful or TRUE display Record updated successfully
if($conn->query($sql_update) === TRUE)
{
    echo "Record updated successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection to database
$conn->close();

echo ' <a class="btn btn-success" href="index.php">Home</a>';

?>