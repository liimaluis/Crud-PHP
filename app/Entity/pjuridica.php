<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Pjuridica{

    /**  
     * @var integer

    */
    public $id;

    /** 
     * @var string

    */
    public $nomeempresa;

    /** 
     * @var string

    */
    public $responsavel;


    /** 
     * @var string

    */
    public $cnpj;

    /** 
     * @var string

    */
    public $cep;

    /** 
     * @var string

    */
    public $email;

    /** 
     * @var string

    */
    public $telefone;

    /** 
     * @var string(s)

    */
    public $pessoajuridica;

    /** 
     * @return boolean

    */
    public function cadastrar(){

        $obDatabase = new Database('pjuridica');
        $this->id = $obDatabase->insert([
            'nomeempresa' =>$this->nomeempresa,
            'responsavel' =>$this->responsavel,
            'email' =>$this->email,
            'cnpj' =>$this->cnpj,
            'cep' =>$this->cep,
            'telefone' =>$this->telefone,
            'pessoajuridica' =>$this->pessoajuridica
        ]);

        return true;

    }

    /**
     * @return boolean
     */
    function excluir(){
        return (new Database('pjuridica'))->delete('id = '.$this->id);
    }


    /**
     * @param string
     * @param string
     * @param string
     * @return array
     */
    public static function getPjuridicas($where = null, $order = null, $limit = null){
        return (new Database('pjuridica'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    /**
     * @param integer
     * @return Pjuridica
     */
    public static function getPjuridica($id){
        return (new Database('pjuridica'))->select('id = '.$id)
                                        ->fetchObject(self::class);
    }

}