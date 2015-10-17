<?php

namespace Emeka\Fetcher\Fetcher;

use PDO;
use Emeka\Fetcher\Fetcher\Driver;


class Fetch
{

    public function __construct ( $query ) 
    {
        $this->query            = $query;
        $connection             = new Connect;
        $this->db_connection    = $connection->connect();
        $this->prepare_data     = $this->prepareData($this->query);
    }

    /*
    | prepareData checks for connetion and execute the query
    */
    public function prepareData($query)
    {

        if ( ! $this->db_connection )
        {
            return "Error : Unable to open database\n";
        }
        $data = $this->db_connection->prepare($query);
        $data->execute();
        return $data;
    }

    /*
    | fetchLazy Return next row as an anonymous object with column names as properties
    */
    public function fetchLazy()
    {
        return $this->prepare_data->fetch(PDO::FETCH_LAZY);
    }

    /*
    | fetchAssoc Return next row as an array indexed by column name Array
    */
    public function fetchAssoc()
    {
        return $this->prepare_data->fetch(PDO::FETCH_ASSOC);
    }

    /*
    | fetchObj Return next row as an anonymous object with column names as properties
    */
    public function fetchObj()
    {
        return $this->prepare_data->fetch(PDO::FETCH_OBJ);
    }
}
