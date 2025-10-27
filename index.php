<?php

require 'helper.php';
require 'Database.php';
$config = require 'config.php';

// require 'router.php';

// connect to database using PDO (PHP Data Objects)
// applying singleton pattern
$db = Database::getInstance($config['database']);
$id = $_GET['id'];
$query = "select * from books where id =? ";
$books = $db->query($query,[$id])->fetchAll();

foreach ($books as $book) {
  echo "<li>{$book['name']}</li>";
}

