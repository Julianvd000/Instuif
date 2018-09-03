<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table class="table table-inverse">
            <thead>
              <tr>
                <th>Team Naam </th>
                <th>Team Nummer</th>
                <th>Aanmaak Datum</th>
              </tr>
            </thead>
            <tbody>
                
  
        <?php
        echo '<h1>Instuif Teams Overzicht</h1>';
        foreach ($teams as $key => $value) {
            echo "<tr>
         <th scope='row'><i class='fas fa-user'></i> ".$value['TeamNaam']."</th>
         <td>" . $value['id']."</td>
         <td>".$value['AanmaakDatum']."</td>
         <td><a class='btn btn-success' href='index.php?controller=teams&action=overzichtTeam&team=".$value['id']."'>ShowTeam</a></td>
           </tr>";
    
}
        ?>
            
     </tbody>
    </table>
    </body>
</html>
