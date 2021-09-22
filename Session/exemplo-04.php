<?php

session_id('jl7ijr3oapi1biuvo2tkbkce0c');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>