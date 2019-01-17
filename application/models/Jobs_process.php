<?php

class Jobs_Process extends CI_Model{

                            function insertJobsdata(){

                            

                                $data=array(
                                    'job_name'=>$this->input->post('job_name',TRUE),
                                    'job_description'=>$this->input->post('job_description',TRUE),
                                    'qty'=>$this->input->post('qty',TRUE),
                                    'price'=>$this->input->post('price',TRUE),
                                    'ip'=>$this->input->ip_address());
                                return $this->db->insert('jobs',$data);
                            }

                            

    
}

