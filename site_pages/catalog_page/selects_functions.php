<?php

function catalogSelect() {
    $dbUser = 'root';
    $dbName = 'selects';
    $dbPass = '';
    $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = 'set names utf8';
    $mysqli->query($query);
    $query = 'select * from `select_1`';
    $results = $mysqli->query($query);
    $select_1 = array();
    while($row = $results->fetch_assoc()) {
      $select_1[] = $row;
    }
    return  $select_1;
}

function selectFromSelect_2() {
    $select_1_val = (int)$_POST['select_1_val'];
    $dbUser = 'root';
    $dbName = 'selects';
    $dbPass = '';
    $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = 'set names utf8';
    $mysqli->query($query);
    $query = "select * from `select_2` where `id_select_1` = $select_1_val";
    $res = $mysqli->query($query);
    $items = "<option value='0'>Выберите категорию</option>";
    while($row = $res->fetch_assoc()) {
        $items .= "<option class='catalog__select-item' value='{$row['id_select_2']}'>{$row['title']}</option>";
      }
      return $items;
}

function selectFromSelect_3() {
    $select_2_val = (int)$_POST['select_2_val'];
    $dbUser = 'root';
    $dbName = 'selects';
    $dbPass = '';
    $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = 'set names utf8';
    $mysqli->query($query);
    $query = "select * from `select_3` where `id_select_2` = $select_2_val";
    $res = $mysqli->query($query);
    $items = "<option value='0'>Выберите подкатегорию</option>";
    while($row = $res->fetch_assoc()) {
        $items .= "<option class='catalog__select-item' value='{$row['id_select_3']}'>{$row['title']}</option>";
    }
      return $items;
}