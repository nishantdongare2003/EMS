<?php 

    class Employee extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->load->database();
            $this->load->library('session');
            $this->load->model('employee_model');
        }

        // Get Data From The Database

        public function index(){
            $data['employee'] = $this->employee_model->get_data();
            $this->load->view('index',$data);
        }


        // Inserting Data Into Dtabase

        public function add(){

            if($this->input->post()){
                $this->form_validation->set_rules('name','Name','trim|required');
                $this->form_validation->set_rules('position','Position','trim|required');
                $this->form_validation->set_rules('salary','Salary','trim|required|numeric');
                $this->form_validation->set_rules('contact','Contact','trim|required');

                if($this->form_validation->run()==false){
                    $this->load->view('index');
                }else{
                    $data = [
                        'name'=>$this->input->post('name'),
                        'position'=>$this->input->post('position'),
                        'salary'=>$this->input->post('salary'),
                        'contact_info'=>$this->input->post('contact'),
                    ];

                    $this->employee_model->Insert_emp($data);
                    $this->session->set_flashdata('inserted','The Employee Data Has Addded Successfully !!');
                    redirect('employee');
                }
            }
        
        }

        // Getting Data For Edit 

        public function edit($id){
            $data['employees'] = $this->employee_model->get_one_employee($id);
            $this->load->view('edit',$data);

        }

        // After The Getting Data Here I Update the Data

        public function update($id){
           if($this->input->post()){

                $this->form_validation->set_rules('name','Name','trim|required');
                $this->form_validation->set_rules('position','Position','trim|required');
                $this->form_validation->set_rules('salary','Salary','trim|required|numeric');
                $this->form_validation->set_rules('contact','Contact','trim|required');

                if($this->form_validation->run()==false){
                    $this->load->view('edit');

                }else{
                    $data = [
                        'name'=>$this->input->post('name'),
                        'position'=>$this->input->post('position'),
                        'salary'=>$this->input->post('salary'),
                        'contact_info'=>$this->input->post('contact'),
                    ];

                    $this->employee_model->update_emp($id,$data);
                    $this->session->set_flashdata('updated','The Employee Data Has Been Updated Successfully!');
                    redirect('employee');

                }




            }
        }

        // Here The Code Of Deleting Data

        public function delete($id){
            $this->employee_model->delete_emp($id);
            $this->session->set_flashdata('delete','The Employee Data Has Been Successfully Deleted!!');
            redirect('employee');
            
        }


    }


?>