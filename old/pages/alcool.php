<!doctype html>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Présentation de la team !</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Prénom Nom" />
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" />
        <link rel="stylesheet" href="../../src/NolarkBundle/Resources/public/css/styles.css" />
        <link rel="stylesheet" href="../../src/NolarkBundle/Resources/public/css/simulation.css" />

        <link rel="stylesheet" href="../../src/NolarkBundle/Resources/public/css/team.css" />
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="../index.php">Accueil</a></li>
                    <?php
                    include '../includes/headerPages.php';
                    ?>
                </ul>
            </nav>
        </header>
        <br />
    </div>
        <section class="formulaire">

            <form id="form_Alcool" name="form_Alcool" action="#">
                <fieldset id="alcool">
                    <legend>Simulation ALCOOOOOOOOl</legend>
                    <p><label for="#poids">Votre Poids :</label> <input type="number" name="poids" id="poids" min="0" max="200" class="simulationForm" /></p>
                    <p><label for="#nb_verres">Nombre de verres</label> <input type="number" name="poids" id="nb_verres" min="0" max="200" class="simulationForm" /></p>
                    <form class="" action="#" name="sexe">
                        <input type="radio" id ="btnHomme" name="btnGenre" value="Masculin">Homme</input>
                        <input type="radio" id ="btnFemme" name="btnGenre" value="Féminin">Femme</input>
                    </form>
                    <br>
                    <input type="button"  id="btn_calc_alcoolemie" name="btn_calc_alcoolemie" value="Calculer Alcoolémie" />
                    <!-- ------------------------Bouton Calculer / effacer----------------------------- -->
                    <p id="controles">
                        <input type="reset" name="btn_reset" value="Reset" />
                    </p>
            </form>
        </section>

        <div id="vide"></div>
        <footer><p>&copy;2016 Nolark - Créé par <a href="mailto:davvmoli@gmail.com">David Molinari</a><p></footer>
        <script src="../js/alcool.js"></script>


</body>
</html>
