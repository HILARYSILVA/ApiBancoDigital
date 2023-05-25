<?php

namespace ApiBancoDigital\Model;

use ApiBancoDigital\DAO\CorrentistaDAO;

use Exception;

class CorrentistaModel extends Model
{
    public $id, $nome, $cpf, $data_nasc, $senha;

    public function save()
    {
        return (new CorrentistaDAO())->save($this); 
    }

    public function getByCpfAndSenha($cpf, $senha) : CorrentistaModel
    {      
        return (new CorrentistaDAO())->selectByCpfAndSenha($cpf, $senha);
    }


    public function delete()
    {
        (new CorrentistaDAO())->delete($this->id);
    }
}
