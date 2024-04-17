<?php
$jasonToString = file_get_contents('discs.json');
$jasonToPhp = json_decode($jasonToString);

// QUA VA LA LOGICA PHP

header('Content-Type: application/json');
echo json_encode($jasonToPhp);
