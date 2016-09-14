</div>
<!-- close content -->
<!-- /main -->
</div>
<!-- /content-wrapper -->
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
</div>
<!-- /wrapper -->

<script type="text/jacript">

$(document).ready(function(){
	$('#OFFICER').select2();
	$('#FACULTY').select2();
	$('#DEPARTMENT').select2();
	$('#STDYLEVEL').select2();
	$('select').select2();

	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd'
	});
});
</script>
<script src="<?php echo base_url();?>assets/js/extend.js"></script>
<script type="text/jacript">

$(document).ready(function(){
	var url = window.location;
	// Will only work if string in href matches with location
	$('.main-menu a[href="'+ url +'"]').parent().addClass('active');
	$('.thispages').html($('.main-menu a[href="'+ url +'"]').html());
	$('.Page-Heading').html($('.main-menu a[href="'+ url +'"]').html());
	// Will also work for relative and absolute hrefs
	$('.main-menu a').filter(function() {
		return this.href === url;
	}).parent().addClass('active');
});
</script>




<footer class="footer"> &copy; 2014-2015 The Develovers </footer>
<!-- END FOOTER -->
<!-- Javascript -->

<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
<script src="<?php echo base_url();?>assets/js/king-common.js"></script>

<script src="<?php echo base_url();?>assets/js/plugins/stat/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/raphael/raphael-2.1.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/jquery-mapael/jquery.mapael.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/raphael/maps/usa_states.js"></script>
<script src="<?php echo base_url();?>assets/js/king-chart-stat.js"></script>
<script src="<?php echo base_url();?>assets/js/king-table.js"></script>
<script src="<?php echo base_url();?>assets/js/king-components.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
</body></html>
