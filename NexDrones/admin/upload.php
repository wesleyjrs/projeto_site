<?php

$arquivo = $_FILES['img_upload']['name'];

echo $arquivo;

move_uploaded_file($_FILES['img_upload']['tmp_name'], $arquivo);




?>
