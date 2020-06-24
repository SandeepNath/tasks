<!DOCTYPE html>
<html lang="en">
<head>
  <title>All partner</title>
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


    <h2 class="text-left">All partner</h2>


    <hr>

    <div   class="row">
      
    <div   class="col-md-4">
       <h4>New partner  <button class="btn btn-primary" id="exampleModal_open">+ ADD</button></h4>

 
    </div>

   

     <div   class="col-md-6">
      <form enctype="multipart/form-data" method="post" role="form" action="<?php echo base_url().'index.php/Partner/importdata'?>" >

<div  class="row">
  
  <div  class="col-md-5">
  <div class="form-group">
<label for="exampleInputFile">File Upload</label>
<input type="file" name="file" id="file" size="1000" required="">
<p class="help-block">Only Excel/CSV File Import.</p>

</div>
</div>

  <div  class="col-md-5   ">
  <button type="submit" class="btn btn-success" name="submit" value="submit" >Import</button>
   <a href="<?php echo base_url().'index.php/Partner/export_csv'?>" title=""><button class="btn btn-primary" type="button" id="Export"> Export </button>  </a>
</div>

</div>


</form>
    </div>


    <div class="col-md-12">
      

      <form action="" method="get" accept-charset="utf-8 " class="row">
  
  <?php
    $this->db->group_by('username');
   $all_partner=$this->db->get('partner');

  $all_partner=$all_partner->result_array();
  ?>
   <div class="col-md-3">
      <select name="p_id"  class="form-control">
        <option value="">Select Partner</option>
        
        <?php foreach ($all_partner as $key => $value): ?>
           <option value="<?php echo $value['p_id'];?>"><?php echo $value['name'];?> | <?php echo $value['username'];?></option>
        <?php endforeach ?>
        
      </select>
    </div>

     <div class="col-md-3">
    
      <input type="date" name="from" class="form-control">
    </div>

      <div class="col-md-3">
      
      <input type="date" name="to" class="form-control">
    </div>

     <div class="col-md-3">
      <button type="submit" class="btn btn-outline-success"> Filter</button>
      <button type="rest" class="btn btn-outline-success"> Rest</button>
    </div>
</form>
    </div>





    </div>
   






    <script>
      
      $(document).ready(function() {

        $('#Export').click(function(event) {
           $.ajax({
          url: '<?php echo base_url().'index.php/Partner/export_csv'?>',
          type: 'POST',
  
        })
        .done(function() {
          
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });

        });
      
        
      });
    </script>
  <p>partner Management - ADD/UPDATE/DELETE</p> 

  <p class="text-success" id="emp_message"></p>
     <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Username</th>
         <th>Request</th>
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
        <h5 class="modal-title" id="exampleModalLabel">Remove partner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <input type="hidden" value="" id="emp_remove">
      </div>
      <div class="modal-body">
      <h4> Are you sure delete this partner?</h4>
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
        <h5 class="modal-title" id="exampleModalLabel">Add/Update partner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" id="p_id" name="">
        <label for="">partner Name * :</label>
        
    <input type="text" name="name" id="name" value="" class="form-control">
     
      <label for="">Username * :</label>
        
    <input type="text" name="username" id="username" value="" class=" form-control">

<div id="warninig" class="text-danger"> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addnewemp">Save</button>
      </div>
    </div>
  </div>
</div>




<div class="container card emp_box">
  
  <?php if ($api_data): ?>

    <h4 class="text-success text-center"> GET API REQUEST DATA </h4>
    <?php

echo "<pre>";
print_r($api_data);
echo "</pre>";
    ?>
  <?php endif ?>
</div>





  <script>
 
    $(document).ready(function() {
      
      get_all_emp();
      function get_all_emp() {

p_idapi ='<?php echo $apidata['p_id']?>';
from = '<?php echo $apidata['from']?>';
to = '<?php echo $apidata['to']?>';

          $.ajax({
    url: '<?php echo base_url().'index.php/Partner/get_all'?>',
    type: 'POST',
    data: {p_id: p_idapi, from: from, to: to},
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






          function add_update_emp(p_id, name, username) {
   

          $.ajax({
    url: '<?php echo base_url().'index.php/Partner/add_update'?>',
    type: 'POST',
     data: {p_id: p_id, name: name, username: username},
  })
  .done(function(result) {
 console.log(result);
  })
  .fail(function() {
     
  })
  .always(function() {
     get_all_emp();
  });


$('#emp_message').html('partner is Add/Update successfully.');

      }








   function delete_emp(p_id2) {

   
 
             
          $.ajax({
    url: '<?php echo base_url().'index.php/Partner/delete_emp'?>',
    type: 'POST',
     data: {p_id: p_id2},
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
  var p_id2=$('#emp_remove').val();
  delete_emp(p_id2);
$('#exampleModal2').modal('toggle');
$('#emp_message').html('partner is deleted successfully.');

});






   
   $('#exampleModal_open').click(function(event) {
     $('#name').val('');
     $('#username').val('');
     $('#p_id').val('');

  $('#exampleModal').modal('show');
   });


    $('#addnewemp').click(function(event) {
      
      var name= $('#name').val();
      var username= $('#username').val();
       var p_id= $('#p_id').val();

      if(name && username){
add_update_emp(p_id, name, username);
$('#exampleModal').modal('toggle');
      }else{
$('#warninig').html('Required All Fileds *');
      }



    });


    });

  
  </script>


</body>
</html>
