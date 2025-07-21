<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Load database config
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'sim_aset',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

// Create connection
$conn = new mysqli(
    $db['default']['hostname'],
    $db['default']['username'],
    $db['default']['password'],
    $db['default']['database']
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all tables
$tables = [];
$result = $conn->query("SHOW TABLES");
if ($result) {
    while ($row = $result->fetch_array()) {
        $tables[] = $row[0];
    }
}

echo "<h2>Database: " . $db['default']['database'] . "</h2>";

echo "<h3>Tables:</h3>";
echo "<ul>";
foreach ($tables as $table) {
    echo "<li>$table";
    
    // Get columns for this table
    $columns = [];
    $result = $conn->query("SHOW COLUMNS FROM $table");
    if ($result) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['Field'] . " - " . $row['Type'] . 
                 (($row['Key'] != '') ? " (" . $row['Key'] . ")" : "") . 
                 (($row['Null'] == 'NO') ? " NOT NULL" : "") . 
                 (($row['Default'] != '') ? " DEFAULT " . $row['Default'] : "") . "</li>";
        }
        echo "</ul>";
    }
    
    echo "</li>";
}
echo "</ul>";

$conn->close();
?>
