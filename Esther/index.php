<?php include("inc/header.inc.php"); ?>

<?php


/* Connection avec la base de donnée : cv. */
$pdo = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));





/* Conditions d'envoie des données dans la base de donnée*/


$pdo = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));




if ( (!empty($_POST['nom'])) ) {
    

    $nom = $_POST['nom'];


$result = $pdo->exec("UPDATE profil SET nom = '$nom' WHERE id = 97;");


}






if ( (!empty($_POST['prenom'])) ) {
    

    $prenom = $_POST['prenom'];


$result = $pdo->exec("UPDATE profil SET prenom = '$prenom' WHERE id = 97;");


}





if ( (!empty($_POST['date_naissance'])) ) {
    

    $date_naissance = $_POST['date_naissance'];


$result = $pdo->exec("UPDATE profil SET date_naissance = '$date_naissance' WHERE id = 97;");


}





if ( (!empty($_POST['telephone'])) ) {
    

    $telephone = $_POST['telephone'];


$result = $pdo->exec("UPDATE profil SET telephone = '$telephone' WHERE id = 97;");


}





if ( (!empty($_POST['adresse'])) ) {
    

    $adresse = $_POST['adresse'];


$result = $pdo->exec("UPDATE profil SET adresse = '$adresse' WHERE id = 97;");


}




if ( (!empty($_POST['email'])) ) {
    

    $email = $_POST['email'];


$result = $pdo->exec("UPDATE profil SET email = '$email' WHERE id = 97;");


}







if ( (!empty($_POST['bio'])) ) {
    

    $bio = $_POST['bio'];


$result = $pdo->exec("UPDATE profil SET bio = '$bio' WHERE id = 97;");


}





if ( (!empty($_POST['imgpath'])) ) {
    

    $imgpath = 'images/'.$_POST['imgpath'].'.png';


$result = $pdo->exec("UPDATE profil SET imgpath = '$imgpath' WHERE id = 97;");


}







?>
        <!-- Block à propos -->
        <section class="about2">



                <!-- Definition de l'image de profil definie dans la base de donnée -->
                <div class="img-about2">
                        <?php 

                        $result = $pdo->query("SELECT * FROM profil");
                        while($profil = $result->fetch(PDO::FETCH_OBJ)) {
                                echo '<img src="'.$profil->imgpath.'">';
                        }

                        ?>
                </div>




                <!-- Le Block de Text A PROPOS -->
                <div class="text-about2">



                    <!-- Affichage du NOM, PRENOM, défini dans la base de donnée -->
                    <h1>
                        

                        <?php 

                        $result = $pdo->query("SELECT * FROM profil");
                        while($profil = $result->fetch(PDO::FETCH_OBJ)) {
                                echo '<span style="color:black;font-size:50px;text-transform: uppercase;">'.$profil->prenom.'</span>'. " " . '<span style="color:#458BC7;font-size:50px;text-transform: uppercase;">'.$profil->nom.'</span>';
                        }

                        ?>

                    </h1>




                    <!-- Affichage DATE DE NAISSANCE, EMAIL défini dans la base de donnée -->
                    <p>
                        <?php 

                        $result = $pdo->query("SELECT * FROM profil");
                        while($profil = $result->fetch(PDO::FETCH_OBJ)) {
                                echo '<span style="color:#458BC7;font-size:20px;text-transform: uppercase;">'.$profil->date_naissance.'</span>'. ' ♦ ' . '<span style="color:#343A40;font-size:20px;text-transform: uppercase;">'.$profil->email.'</span>';
                        }   

                        ?>                         

                    </p>


                    <!-- Affichage ADRESSE, PHONE défini dans la base de donnée -->
                    <p>
                        <?php 

                        $result = $pdo->query("SELECT * FROM profil");
                        while($profil = $result->fetch(PDO::FETCH_OBJ)) {
                                echo '<span style="color:#343A40;font-size:20px;text-transform: uppercase;">'.$profil->adresse.'</span>'. ' ♦ ' . '<span style="color:#458BC7;font-size:20px;text-transform: uppercase;">'.$profil->telephone.'</span>';
                        }   

                        ?>                         

                    </p>


                    <!-- Affichage BIO rédigé dans la base de donnée -->
                    <p>
                        <?php 

                        $result = $pdo->query("SELECT * FROM profil");
                        while($profil = $result->fetch(PDO::FETCH_OBJ)) {
                                echo '<span style="color:#868E96;font-size:18px;">'.$profil->bio.'</span>';
                        }   

                        ?>
                    </p>
                </div>


        </section>



