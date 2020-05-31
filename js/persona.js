const BASE_URL = "http://localhost/Hunters";

$('#cadastro').on('click', function(){
  window.location.href = BASE_URL+"/Cadastro";
})

$('#cadastro_btn_signin').on('click',function(e){
  if($('#Pass_Logon1').val() != $('#Pass_Logon2').val()){
    $('#samePasswords').show();
    e.preventDefault();
  }else{
    $('#samePasswords').hide();
  }
})

$('#Date_Nasc').on('change',function(e){
  var age = calculateAge($('#Date_Nasc').val());
  if(age >= 18){
    $('#cadastro_btn_signin').attr("disabled", false);
    $('#Maioridade').hide();
  }else{
    e.preventDefault();
    $('#cadastro_btn_signin').attr("disabled", true);
    $('#Maioridade').show();
  }
})

$('#valida_btn_email').on('click', function(){
	var email = $('#Eml_Logon').val();
	var err = $('#errorEmail');
	if(email != ""){
		var getEmail = "?email="+email;
		var link = BASE_URL+"/Action/emailExists"+getEmail;
		$.getJSON(link, function(data){
		if(data == true){
    		$('#afterEmailValid').hide();
    		$('#valida_btn_email').show();
			showMsg(err,3000);
		}else{
    		$('#afterEmailValid').show();
			$('#valida_btn_email').hide();
			$('#Eml_Logon').hide();
			$('#loginLink').hide();
			$('#Eml_Logon_div').html($('#Eml_Logon').val());
		  }
		});
	}else{
		showMsg(err,3000);
	}
})

function calculateAge(birthday) {
    birthday = new Date(birthday);  
    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs);
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}

$("#Code_confirm").on('keydown',function(e){
	if((!isNaN(parseFloat(e.key)) && isFinite(e.key)) || e.key == 'Backspace'){
		
	}else{
		e.preventDefault();
	}
})

$('#Confirm_code').on('click', function(e){
	var err = $('#wrongCode');
	var code = $("#Code_confirm").val();
	if(code.length == 6){
		$('#Confirm_code').html('<i class="fa fa-spinner fa-spin"></i>');
		var email = $("#Email_subject").html();
		var url = BASE_URL+"/Action/confirm/?code="+code+"&email="+email;
		var xhttp;
		var resposta;
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
	  if (this.readyState == 4 && this.status == 200) {
		resposta = this.responseText;
		resposta = stringToBool(resposta);
		console.log(resposta);
		if(resposta == true){
			window.location.replace(BASE_URL+"/Action/logoff"); 
		}else{
			$('#Confirm_code').html('Confirmar  <i class="fa fa-unlock"></i>');
			var err = $("#wrongCode");
			showMsg(err,6000);
		}
	  }
	};
	xhttp.open("GET", ""+url, true);
	xhttp.send(); 
	}else{
		showMsg(err,4500);
	}
})

$("#Pass_Logon1").on('keydown',function(e){
	if(e.key == " "){
		e.preventDefault();
	}else{
	var pass = $("#Pass_Logon1").val();
	if(!validaSenha(pass)){
		$('#cadastro_btn_signin').attr("disabled", true);
    	$('#weakPass').show();
	}else{
		$('#cadastro_btn_signin').attr("disabled", false);
		$('#weakPass').hide();
	}
}
})

$("#Reset_pass").on("click", function(){
	var err = $("#Error_reset");
	showMsg(err,4000)
})


function validaSenha(pass){
	var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,80}$/;
	if(pass != ""){
	var flag = pass.match(regex)
	if(flag == null){
		return false
	}else{
		return true
	}
		}else{
			return false
		}

}

function showMsg(elem,sec){
	elem.show();
	setTimeout(function() {
        elem.hide();
    }, sec);
}