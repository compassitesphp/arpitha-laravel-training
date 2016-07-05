<!DOCTYPE html>
<html>
    <head>
        <title>Employee List</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


    </head>


    <body>     
        <div class='container'>
            <h2>employee details</h2>
            <table class='table table-bordered'>
                <thead>
                    <tr>

                        <th>Employee Id</th>
                        <th>Employee Name</th>
                        <th>Employee Email</th>
                        <th>Employee Department</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($response as $employeeData)
                    <tr>
                        <td> {{ $employeeData->id }} </td>
                        <td> {{ $employeeData->employee_name }} </td>
                        <td> {{ $employeeData->employee_email }} </td>
                        <td> {{ $employeeData->Department }}</td>

                        <!--<a href="http://localhost:8000/display">http://localhost:8000/display</a>-->

                        <td><input type="submit" value="Edit"/></td>
                <form action="doDelete" method="GET">
                    <!--<td><form action="employee/{{ $employeeData->id }}/delete" method="POST">-->

                    <td><input type="submit" value="Delete"/>
                        s<!--<a href="http://localhost:8000/display">http://localhost:8000/display</a>-->
                </form>

                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div> 
        <div class='container'>
            <form action="doInsert" method="GET">
                <input type="submit" value="Insert"/>


            </form>

        </div>

    </body>
</html>