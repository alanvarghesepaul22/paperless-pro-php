<?php

include './classes/generatepdf.php';

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    exit;
}

define('ACCESSCHECK', TRUE);

require_once './vendor/autoload.php';

$fname = $_POST['name'];
$regnum = $_POST['regnum'];
$sem = $_POST['sem'];
$bnch = $_POST['bnch'];
$date = $_POST['date'];
$to = $_POST['to'];
$enquiry = $_POST['enquiry'];

$data = [
    'name' => $fname,
    'regnum' => $regnum,
    'sem' => $sem,
    'bnch' => $bnch,
    'date' => $date,
    'to' => $to,
    'enquiry' => $enquiry
];

$pdf = new  GeneratePDF();
$response = $pdf->generate_ll($data);

header('location:thanks.php?link=' . $response);
