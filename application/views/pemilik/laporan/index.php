<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


<br><br>
<table class="table table-striped table-bordered" id="data">
<thead>
    <tr>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
</thead>
    <tbody>
    <?php foreach($kodeKompos as $p){ ?>
        <tr>
        <td><?php echo $p['bulan']; echo " "; echo $p['tahun']; ?></td>
            
        <td><a href="javascript: w=window.open('<?php echo site_url('manage_laporan/search_keyword/'.$p['bulan']); ?>'); w.print();" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-print"></a>
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
   $(document).ready(function() {
    $('#data').DataTable( {
         "oLanguage": {
        "sSearch": "Cari:",
        "oPaginate": {
        "sNext": "halaman selanjutnya",
        "sPrevious": "halaman sebelumnya",
    }},
        
    } );
} );

</script>