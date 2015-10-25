<?php

namespace Emeka\Fetcher\Helpers;

use Emeka\Fetcher\Base\BaseClass;
use Emeka\Fetcher\Database\Connections\Connect;

class Delete extends Connect
{

    public function delete ( $id, $table )
    {
        $rowCount = 0;
        $connection = $this->connect();
        $sql = "DELETE FROM $table WHERE id = ?";
        $statement = $connection->prepare($sql);
        if ( $statement )
        {
            $statement->bindParam(1, $id);
            $statement->execute();
            $rowCount = $statement->rowCount();
        }
        return ( $rowCount > 0 ) ? true : false;
    }

}
