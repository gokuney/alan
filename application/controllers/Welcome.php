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

		$firstname = $this->input->post('firstname' , TRUE);
		$lastname = $this->input->post('lastname' , TRUE);
		$email = $this->input->post('email' , TRUE);
		$password = $this->input->post('password' , TRUE);
		$confirm = $this->input->post('confirm' , TRUE);
		$code = $this->input->post('code' , TRUE);
		$mobile = $this->input->post('mobile' , TRUE);
		$website = $this->input->post('website' , TRUE);
		$address = $this->input->post('address' , TRUE);
		$comment = $this->input->post('comment' , TRUE);


		//Set validation rules
		array(

		 'field' => 'firstname'  ,

		  'label' =>  'First Name' ,

		   'rules' => 'required | alpha | max_length[20]');

		array(

		 'field' => 'lastname'  ,

		  'label' =>  'Last Name' ,

		  'rules' => 'required | alpha | max_length[20]');

		array(

		 'field' => 'email'  ,

		  'label' =>  'Email' ,

		  'required | valid_email');

		array(

		 'field' => 'password'  ,

		  'label' =>  'Password' , 'required');

		array(

			'field' => 'confirm' ,

			'label' =>  'Confirm Password' ,

			 'rules' => 'required | matches[password]');

		array(

		 'field' => 'code'  ,

		  'label' =>  'Code' ,

		  'required | max_length[10] | is_natural' 
			);

		array(

		 'field' => 'mobile'  ,

		  'label' =>  'Mobile' , 'required | max_length[10] | is_natural');

		array(

		 'field' => 'website'  ,

		  'label' =>  'Website' , 'required | valid_url');

		array(

		 'field' => 'address'  ,

		  'label' =>  'Address' , 'required | alpha_dash');

		array(

		 'field' => 'comment'  ,

		  'label' =>  'Comment' , 'required | alpha_dash | min_length[50] | max_length[200]');




		if ($this->form_validation->run($this) == FALSE)
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
