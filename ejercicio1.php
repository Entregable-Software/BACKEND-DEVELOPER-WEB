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
        $hora = "01:30 - 05:30";
        $entorno = "Presencial";
        $ambiente = "Aula 204";
        break;
    case "2":
        $dia_sel = "Martes";
        $prof1 = "Luigi";
        $curso1 = "BACKEND DEVELOPER WEB ";
        $hora = "01:30 - 05:30";
        $entorno = "Presencial";
        $ambiente = "Aula 204";
        break;
    case "3":
        $dia_sel = "Miércoles";
        $prof1 = "Josselyn";
        $curso1 = "Técnicas de la Comunicación";
        $hora = "04:30 - 06:00";
        $entorno = "Virtual";
        $ambiente = "Teams";
        break;
    case "4":
        $dia_sel = "Jueves";
        $prof1 = "Jesús";
        $curso1 = "Backend Developer Web - TEC";
        $hora = "01:46 - 05:44";
        $entorno = "Presencial";
        $ambiente = "Aula 307-304";
        break;
    case "5":
        $dia_sel = "Viernes";
        $prof1 = "No Registrado";
        $curso1 = "No Registrado";
        $hora = "No Registrado";
        $entorno = "No Registrado";
        $ambiente = "No Registrado";
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