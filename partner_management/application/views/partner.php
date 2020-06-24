<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style >


    .emp_box{
    margin-top: 10px;
    border: 1px solid #D0D0D0;
    box-shadow: 0 0 8px #D0D0D0;
    padding: 10px;
    }
  </style>
</head>
<body>



<div class="container card emp_box">

<div class="row">
  
  <div class="col-md-6">
    <h2 class="text-center">All Partner</h2>
    <hr>
    <h4>New Partner  <button class="btn btn-primary" id="exampleModal_open">+ ADD</button></h4>
  <p>Partner Management - ADD/UPDATE/DELETE</p> 

  <p class="text-success" id="emp_message"></p>
     <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Partner</th>
        <th>SALARY/MONTH</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody id="all_emp">


      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
           <td><span class="btn btn-primary">Update</span> <span class="btn btn-danger">Delete</span> </td>
      </tr>
   

    </tbody>
  </table>
</div>



</div>

  


</div>




</body>
</html>
