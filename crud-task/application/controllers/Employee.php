<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//Do your magic here


    $this->load->database();
	$this->load->model('Employee_model');
}
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function get_all()
	{
		$data['all_employee']=$this->Employee_model->all_emp();
		return $this->load->view('employee_list', $data, FALSE);
	}



	public function add_update()
	{
		
		$data=$this->input->post();

        $insert['name']=$data['name'];
          $insert['salary']=$data['salary'];

		if ($data['emp_id']) {
			$this->db->where('emp_id', $data['emp_id']);
			$this->db->update('employee', $insert);
		}else{
			$this->db->insert('employee', $insert);
		}
	}




	public function delete_emp()
	{
		
		$data=$this->input->post();
		if($data['emp_id']) {
			$this->db->where('emp_id', $data['emp_id']);
			$this->db->delete('employee');
		}

	}



}
