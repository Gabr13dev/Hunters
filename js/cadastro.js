$("#cadastro_btn_sign").on('click', function(){
	resetEmptyFields();
	var email = $('#Eml_Logon').val();
	var pass = $('#Pass_Logon').val();
	if(email != '' && pass != ''){
		Auth(email,pass);
	}else{
		emptyFields();
	}
})