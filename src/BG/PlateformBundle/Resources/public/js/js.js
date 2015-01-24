$(document).ready(function($) {

  //  $('#tabs').tabulous({
  //  	effect: 'slideLeft'
  //  });
	$(document).tooltip();
	$('#tabs').tabs();
	$("#radioset").buttonset();
	if($('#form_addCompany').is(':checked')) $('#company').show();
	else $('#company').hide();
	$('#form_addCompany').click(function(){
		$('#company').toggle();	
	});

});
