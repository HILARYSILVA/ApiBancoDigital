<?php

namespace ApiBancoDigital\Controller;

use ApiBancoDigital\Model\CorrentistaModel;
use App\Controller\Controller;
use Exception;

class CorrentistaController extends Controller
{
    public static function login()
    {
        try
        {
            
            $data = json_decode(file_get_contents('php://input'));

            $model = new CorrentistaModel();

            parent::getResponseAsJSON($model->getByCpfAndSenha($data->Cpf, $data->Senha)); 

        } catch(Exception $e) {
            
            parent::LogError($e);
            parent::GetExcepitionAsJSON($e);
        }  
    }

    
    public static function salvar()
    {
        try
        {
            $data = json_decode(file_get_contents('php://input'));

            $model = new CorrentistaModel();

            
            foreach (get_object_vars($data) as $key => $value) 
            {
                $prop_letra_minuscula = strtolower($key);

                $model->$prop_letra_minuscula = $value;
            }

            parent::getResponseAsJSON($model->save()); 

        } catch(Exception $e) {
            
            parent::LogError($e);
            parent::GetExcepitionAsJSON($e);
        }   
    }
}