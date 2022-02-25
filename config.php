<?php

// $pageurl = "https://".$_SERVER["SERVER_NAME"]; // Production
$pageurl = "../fenster-haus"; // Development

$url = explode('/', $_GET['cod']);
$page = $url["0"];
$subpage = $url["1"];

if($page == NULL){
	$page = "home";
}

if (!is_file("pages/".$page.".php")) { $page = "404"; }

switch($page){
	case "404":
		$title = "Página não encontrada";
		$description = "Infelizmente essa página não foi encontrada.";
		break;

	case "home":
		$title = "fenter-haus";
		$description = "fenter-haus preparado para ser utilizado como base de desenvolvimento: <br /> SASS, Webpack, Three.js, ES6 modules, PHP";
		break;
	
	case "contato":
		$title = "Contato";
		$description = "Envios de formulários feat. formsubit.io";
		break;

	default:
		$title = "fenter-haus";
		$description = "fenter-haus preparado para ser utilizado como base de desenvolvimento: <br /> SASS, Webpack, Three.js, ES6 modules, PHP";
		break;
}

?>