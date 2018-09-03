<form class="" action="" method="post">
  <label>product</label>
  <input type="text" name="naam" value="">
  <input type="text" name="prijs" value="">
  <input type="text" name="Categorie" value="">
  <?php
  echo "<select>";
  foreach ($categorie as $key => $value) {
    echo "<option value=".$value['categorie_id'].">".$value['name']."</option>";
  }
  echo "</select>";
  ?>
  <input type="submit" name="Aanmaken" value="">
</form>
<?php var_dump($categorie); ?>
