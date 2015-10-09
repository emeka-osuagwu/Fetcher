<?php

namespace Emeka\Fetcher\Fetcher;

use Dotenv\Dotenv;

class Setup
{
    protected $db_host;
    protected $db_name;
    protected $db_user;
    protected $database;
    protected $db_password;

    public function __construct ()
    {
        $dotenv = new Dotenv($_SERVER['DOCUMENT_ROOT']);
        $dotenv->load();
        $this->db_host      = getenv('db_host');
        $this->db_name      = getenv('db_name');
        $this->db_user      = getenv('db_user');
        $this->database     = getenv('database');
        $this->db_password  = getenv('db_password');
    }

    /*
    | getDatabase returns database
    | return @string
    */
    public function getDatabase()
    {
        return $this->database;
    }

    /*
    | getDatabaseName returns database name
    | return @string
    */
    public function getDatabaseName()
    {
        return $this->db_name;
    }


    /*
    | getDatabaseUser returns database user
    | return @string
    */
    public function getDatabaseUser()
    {
        return $this->db_user;
    }


    /*
    | getDatabasePassword returns database password
    | return @string
    */
    public function getDatabasePassword()
    {
        return $this->db_password;
    }


    /*
    | getDatabaseHost returns database host
    | return @string
    */
    public function getDatabaseHost()
    {
        return $this->db_host;
    }


}
  

