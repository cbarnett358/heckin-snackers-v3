<?php
$config = json_decode(file_get_contents('db_config.json'), true);

// Connect to supabase using PDO
$host = $config['host'];
$db = $config['db'];
$user = $config['user'];
$pass = $config['password'];
$port = $config['port'];
$dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass";
    // If getting Connection failed: could not find driver
        // Go to XAMPP find php.ini and uncomment ;extension=pdo_pgsql
try {
    // Creating a new PDO connection
    $pdo = new PDO($dsn);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    // print "Connected to Supabase successfully!";
} catch (PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}

?>

