$("#Entrar_btn_Logon").on('click', function(){
	var email = $('#Eml_Logon').val();
	var pass = $('#Pass_Logon').val();
	if(email != '' && pass != ''){
		Auth(email,pass);
	}else{
		emptyFields();
	}
})

function Auth(Usuario,Senha){
	var xhttp;
	var resposta;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
	  if (this.readyState == 4 && this.status == 200) {
		resposta = this.responseText;
		resposta = stringToBool(resposta);
		if(resposta == true){
			window.location.replace("http://localhost/Hunters/Painel"); 
		}else{
			fail();
		}
	  }
	};
	xhttp.open("GET", "http://localhost/Hunters/Action/auth?email=" + Usuario + "&senha=" + Senha, true);
	xhttp.send();   
}

function stringToBool(string){
	return (string === 'true');
}

function fail(){
	var err = $('#msgErrro_fail');
	showMsg(err,4200);
}

function emptyFields(){
	var err = $('#msgErrro_empty');
	showMsg(err,4200);
}


/*
$(document).ready( function(){
	imgLogin = ['img/undraw_basketball_agx4.svg','img/undraw_grand_slam_0q5r.svg','img/undraw_game_day_ucx9.svg','img/undraw_goal_0v5v.svg'];
	var j = 0;
	setInterval(function(){
		if(j == imgLogin.length){j = 0;};
		$("#img_login").attr("src",imgLogin[j]);
		j++;
	}, 5000);

})

*/