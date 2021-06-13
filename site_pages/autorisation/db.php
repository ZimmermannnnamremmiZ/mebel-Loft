<?php

require "libs/rb-mysql.php";
R::setup( 'mysql:host=localhost;dbname=users',
'root', 'root' );


session_start();