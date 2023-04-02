<div class="entetePage <?= $css ?>">

    <h1>Page du profil de <?= $utilisateur['login'] ?></h1>
    <h2>Pour modifier ou supprimer votre compte.</h2>






    <br>
    <div id="role">
        <p><b>Role :</b> <?= $_SESSION['profil']['role'] ?></p>
    </div>
    <br>
    <div id="mail">
        <p><b>Mail :</b> <?= $utilisateur['mail'] ?></p>

    </div>
    <br>
    <div class="entry_formulaire">
        <button id="btnModifMail">Modifier l'adresse mail</button>

    </div>
    <br>
    <div id="modificationMail" class="dnone">
        <form action="<?= URL ?>compte/validation_modificationMail" method="post">
            <div class="entry_formulaire">
                <label for="mail2"><b>Nouvelle adresse mail :</b></label>

                <input type="text" placeholder="<?= $utilisateur['mail'] ?>" name="mail" id="mail2">

            </div>
            <div id="btnValidationModifMail" class="entry_formulaire dnone">
                <button>Valider la nouvelle adresse</button>

            </div>
            <div class="entry_formulaire">
                <button id="annulerModifMail" class="btnRed dnone">
                    <a href="<?= URL ?>compte/profil">
                        Annuler la modification du mail.
                    </a>
                </button>
            </div>

        </form>
    </div>


    <div class="entry_formulaire">
        <button id="btnModifMdp"><a href="<?= URL ?>compte/modificationPassword">Modifier le mot de passe</a></button>

    </div>
    <div class="entry_formulaire">
        <button id="btnSuppCompte" class="btnSuppCompte">Supprimer mon compte</button>

    </div>

    <div class="entry_formulaire">
        <button id="suppCompte" class="btnRed dnone">
            <a href="<?= URL ?>compte/suppressionCompte">
                Veuillez confirmer la supression. <br>Action définitive et irréversible !
            </a>

        </button>
    </div>
</div>