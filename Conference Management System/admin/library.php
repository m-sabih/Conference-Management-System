<?php

    class Connection 
    {   
        public  static $conn;
        public  static $count=0;
        function __construct(){
            if(static::$count==0)
                static::$conn = new mysqli("localhost", "root", "","conference");
            else return static::$conn;
            static::$count++;
        }
    }
        function query() {
        $sql = func_get_arg(0);
        $parameters = array_slice(func_get_args(), 1);
        static $handle;
        if (!isset($handle))
        {
            try
            {
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, DB_USERNAME, DB_PASSWORD);
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }
        $results = $statement->execute($parameters);
        if ($results !== false)
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        else
            return false;
    }
    //define("DATABASE", "conference");
    //define("SERVER", "localhost");
    //define("DB_USERNAME", "root");
    //define("DB_PASSWORD", "");
?>