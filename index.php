<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
include("src/views/Header.php");

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
    case 'principal':
        include("src/pages/principal.php");
        break;
    default:
        include("src/pages/login.php");
        break;
}

include("src/views/Footer.php");
?>