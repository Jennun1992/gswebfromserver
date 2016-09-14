$(document).ready(function(){

	/* column filters */

	if( $('#LoadThesisAll').length > 0 ) {
		var dtTable = $('#LoadThesisAll').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#LoadThesisAll thead').append('<tr class="row-filter"><th></th> <th></th> <th></th> <th></th> <th></th> <th></th> </th><th><th></th></tr>');
		$('#LoadThesisAll thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#LoadThesisAll .row-filter input').on('keyup change', function() {
			dtTable
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}
	if( $('#StudentByOfficer').length > 0 ) {
		var std = $('#StudentByOfficer').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#StudentByOfficer thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th></tr></tr>');
		$('#StudentByOfficer thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#StudentByOfficer .row-filter input').on('keyup change', function() {
			std
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}

	if( $('#WorkByOfficer').length > 0 ) {
		var dtTable = $('#WorkByOfficer').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#WorkByOfficer thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th></tr></tr>');
		$('#WorkByOfficer thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#WorkByOfficer .row-filter input').on('keyup change', function() {
			dtTable
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}
	if( $('#ManageStudents').length > 0 ) {
		var dtTable = $('#ManageStudents').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#ManageStudents thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>');
		$('#ManageStudents thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#ManageStudents .row-filter input').on('keyup change', function() {
			dtTable
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}
	if( $('#StudentsAll').length > 0 ) {
		var dtTable = $('#StudentsAll').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#StudentsAll thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>');
		$('#StudentsAll thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#StudentsAll .row-filter input').on('keyup change', function() {
			dtTable
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}
	if( $('#OfficersAll').length > 0 ) {
		var dtTable = $('#OfficersAll').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#OfficersAll thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th></tr>');
		$('#OfficersAll thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#OfficersAll .row-filter input').on('keyup change', function() {
			dtTable
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}
	if( $('#ProgramsFilter').length > 0 ) {
		var dtTable = $('#ProgramsFilter').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#ProgramsFilter thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th><th></th><th></th></tr>');
		$('#ProgramsFilter thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#ProgramsFilter .row-filter input').on('keyup change', function() {
			dtTable
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}
	if( $('#LoadResearchAll').length > 0 ) {
		var dtTable = $('#LoadResearchAll').DataTable({ // use DataTable, not dataTable
			sDom: // redefine sDom without lengthChange and default search box
			"t"+
			"<'row'<'col-sm-6'i><'col-sm-6'p>>"
		});

		$('#LoadResearchAll thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>');
		$('#LoadResearchAll thead .row-filter th').each( function() {
			$(this).html('<input type="text" class="form-control input-sm" placeholder="ค้นหา">');
		});

		$('#LoadResearchAll .row-filter input').on('keyup change', function() {
			dtTable
			.column($(this).parent().index()+':visible')
			.search(this.value)
			.draw();
		});
	}
});
