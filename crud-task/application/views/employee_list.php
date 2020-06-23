<?php foreach ($all_employee as $key => $value): ?>
	
	 <tr>
        <td><?php echo $value['emp_id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['salary']; ?></td>
           <td><span class="btn btn-primary" id="emp_update<?php echo $value['emp_id']; ?>">Update</span>
            <span class="btn btn-danger" id="emp_delete<?php echo $value['emp_id']; ?>">Delete</span> </td>
      </tr>


 


<script>
	$('#emp_update<?php echo $value['emp_id']; ?>').click(function(event) {
		
		 $('#emp_id').val('<?php echo $value['emp_id']; ?>');
		 $('#name').val('<?php echo $value['name']; ?>');
		 $('#salary').val('<?php echo $value['salary']; ?>');

       
		$('#exampleModal').modal('show');

	});


		$('#emp_delete<?php echo $value['emp_id']; ?>').click(function(event) {
		
		 $('#emp_remove').val('<?php echo $value['emp_id']; ?>');
		 
       
		$('#exampleModal2').modal('show');

	});

</script>



<?php endforeach ?>