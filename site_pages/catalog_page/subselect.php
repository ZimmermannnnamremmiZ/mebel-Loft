<!-- <script type="text/javascript">
  $(function() {
    $('select[name="subselect"]').change(function() {
      alert($('select[name="subselect"]').val());
    });
  });
</script> -->
<?php
  $dbUser = 'root';
  $dbName = 'selects';
  $dbPass = '';
  $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
  $query = 'set names utf8';
  $mysqli->query($query);
  $id = intval($_POST['id']);
  $query = "select * from `select_2` where `id_select_1` = $id";
  $results = $mysqli->query($query);
  if (isset($_POST['id']) && !empty($_POST['id'])) {
    while($row = $results->fetch_assoc()) {
      echo "<option value='{$row["id"]}'>{$row["title"]}</option>";
    }
  } else {
      echo "<option value='0'>Сперва выберете раздел</option>";
  }
?>