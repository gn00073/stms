<?php

class Order_process extends CI_Model{

                            function insertOderdata(){

                            

                                $data=array(
                                    'order_name'=>$this->input->post('order_name',TRUE),
                                    'order_date'=>$this->input->post('order_date',TRUE),
                                    'requested_date'=>$this->input->post('requested_date',TRUE),
                                    'ip'=>$this->input->ip_address());
                                return $this->db->insert('orders',$data);
                            }

                            function getNextOrderNo(){
                                $maxid = 0;
                                $row = $this->db->query('SELECT MAX(order_no) AS `order_no` FROM `orders`')->row();
                                if ($row) {
                                    $maxid = $row->maxid; 
                                }
                                $NextOrderID = $maxid+1;
                                return $NextOrderID;
                                
                
                            }


    
}

