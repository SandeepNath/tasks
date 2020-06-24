<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//Do your magic here


    $this->load->database();
	$this->load->model('Partner_model');
}
	public function index()
	{


       $apidata['apidata']='';
		$apidata['apidata']=$this->input->get();
if($apidata['apidata']){
$apidata['api_data']=$this->Partner_model->all_partner($apidata['apidata']);	
}


		$this->load->view('welcome_message', $apidata);
	}


	
		
	public function all_emp()
	{
		$this->input->get();
       
       $data=$this->db->get('partner');

	   $data=$data->result_array();	

       $get_data['getdata']=$data;

	   	$this->load->view('welcome_message', $get_data);
	}






public function importdata()
	{ 
	
		if(isset($_POST["submit"]))
		{
			$file = $_FILES['file']['tmp_name'];

		
			$handle = fopen($file, "r");
			$c = 0;//

			
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				$name = $filesop[1];
				$username = $filesop[2];
				if($c<>0){					//SKIP THE FIRST ROW
					$this->saverecords($name,$username);
				}
				$c = $c + 1;
			}
			echo "sucessfully import data !";
				
		}


   redirect(base_url(),'refresh');

	}
    	

public function saverecords($emp='', $sal='')
{
	
$this->db->insert('partner', array('name' => $emp, 'username' => $sal));
		

}



public function export_csv(){ 
		// file name 
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
		$get="";
		$usersData = $this->Partner_model->all_partner($get);

	
		// file creation 
		$file = fopen('php://output','w');
		$header = array("ID","Name","User","Date"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		redirect(base_url(),'refresh');
	}


	




	public function get_all()
	{
		$get=$this->input->post();
		$data['all_partner']=$this->Partner_model->all_partner($get);
		return $this->load->view('partner_list', $data, FALSE);
	}


	public function add_update()
	{
		
		$data=$this->input->post();




        $insert['name']=$data['name'];
          $insert['username']=$data['username'];

		if ($data['p_id']) {
			$this->db->where('p_id', $data['p_id']);
			$this->db->update('partner', $insert);
		}else{
			$insert['key']=time().date('YMd');
			$this->db->insert('partner', $insert);
$insert_id = $this->db->insert_id();
			if($insert_id){
$arrayName = array('p_id' => $insert_id);

$this->db->insert('request', $arrayName);
}

		}



	}




	public function delete_emp()
	{
		
		$data=$this->input->post();
		if($data['p_id']) {
			$this->db->where('p_id', $data['p_id']);
			$this->db->delete('partner');
		}

	}



}
