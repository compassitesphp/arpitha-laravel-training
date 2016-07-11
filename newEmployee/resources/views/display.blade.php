<!DOCTYPE html>
<html>
    <head>
        <title>Employee List</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href ="{{asset('/assets/css/style.css')}}">




    </head>


    <body>    

        @if(Session::has('flash_message'))
        <div class="alert">
            {{ Session::get('flash_message') }}
        </div>
        @endif
<!--        
        @if(Session::has('message'))
        <div class="alert1">
            {{ Session::get('message') }}
        </div>
        @endif
        -->
        
        
        <div class='container'>
            <h1>Employee details</h1>
            <img src="{{asset('/assets/images/image.jpg')}}">
            
            <br><br>

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
                        <td> {{ $employeeData->employee_department }}</td>


                        <td><a href="/{{$employeeData->id}}/edit">Edit</a> </td>
                        <td><a href="/{{$employeeData->id}}/delete" onclick="return confirm('Delete record?');">Delete</a></td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div> 

        <div class='container'>
            <a href="/insert">Insert</a>
        </div>
    </body>
</html>






