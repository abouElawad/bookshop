<?php

function dd($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';

  die();
}


function requestUri($uri)
{
  return ($_SERVER['REQUEST_URI'] === $uri) ?
    'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' :
    'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white';
}

function routeTo($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

function abort()
{
  http_response_code(404);
  require 'views/404.view.php';
  die();
}
