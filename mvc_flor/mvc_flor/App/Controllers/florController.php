<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\motos;

class motoController extends Controller {
    
    public function index() {
        
    }
    
    public function marca($moto_marca) {
        $florModel = new flor();
        $flor = $florModel->getAll($flor);

        $this->view('flor', ['especie' -> $especie]);
    }
}