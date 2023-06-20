<?php 

    namespace App;
    use PDO;
    use PDOException;

    class Database{
        private $conn;
        protected static $config = array(
            "mysql" => array(
                'driver' => 'mysql',
                'host' => 'localhost',
                'username' => 'root',
                'password' => '',
                'database' => 'shop',
                'collation' => 'utf8mb4_unicode_ci',
                'flags' => [
                    \PDO::ATTR_PERSISTENT => false,
                    // Enable exceptions
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    // Emulate prepared statements
                    \PDO::ATTR_EMULATE_PREPARES => true,
                    // Set default fetch mode to array
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    // Set character set
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
                ]
            )
        );
        public function __construct($args= [])
        {
            $this -> conn = $args['conn'] ?? null;
        }
        public function get_connection($dbkey){
           $dbconfig = self::$config[$dbkey];
            $this -> conn = $args['conn'] ?? null;
            $this -> conn = null;
            $dns = "{$dbconfig['driver']}:host={$dbconfig['host']};dbname={$dbconfig['database']}";
            try{
                $this -> conn = new PDO($dns, $dbconfig['username'], $dbconfig['password'], $dbconfig['flags']);
                echo' hello kitty = en que momento pense que programar era buena idea?';
            }
            catch(PDOException $e){
                echo $e->getMessage();
                echo 'hola esto es un error';
            }
            return $this-> conn;
        }
    }
?>