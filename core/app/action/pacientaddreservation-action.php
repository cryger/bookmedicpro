<?php
$rx = ReservationData::getRepeated($_SESSION["pacient_id"],$_POST["medic_id"],$_POST["date_at"],$_POST["time_at"]);
if($rx==null){
$r = new ReservationData();
$r->no="";
$r->title = $_POST["title"];
$r->note = $_POST["note"];
$r->pacient_id = $_SESSION["pacient_id"];
$r->medic_id = $_POST["medic_id"];
$r->date_at = $_POST["date_at"];
$r->time_at = $_POST["time_at"];
$r->user_id = isset($_SESSION["user_id"])?$_SESSION["user_id"]:"NULL";

$r->status_id = $_POST["status_id"];
$r->payment_id = $_POST["payment_id"];
$r->price = $_POST["price"];
$r->sick = $_POST["sick"];
$r->symtoms = $_POST["symtoms"];
$r->medicaments = $_POST["medicaments"];


$r->add();

Core::alert("Agregado exitosamente!");
}else{
Core::alert("Error al agregar, Cita Repetida!");
}
Core::redir("./index.php?view=pacientreservations");
?>