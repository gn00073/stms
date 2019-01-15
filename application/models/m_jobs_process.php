<?php

class Jobs_process extends CI_Model{

                            function insertJobsdata(){

                            

                                $data=array(
                                    'job_name'=>$this->input->post('order_name',TRUE),
                                    'job_description'=>$this->input->post('order_date',TRUE),
                                    'qty'=>$this->input->post('requested_date',TRUE),
                                    'price'=>$this->input->post('requested_date',TRUE),
                                    'ip'=>$this->input->ip_address());
                                return $this->db->insert('Jobs',$data);
                            }

                            

    
}

