<?php

$uri = parse_url($_SERVER['REQUEST_URI'],5);

$routes = [
  '/' => 'controllers/home.php',
  '/about' => 'controllers/about.php',
  '/contact' => 'controllers/contact.php',
  '/books'=> 'controllers/book/index.php',
  '/books/show'=> 'controllers/book/show.php',
  '/books/create'=> 'controllers/book/create.php',
  '/books/store'=> 'controllers/book/store.php',
];

routeTo($uri, $routes);

