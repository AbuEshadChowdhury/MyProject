<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index(){
		//
		$this->load->model('member_data');

	    $data3['t_meal']  =  $this->member_data->total_in_meal(1);
	    $data3['t_bazer']  =  $this->member_data->total_in_bazer(1);
	    $data3['total']  =  $this->member_data->total_bazer();
	     $data3['total1']  =  $this->member_data->total_meal();
        $data3['sche']  =  $this->member_data->in_schedule($id);
         $data3['app_payment']  =  $this->member_data->approve_deny_payment(1);
		//
	
		$data1['name']  =  $this->member_data->member_name(1);
		
		$data2['title']="Member Dashboard";
      
		$this->load->view('layout/header',$data2);
		$this->load->view('layout/navbar_member',$data1);
		$this->load->view('member/member_dashboard',$data3);
		$this->load->view('layout/footer_member');
	}


	public function dashboard($id){
		$this->load->model('member_data');

	    $data3['t_meal']  =  $this->member_data->total_in_meal($id);
	    $data3['t_bazer']  =  $this->member_data->total_in_bazer($id);
	    $data3['total']  =  $this->member_data->total_bazer();
	    $data3['total1']  =  $this->member_data->total_meal();
	    $data3['sche']  =  $this->member_data->in_schedule($id);
	      $data3['app_payment']  =  $this->member_data->approve_deny_payment($id);

		//
	
		$data1['name']  =  $this->member_data->member_name($id);
		
		$data2['title']="Member Dashboard";
      
		$this->load->view('layout/header',$data2);
		$this->load->view('layout/navbar_member',$data1);
		$this->load->view('member/member_dashboard',$data3);
		$this->load->view('layout/footer_member');
	}

    public function payment($id){
		//
		$this->load->model('member_data');
		$data1['name']  =  $this->member_data->member_name($id);

		$data2['title']="Payment";
      
		$this->load->view('layout/header',$data2);
			$this->load->view('layout/navbar_member',$data1);
		$this->load->view('member/member_payment');
		$this->load->view('layout/footer_member');
	}
	public function payment_data(){

		$this->load->model('member_data');

	    if($this->member_data->payment_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}	

		
	
	}

     public function view_notice($id){
		//
		$this->load->model('member_data');
		$data1['name']  =  $this->member_data->member_name($id);
		$data2['notice']  =  $this->member_data->get_all_notice();

		$data2['title']="View Notice";
      
		$this->load->view('layout/header',$data2);
			$this->load->view('layout/navbar_member',$data1);
		$this->load->view('member/member_v_notice',$data2);
		$this->load->view('layout/footer_member');
	}
    public function post_notice($id){

		//
		$this->load->model('member_data');
		$data1['name']  =  $this->member_data->member_name($id);

		
		$data2['title']="Post Notice";
      
		$this->load->view('layout/header',$data2);
		$this->load->view('layout/navbar_member',$data1);
		$this->load->view('member/member_p_notice');
		$this->load->view('layout/footer_member');
	}

	public function m_notice_data(){

		$this->load->model('member_data');

	    if($this->member_data->member_notice_input())
		{
			echo"success";
		}
		else
		{
			echo"failure";
		}
	}		

	public function expense($id){
		//
		$this->load->model('member_data');
		$data1['name']  =  $this->member_data->member_name($id);
		$data3['name1']  =  $this->member_data->total_in_meal($id);
		$data3['name2']  =  $this->member_data->total_in_others_bill($id);
		$data3['name3']  =  $this->member_data->total_in_others_bill2($id);
		$data3['app']  =  $this->member_data->in_approve_total_payment($id);
		$data3['name5']  =  $this->member_data->total_meal($id);

        $data3['name6']  =  $this->member_data->total_bazer($id);


		$data2['title']="Expense";
      
		$this->load->view('layout/header',$data2);
		$this->load->view('layout/navbar_member',$data1);
		$this->load->view('member/member_expense',$data3);
		$this->load->view('layout/footer_member');
	}

		public function blank($id){
		//
		$this->load->model('member_data');
		$data1['name']  =  $this->member_data->member_name($id);
		$data2['title']="Blank";
      
		$this->load->view('layout/header',$data2);
		$this->load->view('layout/navbar_member',$data1);
		$this->load->view('member/member_blank');
		$this->load->view('layout/footer_member');
	}


	
}
