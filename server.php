<?php
$jasonToString = file_get_contents('discs.json');
$jasonToPhp = json_decode($jasonToString, true);

if (isset($_POST['newTitle'])) {
  $newDisc = [
    'title' => $_POST['newTitle'],
    'cover' => $_POST['newCover'],
    'genre' => $_POST['newGenre'],
    'year' => $_POST['newYear'],
    'autor' => $_POST['newAutor'],
  ];
  array_unshift($jasonToPhp, $newDisc);
  file_put_contents('discs.json', json_encode($jasonToPhp));
}
if (isset($_POST['discDel'])) {
  $indDiscDel = $_POST['discDel'];
  array_splice($jasonToPhp, $indDiscDel, 1);
  file_put_contents('discs.json', json_encode($jasonToPhp));
}
if (isset($_POST['likeIndex'])) {
  $likeIndex = $_POST['likeIndex'];
  $jasonToPhp[$likeIndex]['like'] = !$jasonToPhp[$likeIndex]['like'];
  file_put_contents('discs.json', json_encode($jasonToPhp));
}

header('Content-Type: application/json');
echo json_encode($jasonToPhp);
