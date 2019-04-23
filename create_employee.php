<?php

// Connect to database
include('functions/connect.php');

// Make an insert query and store to $sql varaiable
$sql = "INSERT INTO employees (first_name, middle_name, last_name, age, address) VALUES ('". $_POST['first_name'] . "', '" . $_POST['middle_name'] . "', '" . $_POST['last_name'] . "', " . $_POST['age'] .", '" . $_POST['address'] . "')";

// Execute sql query and if successful or TRUE display New Employee Created Successfully
if($conn->query($sql) === TRUE)
{
    
    echo "New employee created successfully";
   
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection to database
$conn->close();

echo ' <a href="index.php">Home</a>';

?>