<?php

namespace Emeka\Fetcher\Fetcher;

use Emeka\Fetcher\Fetcher\Setup;

class Driver
{
    protected $db_name;
    protected $db_user;
    protected $database;
    protected $driver;
    protected $db_host;
    protected $db_password;

    public function __construct ()
    {
        $access = new Setup;
        $this->database     = $access->getDatabase();
        $this->db_host      = $access->getDatabaseHost();
        $this->db_user      = $access->getDatabaseUser();
        $this->db_name      = $access->getDatabaseName();
        $this->db_password  = $access->getDatabasePassword();
        $this->driver       = $this->driver();
    }

    /*
    | Compile drivers as to array
    | return's driver as an array
    */
    public function driver ()
    {
        $driver =  [
            "db_host"       => $this->db_host,
            "db_name"       => $this->db_name,
            "db_user"       => $this->db_user,
            "database"      => $this->database,
            "db_password"   => $this->db_password
        ];
        return $driver;
    }


    /*
    | return's driver as an array
    */
    public function useDriver ()
    {
        return $this->driver;
    }
}
