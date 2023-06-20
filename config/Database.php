<?php
$settings = array(
    "mysql" => array(
        'driver' => "mysql",
        'host' => "localhost",
        'user' => "root",
        'pass' => "",
        'database' => 'shop',
        'flags' => array(
            \PDO::ATTR_PERSISTENT => false,
            // Enable exceptions
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            // Emulate prepared statements
            \PDO::ATTR_EMULATE_PREPARES => true,
            // Set default fetch mode to array
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            // Set character set
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
        )
    )
);

$dns = "{$settings['mysql']['driver']}:host={$settings['mysql']['host']};dbname={$settings['mysql']['database']}";
try {
    $connection = new \PDO($dns, $settings['mysql']['user'], $settings['mysql']['pass'], $settings['mysql']['flags']);
    
    if ($connection) {
        echo "Conexión exitosa";
    } else {
        echo "Error al conectar";
    }
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
