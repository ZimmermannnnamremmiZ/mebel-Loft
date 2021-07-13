<?php

@mysql_connect("localhost", "root", "") or die("Нет соединения с сервером БД");
mysql_select_db("selects") or die ("Нет соединения с БД");
mysql_query("SET NAMES utf8") or die ("Не установлена кодировка соединения");