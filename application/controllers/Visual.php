<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visual extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function  CATEGORY()
	{
		$crud = new grocery_CRUD();
		//$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}


public function  CUSTOMERS()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}


public function  ORDERS()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}


public function  ORDER_DETAILS()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}


public function PAYMENT ()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}


public function  PRODUCTS()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}


public function  SHIPPERS()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}


public function  SUPPLIER()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$output = $crud->render();

		$this->_example_output($output);
	}



	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	
	

}