<?php
namespace App\controllers;
require_once 'models/Modelsnotas.php';
require_once 'views//listar.php';

class notaController {










    
    public function listar() {
        $nota = new notas();
        $notas = $nota->getAll();
        
    }

   
}