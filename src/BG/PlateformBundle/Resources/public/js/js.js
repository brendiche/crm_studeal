$(document).ready(function($) {

  //  $('#tabs').tabulous({
  //  	effect: 'slideLeft'
  //  });
	$('#tabs').tabs();
	if($('#form_addCompany').is(':checked')) $('#company').show();
	else $('#company').hide();
	$('#form_addCompany').click(function(){
		$('#company').toggle();	
	});

});
