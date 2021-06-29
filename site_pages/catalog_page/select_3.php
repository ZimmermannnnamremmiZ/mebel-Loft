<script type="text/javascript">
  $(function() {
    $('select[name="select_3"]').change(function() {
      alert($('select[name="select_3"]').val());
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
  $id = intval($_POST['id']);
  $query = "select * from `select_3` where `id_select_2` = $id";
  $results = $mysqli->query($query);
  if (isset($_POST['id']) && !empty($_POST['id'])) {
    echo "<select class='catalog__select select_3' name='select_3'>";
    while($row = $results->fetch_assoc()) {
      echo "<option>{$row["title"]}</option>";
    }
      echo "</select>";
  } else {
      echo "<select class='catalog__select select_3' name='select_3' disabled><option value='0'>Сперва выберете раздел</option></select>";
  }
?>