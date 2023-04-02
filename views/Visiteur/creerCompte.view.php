<div class="entetePage <?= $css ?>">
    <h1>Création de compte</h1>

    <h2>Les informations fournies sont cryptées et non divulguées.</h2>

    <!-- action est la page vers laquelle les infos sont envoyées qd on submit. -->
    <form action="validation_creerCompte" method="post">
        <div class="entry_formulaire">
            <label for="login">Pseudo</label>
            <br>
            <!-- le "name" est le nom de l'information transmise -->
            <input type="text" id="login" name="login" placeholder="Votre pseudo">
        </div>
        <div class="entry_formulaire">
            <label for="password">Mot de passe :</label>
            <br>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe">
        </div>
        <div class="entry_formulaire">
            <label for="mail">Adresse Mail :</label>
            <br>
            <input type="mail" id="mail" name="mail" placeholder="Votre adresse mail valide">
        </div>
        <div class="entry_formulaire">
            <button type="submit">Validation</button>
        </div>


    </form>








</div>