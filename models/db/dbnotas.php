<?php

namespace App\models\db;

use mysqli;

class dbnotas
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $name = 'notas_db';
    public $conex;

    function __construct()
    {
        $this->conex = new mysqli(
            $this->host,
            $this->user,
            $this->pwd,
            $this->name,
        );
    }

    function close()
    {
        $this->conex->close();
    }

    function query($sql)
    {
        if ($this->conex->connect_error) {
            echo $this->conex->connect_error;
            return null;
        }
        return $this->conex->query($sql);
    }
}





