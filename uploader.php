<?php
$target_path = 'uploads/';
$target_path = $target_path. basename($_FILES["uploaded_file"]['name']);
if(move_uploaded_file($_FILES["uploaded_file"]['tmp_name'], $target_path)) {
    echo "el archivo". basename($_FILES["uploaded_file"]['name']).
    "ha sido subido";
} else {
    echo "ha ocurrido un error, intente nuevamente";
}
?>