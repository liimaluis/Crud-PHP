<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Pfisica{

    /**  
     * @var integer

    */
    public $id;

    /** 
     * @var string

    */
    public $nome;


    /** 
     * @var string

    */
    public $email;

    /** 
     * @var string

    */
    public $telefone;

    /** 
     * @var string

    */
    public $cep;

    /** 
     * @var string(s)

    */
    public $pessoafisica;

    /** 
     * @return boolean

    */
    public function cadastrar(){

        $obDatabase = new Database('pfisica');
        $this->id = $obDatabase->insert([
            'nome' =>$this->nome,
            'email' =>$this->email,
            'telefone' =>$this->telefone,
            'cep' =>$this->cep,
            'pessoafisica' =>$this->pessoafisica
        ]);

        return true;

    }

    /**
     * @return boolean
     */
    function excluir(){
        return (new Database('pfisica'))->delete('id = '.$this->id);
    }


    /**
     * @param string
     * @param string
     * @param string
     * @return array
     */
    public static function getPfisicas($where = null, $order = null, $limit = null){
        return (new Database('pfisica'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    /**
     * @param integer
     * @return Pfisica
     */
    public static function getPfisica($id){
        return (new Database('pfisica'))->select('id = '.$id)
                                        ->fetchObject(self::class);
    }

}