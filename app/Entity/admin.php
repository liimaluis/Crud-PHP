<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Admin{
    
    /**  
     * @var integer

    */
    public $id;

    /** 
     * @var string

    */
    public $email;


    /** 
     * @var string

    */
    public $senha;

    public function login(/*$where = null, $order = null, $limit = null*/){
        //return (new Database('admins'))->select($where,$order,$limit)
                                        //->fetchAll(PDO::FETCH_CLASS,self::class);

        $obDatabase = new Database('admins');
        $obDatabase->select([
            'email' =>$this->email,
            'senha' =>$this->senha
            //$query = ('SELECT * FROM admins WHERE email = :email AND senha = :senha AND is_admin=1')
        ]);
}

    public static function getAdmin($id){
        return (new Database('admins'))->select('id = '.$id)
                                        ->fetchObject(self::class);
    }

}