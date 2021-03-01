<?php

namespace App\Model;
use App\Model\MySql;

class noticiasModel{

    public function insert($titulo, $subtitulo, $texto, $img){
        $con = MySql::conn()->prepare("INSERT INTO `noticias` (id, titulo, subtitulo, texto, img) VALUES(NULL, ?, ?, ?, ?)");
        $con->execute(array($titulo, $subtitulo, $texto, $img));
    }

    public function select(){
        $con = MySql::conn()->prepare("SELECT * FROM `noticias`");
        $con->execute();
        return $con->fetchall();
    }

    public function selectId($id){
        $con = MySql::conn()->prepare("SELECT * FROM `noticias` WHERE id = ?");
        $con->execute(array($id));
        return $con->fetchall();
    }

    public function delete($id){
        $con = MySql::conn()->prepare("DELETE `noticias` WHERE id = ?");
        $con->execute(array($id));
    }

    public function update($id, $titulo, $subtitulo, $texto, $img){
        $con = MySql::conn()->prepare(" UPDATE `noticias` SET titulo = ?, subtitulo = ?, texto = ?, img = ? WHERE id = ?");
        $con->execute(array($id, $titulo, $subtitulo, $texto, $img));
    }
}