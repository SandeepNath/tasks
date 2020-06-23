<?php


class Employee_model extends CI_Model {

public function __construct()
{
	parent::__construct();
	$this->load->database();
}
	public function all_emp()
	{
      
     $data=$this->db->get('employee');
	  $data=$data->result_array();	
	  return $data;
	}


}
