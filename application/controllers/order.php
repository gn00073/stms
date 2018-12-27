<?php

Class Order extends CI_Controller{

        public function Order_Taking(){



            function getNextOrderNo(){
                $maxid = 0;
                $row = $this->db->query('SELECT MAX(order_no) AS `order_no` FROM `orders`')->row();
                if ($row) {
                    $maxid = $row->maxid; 
                }
                $NextOrderID = $maxid+1;
                return $NextOrderID;
                

            }

           
            $this->form_validation->set_rules('order_date', 'Order Date', 'required');
           

            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('Orders');
            }
            else
            {

                $this->load->model('Order_process');
                $response= $this->Order_process->insertOderdata();
                if ($response){
                    $this->session->set_flashdata('msg','Order Created Successfully . Please add the Job');
                    redirect('Home/Order');
                                }
                                else{

                                    $this->session->set_flashdata('msg','Some thing went wrong. Please retry');
                                    redirect('Home/Order');
                                }


            }
        }


    }


?>