<?php

namespace Emeka\Fetcher\Helpers;

use PDO;
use Emeka\Fetcher\Base\BaseClass;
use Emeka\Fetcher\Database\Connections\Connect;

class Get extends Connect
{

    /*
    | getAll select result from
    */
    public function getAll( $table )
    {
        $query = "SELECT * FROM $table";
        echo json_encode($this->fetchData( $query ));
    }
}
