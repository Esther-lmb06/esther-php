<?php include("inc/header.inc.php"); ?>




<!-- Alerte de d'information manquante -->

<div class="alert" style="padding: 20px; background-color: #f44336; color: white; margin-top: 20px">

  <span style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer; transition: 0.3s" class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

  <strong>ATTENTION ! Formulaire Non Envoyé ! ! </strong> Veuillez saisir l'ensemble des informations demandées !
</div>





<!-- FORMULAIRE de contact -->

<form action="verification.php" method="post">

    <div>
        <label for="name">Nom et Prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>


    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>


    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>


    <div class="button_contact">
        <button type="submit">Envoyer le message</button>
    </div>


</form>






