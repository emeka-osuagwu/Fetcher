<?php

namespace Emeka\Fetcher\Helpers;

use PDO;
use Emeka\Fetcher\Helpers\Get;
use Emeka\Fetcher\Base\Inflect;
use Emeka\Fetcher\Helpers\Save;
use Emeka\Fetcher\Helpers\Find;
use Emeka\Fetcher\Helpers\Where;
use Emeka\Fetcher\Helpers\Create;
use Emeka\Fetcher\Base\BaseClass;
use Emeka\Fetcher\Helpers\Delete;
use Emeka\Fetcher\Database\Connections\Connect;

abstract class Helper
{
    private
    $get,
    $save,
    $find,
    $where,
    $delete,
    $inflect,
    $classname,
    $tableName,
    $properties = [],
    $primaryKey = 'id';

    public function __construct()
    {
        $this->get          = new Get;
        $this->save         = new Save;
        $this->find         = new Find;
        $this->where        = new Where;
        $this->delete       = new Delete;
        $this->inflect      = new Inflect;
        $this->classname    = $this->getClassName();
    }

    /*
    |
    */
    public function __get ( $property )
    {
        return $this->properties[$property];
    }

    /*
    |
    */
    public function __set ( $property, $value )
    {
       $this->properties[$property] = $value;
    }


    /*
    | getClass returns class called
    | return string
    | accepts no parameter
    */
    public static function getClass()
    {
        return get_called_class();
    }

    /*
    | getClassName returns class name in singular form
    | return string
    | accepts class class
    */
    public function getClassName()
    {
        return substr(strrchr(static::getClass(), '\\'), 1);
    }

    /*
    | tabalName returns pluralized form of the class name
    | return string
    | accepts classname
    */
    public function tableName()
    {
       return $this->inflect->pluralize($this->classname);
    }

    /*
    | getAll returns result from Get class
    | return Array
    | accepts tableName from method tableName()
    */
    public function getAll ()
    {
        return $this->get->getAll($this->tableName());
    }

    public function find ( $id )
    {
        return $this->find->find( $this->tableName(), $id, $this->properties );
    }

    public  function where ( $columnName, $value )
    {
        return $this->where->where( strtolower($this->tableName()), $columnName, $value);
    }

    public function delete ( $id )
    {
        return $this->delete->delete( $id, strtolower($this->tableName()) );
    }

    public function exists()
    {
        if(isset($this->properties) && isset($this->properties[$this->primaryKey]) && is_numeric($this->properties[$this->primaryKey])) 
        {
            return true;
        } 
        else
        {
            return false;
        }
    }

    public function save ()
    {
        if( $this->exists() ) 
        {
            return $this->save->executeUpdateQuery( $this->properties, $this->tableName(), $this->primaryKey );
        } 
        else
        {
            return $this->save->executeInsertQuery( $this->properties, $this->tableName(), $this->primaryKey );
        }
    } 
}
