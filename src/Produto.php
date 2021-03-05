<?php

namespace OmieLaravel\Omie\src;

use OmieLaravel\Omie\src\Connection;

class Produto
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
    * Recupera todos os produtos
    *
    * @see https://app.omie.com.br/api/v1/geral/produtos/#ListarProdutos
     * @param Integer $pagina, $registros_por_pagina
     * @param String $apenas_importado, S/N
     * @return json
     */
    public function listar($pagina = 1, $registros_por_pagina = 50, $apenas_importado_api = "N")
    {
        return $this->http->post('/geral/produtos/', [

            "pagina"                => $pagina,
            "registros_por_pagina"  => $registros_por_pagina,
            "apenas_importado_api"  => $apenas_importado_api,

        ], 'ListarProdutos');
    }
}
