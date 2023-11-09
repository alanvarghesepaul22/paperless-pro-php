<?php

include './classes/generatepdf.php';

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    exit;
}

define('ACCESSCHECK',TRUE);

require_once './vendor/autoload.php';

$fname = $_POST['name'];
$regnum = $_POST['regnum'];
$sem = $_POST['sem'];
$bnch = $_POST['bnch'];
$date = $_POST['date'];
$to = $_POST['to'];
$datetime = $_POST['datetime'];
$name = $_POST['name'];
$regnum = $_POST['regnum'];
$event = $_POST['event'];

$data = [
    'Full_name_box' => $fname,
    'Register_number_box' => $regnum,
    'Semester_box' => $sem,
    'Branch_box' => $bnch,
    'Date_Field' => $date,
    'To_box' => $to,
    'Date_time_event_box' => $datetime,
    'Full_name2' => $name,
    'Register_number2' => $regnum,
    'Sem_and_class2' => $sem." ". $bnch,
    'End_box' => $fname. " ".$regnum,
    'Event_box'=> $event
];

$pdf = new  GeneratePDF();
$response = $pdf->generate_dl($data);

header('location:thanks.php?link='.$response);
