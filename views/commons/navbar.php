<nav class="containerNavbar">

    <ul>
        <li><a href="<?= URL ?>accueil">Accueil</a></li>




        <?php if (Securite::estConnecte()) : ?>

            <li><a href="<?= URL ?>compte/charte">Charte</a></li>

            <?php if (Securite::estConnecte() && Securite::estAdministrateur()) : ?>

                <li><a href="<?= URL ?>administration/droits">Gérer les droits</a></li>
                <li><a href="<?= URL ?>administration/accuses">Accusés de validation</a></li>

            <?php endif ?>
        <?php endif ?>



        <?php if (!Securite::estConnecte()) : ?>
            <li><a href="<?= URL ?>login">Connexion</a></li>
            <li>

                <a href="<?= URL ?>creerCompte">Inscription</a>
            </li>
        <?php else : ?><li>

                <a href="<?= URL ?>compte/profil">Profil</a>
            </li>
            <li>

                <a href="<?= URL ?>compte/deconnexion">Déconnexion</a>
            </li>
        <?php endif ?>

    </ul>



</nav>