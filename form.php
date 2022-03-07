<?php 

if(isset($_POST['fruta'])){
    setcookie('fruta',$_POST['fruta'], time() +24*60*60,'/');
}
if(isset($_POST['herramienta'])){
    setcookie('herramienta',$_POST['herramienta'], time() +24*60*60,'/');
}
if(isset($_POST['ropa'])){
    setcookie('ropa',$_POST['ropa'], time() +24*60*60,'/');
}
if(isset($_POST['deporte'])){
    setcookie('deporte',$_POST['deporte'], time() +24*60*60,'/');
}

header('Location: /carrito.php');
exit;

?>
