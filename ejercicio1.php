<?php
$dia = $_GET['cbxdia'] ?? "0";
$dia_sel = "";
$prof1 = "";
$curso1 = "";
$hora = "";
$entorno = "";
$ambiente = "";

switch($dia){
    case "1":
        $dia_sel = "Lunes";
        $prof1 = "Luigi";
        $curso1 = "BACKEND DEVELOPER WEB ";
        $hora = "13:30 - 17:30";
        $entorno = "Presencial";
        $ambiente = "Aula 204";
        break;
    case "2":
        $dia_sel = "Martes";
        $prof1 = "Luigi";
        $curso1 = "BACKEND DEVELOPER WEB ";
        $hora = "13:30 - 17:30";
        $entorno = "Presencial";
        $ambiente = "Aula 204";
        break;
    case "3":
        $dia_sel = "Miércoles";
        $prof1 = "Josselyn";
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
        echo "<p>Día no válido.</p>";
        exit;
}
?>

<h2>Horario: <?= $dia_sel ?></h2>
<hr color='red'>
<table border="1">
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