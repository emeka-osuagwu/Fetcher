<?php

namespace Emeka\Fetcher\Helpers;

use Emeka\Fetcher\Base\BaseClass;
use Emeka\Fetcher\Base\Exceptions\InvalidNameException;
use Emeka\Fetcher\Database\Connections\Connect;

class Create extends Connect
{

    public function checkIsset ( $object )
    {
        extract($object, EXTR_PREFIX_SAME, "wddx");
        try
        {
            if ( $name == null || $role == null || $age == null )
            {
                throw new InvalidNameException("some variable are not set for the create function.");
            }
        }
        catch (InvalidNameException $e)
        {
            return $e
        }

        try
        {
            if ( ! is_array( $object ) )
            {
                throw new InvalidNameException("some variable are not set for the create function.");
            }
        }
        catch (InvalidNameException $e)
        {
            return $e;
        }
        return $object;
    }


    public function create ( $object )
    {
        return $this->checkIsset ( $object );
    }

}

