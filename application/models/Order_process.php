<?php

class Order_process extends CI_Model{

                            function insertOderdata(){

                            

                                $data=array(
                                    'order_name'=>$this->input->post('order_name',TRUE),
                                    'order_date'=>$this->input->post('order_date',TRUE),
                                    'ip'=>$this->input->ip_address());
                                return $this->db->insert('orders',$data);
                            }




    
}

