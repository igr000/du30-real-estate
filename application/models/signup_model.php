<?php
/*************************************************
**** Model class that will insert data inputs ****
**** into database *******************************
**************************************************
**** Author: Irene Gayle Roque *******************
*************************************************/

class signup_model extends CI_model{
	public function __construct(){
		parent::__construct();
		//loads database
		$this->load->database();
	}

	public function submitInfo(){
		//pass inputs to variables in database
		$data = array(
			'dr_first_name' => $this->input->post('first-name'),
			'dr_last_name' => $this->input->post('last-name'),
			'dr_email' => $this->input->post('email'),
			'dr_phone_number' => $this->input->post('phone-number'),
			'dr_location' => $this->input->post('cities'),
            'dr_comments' => $this->input->post('comment'),   
			'dr_dateTime' => date('Y-m-d H:i:s')
		);
        
        //insert data inputs to database
		return $this->db->insert('customer_info', $data);
	}
}
?>