<?php
/**
 * A complete login script with registration and members area.
 *
 * @author: Nils Reimers / http://www.php-einfach.de/experte/php-codebeispiele/loginscript/
 * @license: GNU GPLv3
 */
 
//Tragt hier eure Verbindungsdaten zur Datenbank ein
$db_host = 'localhost';
$db_name = 'ourkingdom';
$db_user = 'ourkingdom';
$db_password = 't:}YUkHtCe,pDVwF*HbC7csXwkg%!Deohe#zEJbi3^>~4rUxKv}qpi%c';
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
