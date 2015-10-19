
    /*
    | 
    */
    public function fetchClass($class)
    {
        $result = $this->prepare_data->fetchAll(PDO::FETCH_CLASS, $class);
        return $this->toJson($class);
    }


    /*
    | fetchObj Return next row as an anonymous object with column names as properties
    */
    public function fetchFunction($function)
    {
        $result =  $this->prepare_data->fetchAll(PDO::FETCH_FUNC, $function);
        return $this->toJson($result);
    }
 