</div> <!-- close content -->
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
	<!-- FOOTER -->
	<footer class="footer">
		&copy; 2014-2015 The Develovers
	</footer>
		<!-- END FOOTER -->
	<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>

	<!-- <script src="<?php echo base_url();?>demo-style-switcher/assets/js/deliswitch.js"></script> -->
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
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<!-- <script src="<?php echo base_url();?>assets/js/king-chart-stat.js"></script> -->
	<!-- <script src="<?php echo base_url();?>assets/js/king-table.js"></script> -->
	<!-- <script src="<?php echo base_url();?>assets/js/king-components.js"></script> -->

		<script src="<?php echo base_url();?>assets/js/my_script.js"></script>
		<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>
</body>
</html>

<script>
	var cur_state =true;
	function editform(_state,_url){
		if(_state ==2){
				  console.log( $( "form" ).serializeArray() );
					var data = $( "form" ).serializeArray();
					$.ajax({
				                   type: "POST",
				                    url: '<?php echo base_url()?>index.php/'+_url,//Student/adviser/3',
				                   data: data,
				                success:function(data)  {
				                               console.log("good")
																			 $('input.underline[type=text]').attr('disabled',true)
																			 printpaper()
				                             },
				                  error: function () {
				                                console.log('fail');
																				alert()
				                             }
				            });
										event.preventDefault();
				}
		if(cur_state ==true){
			$('input.underline[type=text]').attr('disabled',cur_state)

			cur_state = false;
		}
		else{
				$('input.underline[type=text]').attr('disabled',cur_state)
				cur_state=true;
		}
	}
	function editform2(){
				$('input.underline[type=text]').attr('disabled',false)
	}
	function edittextarea(_state){
		if(cur_state ==0 && _state ==1 ){
			$('textarea.propersal').attr('disabled',true)
			cur_state = _state;
		}else{
				$('textarea.propersal').attr('disabled',false)
				cur_state=0;
		}
	}
	function printpaper(){
		var checkprinted =false;
		var printContents = document.getElementById("printableArea").innerHTML;
		var originalContents = document.body.innerHTML;

		document.body.innerHTML = printContents;

		window.print();

		document.body.innerHTML = originalContents;
		window.onafterprint = function() {
			//alert(checkprinted)
			checkprinted =true;
		}
	//	alert("gfgdf"+checkprinted)
		if(checkprinted ==false){
			//ถ้า user ทำการกดปุ่มปริ้นให้แสดงข้อความว่า ทำการปริ้นเรียบร้อยแล้ว
			document.getElementById("printmenu").innerHTML = "<center><b>ทำการปริ้นเรียบร้อยแล้ว</b></center>"
		}
	//	document.getElementById("printmenu").innerHTML = "<center><b>ทำการปริ้นเรียบร้อยแล้ว</b></center>"
	}



	function filterGlobal () {
    $('#example').DataTable().search(
        $('#global_filter').val(),
        $('#global_regex').prop('checked'),
        $('#global_smart').prop('checked')
    ).draw();
}

function filterColumn ( i ) {
    $('#example').DataTable().column( i ).search(
        $('#col'+i+'_filter').val(),
        $('#col'+i+'_regex').prop('checked'),
        $('#col'+i+'_smart').prop('checked')
    ).draw();
}

$(document).ready(function() {
    $('#example').DataTable();

    $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );

    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );
</script>
