<?php

namespace Test;

use PHPUnit_Framework_TestCase;
use Emeka\Fetcher\Fetcher\Fetch;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    
    public function test_Fetch_return_array()
    {
        $data = new Fetch;
        $array = $data->fetchData('Select * from posts');
        $this->assertInternalType('array', $array);
    }

}