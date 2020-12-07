<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Model_laporan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

       function getKodekompos()
    {
            $this->db->select('*,monthname(monitoring.waktu) bulan, year(waktu) as tahun');
            $this->db->group_by('monthname(monitoring.waktu)');
            $this->db->from('monitoring');

        return $this->db->get()->result_array();
    }   
         
    function search($waktu)
    {
        // $this->db->select('*');
        // $this->db->like('date(waktu)',$waktu);
        // $this->db->from("monitoring");
        // $this->db->group_by('id');
        // $this->db->order_by('waktu','DESC');

        $this->db->select('*,DATE(waktu), monthname(waktu) as namaBulan,');
        $this->db->where('monthname(waktu)',$waktu);
        $this->db->from("monitoring");
        $this->db->group_by('day(waktu)');


        return $this->db->get()->result_array();
    }

    function search2($waktu)
    {
        $this->db->select('DISTINCT(id),DATEDIFF(MAX(DATE(waktu)),MIN(DATE(waktu)))AS lamaPembuatan,MIN(DATE(waktu)) AS awalKompos,MAX(DATE(waktu)) AS akhirKompos ,avg(kelembaban) as rataKelembaban, avg(suhu) as rataSuhu,suhu,kelembaban,DATE(waktu) as lama,monthname(waktu) as namaBulan,year(waktu) as tahun');
        $this->db->like('monthname(waktu)',$waktu);
        $this->db->from("monitoring");
        $this->db->order_by('waktu','DESC');


        return $this->db->get()->result_array();
    }
}