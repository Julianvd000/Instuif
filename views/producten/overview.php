<h1>Producten</h1>
<a href="/index.php?controller=producten&action=add">Maak nieuw Producten</a>
<table class="table">
  <tr>
  <th>Id</th>
  <th>Naam</th>
  <th>Prijs</th>
  <th>producten</th>
  <th>wijzigen</th>
  <th>verwijderen</th>
</tr>


<?php
/**
 * producten View
 */
foreach ($producten as $keys => $value) {
  echo "<tr>
    <th scope='row'>". $value['id']."</th>
    <td>
      ". $value['naam']."
    </td>
    <td>
      ". str_replace(".",",",$value['prijs'])."
    </td>
    <td>
      ". $value['name']."
    </td>
    <td>
      <a href='index.php?controller=producten&action=update&id=". $value['id']."'>Updaten</a>
    </td>
    <td>
      <a href='index.php?controller=producten&action=delete&id=". $value['id']."'>Verwijderen</a>
    </td>
  </tr>";
}
?>
</table>
