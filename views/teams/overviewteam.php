<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<h1 class="h1teams"><?php echo "InstuifTeam: ". $team[0]['TeamNaam'];?></h1>
<a href="index.php?controller=Teams&action=overview"><h3>Back</h3></a>

    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Volledige info</th>
                <th scope="col">Voornaam<a href="index.php?controller=teams&action=overzichtTeam&team=<?php echo $_GET['team'];?>&sort=Voornaam"><i class="fa fa-arrows-v" aria-hidden="true"></i></a></th>
                <th scope="col">Achternaam<a href="index.php?controller=teams&action=overzichtTeam&team=<?php echo $_GET['team'];?>&sort=Achternaam"><i class="fa fa-arrows-v" aria-hidden="true"></i></a></th>
                <th scope="col">EmailAdres<a href="index.php?controller=teams&action=overzichtTeam&team=<?php echo $_GET['team'];?>&sort=EmailAdres"><i class="fa fa-arrows-v" aria-hidden="true"></i></a></th>
                <th scope="col">Mobiele nummer<a href="index.php?controller=teams&action=overzichtTeam&team=<?php echo $_GET['team'];?>&sort=MobieleNummer"><i class="fa fa-arrows-v" aria-hidden="true"></i></a></th>
                <th scope="col">Rol binnen Team</th>
              </tr>
            </thead>
            <tbody>

        <?php

        foreach ($teamLeiding as $key => $value) {
            echo '<tr>'
                    . '<th scope="row">'
                    . '<a class="btn btn-success" href="index.php?controller=leiding&action=leidingInfo&leidingid='.$value['id'].'">Info</a>'
                    . '</th>'
                    . '<td>'.$value['Voornaam'].'</td>'
                    . '<td>'.$value['Tussenvoegsel']." ".$value['Achternaam'].'</td>'
                    . '<td>'.$value['EmailAdres'].'</td>'
                    . '<td>'.'+31'.$value['MobieleNummer'].'</td>'
                    . '<td>'.$value['RolNaam'].'</td>'
                    . '</tr>'
                    ;




        }
        
        ?>
                </tbody>
    </table>
