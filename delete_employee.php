<?php

// Connect to database
include('functions/connect.php');

// Make a delete query with condition of employee id and store to $sql varaiable
$sql = "DELETE FROM employees WHERE id=" . $_GET['id'] . "";

// Execute sql query and if successful or TRUE display Record deleted successfully
if ($conn->query($sql) === TRUE)
{

    echo "Record deleted successfully";
}
else
{
    echo "Error deleting record: " . $conn->error;
}

// Close connection to database
$conn->close();

echo '<a href="index.php" >Home</a>';

?>