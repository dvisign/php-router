<?php 
include_once ("head.php");
$request = $_SERVER['REQUEST_URI'];
$requestSplit = explode("/", $request);
$requestArr = array(
  "root" => $requestSplit[1],
  "page" => $requestSplit[2],
  "params" => $requestSplit[3]
);
$params = $requestArr["params"];
// switch ($requestArr["page"]) {
//   case '' :
//     require __DIR__ . '/views/index.php';
//     break;
//   case 'index' :
//     require __DIR__ . '/views/index.php';
//     break;
//   case 'about' :
//       require __DIR__ . '/views/about.php';
//       break;
//   default:
//     http_response_code(404);
//     require __DIR__ . '/views/error.php';
//     break;
// }
// <IfModule mod_rewrite.c>
//   RewriteEngine On
//   RewriteBase /php-router/
//   RewriteRule ^index\.php$ - [L]
//   RewriteCond %{REQUEST_FILENAME} !-f
//   RewriteCond %{REQUEST_FILENAME} !-d
//   RewriteCond %{REQUEST_FILENAME} !-l
//   RewriteRule . /php-router/index.php [L]
//   RewriteRule ^([0-9]+)/([0-9]+)$ /php-router/index.php#$1/$2 [R=301,NC,L,NE]
// </IfModule>
require __DIR__ . '/views/index.php';
include_once ("footer.php");
?>