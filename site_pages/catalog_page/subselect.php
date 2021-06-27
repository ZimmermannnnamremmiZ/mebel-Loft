<?php
  require "db.php";
  if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = intval($_POST['id']);
    $query = $db->query("SELECT * FROM 'select_2' WHERE 'id_select_1' = $id");
    echo "<select name='subselect'>";
    while($row = $query->fetch()) {
      echo "<option>$row->title</option>"
    }
    echo "</select>";
  } else {
    echo "<select name='subselect' disabled><option value='0'>--Выберете подкатегорию--</option></select>";
  }
?>