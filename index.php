<?php
include("src/views/Header.php");

//Roteamento opaganastar 
$page = isset($_GET['page']) ? $_GET['page'] : 'principal';
switch ($page) {
    case 'cad_aluno':
        include("src/pages/cad_aluno.php");
        break;
    case 'cad_curso':
        include("src/pages/cad_curso.php");
        break;
    case 'cad_escola':
        include("src/pages/cad_escola.php");
        break;
    case 'login':
        include("src/pages/login.php");
        break;
    default:
        include("src/pages/principal.php");
        break;
}

include("src/views/Footer.php");
?>