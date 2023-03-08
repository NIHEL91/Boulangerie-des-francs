<link href="../css/compte.css" rel="stylesheet" type="text/css" />
<nav class="formulaire row-md" >
    
    <form method="post" action="index.php?entite=users&action=createUser">
       

        <div class="form_group">
            <label for="titre" class="mt-3 w-2 ">Prénom *</label>
            <input  class="form-control mt-2" type="text" name="prenom">
        </div>
        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Nom *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

        <!--<div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Téléphone *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>-->

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">E-mail *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

       <!-- <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Confirmation de l'e-mail *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>-->
        
        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Mot de passe *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>
        <!--
        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Confirmation du mot de passe *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>

        <div class="form_group">
            <label for="contenu" class="mt-3 mb-3">Date de naissance *</label>
            <input  class="form-control mt-2" type="text" name="nom">
        </div>-->
        <a  class=" btn btn-dark  mt-5 btn-hover"  type="submit">ENREGISTRER</a>
        
        <p> Vous avez déjà un compte ? <a href="index.php?entite=users&action=connect">Connectez-vous à la place!</a>
    </form>
</nav>



<?php
include "../app/view/footer.php";
?>