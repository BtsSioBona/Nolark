<?php $pages = array("route.php", "cross.php", "piste.php", "enfants.php", "team.php", "nous-contacter.php", "simulation.php", "alcool.php");
    $noms = array("Route", "Cross", "Piste", "Enfants", "La team", "Nous contacter", "Simulation", "Alcool");
    $nbLiens = count($pages);
    for ($i=0; $i < $nbLiens; $i++)
    { ?>
        <li><a href="./pages/<?php echo $pages[$i]; ?>"><?php echo $noms[$i]; ?></a></li>
    <?php }
    ?>
