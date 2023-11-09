<?php

include './classes/generatepdf.php';

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    exit;
}

// define('ACCESSCHECK',TRUE);

require_once './vendor/autoload.php';

$fname = $_POST['name'];
$regnum = $_POST['regnum'];
$sem = $_POST['sem'];
$bnch = $_POST['bnch'];
$date = $_POST['date'];
$to = $_POST['to'];
$Reason_box = $_POST['Reason_box'];
$name = $_POST['name'];
$regnum = $_POST['regnum'];

$data = [
    'Full_name_box' => $fname,
    'Register_number_box' => $regnum,
    'Semester_box' => $sem,
    'Branch_box' => $bnch,
    'Date_Field' => $date,
    'To_box' => $to,
    'Reason_box' => $Reason_box,
    'Full_name2' => $name,
    'Register_number2' => $regnum,
    'Sem_and_class2' => $sem." ". $bnch,
    'End_box' => $fname. " ".$regnum
];

$pdf = new  GeneratePDF();
$response = $pdf->generate_bnf($data);

header('location:thanks.php?link='.$response);
