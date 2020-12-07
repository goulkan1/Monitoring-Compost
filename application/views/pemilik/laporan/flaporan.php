<!-- <a href="<?php echo site_url('manage_laporan/create_laporan/'); ?>" class="btn btn-info btn-xs">Ubah</a> -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
<style>
  table{
      border-collapse: collapse;
      margin: 0 auto;
  }
  table th{
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      padding: 3px;
      vertical-align: top;
      text-align: center;
  }

  </style>
</head>
        
  

  <style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>      
    <?php foreach($results2 as $b){ ?>

<body><center><h1>Laporan Kompos <?php echo $b['namaBulan']; ?> <?php echo $b['tahun']; ?></h1></center>
    <?php } ?>
              
   
<table align="center" style="margin: 0px auto;" id="data" width="100%" border="1" >
<thead>
    <tr>
        <th>Tanggal</th>
        <th>Suhu</th>
        <th>Kelembaban</th>
        
    </tr>
   <tfoot>
    <!-- <?php foreach($results2 as $b){ ?>

     <tr>
        <th>Rata-Rata</th>
        <th><?php echo $b['rataKelembaban']; ?></th>
        <th><?php echo $b['rataSuhu']; ?></th>
      
     </tr>
    <?php } ?> -->

   </tfoot>
   
</thead>
    <tbody>
    <?php foreach($results as $b){ ?>
        <tr>
        <td><?php echo $b['waktu']; ?></td>
        <td><?php echo $b['suhu']; ?></td>
        <td><?php echo $b['kelembaban']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
<script type="text/javascript">n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;</script>