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

    <h2 class="text-center">All Employee</h2>
    <hr>
    <h4>New Employee  <button class="btn btn-primary" id="exampleModal_open">+ ADD</button></h4>
  <p>Employee Management - ADD/UPDATE/DELETE</p> 

  <p class="text-success" id="emp_message"></p>
     <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
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






<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Remove Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <input type="hidden" value="" id="emp_remove">
      </div>
      <div class="modal-body">
      <h4> Are you sure delete this employee?</h4>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary" id="delete_comfrim">YES</button>
      </div>
     
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Update Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" id="emp_id" name="">
        <label for="">Employee Name * :</label>
        
    <input type="text" name="name" id="name" value="" class="form-control">
     
      <label for="">Employee Name * :</label>
        
    <input type="number" name="salary" id="salary" value="" class=" form-control">

<div id="warninig" class="text-danger"> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addnewemp">Save</button>
      </div>
    </div>
  </div>
</div>


  <script>
 
    $(document).ready(function() {
      
      get_all_emp();
      function get_all_emp() {
          $.ajax({
    url: '<?php echo base_url().'index.php/Employee/get_all'?>',
    type: 'POST',
  })
  .done(function(result) {
  $('#all_emp').html(result);
  })
  .fail(function() {
     $('#all_emp').html("No Data Found");
  })
  .always(function() {
   
  });


      }






            function add_update_emp(emp_id, name, salary) {


             
          $.ajax({
    url: '<?php echo base_url().'index.php/Employee/add_update'?>',
    type: 'POST',
     data: {emp_id: emp_id, name:name, salary:salary},
  })
  .done(function(result) {
 
  })
  .fail(function() {
     
  })
  .always(function() {
     get_all_emp();
  });


$('#emp_message').html('Employee is Add/Update successfully.');

      }








   function delete_emp(emp_id2) {

   
 
             
          $.ajax({
    url: '<?php echo base_url().'index.php/Employee/delete_emp'?>',
    type: 'POST',
     data: {emp_id: emp_id2},
  })
  .done(function(result) {
 
  })
  .fail(function() {
     
  })
  .always(function() {
     get_all_emp();
  });




      }


$('#delete_comfrim').click(function(event) {
  var emp_id2=$('#emp_remove').val();
  delete_emp(emp_id2);
$('#exampleModal2').modal('toggle');
$('#emp_message').html('Employee is deleted successfully.');

});






   
   $('#exampleModal_open').click(function(event) {
     $('#name').val('');
     $('#salary').val('');
     $('#emp_id').val('');

  $('#exampleModal').modal('show');
   });


    $('#addnewemp').click(function(event) {
      
      var name= $('#name').val();
      var salary= $('#salary').val();
       var emp_id= $('#emp_id').val();

      if(name && salary){
add_update_emp(emp_id, name, salary);
$('#exampleModal').modal('toggle');
      }else{
$('#warninig').html('Required All Fileds *');
      }



    });


    });

  
  </script>


</body>
</html>
