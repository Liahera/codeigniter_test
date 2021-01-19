<?php


class ShowData_model extends CI_Model
{
public function __construct()
{
	$this->load->database();
}
public function getShowNotJoin(){
	$query = $this->db->query('SELECT buyers.buyer_id, buyers.name, requests.request_id, requests.sum, requests.date, (SELECT requests_info.info FROM requests_info WHERE requests_info.request_id = requests.request_id) as info
FROM requests, buyers 
WHERE requests.buyer_id = buyers.buyer_id');

	return $query->result_array();
}
	public function getShowJoin(){
		$query = $this->db->query('SELECT buyers.buyer_id, buyers.name, requests.request_id, requests.sum, requests.date, requests_info.info 
FROM buyers
LEFT JOIN requests ON requests.buyer_id = buyers.buyer_id
LEFT JOIN requests_info ON requests_info.request_id = requests.request_id');

		return $query->result_array();
	}
}
