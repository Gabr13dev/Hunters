<?php

class Structure {
public $namePage;

static function getNamepage($currentPage){
		$page = explode(".", $currentPage);
		$pageName = $page[0];
	if($pageName == "index"){
		$result = "Inicio";
	}else{
		$arr_rp = ['-','_'];
		$result = str_replace($arr_rp," ",$pageName);
	}
		return  baseTitle . " - " . $result;
	}

	public function getWayInclude($pathWay){
		$way = protocol . $_SERVER['SERVER_NAME'] ."/". pasta ."/".$pathWay;
		return $way;
	}

}
?>