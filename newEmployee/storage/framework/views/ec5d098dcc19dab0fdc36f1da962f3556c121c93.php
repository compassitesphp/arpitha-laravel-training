<!DOCTYPE html>
<html>
    <head>
        <title> Employee details</title>
    </head>
    
    <h2>Enter the Employee details</h2>
    <br><br>
    <body>
        <form action="insert.blade.php" method="GET">
            Name:
            <input type="text" name="employee_name" required>
            <br><br>

            Email:
            <input type="email" name="employee_email" required placeholder="Enter a valid email address">
            <br><br>

            Department: 
            <input type="text" name="Department" />
            <br><br>

            <input type="submit" value="Insert" />
        </form>

    </body>
</html> 