<?php


class Securite
{

    public static function secureHTML($chaine)
    {
        return htmlentities($chaine);
    }
    public static function estConnecte()
    {
        return (!empty($_SESSION['profil']));
    }
    public static function estUtilisateur()
    {
        return (!empty($_SESSION['profil']['role'] === "utilisateur"));
    }
    public static function estAdministrateur()
    {
        return (!empty($_SESSION['profil']['role'] === "administrateur"));
    }


    // on génère à la connexion, 
    // il aura une durée de vie de 60*30 = 30 minutes
}
