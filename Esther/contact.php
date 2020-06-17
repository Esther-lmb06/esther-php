<?php include("inc/header.inc.php"); ?>


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






