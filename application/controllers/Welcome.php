<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}

	public function form_submit(){
		//First, get the expected inputs and store them in an array 
		//To evaluate or do other operations

		$firstname = $this->input->post('firstname' );
		$lastname = $this->input->post('lastname' );
		$email = $this->input->post('email' );
		$password = $this->input->post('password' );
		$confirm = $this->input->post('confirm' );
		$code = $this->input->post('code' );
		$mobile = $this->input->post('mobile' );
		$website = $this->input->post('website' );
		$address = $this->input->post('address' );
		$comment = $this->input->post('comment' );


$config = array(
		//Set validation rules
		array(

		 'field' => 'firstname'  ,

		  'label' =>  'First Name' ,

		   'rules' => 'required|alpha|max_length[20]'),

		array(

		 'field' => 'lastname'  ,

		  'label' =>  'Last Name' ,

		  'rules' => 'required|alpha|max_length[20]'),

		array(

		 'field' => 'email'  ,

		  'label' =>  'Email' ,

		  'rules' =>  'required|valid_email'),

		array(

		 'field' => 'password'  ,

		  'label' =>  'Password' ,
		  'rules' =>   'required'),

		array(

			'field' => 'confirm' ,

			'label' =>  'Confirm Password' ,

			 'rules' => 'required|matches[password]'),

		array(

		 'field' => 'code'  ,

		  'label' =>  'Code' ,

		  'rules' =>  'required|max_length[10]|is_natural' 
			),

		array(

		 'field' => 'mobile'  ,

		  'label' =>  'Mobile' ,
		  'rules' =>  'required|max_length[10]|is_natural'),

		array(

		 'field' => 'website'  ,

		  'label' =>  'Website' ,
		  'rules' =>  'required|valid_url'),

		array(

		 'field' => 'address'  ,

		  'label' =>  'Address' ,
		  'rules' =>  'required|alpha_dash'),

		array(

		 'field' => 'comment'  ,

		  'label' =>  'Comment' ,
		  'rules' =>  'required|alpha_dash|min_length[50]|max_length[200]')

);

	$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('header');
                        $this->load->view('form');
                        $this->load->view('footer');
                }
                else
                {
                        echo 'success';
                }












	}


}
