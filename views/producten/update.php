<h1>Locaties</h1>
<form class="" action="" method="post">
<?php
/**
 * Locations View
 */

foreach ($locations as $keys => $value) {
  echo "<label>ID</label><br><input type='text' name='id' value=".$value['id']."><br>
  <label>Locatie</label><br><input type='text' name='locatie' value=".$value['locatie']."><br>
  <input type='submit' name='wijzigen' value='wijzigen'>

  ";
}
?>
</form>
