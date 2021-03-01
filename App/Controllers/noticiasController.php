<?php

namespace App\Controllers;
use App\Model\noticiasModel;
use App\classes\files;

class noticiasController{

    public function __construct() {
        $this->noticias = new noticiasModel;
        $this->file = new files;
    }

    public function index(){
        if (isset($_POST['enviar'])) {
            if ($_POST['titulo'] == "" || $_POST['subtitulo'] == "" || $_POST['texto'] == "" ) {
                echo"<h1>não era pra acontecer</h1>";
                $this->msgJS('Campos vazios não são permitidos');
            }elseif ($_FILES['file']['name'] == '') {
                $this->msgJS('Adicione uma imagem');
            }elseif (!$this->file->validaImg($_FILES['file'])) {
                $this->msgJS('A imagem não é valida');
            }else {
                $nomefile = $this->file->uploadFile($_FILES['file']);
                $this->noticias->insert($_POST["titulo"], $_POST["subtitulo"], $_POST["texto"], $nomefile);
                echo "
                    <script>
                        alert('cadastro efetuado com sucesso');
                    </script>
                ";
            }
            
        }
        $this->render('noticias', 'template');
    }

    public function msgJS($msg){
        echo "
            <script>
                let html = document.createElement('div');
                let tex = document.createElement('p');
                tex.innerText=".$msg.";
                html.appendChild(tex);
                form.insertBefore(html, img);
            </script>
        ";
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\www\\".$view.".php";
        include "App\\View\\".$template.".php";
    }
}