<div class="entetePage containerProfil <?= $css ?>">

    <h1>Page de modification de votre mot de passe.</h1>
    <h2><?= $_SESSION['profil']['login'] ?>, ne l'oubliez pas !</h2>

    <form method="POST" action="<?= URL ?>compte/validation_modificationPassword">
        <div class="entry_formulaire">
            <label for="password">Ancien mot de passe</label>
            <input type="password" name="ancienPassword" id="old_password">
        </div>
        <div class="entry_formulaire">
            <label for="new_password">Nouveau mot de passe :</label>
            <input type="password" name="nouveauPassword" id="new_password">
        </div>
        <div class="entry_formulaire">
            <label for="confirm_new_password">Confirmation du nouveau mot de passe</label>
            <input type="password" name="confirmNouveauPassword" id="confirm_new_password">
        </div>
        <div class="alertPWD dnone" id="error">
            <h3>Les passwords ne correspondent pas !</h3>
        </div>
        <div class="entry_formulaire">
            <button type="submit" id="btnModifMDP" class="btnModifMDP desactive">Valider la modification du mot de passe</button>
        </div>
    </form>






</div>