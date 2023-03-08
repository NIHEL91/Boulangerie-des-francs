<link href="../css/compte.css" rel="stylesheet" type="text/css" />
<nav class="formconnect ">
    <form method="post" action="index.php?entite=users&action=verif">
        <?php if($error) : ?><!-- si erreur : test d'une variable d'erreur -->
                    <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif ?><!-- fin de si -->

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" id="email">Email *</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" id="password">Mot de passe *</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <!--<label class="form-check-label" for="exampleCheck1">Check me out</label>-->
        </div>
        <button type="submit" class="btn btn-dark">Connecter</button>
    </form>
</nav>
