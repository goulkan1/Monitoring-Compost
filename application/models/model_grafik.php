<?php
class mode_grafik extends CI_Model{
 
    function get_data_stok(){
      $query = $this->db->query("SELECT DATE_FORMAT(waktu,'%H:%i:%s')AS waktu ,kelembaban,suhu FROM monitoring  WHERE DATE_FORMAT(waktu, '%Y-%m-%d') = CURDATE() ORDER BY waktu ASC");
         
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

 
}