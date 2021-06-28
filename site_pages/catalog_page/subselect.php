<script>
  $(function() {
    $('select[name="subselect"]').change(function() {
      alert($('select[name="subselect"]').val());
    });
  });
</script>
<?php
 $dbUser = 'root';
    $dbName = 'selects';
    $dbPass = '';
    $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = 'set names utf8';
    $mysqli->query($query);
    $query = 'select * from `select_2` where `id_select_1` = $id';
    $results = $mysqli->query($query);
  if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = intval($_POST['id']);
    echo "<select name='subselect'>";
    while($row = $results->fetch()) {
      echo "<option>{$row["title"]}</option>";
    }
    echo "</select>";
  } else {
    echo "<select name='subselect' disabled><option value='0'>--Выберете подкатегорию--</option></select>";
  }
?>