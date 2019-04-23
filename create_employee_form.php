<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Employee</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
        
        label {
            color: #C93756;
        }       

        </style>
    </head>
    <body>
        <div class="container">
            <h1>Create Employee Form</h1>
            <form action="create_employee.php" method="post">
                <div class="form-group">
                    <label>First_Name: *</label>
                    <input class="form-control" type="text" name="first_name" value="">
                    <br>
                    <label>Middle_Name: *</label>
                    <input class="form-control" type="text" name="middle_name" value="">
                    <br>
                    <label>Last_Name: *</label>
                    <input class="form-control" type="text" name="last_name" value="">
                    <br>
                    <label>Age: *</label>
                    <input class="form-control" type="text" name="age" value="">
                    <br>
                    <label>Address: *</label>
                    <input class="form-control" type="text" name="address" value="">
                    <br>
                    <p>* Required</p>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>