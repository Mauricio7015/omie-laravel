<?php

namespace OmieLaravel\Omie;

use OmieLaravel\Omie\src\Conta;
use OmieLaravel\Omie\src\Pagavel;
use OmieLaravel\Omie\src\Produto;
use OmieLaravel\Omie\src\Cliente;
use OmieLaravel\Omie\src\Recebivel;
use OmieLaravel\Omie\src\Categoria;
use OmieLaravel\Omie\src\Departamento;

class Omie{	
    public function cliente($app_key, $app_secret){
        return new Cliente($app_key, $app_secret);
    }

    public function recebivel($app_key, $app_secret){
        return new Recebivel($app_key, $app_secret);
    }

    public function pagavel($app_key, $app_secret){
        return new Pagavel($app_key, $app_secret);
    }

    public function categoria($app_key, $app_secret){
        return new Categoria($app_key, $app_secret);
    }

    public function departamento($app_key, $app_secret){
        return new Departamento($app_key, $app_secret);
    }

    public function conta($app_key, $app_secret){
        return new Conta($app_key, $app_secret);
    }

    public function produto($app_key, $app_secret){
        return new Produto($app_key, $app_secret);
    }
}