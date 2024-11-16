<?php

require_once "../core/util_pr5.php";

$_SERVER["PHP_AUTH_USER"]= null;
$_SERVER['PHP_AUTH_PW'] = null;
$_SESSION[Consts::kTheme] = "light";
session_destroy();
http_response_code(401);

?>