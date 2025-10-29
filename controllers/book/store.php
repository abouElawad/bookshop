<?php 
require_once 'helper.php';
require_once 'Database.php';
require_once 'router.php';
$config = require_once 'config.php';


$db = Database::getInstance($config['database']);

foreach($_POST as $key=> $value)
{
  $$key = $value;
}
// dd(get_defined_vars());

// $name = $_POST['name'];
// $author = $_POST['author'];
// $description = $_POST['description'];
// $language = $_POST['language'];
// $year = $_POST['year'];

$query = "INSERT INTO books ( name, author, description, language, year) VALUES (?,?,?,?,?) ";
$books = $db->query($query,[$name,
$author,
$description,
$language,
$year]);

header("Location: /books");
exit;

