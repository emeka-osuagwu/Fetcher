<?php

namespace Test;

use PHPUnit_Framework_TestCase;
use Emeka\Fetcher\Fetcher\Driver;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    
    public function test_Driver_class_return_array()
    {
        $data = new Driver;
        $array = $data->useDriver();
        $this->assertInternalType('array', $array);
    }

}