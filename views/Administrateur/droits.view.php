<div class="entetePage <?= $css  ?>">


    <h1>Page d'administration des droits des utilisateurs</h1>
    <h2>Ne pas mettre d'utilisateur en role "administrateur"</h2>
    <h2>Manipulation irréversible à partir du site !</h2>

    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Validé</th>
                <th>Rôle</th>
                <th>Charte</th>
                <th>Mail</th>
            </tr>
            <?php foreach ($utilisateurs as $utilisateur) : ?>

                <tr>
                    <td><?= $utilisateur['login'] ?></td>

                    <td>

                        <form action="<?= URL ?>administration/validation_modificationValidation" method="post" class="formulaireAdminCompte">
                            <input type="hidden" name="login" value="<?= $utilisateur['login'] ?>" />
                            <select name="est_valide" onchange="confirmation(this.form)">
                                <option value=0 <?= (int)$utilisateur['est_valide'] === 0 ? "selected" : "" ?>>En attente de
                                    validation</option>
                                <option value=1 <?= (int)$utilisateur['est_valide'] === 1 ? "selected" : "" ?>>Validé
                                </option>
                            </select>
                        </form>

                    </td>

                    <td>
                        <?php if ($utilisateur['role'] === "administrateur") : ?>
                            <?= $utilisateur['role'] ?>
                        <?php else : ?>
                            <form action="<?= URL ?>administration/validation_modificationRole" method="post" class="formulaireAdminRole">
                                <input type="hidden" name="login" value="<?= $utilisateur['login'] ?>" />
                                <select name="role" onchange="confirmation(this.form)">
                                    <option value="utilisateur" <?= $utilisateur['role'] === "utilisateur" ? "selected" : "" ?>>
                                        Utilisateur</option>
                                    <option value="moderateur" <?= $utilisateur['role'] === "moderateur" ? "selected" : "" ?>>
                                        Modérateur</option>
                                    <option value="administrateur">Administrateur</option>
                                </select>


                            </form>
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ((int)$utilisateur['charteOk'] === 0) : ?>
                            Charte non validée
                        <?php elseif ((int)$utilisateur['charteOk'] === 1) : ?>
                            Charte validée
                        <?php endif ?>
                    </td>

                    <td><?= $utilisateur['mail'] ?></td>
                </tr>

            <?php endforeach ?>
        </thead>
    </table>
</div>