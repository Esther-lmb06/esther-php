<?php include("inc/header.inc.php"); ?>



<!-- Alerte de d'information manquante -->

<div class="alert" style="padding: 20px; background-color: #458BC7; color: white; margin-top: 20px">

  <span style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer; transition: 0.3s" class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

  <strong>ATTENTION ! </strong> Veuillez saisir toutes les informations ! Sinon l'expérience sera refusée dans la base de donnée !
</div>


<!-- FORMULAIRE POUR ENREGISTRER DES EXPERIENCES -->


<form action="experiences.php" method="post">

    <h3 style="margin-bottom: 35px;"> Enregistrez une nouvelle expériences !</h3>


    <div>
        <label for="entreprise">Entreprise</label>
        <input type="text" id="entreprise" name="entreprise">
    </div>


    <div>
        <label for="poste">Poste</label>
        <input type="text" id="poste" name="poste">
    </div>


    <div>
        <label for="date_debut">Date de début (aaaa-mm-jj) </label>
        <input type="text" id="date_debut" name="date_debut">
    </div>


    <div>
        <label for="date_fin">Date de fin (aaaa-mm-jj) </label>
        <input type="text" id="date_fin" name="date_fin">
    </div>


    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>
    </div>

     
    <div class="button_contact">
        <button type="submit">ENREGISTRER</button>
    </div>


</form>







<!-- FORMULAIRE POUR MODIFIER SES INFORMATIONS PERSO -->

<form action="index.php" method="post" style="margin-bottom: 100px">

    <h3 style="margin-bottom: 35px;"> Modifier les informations personelles !</h3>


    <div>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
    </div>


    <div>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">
    </div>


    <div>
        <label for="date_naissance">Date de naissance (aaaa-mm-jj) </label>
        <input type="text" id="date_naissance" name="date_naissance">
    </div>


    <div>
        <label for="telephone">Telephone</label>
        <input type="number" id="telephone" name="telephone">
    </div>


    <div>
        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse">
    </div>


    <div>
        <label for="email">e-mail</label>
        <input type="email" id="email" name="email">
    </div>


    <div>
        <label for="imgpath">Nom de photo de profil (PNG)</label>
        <input type="text" id="imgpath" name="imgpath">
    </div>


    <div>
        <label for="bio">Bio</label>
        <textarea id="bio" name="bio"></textarea>
    </div>

     
    <div class="button_contact">
        <button type="submit">MODIFIER</button>
    </div>


</form>




