<?php

require 'helper.php';
require 'Database.php';
require 'router.php';
$config = require 'config.php';

// connect to database using PDO (PHP Data Objects)
// applying singleton pattern
// $db = Database::getInstance($config['database']);
// // $id = $_GET['id'];
// $query = "select * from books  ";
// $books = $db->query($query)->fetchAll();

// foreach ($books as $book) {
//   echo "<li>{$book['name']}</li>";
// }

