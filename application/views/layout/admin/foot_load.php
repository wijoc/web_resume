<!-- Core JS Goes here -->
	<!-- jQuery -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>

<!-- Addritional library needed -->
	<!-- DataTables -->
	<?php if(in_array('datatables',$assets)){ ?>
		<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script>
			/* Datatable */
			$(".default-datatable").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
		</script>
	<?php } ?>

	<!-- SweetAlert 2 -->
	<?php if(in_array('sweetalert2',$assets)){ ?>
		<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
		<script src="<?php echo base_url() ?>assets/dist/js/pages/sweetalert2.js"></script>
	<?php } ?>

	<!-- JQuery UI -->
	<?php if(in_array('jqueryui',$assets)){ ?>
		<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.js"></script>
	<?php } ?>

	<!-- bs-custom-file-input -->
	<?php if(in_array('custominput',$assets)){ ?>
		<script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
			  bsCustomFileInput.init()
			});
		</script>
	<?php } ?>

	<!-- Untuk session input -->
	<?php if($this->session->flashdata('flashStatus')){ ?>
		<script type="text/javascript">
			var flashStatus = "<?php echo $this->session->flashdata('flashStatus') ;?>";
			var flashMsg = "<?php echo ($this->session->flashdata('flashMsg'))? $this->session->flashdata('flashMsg') : '' ;?>";
			<?php if($this->session->flashdata('flashInput')){ ?> 
				var flashInput = "<?php echo $this->session->flashdata('flashInput') ?>";
			<?php } ?>
			var site_url = "<?php echo ($this->session->flashdata('flashRedirect'))? site_url($this->session->flashdata('flashRedirect')) : '' ?>";
		</script>
	<?php } ?>