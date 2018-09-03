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
    <body >
        <div class="container">
            <a class="" href='<?php echo "index.php?controller=teams&action=overview"; ?>'><button class="btn btn-default">overzicht</button></a>
            <br>
            <form class="form-group" method="POST" action="">
               <div class="form-group">
                    <label for="teamnaam">Team Naam: </label>
                    <input type="text" name="teamnaam" class="form-control" id="email">
                  </div>
                   <button type="submit" class="btn btn-primary">Toevoegen</button>
            </form>
        </div>
        <?php if(isset($newTeam)) { ?>
        <?php echo '<h3>Nieuwe toegevoegd team</h3>'
        . ' <table class="table table-inverse">
            <thead>
              <tr>
                <th>Team Naam </th>
                <th>Team Nummer</th>
                <th>Aanmaak Datum</th>
              </tr>
            </thead>
            <tbody>'; 
        
        foreach ($newTeam as $key => $value) {
            echo "<tr>
         <th scope='row'><i class='fas fa-user'></i> ".$value['TeamNaam']."</th>
         <td>" . $value['id']."</td>
         <td>".$value['AanmaakDatum']."</td>
         <td><a class='btn btn-success' href='index.php?controller=teams&action=overzichtTeam&team=".$value['id']."'>ShowTeam</a></td>
           </tr>";
    
            }
        ?>
           
        <?php } ?>
        
        
    </body>
</html>
