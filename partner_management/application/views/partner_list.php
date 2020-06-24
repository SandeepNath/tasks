<?php foreach ($all_partner as $key => $value): ?>
	
	 <tr>
        <td><?php echo $value['p_id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['username']; ?></td>
        
          <td><?php echo $value['num_req']-1; ?></td>
            <td><?php echo $value['date_time']; ?></td>
          
           <td><span class="btn btn-primary" id="emp_update<?php echo $value['p_id']; ?>">Update</span>
            <span class="btn btn-danger" id="emp_delete<?php echo $value['p_id']; ?>">Delete</span> </td>
      </tr>


 


<script>
	$('#emp_update<?php echo $value['p_id']; ?>').click(function(event) {
		
		 $('#p_id').val('<?php echo $value['p_id']; ?>');
		 $('#name').val('<?php echo $value['name']; ?>');
		 $('#username').val('<?php echo $value['username']; ?>');

       
		$('#exampleModal').modal('show');

	});


		$('#emp_delete<?php echo $value['p_id']; ?>').click(function(event) {
		
		 $('#emp_remove').val('<?php echo $value['p_id']; ?>');
		 

		$('#exampleModal2').modal('show');

	});

</script>





<?php endforeach ?>

    