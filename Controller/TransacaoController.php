<?php

namespace ApiBancoDigital\Controller;

use ApiBancoDigital\Controller\Controller;

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
    public static function save()
    {

    }
    

    public static function update()
    {

    }

    public static function delete()
    {
        
    }
}