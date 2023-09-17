<?php

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'login');

// temporily purpose
define('DB_SERVER', 'sql300.epizy.com');
define('DB_USERNAME', 'epiz_32371218');
define('DB_PASSWORD', 'bNhs9HdArqYJUd');
define('DB_NAME', 'epiz_32371218_login');




$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn == false) {
    dir('Error: Cannot connect');
}
