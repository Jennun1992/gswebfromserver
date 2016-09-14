$("#student_search_btn").click(function(){
  $("#search_student_suggestion").hide();
  $("#student_search_result").show();
});

$( "form.input-append" ).keypress(function(e) {
	if ( e.which == 13 ) {
			e.preventDefault();
	}
});

$('.input-group-appendable .add-more').click(function(){
	$wrapper = $(this).parents('.input-appendable-wrapper');
	$lastItem = $wrapper.find('.input-group-appendable').last();

	$newInput = $lastItem.clone(true);

	// change attribute for new item
	$count = $wrapper.find('#count').val();
	$count++;

	// change text input and the button
	$newInput.attr('id', 'input-group-appendable' + $count);
	$newInput.find('input[type="text"]').attr({
			id: "field" + $count,
			name: "field" + $count
	});

	$newInput.find('.btn').attr('id', 'btn' + $count);
	$newInput.appendTo($wrapper);

	//change the previous button to remove
	$lastItem.find('.btn')
	.removeClass('add-more btn-primary')
	.addClass('btn-danger')
	.text('-')
	.off()
	.on('click', function(){
			$(this).parents('.input-group-appendable').remove();
	});

	$wrapper.find('#count').val($count);

});

function printDiv(divName) {
	 var printContents = document.getElementById(divName).innerHTML;
	 var originalContents = document.body.innerHTML;

	 document.body.innerHTML = printContents;

	 window.print();

	 document.body.innerHTML = originalContents;
}
$('#datepicker').datepicker()
.on('changeDate', function(e) {
    dtp.datepicker('hide');
});
