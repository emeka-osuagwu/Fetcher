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
        $this->prepare_data     = $this->prepareData();
    }

    /*
    | prepareData checks for connetion and execute the query
    */
    protected function prepareData()
    {

        if ( ! $this->db_connection )
        {
            return "Error : Unable to open database\n";
        }
        $data = $this->db_connection->prepare($this->query);
        $data->execute();
        return $data;
    }

    /*
    | fetchAll of the remaining rows in the result set 
    */
    public function fetchAll()
    {
        $result = $this->prepare_data->fetchAll();
        return $this->toJson($result); 
    }

    /*
    | fetchLazy Return next row as an anonymous object with column names as properties
    */
    public function fetchLazy()
    {
        $result = $this->prepare_data->fetch(PDO::FETCH_LAZY);
        return $this->toJson($result);
    }

    /*
    | fetchAssoc Return next row as an array indexed by column name Array
    */
    public function fetchAssoc()
    {
        $result = $this->prepare_data->fetchAll(PDO::FETCH_ASSOC);
        return $this->toJson($result);
    }

    /*
    | fetchObj Return next row as an anonymous object with column names as properties
    */
    public function fetchObj()
    {
        $result =  $this->prepare_data->fetchAll(PDO::FETCH_OBJ);
        return $this->toJson($result);
    }  


    /*
    | fetchColumn Return next row as an array indexed by column name Array
    */
    public function fetchColumn($column)
    {
        $result = $this->prepare_data->fetchAll(PDO::FETCH_COLUMN, $column);
        return $this->toJson($result);
    }

    /*
    | fetchGroup fetch group values by the first column
    */
    public function fetchGroup()
    {
        $result = $this->prepare_data->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
        return $this->toJson($result);
    }

    /*
    | toJson returns json_encode($object)
    */
    public function toJson( $object )
    {
        return json_encode($object);
    }



}
