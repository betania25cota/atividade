<?php

namespace App\Models;

use Core\DataBase;

class flores {

    private $table = 'flores';

    public function getAll() {
        $db = Database::getInstance();
        $dados - $db->getList($this->table,'*');
        return $db->getList($this->table,'*');
    }
    public function getByFlorUrl($florURL) {
        $db = Database::getInstance();
        
        return $db->getList($this->table, '*', ['especie' -> "'" . $especie . "'" ]);
    }
}    