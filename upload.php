<?php

$img = $_POST['img'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = __DIR__ . '/uploads/img-'.date("YmdHis").'.jpg';
   
if ($data && file_put_contents($file, $data)) {
   echo "<p>save OK: $file.</p>";
} else {
   echo "<p>save NG.</p>";
}   
echo "<pre>";print_r($_REQUEST);echo "</pre>";