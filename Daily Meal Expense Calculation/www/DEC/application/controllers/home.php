<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		//
		$data1['view_name']='/layout/navbar';
		$data2['title']="Home";
      
		$this->load->view('layout/header2',$data2);
		$this->load->view('home1',$data1);
		$this->load->view('layout/footer');
	}



	public function first_page()

	{
		$data1['view_name']='/layout/navbar';
		$data2['title']="Home";
      
		$this->load->view('layout/header2',$data2);
		$this->load->view('home1',$data1);
		$this->load->view('layout/footer');

	}
	public function home_about()

	{
		$data1['view_name']='/layout/navbar';
		$data2['title']="About";
      
		$this->load->view('layout/header2',$data2);
		$this->load->view('home_about',$data1);
		$this->load->view('layout/footer');

	}
	public function home_current_member()

	{

	$this->load->model('member_data');



		 $data1['m_details']  =  $this->member_data->all_member_info();

		$data1['view_name']='/layout/navbar';
		$data2['title']="Current Member";
      
		$this->load->view('layout/header2',$data2);
		$this->load->view('home_current_member',$data1);
		$this->load->view('layout/footer');

	}
	public function home_layout()

	{
		$data1['view_name']='/layout/navbar';
		$data2['title']="Architectural View";
      
		$this->load->view('layout/header2',$data2);
		$this->load->view('home_layout',$data1);
		$this->load->view('layout/footer');

	}
	public function home_requirement_form()

	{
		$data1['view_name']='/layout/navbar';
		$data2['title']="Requirement Form";
      
		$this->load->view('layout/header2',$data2);
		$this->load->view('home_requirement_form',$data1);
		$this->load->view('layout/footer');

	}
	public function home_services()

	{
		$data1['view_name']='/layout/navbar';
		$data2['title']="Service";
      
		$this->load->view('layout/header2',$data2);
		$this->load->view('home_services',$data1);
		$this->load->view('layout/footer');

	}
}
