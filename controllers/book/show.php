<?php 
require_once 'helper.php';
require_once 'Database.php';
require_once 'router.php';
$config = require_once 'config.php';


// $heading = "Show Book details";
$db = Database::getInstance($config['database']);
$id = $_GET['id'];

$query = "SELECT * FROM books WHERE id = ? ";

require_once 'views/books/show.view.php';

