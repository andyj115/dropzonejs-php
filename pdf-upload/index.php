<?php

$storeFolder = 'uploads';   //2
 
if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];          //3             
    $targetPath = __DIR__ . '/'. $storeFolder . '/';  //4
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
    move_uploaded_file($tempFile,$targetFile); //6
}