<?php

class Hello extends CI_Controller{

	public function __construct(){
    	parent:: __construct();
    	// 
    	echo "Initialization<br>";

	}
	public function index(){
		//
		echo"index function";
	}

	public function one($p1="hassahjbgjhb"){
		///
		echo"hello machine<br>";
		echo"hello machine  : $p1";

	}
	public function two($name){
		$data['n']=$name;
		///
		$this->load->view('one',$data);

	}
}
