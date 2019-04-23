<?php

include('functions/connect.php');

// Make a single row select query with condition of employee id and store to $sql varaiable
$sql = 'SELECT * FROM employees WHERE id= ' . $_GET['id'] . '';

// Execute sql query and store to $result varaiable
$result = $conn->query($sql);

// Store record to $row varaiable then display result
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
    <head>
        <title >Edit Employee Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
        
        label {
            color: #F62459;
        }

        </style>
    </head>
    <body>
        <div class="container">
            <h1>Edit Employee Form</h1>
            <form  action="update_employee.php" method="post">
                <div class="form-group">
                    <label>Id: *</label>
                    <input class="form-control" type="text" name="id" value="<?php echo $row['id']; ?>" readonly="">
                    <br>
                    <label>First_Name: *</label>
                    <input class="form-control" type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
                    <br>
                    <label>Middle_Name: *</label>
                    <input class="form-control" type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>">
                    <br>
                    <label>Last_Name: *</label>
                    <input class="form-control" type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
                    <br>
                    <label>Age: *</label>
                    <input class="form-control" type="text" name="age" value="<?php echo $row['age']; ?>"/>
                    <br>
                    <label>Address: *</label>
                    <input class="form-control" type="text" name="address" value="<?php echo $row['address']; ?>">
                    <br>
                    <p class="text-success">* Fill up all Required</p>
                    <input class="btn btn-info" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>