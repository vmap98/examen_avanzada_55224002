<?php
namespace App\controllers;
require_once 'models/Modelsnotas.php';
require_once 'views//listar.php';

class NotaController {
    private $id;
    private $estudiante;
    private $descripcion;
    private $nota;

function set($prop, $value){
        $this->{$prop} = $value;
    }

    function get($prop){
        return $this->{$prop};
    }


static function all(){
        $sql = notaQuery::all();
        $db = new dbnotas();
        $result = $db->query($sql);
        $ingresos = [];
        while($row = $result->fetch_assoc()){
            $nota = new Notas();
            $nota->set('id', $row['id']);
            $nota->set('estudiante', $row['estudiante']);
            $nota->set('descripcion', $row['descripcion']);
            $nota->set('nota', $row['nota']);
           
            $notas[] = $nota;
        }
        $db->close();
        return $notas;
    }


function save(){
        $sql = IngresosQuery::insert($this);
        $db = new dbnotas();
        $result = $db->query($sql);
        $db->close();
        return $result;
    }



    public function listar() {
        $nota = new notas();
        $notas = $nota->getAll();
        
    }

   
}