<?php
$jasonToString = file_get_contents('discs.json');
$jasonToPhp = json_decode($jasonToString, true);

// QUA VA LA LOGICA PHP
if (isset($_POST['newTitle'])) {
  $newDisc = [
    'title' => $_POST['newTitle'],
    'cover' => $_POST['newCover'],
    'genre' => $_POST['newGenre'],
    'year' => $_POST['newYear'],
  ];
  array_unshift($jasonToPhp, $newDisc);
  file_put_contents('discs.json', (json_encode($jasonToPhp)));
}

header('Content-Type: application/json');
echo json_encode($jasonToPhp);
