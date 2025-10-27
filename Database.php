<?php 

class Database
{
    private static $instance = null;
    private $connection;
    // public static $counter = 0; 
  private function __construct($config,$username , $password)
  {
  
     $dsn = "mysql:".http_build_query($config,'',';');
     $this->connection = new PDO($dsn, $username, $password,[PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC]);
    // self::$counter++;
    
  }

  public static function getInstance($config ,$username = 'root', $password = 'root')
    {
        if (self::$instance === null) 
            self::$instance = new Database($config,$username, $password);
        return self::$instance;
    }

  public function query($query, $params = [])
  {
    $statement = $this->connection->prepare($query);

    $statement->execute($params);

    return $statement;
  }


}