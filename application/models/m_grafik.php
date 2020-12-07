<?php
class M_grafik extends CI_Model{

	function get_data_stok(){
        $query = $this->db->query("SELECT DATE_FORMAT(waktu,'%H:%i:%s')AS waktu ,kelembaban,suhu FROM monitoring  WHERE DATE_FORMAT(waktu, '%Y-%m-%d') = CURDATE() ORDER BY waktu ASC");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

	  function get_rata()
    {
        $this->db->select('ROUND (AVG(kelembaban),2) AS rata_kelembaban, ROUND (AVG(suhu),2) AS rata_suhu');
        $this->db->from("monitoring");
        $this->db->WHERE("DATE_FORMAT(waktu,'%m-%d-%Y') = DATE_FORMAT(NOW(),'%m-%d-%Y')");

        return $this->db->get()->result_array();
    }

   


}