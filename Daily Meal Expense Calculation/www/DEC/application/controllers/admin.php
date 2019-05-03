<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){

		$this->load->model('member_data');

		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Admin Dashboard";
	    $data1['total']  =  $this->member_data->total_bazer();
	    $data1['total1']  =  $this->member_data->total_meal();
	     $data1['total2']  =  $this->member_data->total_others_bill();
	      $data1['total3']  =  $this->member_data->total_others_bill2();
	       $data1['total4']  =  $this->member_data->approve_total_payment();
	       $data1['sche']  =  $this->member_data->all_schedule();
            $data1['pay']  =  $this->member_data->approve_deny_payment2();

		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_dashboard',$data1);
		$this->load->view('layout/footer_member');
	}


    public function dashboard(){
		//
		$this->load->model('member_data');

		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Admin Dashboard";
		 $data1['total']  =  $this->member_data->total_bazer();
	    $data1['total1']  =  $this->member_data->total_meal();
	     $data1['total2']  =  $this->member_data->total_others_bill();
	      $data1['total3']  =  $this->member_data->total_others_bill2();
	       $data1['total4']  =  $this->member_data->approve_total_payment();
	          $data1['sche']  =  $this->member_data->all_schedule();
	           $data1['pay']  =  $this->member_data->approve_deny_payment2();
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_dashboard',$data1);
		$this->load->view('layout/footer_member');
	}
    public function add_new(){

    	
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Add New Member";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_add_member',$data1);
		$this->load->view('layout/footer_member');

		

		
    	//$this->member_data->save_member();
	}
	public function save(){

		$this->load->model('member_data');

	    if($this->member_data->save_member())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}
	}
	public function meal_data(){

		$this->load->model('member_data');

	    if($this->member_data->meal_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}

		
	
	}

	 public function bazer_record(){
	 		 $this->load->model('member_data');
	 		  $data1['bazer']  =  $this->member_data-> all_bazer_detail();
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Bazer Record";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_bazer_record',$data1);
		$this->load->view('layout/footer_member');
	}
	 public function add_bazer(){
	 	 $this->load->model('member_data');

	    $data1['name_id']  =  $this->member_data->get_name_id();
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Add Bazer";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_add_bazer',$data1);
		$this->load->view('layout/footer_member');
	}


    public function add_bazer_2(){

	

	   
		
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Add Bazer";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_add_bazer_2',$data1);
		

		$this->load->view('layout/footer_member');
	}
	public function bazer_data(){

		$this->load->model('member_data');

	    if($this->member_data->bazer_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}
	}	
	public function bazer_sche_data(){

		$this->load->model('member_data');

	    if($this->member_data->bazer_sche_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}	

		
	
	}

	 public function bazer_schedule(){
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Create Bazer Schedule";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_bazer_schedule',$data1);
		$this->load->view('layout/footer_member');
	}

	 public function add_meal(){

	 	$this->load->model('member_data');

	    $data1['name_id']  =  $this->member_data->get_name_id();
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Add Meal";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_add_meal',$data1);
		

		$this->load->view('layout/footer_member');
	}
	 public function add_meal_2(){

	

	   
		
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Add Meal";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_add_meal_2',$data1);
		

		$this->load->view('layout/footer_member');
	}

     public function meal_details(){

     	$this->load->model('member_data');
     	 $data1['all_meal']  =  $this->member_data->all_member_meal_detail();
     	 $data1['total_meal']  =  $this->member_data->total_meal();


		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Meal Details";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_meal_details',$data1);
		$this->load->view('layout/footer_member');
	}


	  public function notice(){
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Post a Notice";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_notice',$data1);
		$this->load->view('layout/footer_member');
	}

	public function notice_data(){

		$this->load->model('member_data');

	    if($this->member_data->notice_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}	

		
	
	}


     public function payment(){

     	 $this->load->model('member_data');
     	 $data1['pay']  =  $this->member_data->all_member_payment();
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Payment";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_payment',$data1);
		$this->load->view('layout/footer_member');
	}
    public function payment_approve(){
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Payment";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_payment_approve',$data1);
		$this->load->view('layout/footer_member');
	}
	public function approve_data(){
		
		$this->load->model('member_data');

	    if($this->member_data->approve_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}	

	}
     

	 public function others_bill(){
		//
		$data1['view_name']='/layout/navbar_admin';
		$data2['title']="Add Others Bill";
      
		$this->load->view('layout/header3',$data2);
		$this->load->view('admin/admin_others_bill',$data1);
		$this->load->view('layout/footer_member');
	}
		public function others_data(){

		$this->load->model('member_data');

	    if($this->member_data->others_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}	

		
	
	}
}
