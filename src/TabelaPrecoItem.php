<?php

namespace OmieLaravel\Omie\src;

use OmieLaravel\Omie\src\Connection;

class TabelaPrecoItem
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
    * Recupera todos os produtos
    *
    * @see https://app.omie.com.br/api/v1/produtos/tabelaprecos/#ListarTabelasPreco
     * @param Integer $pagina, $registros_por_pagina
     * @return json
     */
    public function listar($pagina = 1, $registros_por_pagina = 50, $tabelaPreco)
    {
        return $this->http->post('/produtos/tabelaprecos/', [

            "pagina"                => $pagina,
            "registros_por_pagina"  => $registros_por_pagina,
            "cCodIntTabPreco"       => $tabelaPreco

        ], 'ListarTabelaItens');
    }
}
