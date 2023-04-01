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

    </ul>

    <?php if (!Securite::estConnecte()) : ?>
        <a href="<?= URL ?>login"><img src="<?= URL ?>public/assets/images/connexion/cadenas.png"></a>
        <a href="<?= URL ?>creerCompte"><i class="fa-regular fa-square-plus"></i></a>
    <?php else : ?>
        <a href="<?= URL ?>compte/profil"><img src="<?= URL ?>public/assets/images/connexion/buste.png"></a>
        <a href="<?= URL ?>compte/deconnexion"><img src="<?= URL ?>public/assets/images/connexion/door.jpg"></a>
    <?php endif ?>





</nav>