<?php
if(!isset($_SESSION)){ 
    session_start();
}

if(!empty($_SESSION['nome'])){
    //header("Location: dash.php");
}else{
    
	$_SESSION['msg'] = "Área restrita";
	
    header("Location: login.php");
}
?>