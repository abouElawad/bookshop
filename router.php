<?php

$uri = parse_url($_SERVER['REQUEST_URI'],5);

$routes = [
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/contact' => 'controllers/contact.php',
];

routeTo($uri, $routes);

