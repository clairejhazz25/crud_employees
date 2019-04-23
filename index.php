<?php
        
// Connect to the database
include('functions/connect.php');

// If there is no submitted last_name input
if(isset($_POST['first_name']) || isset($_POST['last_name']))
{
    //$sql = "SELECT * FROM employees WHERE last_name = '" . $_POST['last_name'] . "'";
    $sql = "SELECT * FROM employees WHERE first_name LIKE '%" . $_POST['first_name'] . "%' AND last_name LIKE '%" . $_POST['last_name'] . "%'";
}
else
{
    // Make a select all query and store to $sql varaiable
    $sql = "SELECT * FROM employees";
}


// Execute sql query and store to $result varaiable
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List of Employees</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
    
        .table tr:nth-child(even) {
            background-color: #89C4F4;
        }

    </style>       
    </head>
    <body>
        <div class="container">
            <h1>Employee List</h1>
            
            <form action="index.php" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) { echo $_POST['first_name']; } ?>">
                    <br>
                    <label>Last Name</label>
                    <input class="form-control" type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) { echo $_POST['last_name']; } ?>">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>

            <a class="btn btn-primary pull-right" href="create_employee_form.php">Create Employee</a>
            <br><br>
            <?php if($result->num_rows > 0) : ?> <!-- If result or retrieved record from database is greater than zero execute while loop -->
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                    <?php  while($row = $result->fetch_assoc()) : ?> <!-- // Execute while loop to store record to $row varaiable then display result -->
                        <tr>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['middle_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="edit_employee_form.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete_employee.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php endif; ?>
            <?php $conn->close(); ?>
        </div>
    </body>
</html>
