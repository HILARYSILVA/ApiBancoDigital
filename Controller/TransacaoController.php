<?php

namespace ApiBancoDigital\Controller;

use ApiBancoDigital\Model\TransacaoModel;
use ApiBancoDigital\Controller\Controller;
use ApiBancoDigital\Controller\Controller\Controller as ControllerController;

class TransacaoController extends Controller
{
    public static function receberPix()
    {
        $data = json_decode(file_get_contents('php://input'));

    }

    public static function enviarPix()
    {
        $data = json_decode(file_get_contents('php://input'));

    }
}
