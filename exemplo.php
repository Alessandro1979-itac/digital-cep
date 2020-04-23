<?php

require_once "vendor/autoload.php";

use Wead\digitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('69103352');

print_r($resultado);