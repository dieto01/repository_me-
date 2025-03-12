<?php
namespace Application\DBConnection;

class MySQLConnection extends \PDO{
    private const DB_HOST = 'db';
    private const DB_NAME = 'application';
    private const DB_USER = 'root';
    private const DB_PASS = 'rootpass';

    public function __construct(){
        parent::__construct('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME, self::DB_USER, self::DB_PASS);
    }
}