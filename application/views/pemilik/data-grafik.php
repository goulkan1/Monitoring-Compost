<?php
include("koneksi.php");
	$hariini		= date("Y-m-d");
	$sql1 			= "SELECT id, UNIX_TIMESTAMP(waktu) AS waktu, suhu,kelembaban FROM monitoring ORDER BY waktu DESC";
	$hasil	 		= mysql_query($sql1);
	if(mysql_num_rows($hasil) > 0)
	{
		while($row = mysql_fetch_array($hasil))
                {
				   $id 	= $row[0];
				   $x 	= $row[1] * 1000 +25200000;
				   $y 	= $row[2];
				   $y1 	= $row[3];
                   $ret[] = array("id" => $id, "x" => $x, "y" => $y, "y1" => $y1);
                }
	}	
	usort($ret, function($a, $c) {
		return $a['id'] - $c['id'] ;
	});
echo str_replace('"','',json_encode($ret));
?>
