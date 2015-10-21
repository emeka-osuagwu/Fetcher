<?php

namespace Emeka\Fetcher\Fetcher;

use PDO;
use Emeka\Fetcher\Fetcher\Driver;
use Emeka\Fetcher\Exception\InvalidException;

class Fetch
{
    protected $query;

    public function __construct () 
    {
        $connection             = new Connect;
        $this->db_connection    = $connection->connect();
    }

    /*
    | query 
    */
    public function query( $query )
    {
        return $this->query = $query;
    }

    /*
    | prepareData checks for connetion and execute the query
    */
    public function prepareData()
    {
        $data = $this->db_connection->prepare($this->query);
        
        if ( $data->execute() ) 
        {
            return $data;      
        }  

        $response = 
        [
            "Message"   => "Invalid query",
            "Tip"       => 
            [
                "1"     => "use method query() on instance of Fetch",
                "2"     => "check if query parameter is accurate with database infomation"
            ]   
        ];

        die( json_encode($response));   
    }

    /*
    | fetchAll of the remaining rows in the result set 
    */
    public function fetchAll()
    {
        $result = $this->prepareData()->fetchAll();
        return $this->toJson($result); 
    }

    /*
    | fetchLazy Return next row as an anonymous object with column names as properties
    */
    public function fetchLazy()
    {
        $result = $this->prepareData()->fetch(PDO::FETCH_LAZY);
        return $this->toJson($result);
    }

    /*
    | fetchAssoc Return next row as an array indexed by column name Array
    */
    public function fetchAssoc()
    {
        $result = $this->prepareData()->fetchAll(PDO::FETCH_ASSOC);
        return $this->toJson($result);
    }

    /*
    | fetchObj Return next row as an anonymous object with column names as properties
    */
    public function fetchObj()
    {
        $result =  $this->prepareData()->fetchAll(PDO::FETCH_OBJ);
        return $this->toJson($result);
    }  


    /*
    | fetchColumn Return next row as an array indexed by column name Array
    */
    public function fetchColumn($column)
    {
        $result = $this->prepareData()->fetchAll(PDO::FETCH_COLUMN, $column);
        return $this->toJson($result);
    }

    /*
    | fetchGroup fetch group values by the first column
    */
    public function fetchGroup()
    {
        $result = $this->prepareData()->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
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
