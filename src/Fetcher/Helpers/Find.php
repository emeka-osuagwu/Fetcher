<?php

namespace Emeka\Fetcher\Helpers;
use PDO;
use Emeka\Fetcher\Base\BaseClass;
use Emeka\Fetcher\Database\Connections\Connect;

class Find
{
    public function connect()
    {
        $connection = new Connect;
        return $connection = $connection->connect();
    }

    public function find( $table, $id, $properties )
    {
        $result = null;
        $connection = null;
        $class = new static;
        $connection = $this->connect();
        $statement = $connection->prepare("SELECT * FROM {$table} WHERE id = ?");
        if ( $statement )
        {
            $statement->bindParam(1, $id);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
        }
        return json_encode($result);
    }
}
