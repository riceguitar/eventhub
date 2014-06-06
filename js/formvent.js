// JavaScript Document

jQuery(function($) {

	$('.datepicker').datetimepicker({
    	pickTime: false,
		language: 'en'
    });
	$('.timepicker').datetimepicker({
    	pickDate: false,
		language: 'en',
    	pick12HourFormat: true
    });

	$('#sortable').sortable( { handle: '.handle' } );
	
	$(document).on('click', '.delete-btn', function(event) {
		$(event.target).closest('.text-left').remove();
	});
	$(document).on('click', '.copy-btn', function(event) {
		$(event.target).closest('.text-left').clone().appendTo( '#sortable2' );;
	});
	$(document).on('click', '.editme', function(event) {
		$(event.target).closest('.well').toggleClass('edit');
	});
	$(document).on('change', '.field-label', function() {
		$(this).parent().parent().parent().parent().parent().children('div').children('div').children('.field-label').html($(this).val());
	});
	
	$(document).on('click', '.closed', function(event) {
		$(event.target).closest('.closed').parent().parent().next('.rowdetails').addClass('on');
		$(event.target).closest('i').removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
		$(event.target).closest('.closed').addClass('expanded').removeClass('closed');
	});
	$(document).on('click', '.expanded', function(event) {
		$(event.target).closest('.expanded').parent().parent().next('.rowdetails').removeClass('on');
		$(event.target).closest('i').removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
		$(event.target).closest('.expanded').addClass('closed').removeClass('expanded');
	});
	
	$(document).on('click', function(event) {
		if ($(event.target).hasClass('stayopen') || $(event.target).parent().hasClass('stayopen') || $(event.target).parent().parent().hasClass('stayopen') || $(event.target).parent().parent().parent().hasClass('stayopen') || $(event.target).parent().parent().parent().parent().hasClass('stayopen')) {
			$('.columns-btn').addClass('opened');
		} else {
			$('.columns-btn').removeClass('opened');
		}
	});
	$('.dropdown-toggle.opener').click( function() {
		if ($(this).parent().hasClass('opened')) {
			$('.columns-btn').removeClass('opened');
		} else {
			$('.columns-btn').addClass('opened');
		}
	});
	
	$('.tablecheck').prop('checked', true);
	$('.tablecheck').change( function() {
		column = $(this).attr('id');
		if (this.checked) {
			$('.'+ column).css('display', 'table-cell');
		} else {
			$('.'+ column).css('display', 'none');
		}
	});
	$(window).scroll(function() {
		var yOffset = $(window).scrollTop();
		var elementlist = $('.waypoint1').offset().top;
		if (yOffset - elementlist > 0) {
			$('.elements-list').css('position', 'fixed');
		}
		else {
			$('.elements-list').css('position', 'relative');
		}
	});
	
	$( "#sortable1, #sortable2" ).sortable({
		connectWith: "#sortable2",
		helper: 'clone'
	}).enableSelection();
	$('#sortable1').bind('sortstop', function(event, ui) {
		var idx = $('#sortable2').children().index($(ui.item[0]))-1,
		elm = $(ui.item[0]).clone(true);
		$('#sortable2').children(':eq('+idx+')').after(elm);
		$(this).sortable('cancel');
	});
	
	$('#ajax-address').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/address.php'));
	});
	$('#ajax-checkbox').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/checkbox.php'));
	});
	$('#ajax-dropdown').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/dropdown.php'));
	});
	$('#ajax-email').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/email.php'));
	});
	$('#ajax-telephone').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/telephone.php'));
	});
	$('#ajax-gender').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/gender.php'));
	});
	$('#ajax-information').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/information.php'));
	});
	$('#ajax-multiple-choice').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/multiple-choice.php'));
	});
	$('#ajax-name').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/name.php'));
	});
	$('#ajax-number').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/number.php'));
	});
	$('#ajax-single-line-question').click( function() {
		$('#sortable2').append($('<li class="btn btn-default btn-sm btn-block text-left">').load('../includes/single-line-question.php'));
	});

	
});