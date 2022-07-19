<?php
header("Content-Type: text/html; charset=utf-8");

/**
 * [PHP Basic Config] Configurações basicas do sistema
 * Configura o timezone da aplicação
 */
date_default_timezone_set("America/Sao_Paulo");

ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);


/**
 * [php config] Altera modo de erro e exibição do var_dump.
 * display_errors: erros devem ser exibidos.
 * error_reporting: todos os APAGAR erros
 * overload_var_dump: omitir a linha de caminho do var_dump.
 */
ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);

/**
 * [ interface ] Style
 */
echo "<link rel=\"stylesheet\" href=\"assets/style.css\"/>";
