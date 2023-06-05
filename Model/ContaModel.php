<?php

namespace ApiBancoDigital\Model;

use ApiBancoDigital\DAO\ContaDAO;


class ContaModel extends Model
{
    public $id, $id_categoria, $id_cidadao, $id_bairro, $descricao, $titulo, $endereco, $latitude, $longitude, $foto;



    public function save()
    {
       
        $dao = new ContaDAO(); 


        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            
        }        
    }


    public function getAllRows(int $id_cidadao)
    {      

        $dao = new ContaDAO();

    
        $this->rows = $dao->select($id_cidadao);
    }


   
}