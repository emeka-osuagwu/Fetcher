<?php

namespace Emeka\Fetcher\Fetcher;

use Dotenv\Dotenv;

class Setup
{
    public $db_host;
    public $db_name;
    public $db_user;
    public $database;
    public $db_password;

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


    public function getDatabase()
    {
        return $this->database;
    }

    public function getDatabaseName()
    {
        return $this->db_name;
    }

    public function getDatabaseUser()
    {
        return $this->db_user;
    }

    public function getDatabasePassword()
    {
        return $this->db_password;
    }

    public function getDatabaseHost()
    {
        return $this->db_host;
    }


}
  

