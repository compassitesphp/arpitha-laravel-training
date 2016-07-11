<!DOCTYPE html>
<html>
    <head>
        <title>Hi</title>
    </head>
    <body>

        <h2>Enter the employee details</h2>


        <form action="/update" method="POST">
<!--            <span>Employee ID:</span>-->
            <input type="hidden" name="employee_id" value="{{$employeeId}}"/>
            <br><br>
            <span>Name:</span> 
            <input type="text" name="employee_name" value="{{$employeeName}}"/>
            <br><br>
            <span>E-mail:</span>
            <input type="text" name="employee_email" required placeholder="Enter a valid email address"value="{{$employeeEmail}}"/>
            <br><br>
            <span>Department:</span> 
            <input type="text" name="employee_department" value="{{ $employeeDepartment }}"/>
            <br><br>

            <input type="submit" value="update"> 

        </form>

    </body>
</html>

<!--
<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}

        </style>
    </head>
    <body>

        

        <h2>edit the employee details</h2>
        <p><span class="error">* required field.</span></p>

        <form action="/update" method="GET">
            <input type="hidden" name="employee_id" value="{{ $employeeId }}"/>
            employee_name:
            <input type="text" name="employee_name" value="{{$employeeName}}" >
            <span class="error">* </span>
            <br><br>

            employee_email:
            <input type="text" name="employee_email" value="{{$employeeEmail}}" >
            <span class="error">* </span>
            <br><br>

            employee_department: 
            <input type="text" name="employee_dept" value="{{$employeeDepartment}}" >
            <br><br>

            <input type="submit" value="submit">
        </form> 

    </body>
</html>-->
