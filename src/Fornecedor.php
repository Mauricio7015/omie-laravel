<?php

namespace OmieLaravel\Omie\src;

use OmieLaravel\Omie\src\Connection;

class FormaPagamento
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
    * Recupera todos os produtos
    *
    * @see https://app.omie.com.br/api/v1/produtos/formaspagcompras/#ListarFormasPagCompras
     * @param Integer $pagina, $registros_por_pagina
     * @return json
     */
    public function listar($pagina = 1, $registros_por_pagina = 50)
    {
        return $this->http->post('/produtos/formaspagcompras/', [

            "pagina"                => $pagina,
            "registros_por_pagina"  => $registros_por_pagina

        ], 'ListarFormasPagCompras');
    }
}
