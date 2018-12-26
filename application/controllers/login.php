<?php

Class Login extends CI_Controller{

            public function LoginUser(){
            
                
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'required');



                        if ($this->form_validation->run() == FALSE)
                        {
                                $this->load->view('Login');
                        }
                        else
                            {

                                $this->load->model('Model_user');
                                $this->Model_user->LoginUser();


                            }


                
            }


        }

    
?>