<?php

// $pageurl = "http://".$_SERVER["SERVER_NAME"].'/dev'; // Production
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
		$title = "Fenster Haus";
		$description = "Trabalhamos com portas e janelas em PVC e ALUMÍNIO, integrando tecnologia e design em itens duráveis. Nossos produtos têm conforto termoacústico devido à vedação impecável, além de baixa manutenção e total leveza no abrir e fechar das folhas.";
		break;

	case "sobre-nos":
		$title = "Sobre nós - Fenster Haus";
		$description = "Há mais de 20 anos no mercado. a Fenster Haus atua na cidade de Joinville/SC, oferecendo soluções criativas e sofisticadas para criar e moldar ambientes com requinte, beleza e funcionalidade, agregando na qualidade de vida de seus clientes.";
		break;
	
	case "esquadrias":
		$title = "Esquadrias - Fenster Haus";
		$description = "Esquadrias de alumínio e PVC";
		break;

	case "pvc":
		$title = "PVC - Fenster Haus";
		$description = "Portas e janelas de correr, portas pivotantes e de giro, janelas oscilo batente e maxim ar. Disponíveis opções de 2 a 8 folhas";
		break;

	case "aluminio":
		$title = "Alumínio - Fenster Haus";
		$description = "Portas e janelas de correr, portas pivotantes e de giro, janelas oscilo batente e maxim ar. Disponíveis opções de 2 a 8 folhas";
		break;
	
	case "portas-internas":
		$title = "Portas internas - Fenster Haus";
		$description = "São desenvolvidas para proporcionar conforto térmico e acústico, além de ter abertura e fechamento que evitam grandes impactos ao bater.";
		break;

	case "pele-de-vidro":
		$title = "Pele de vidro - Fenster Haus";
		$description = "Também conhecida como fachada de vidro, esse projeto entrega muito mais que um apelo estético, trazendo várias vantagens. Ideal para construções de médio e grande porte.";
		break;

	case "guarda-corpo":
		$title = "Guarda corpo - Fenster Haus";
		$description = "É essencial para garantir a segurança final do projeto. Podem ser aplicados em varandas externas, mezaninos e corredores, com o objetivo de evitar quedas e acidentes em função de desníveis de pisos ou de ambientes mais altos.";
		break;

	case "rodape":
		$title = "Rodapé - Fenster Haus";
		$description = "Os rodapés valorizam a decoração do espaço. Sua versatilidade permite adaptá-la a diferentes projetos arquitetônicos";
		break;

	case "porque-escolher-a-fenster-haus":
		$title = "Porque escolher a Fenster Haus - Fenster Haus";
		$description = "Porque estamos falando da melhor opção para o seu projeto, afinal, como uma empresa sólida, com profissionais comprometidos, capacitados e experientes - alguns têm mais de 40 anos de expertise no mercado de esquadrias.";
		break;

	case "quem-somos":
		$title = "Quem somos - Fenster Haus";
		$description = "Nossa missão é desenvolver, produzir e comercializar nossos produtos com tecnologia, qualidade e inovação, visando a satisfação do cliente, contribuindo para o desenvolvimento tecnológico e a melhoria da qualidade de vida, respeitando o indivíduo, a sociedade e o meio-ambiente.";
		break;

	case "blog":
		$title = "Blog - Fenster Haus";
		$description = "Notícias e informações sobre a Fenster Haus";
		break;

	case "obras":
		$title = "Obras - Fenster Haus";
		$description = "Obras e serviços feitos pela Fenster Haus";
		break;

	case "fale-conosco":
		$title = "Fale conosco - Fenster Haus";
		$description = "Fale conosco";
		break;

	default:
		$title = "Fenter Haus";
		$description = "Trabalhamos com portas e janelas em PVC e ALUMÍNIO, integrando tecnologia e design em itens duráveis. Nossos produtos têm conforto termoacústico devido à vedação impecável, além de baixa manutenção e total leveza no abrir e fechar das folhas.";
		break;
}

?>