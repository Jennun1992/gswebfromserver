<?php
if (count($_SESSION)>0) {
  if ($_SESSION['GROUPTYPE']=="ADMIN") {
    $this->load->view('Template/AdminMenu');
  }
  else if($_SESSION['GROUPTYPE']=="TEACHER") {
    $this->load->view('Template/OfficerMenu');
  }
} else {
  redirect(graduate);
}
?>
<script type="text/javascript">
$( document ).ready(function() {
	var url = window.location;
	// Will only work if string in href matches with location
	$('.main-menu a[href="'+ url +'"]').parent().addClass('active');
	$('.thispages').html($('.main-menu a[href="'+ url +'"]').html());
	$('.Page-Heading').html($('.main-menu a[href="'+ url +'"]').html());
	// Will also work for relative and absolute hrefs
	$('.main-menu a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});
</script>