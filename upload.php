<?php


$file_name = $_FILES['upload_file']['name'];
$file_type = $_FILES['upload_file']['type'];
$file_size = $_FILES['upload_file']['size'];
$file_tmp_name = $_FILES['upload_file']['tmp_name'];
$file_error = $_FILES['upload_file']['error'];

move_uploaded_file($file_tmp_name, 'files/' . $file_name);
header("Location: ./member.php")
?>