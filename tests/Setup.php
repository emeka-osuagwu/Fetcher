<?php

namespace Test;

use PHPUnit_Framework_TestCase;
use Emeka\Fetcher\Fetcher\Setup;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    
    public function test_database_name_is_string()
    {
        $setup = new Setup;
        $getDatabase = $setup->getDatabase();
        $this->assertInternalType('string', $getDatabase);
    }

    public function test_getDatabasePassword_is_string()
    {
        $setup = new Setup;
        $getDatabasePassword = $setup->getDatabasePassword();
        $this->assertInternalType('string', $getDatabasePassword);
    }

    public function test_getDatabaseUser_is_string()
    {
        $setup = new Setup;
        $getDatabaseUser = $setup->getDatabaseUser();
        $this->assertInternalType('string', $getDatabaseUser);
    }

    public function test_getDatabaseName_is_string()
    {
        $setup = new Setup;
        $getDatabaseName = $setup->getDatabaseName();
        $this->assertInternalType('string', $getDatabaseName);
    }

    public function test_getDatabaseHost_is_string()
    {
        $setup = new Setup;
        $getDatabaseHost = $setup->getDatabaseHost();
        $this->assertInternalType('string', $getDatabaseHost);
    }

}