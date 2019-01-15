<?php

Class c_Jobs extends CI_Controller{

                public function Jobs_Adding(){





                
                    $this->form_validation->set_rules('job_name', 'Job Name', 'required');
                

                            if ($this->form_validation->run() == FALSE)
                            {
                                    $this->load->view('Jobs');
                            }
                            else
                                {

                                    $this->load->model('m_Jobs_process');
                                    $response= $this->Order_process->insertJobsdata();
                                        if ($response){
                                            $this->session->set_flashdata('msg','Jobs Added Successfully . Please add the Job');
                                            redirect('Home/Jobs');
                                                        }
                                                        else{

                                                            $this->session->set_flashdata('msg','Some thing went wrong. Please retry');
                                                            redirect('Home/Jobs');
                                                            }


                                    }
                }





    }


?>