	<!DOCTYPE html>
	<html>

		<head>
			<title></title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

		    <!-- CSS styles -->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/bootstrap.css"/>

	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/buttons.html5.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/buttons.flash.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/jszip.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/pdfmake.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/vfs_fonts.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/buttons.print.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/buttons.colVis.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/notify.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/notify.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/assets/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/Chart.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/highcharts.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/media/css/jquery.dataTables.min.css">
		</head>

		<body>
		
		<?php	if(isset($_view) && $_view)
		    $this->load->view($_view);
		?>
		</body>

</script>
	</html>
