<?php

class Model_user extends CI_Model{

            function insertUserdata(){

                $data=array(
                    'Name'=>$this->input->post('fname',TRUE),
                    'LastName'=>$this->input->post('lname',TRUE),
                    'Email'=>$this->input->post('email',TRUE),
                    'Password'=>sha1($this->input->post('password',TRUE))

                );
            return $this->db->insert('users',$data);
            }


            function LoginUser(){

                $email=$this->input->post('email');
                $password=sha1($this->input->post('password',TRUE));
              // $password=$this->input->post('password');
                
               
               echo sha1($password,FALSE) ."<br>";

                $this->db->where('Email',$email);
                $this->db->where('Password',$password);
                $respond=$this->db->get('users');
                
                echo $respond->num_rows(); 


                
               
                        if($respond->num_rows()==1){
                        echo $respond->num_rows(); 
                        
                        die();
                        }
                        else{
                            echo $respond->num_rows(); 
                            die();
                        }
                }

    
}

