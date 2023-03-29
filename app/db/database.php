<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{

    /**
     * @var string
     */
    const HOST = 'localhost';

    /**
     * @var string
     */
    const NAME = 'crud';

    /**
     * @var string
     */
    const USER = 'root';

    /**
     * @var string
     */
    const PASS = '';

    /**
     * @var string
     */
    private $table;

    /**
     * @var PDO
     */
    private $connection;

    /**
     * @param string $table
     */
    public function __construct($table = null){
        $this->table = $table;

        try {
            $this->connection = new PDO('mysql:host='.self::HOST.
            ';dbname='.self::NAME,
             self::USER,
             self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
           die('ERROR:'.$e->getMessage());
        }
    }

    /**
     * @param string
     * @param array
     * @return PDOStatement
     */
    public function execute($query,$params = []){

        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;         
        } catch (PDOException $e){
            die('ERROR:'.$e->getMessage());
         }

    }

    /**
     * @param array
     * @return integer
     */
    public function insert($values){

        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        $this->execute($query,array_values($values));

        return $this->connection->lastInsertId();

    }

    /**
     * @param string
     * @param string
     * @param string
     * @return PDOStatement
     */

    public function select($where = null, $order = null, $limit = null, $fields = '*'){

        $where = strlen($where) ? 'WHERE '.$where : '';
        $where = strlen($order) ? 'ORDER BY '.$order : '';
        $where = strlen($limit) ? 'LIMIT '.$limit : '';

        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

        return $this->execute($query);
    }

    public function delete($where){

        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
            $this->execute($query);

            return true;

    }

}