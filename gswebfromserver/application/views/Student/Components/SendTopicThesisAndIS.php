
<?php //print_r($this->session->userdata("dataArr"));?>
	<div class="row" style="text-align:left;margin-top:0%">
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
			<div class="col-md-1"></div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;">
					<?php if($data['param1'][0]==1 OR $data['param1'][0]==2 OR $data['param1'][0]==3){ ?>
						<i style="background:#088A08;color:#ffffff;" >1</i>
					<?php }else{ ?>
						<i>1</i>
					<?php } ?>
				</div>
				<span><?php echo $_SESSION['LEVELID'] !=82 ? 'ยื่นหัวข้อวิทยานิพนธ์' :'ยื่นหัวข้อการค้นคว้าอิสระ' ;?></span></span>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<?php if($data['param1'][0]==2 OR $data['param1'][0]==3){ ?>
						<i style="background:#088A08;color:#ffffff;">2</i>
					<?php }else{ ?>
						<i>2</i>
					<?php } ?>
				</div>
				<span>Preview</span>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<?php if($data['param1'][0]==3){ ?>
						<i style="background:#088A08;color:#ffffff;">3</i>
					<?php }else{ ?>
						<i>3</i>
					<?php } ?>
				</div>
				<span>ดาวน์โหลด</span>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<?php if($data['param1'][0]==1)
				{
					$this->load->view('Student/Page/TermPaperTimeLine1');
				}
				else if($data['param1'][0]==2)
				{
					$this->load->view('Student/Page/TermPaperTimeLine2');
				}
				else if($data['param1'][0]==3)
				{ ?>
					<div class="top-content" style="margin-top:50px;text-align:center">
					<ul class="list-inline quick-access" >
										<li>
											<a href="<?php echo base_url();?>assets/gs_docs/GSTemplate57/GSTemplate.rar">
												<div class="quick-access-item bg-color-green">
													<i class="fa fa-bar-chart-o"></i>
													<h5>ต้นแบบการพิมพ์ (Template)</h5><em>วิทยานิพนธ์</em>
												</div>
											</a>
										</li>
										<li>
											<a href="<?php echo base_url();?>assets/gs_docs/ISTemplate57/IS_Template_57.rar">
												<div class="quick-access-item bg-color-blue">
													<i class="fa fa-envelope"></i>
													<h5>ต้นแบบการพิมพ์ (Template)</h5><em>การค้นคว้าอิสระ</em>
												</div>
											</a>
										</li>

									</ul>
								</div>

	<?php } ?>
