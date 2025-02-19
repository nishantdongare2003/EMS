<?php 

    class Employee_model extends CI_Model{

        public function Insert_emp($data){
           return $this->db->insert('test',$data);
        }

        public function get_data(){
           return $this->db->get('test')->result_array();
        }

        public function get_one_employee($id){
            $this->db->where('id',$id);
            return $this->db->get('test')->row_array();
        }

        public function update_emp($id,$data){
            $this->db->where('id',$id);
            return $this->db->update('test',$data);
        }

        public function delete_emp($id){
            $this->db->where('id',$id);
            return $this->db->delete('test');
        }



    }



?>