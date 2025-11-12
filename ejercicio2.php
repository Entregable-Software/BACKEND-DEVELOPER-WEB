<?php
$dia = $_GET['dia'] ?? "0";
$dia_sel = "";
$prof1 = "";
$curso1 = "";
$hora = "";
$entorno = "";
$ambiente = "";

switch($dia){
    case "1":
        $dia_sel = "Lunes";
        $prof1 = "María";
        $curso1 = "Diseño Web";
        $hora = "08:00 - 10:00";
        $entorno = "Presencial";
        $ambiente = "Aula 101";
        break;
    case "2":
        $dia_sel = "Martes";
        $prof1 = "Carlos";
        $curso1 = "Base de Datos";
        $hora = "10:00 - 12:00";
        $entorno = "Virtual";
        $ambiente = "Zoom";
        break;
    case "3":
        $dia_sel = "Miércoles";
        $prof1 = "Ana";
        $curso1 = "Frontend Developer";
        $hora = "14:00 - 16:00";
        $entorno = "Presencial";
        $ambiente = "Aula 102";
        break;
    case "4":
        $dia_sel = "Jueves";
        $prof1 = "Jesús";
        $curso1 = "Backend Developer Web - TEC";
        $hora = "16:00 - 18:00";
        $entorno = "Virtual";
        $ambiente = "Teams";
        break;
    case "5":
        $dia_sel = "Viernes";
        $prof1 = "Lucía";
        $curso1 = "DevOps";
        $hora = "18:00 - 20:00";
        $entorno = "Presencial";
        $ambiente = "Aula 103";
        break;
    default:
        echo "<p style='color:red;'>Por favor seleccione un día válido.</p>";
        exit;
}
?>

<h2>Horario del día: <?= $dia_sel ?></h2>
<hr color='red'>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Hora</th>
        <th>Docente</th>
        <th>Curso</th>
        <th>Entorno</th>
        <th>Ambiente</th>
    </tr>
    <tr>
        <td><?= $hora ?></td>
        <td><?= $prof1 ?></td>
        <td><?= $curso1 ?></td>
        <td><?= $entorno ?></td>
        <td><?= $ambiente ?></td>
    </tr>
</table>