<?php

namespace OmieLaravel\Omie\src;

use OmieLaravel\Omie\src\Connection;

class Pedido
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
    * Incluir Pedido
    *
    * @see https://app.omie.com.br/api/v1/produtos/pedidocompra/#IncluirPedCompra
     * @param Integer $pagina, $registros_por_pagina
     * @return json
     */
    public function criar($arr)
    {
        return $this->http->post('/produtos/pedidocompra/', $arr, 'UpsertPedCompra');
    }

    public function consultar($codIntegrado)
    {
        return $this->http->post('/produtos/pedidocompra/', [
            'nCodPed' => $codIntegrado
        ], 'ConsultarPedCompra');
    }
}
