<?php
$files_arrayjs = ['js/jquery-3.4.1.slim.min.js','js/bootstrap.min.js','js/login.js','js/persona.js'];
	foreach ($files_arrayjs as $archivejs) {
		$b = protocol.$_SERVER['SERVER_NAME']."/".pasta."/".$archivejs;
		echo '<script type="text/javascript" src="'.$b.'"></script>';
	}
?>
<script type="text/javascript">
  //NOMEAR ELEMENTO PAI <li> DO MENU COM ID lista_menu
  var tag_li = document.getElementById('ul-menu');
  var tag_a = tag_li.getElementsByTagName('a');
  for (i=0; i < tag_a.length; i++ )
  {
    vars = tag_li.getElementsByTagName("a")[i].getAttribute("href");
     var url = window.location.href;
     //var path = url.split("/");
     //vars2 = "/" + path[1] + "/" + path[2];
    if (vars == url){
      tag_li.getElementsByTagName("li")[i].classList.add("active");
    }
  }

</script>
