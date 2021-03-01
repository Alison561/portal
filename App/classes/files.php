<?php

namespace app\classes;

class files{

    public function validaImg($file){
        if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png') {
            return true;
        }else{
            return false;
        }
    }

    public function uploadFile($file){
        $fileTMP = $file; 
        $file = explode('.', $file['name']);
        $filenome = "IMG.".uniqid().".".$file[count($file) - 1];
        if (move_uploaded_file($fileTMP['tmp_name'], 'public/uploads/'.$filenome)) {
            return $filenome;
        }
    }
}