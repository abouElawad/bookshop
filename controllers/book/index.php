<?php 
require_once 'helper.php';
require_once 'Database.php';
require_once 'router.php';
$config = require_once 'config.php';


$heading = "All Books";

$db = Database::getInstance($config['database']);
$query = "select * from books  ";

require_once 'views/books/index.view.php';

