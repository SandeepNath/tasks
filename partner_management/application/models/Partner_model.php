<?php

error_reporting(0);
class Partner_model extends CI_Model {

public function __construct()
{
	parent::__construct();
	$this->load->database();
}
	public function all_partner($get="")
	{
      

if($get['p_id']){
$arrayName = array('p_id' => $get['p_id']);

$this->db->insert('request', $arrayName);
}



$this->db->select('partner.*, COUNT(request.p_id) as num_req' );
$this->db->from('partner');
$this->db->join('request', 'partner.p_id = request.p_id');

if($get['p_id']){
$this->db->where('partner.p_id', $get['p_id']);
}

if ($get['from'] && $get['to']) {

  $date1=date_create($get['from']);
$data['start_date']= date_format($date1,"Y-m-d");

  $date2=date_create($get['to']);
$data['end_date']= date_format($date2,"Y-m-d");






$this->db->where('DATE_FORMAT(request.date_time,"%Y-%m-%d") BETWEEN "'.$data['start_date']. '" and "'.$data['end_date'].'"');

}

$this->db->group_by('partner.username');
     $data=$this->db->get();
	  $data=$data->result_array();	
	  return $data;
	}


}
