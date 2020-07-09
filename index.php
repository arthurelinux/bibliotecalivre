<?php
include 'php/head.php';
include 'php/nav.php';

$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}


/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'php/home.php';
		break;

	case 'linux':
		
		include 'view/linux.php';
		break;

	case 'literatura':
		
		include 'view/literatura.php';
		break;

	case 'educacao':
		
		include 'view/educacao.php';
		break;

	
	case 'geral':
		
		include 'view/geral.php';
		break;

	case 'informatica':
		
		include 'view/informatica.php';
		break;

	case 'programacao':
		
		include 'view/programacao.php';
		break;
	

	default:
		
		include 'php/home.php';
		break;
}






include 'php/footer.php';
?>

