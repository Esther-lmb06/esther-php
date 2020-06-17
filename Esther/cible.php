<?php include("inc/header.inc.php"); ?>



<!-- MESSAGE de CONFIRMATION -->

<h1 style="text-align: center; margin-top: 120px"> 

	<span style="color:#343A40;font-size:50px;text-transform: uppercase;">
		Merci 
	</span> 

	<span style="color:#458BC7;font-size:50px;text-transform: uppercase;">
		<?php echo $_GET['nom'] . ' !'; ?> 
	</span> 

</h1>


<p style="text-align: center; margin-top: 30px; font-size: 30px; color: #343A40"> 

	Votre message a été reçu, on vous contactera sous peu !

</p>



<?php


/* Traitement des données envoyées dans le formulaire */


/* Definiton des conditions de Traitement des données */ 

if ( (!empty($_GET['nom'])) AND (!empty($_GET['email'])) AND (!empty($_GET['message'])) )

{

	/* Je definis d'abord le nom du fichier qui reçois le message : l'emai du client + _Contact + .txt */
	$nom_fichier_mess = 'message_rec/' . $_GET['email'].'_Contact.txt';

	/* Je definis le contenu du message qui va être enregistré dans le fichier */
	$message_env = $_GET['nom'] . ' : ' . $_GET['message'] . ' .. .. .. .. .. .. .. .. .. / .. .. .. .. .. .. .. .. .. .. ';

	/* J'ouvre mon fichier avec droit a+ : J'ouvre le fichier en lecture et écriture. Si le fichier n'existe pas, il est créé automatiquement. */
	$monfichier = fopen($nom_fichier_mess, 'a+');

	/* Je place mon curseur pour écrire dans le fichier */
	fseek($monfichier, 0);

	/* J'ecris mon message dans le fichier text du client */
	fputs($monfichier, $message_env);

	/* Enfin je ferme mon fichier */
	fclose($monfichier);
	
 
}


?>






