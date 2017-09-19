<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_model {


	function process($data)
	{
		$this->db->where('email',$data['email']);
		$query = $this->db->get('register_details');
		$results=$query->result_array();

		

		if(count($results)>0)
		{
			die( "There is already a user with that email!" ) ;
		}
		else
		{
			$this->db->insert('register_details',$data);

		}		
	}



	function more_details($data)
	{
		$this->db->insert('more_details',$data);	
	}
	


	function get_details($data)
	{
		$this->db->where('email',$data['username']);
		$this->db->where('password',$data['password']);
		$query = $this->db->get('register_details');
		$result = $query->result_array();
		return $result;
	}

}



	
