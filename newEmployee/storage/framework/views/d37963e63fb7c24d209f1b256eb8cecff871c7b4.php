<!DOCTYPE html>
<html>
<head>
<title>employee details</title>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
      body{
          background-color: darkseagreen;
          
      }
      h2{
          text-transform: capitalize;
      }
      
      
      tr:hover
      {background-color:#f5f5f5}
      
      a:hover
      {
          color:crimson;
      }
  </style>
</head>

<body>     
     <div class='container'>
		   <h2>employee details</h2>
                    <table class='table table-bordered'>
    			<thead>
      			<tr>
							
                            <th>Employee_id</th>
                            <th>Employee_name</th>
                            <th>Employee_email</th>
                            <th>Employee_department</th>
                            <th colspan="2">Action</th>
			</tr>
                        </thead>
   
			<tbody>
                            
                            <?php foreach($response as $employeeData): ?>
                            <tr>
                                <td> <?php echo e($employeeData->id); ?> </td>
                                <td> <?php echo e($employeeData->employee_name); ?> </td>
                                <td> <?php echo e($employeeData->employee_email); ?> </td>
                                <td> <?php echo e($employeeData->Department); ?></td>
                                <td>Edit</td>
                                <td>Delete</td>                                
                                </tr>
                            <?php endforeach; ?>
                         </tbody>
                    </table>
     </div>            
    
    
</body>