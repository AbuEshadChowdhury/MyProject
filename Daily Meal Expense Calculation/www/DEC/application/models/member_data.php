<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_data extends CI_Model {


        public function save_member()
        {
                $member_info=array(
                        'name'            =>$this->input->post('name'),
                        'university'      =>$this->input->post('university'),
                        'home_address'    =>$this->input->post('home_address'),
                        'mobile_number'   =>$this->input->post('mobile_number'),
                        'email'     =>$this->input->post('email'),
                        
                       
                        );

                $this->db->insert('members', $member_info); 
            //    $this->db->insert_id();
        }
        public function get_name_id(){

                return $this->db->select('id,name')
                ->from('members')
                ->get()->result_array();



        }

         public function meal_input()


        {
             
                $member_meal=array(
                        
                        'date'      =>$this->input->post('date'),
                        'm_id'      =>$this->input->post('m_id'),
                        'meal'    =>$this->input->post('meal'),
                      
                       
                        );

                $this->db->insert('meal_tbl', $member_meal); 
               
        }

         public function member_name($member_id)


        {
               return $this->db->select('name')
                ->from('members')
                ->where('id', $member_id)
                ->get()->row_array();

        }

         public function bazer_input()


        {
             
                $member_meal=array(
                        
                        
                        
                        'date'      =>$this->input->post('date'),
                        'b_id'      =>$this->input->post('b_id'),
                        'description'    =>$this->input->post('description'),
                        'amount'    =>$this->input->post('amount'),
                      
                       
                        );

                $this->db->insert('bazer_tbl', $member_meal); 
               
        }



        public function bazer_sche_input()


        {
             
                $member_meal=array(
                        
                        
                        
                        'date'      =>$this->input->post('date'),
                        'bs_id'      =>$this->input->post('bs_id'),
                      
                      
                       
                        );

                $this->db->insert('bazer_sche_tbl', $member_meal); 
               
        }

        public function notice_input()


        {
             
                $member_meal=array(
                        
                        'date'      =>$this->input->post('date'),
                        
                        'subject'      =>$this->input->post('subject'),
                        'description'      =>$this->input->post('description'),
                      
                      
                       
                        );

                $this->db->insert('notice_tbl', $member_meal); 
               
        }
         public function others_input()


        {
             
                $member_meal=array(
                        
                        
                        
                        'o_id'      =>$this->input->post('o_id'),
                        'utility'      =>$this->input->post('utility'),
                        'others'      =>$this->input->post('others'),
                      
                      
                       
                        );

                $this->db->insert('others_bill_tbl', $member_meal); 
               
        }
        public function payment_input()


        {
             
                $member_meal=array(
                        
                        
                         'slip_no'      =>$this->input->post('slip_no'),
                        'date'      =>$this->input->post('date'),
                        'p_id'      =>$this->input->post('p_id'),
                        'amount'      =>$this->input->post('amount'),
                      
                      
                       
                        );

                $this->db->insert('payment_tbl', $member_meal); 
               
        }
         public function member_notice_input()


        {
             
                $member_meal=array(

                        'm_n_id'      =>$this->input->post('m_n_id'),
                        
                        'date'      =>$this->input->post('date'),
                        
                        'subject'      =>$this->input->post('subject'),
                        'description'      =>$this->input->post('description'),
                      
                      
                       
                        );

                $this->db->insert('member_notice', $member_meal); 
               
        }
         public function approve_input()


        {
             
                $member_meal=array(

                        'slip_no'      =>$this->input->post('slip_no'),
                        
                       
                        'ap_id'      =>$this->input->post('ap_id'),
                        
                        'approve'      =>$this->input->post('approve'),
                       
                      
                      
                       
                        );

                $this->db->insert('payment_approve', $member_meal); 
               
        }







        public function total_in_meal($member_id)


        {
               return $this->db->select_sum('meal')
                ->from('meal_tbl')
                ->where('m_id', $member_id)
                ->get()->row_array();

        }
         public function total_in_bazer($member_id)


        {
               return $this->db->select_sum('amount')
                ->from('bazer_tbl')
                ->where('b_id', $member_id)
                ->get()->row_array();

        }
           public function total_in_others_bill($id)


        {
               return $this->db->select_sum('utility')
                ->from('others_bill_tbl')
                 ->where('o_id', $id)
                ->get()->row_array();

        }
         public function total_in_others_bill2($id)


        {
               return $this->db->select_sum('others')
                ->from('others_bill_tbl')
                 ->where('o_id', $id)
                ->get()->row_array();

        }
       public function in_approve_total_payment($id)
        {
          return $this->db->select(' p.amount')
                ->from('payment_tbl AS p') 
                ->join('payment_approve AS a', 'p.slip_no=a.slip_no')
                ->where('a.approve', 1)
                ->where('a.ap_id', $id)
               
                ->get()->row_array(); 
        }

         public function total_bazer()


        {
               return $this->db->select_sum('amount')
                ->from('bazer_tbl')
                ->get()->row_array();

        }
         public function total_others_bill()


        {
               return $this->db->select_sum('utility')
                ->from('others_bill_tbl')
                ->get()->row_array();

        }
         public function total_others_bill2()


        {
               return $this->db->select_sum('others')
                ->from('others_bill_tbl')
                ->get()->row_array();

        }
        public function total_meal()


        {
               return $this->db->select_sum('meal')
                ->from('meal_tbl')
                ->get()->row_array();

        }


       public function all_member_info()


        {
               return $this->db->select('name,home_address,email')
                ->from('members')
                ->get()->result_array();

        }


        public function all_member_meal_detail()
        {
          return $this->db->select('m.id, m.name,   me.date, me.m_id, SUM(me.meal) As meal')
                ->from('members AS m')
                ->join('meal_tbl AS me', 'me.m_id=m.id')
                ->group_by('me.date,m.name')
                ->order_by('me.date')
                ->get()->result_array();      
        }

       public function all_bazer_detail()
        {
          return $this->db->select('m.id, m.name,   b.date, b.b_id, b.description, b.amount')
                ->from('members AS m')
                ->join('bazer_tbl AS b', 'b.b_id=m.id')
                ->order_by('b.date')
                ->get()->result_array();      
        }

      public function all_member_payment()
        {
          return $this->db->select('m.id, m.name,   p.slip_no, p.date, p.p_id, p.amount')
                ->from('members AS m')
                ->join('payment_tbl AS p', 'p.p_id=m.id')
                ->order_by('p.date')
                ->get()->result_array(); 
        }
        public function in_schedule($id)
        {
               return $this->db->select('date, bs_id')
                ->from('bazer_sche_tbl')
                ->where('bs_id', $id)
                ->get()->result_array();
        }
        public function all_schedule()
        {
               return $this->db->select('m.name, b.date, b.bs_id')
                ->from('bazer_sche_tbl AS b')
                 ->join('members AS m', 'b.bs_id=m.id')
               
                ->get()->result_array(); 
        }
        public function approve_deny_payment($id)
        {
          return $this->db->select('p.slip_no ,p.date , p.p_id , p.amount ,a.slip_no, a.ap_id, a.approve')
                ->from('payment_tbl AS p') 
                ->join('payment_approve AS a', 'p.slip_no=a.slip_no')
                ->where('p.p_id', $id)
               
                ->get()->result_array(); 
        }
         public function approve_total_payment()
        {
          return $this->db->select_sum(' p.amount')
                ->from('payment_tbl AS p') 
                ->join('payment_approve AS a', 'p.slip_no=a.slip_no')
                ->where('a.approve', 1)
               
                ->get()->row_array(); 
        }
         public function approve_deny_payment2()
        {
          return $this->db->select('p.slip_no ,p.date , p.p_id , p.amount ,a.slip_no, a.ap_id, a.approve')
                ->from('payment_tbl AS p') 
                ->join('payment_approve AS a', 'p.slip_no=a.slip_no')
                
               
                ->get()->result_array(); 
        }
          public function get_all_notice()


        {
               return $this->db->select('date,subject,description')
                ->from('notice_tbl')
                ->get()->result_array();

        }




}
