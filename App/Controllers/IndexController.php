<?php

namespace App\Controllers;
use App\Model\noticiasModel;

class indexController{

    public function __construct() {
        $this->noticias = new noticiasModel;
    }

    public function index(){
        $this->render('index', 'template');
    }

    public function leitor(){
        $this->render('leitor', 'template');
    }

    public function getNoticias(){
        return $this->noticias->select();
    }

    public function getNoticiasID(){
        $id = explode('/', $_GET['uri']);
        return $this->noticias->selectId($id[0]);
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\www\\".$view.".php";
        include "App\\View\\".$template.".php";
    }
}