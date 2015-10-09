<?php

namespace Emeka\Fetcher\Fetcher;

use PDO;
use Emeka\Fetcher\Fetcher\Driver;


class Fetch
{

    function __construct() 
    {
        $connection             = new Connect;
        $this->db_connection    = $connection->connect();
    }

    public function fetchData ( $query )
    {

        if ( ! $this->db_connection )
        {
            return "Error : Unable to open database\n";
        }
        $data = $this->db_connection->prepare($query);
        $data->execute();
        return $data->fetchAll();
    }
}
