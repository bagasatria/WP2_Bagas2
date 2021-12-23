<?php 
class model_tokosepatu extends CI_Model 

    {	public function index(){

    
     if 
     ($data['merk'] == "Nike"){
         $data['harga'] == 375000;
         $data['hasil'] == 375000;

     }

    else if
     ($data['merk'] == "Adidas"){
         $data['harga'] == 300000;
         $data['hasil'] == 375000;
     }

     else if
     ($data['merk'] == "Kickers"){
         $data['harga'] == 250000;
         $data['hasil'] == 375000;
     }

     else if
     ($data['merk'] == "Eiger"){
         $data['harga'] == 275000;
         $data['hasil'] == 375000;
     }

     else if
     ($data['merk'] == "Bucherri"){
         $data['harga'] == 400000;
         $data['hasil'] == 375000;
     }
{
     $query= $this->db->get();
     if ($query->num_rows() > 0) {
       foreach ($query->result() as $data) {
         $harga[] = $data;
       }
       return $hasilkirim;
    }
       $this->load->view('data-sepatu', $data);
       
}
}
}