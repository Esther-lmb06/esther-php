<?php include("inc/header.inc.php"); ?>


<h1 style="text-align: center; margin-top: 150px; font-size: 30px; color: #343A40" > Veuillez confirmer l'envoie de votre formulaire ! </h1>

<?php


/* Conditions d'envoie du formulaire de contact et D'erreur d'envoie*/

if ( (!empty($_POST['user_name'])) AND (!empty($_POST['user_mail'])) AND (!empty($_POST['user_message'])) ) {
    

	$nom = $_POST['user_name'];
	$email = $_POST['user_mail'];
	$message = $_POST['user_message'];

    echo '

    	<div style="margin-left: 37%">

    		<a href="cible.php?nom=' . $nom . '&amp;' . 'email=' . $email . '&amp;' . 'message=' . $message . '"> 
    			<div class="button_contact" style="align: center">
        			<button type="submit">confirmer </button>
    			</div>
    		</a>
		</div>

    ';
}

else {
    echo '<

    	<div style="margin-left: 37%">

    		<a href="cible_err.php"> 
    			<div class="button_contact">
        			<button type="submit">Envoyer le message</button>
    			</div>
    		</a>
    	</div>	

    ';
}


?>


















