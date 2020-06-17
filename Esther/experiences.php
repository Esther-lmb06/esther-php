<?php include("inc/header.inc.php"); ?>

<?php


/* Connection avec la base de donnée : cv. */

$pdo = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



/* AJOUT EXPERIENCE DANS LA BASE DE DONNEE */

if ( (!empty($_POST['entreprise'])) AND (!empty($_POST['poste'])) AND (!empty($_POST['date_debut'])) AND (!empty($_POST['date_fin'])) AND (!empty($_POST['description']))) {
    

    $entreprise = $_POST['entreprise'];
    $poste = $_POST['poste'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $description = $_POST['description'];
    $id = $_POST['date_debut'] . $_POST['poste'] . $_POST['entreprise'] . $_POST['date_fin'];



$result = $pdo->exec("INSERT INTO experiences (id, entreprise, poste, date_debut, date_fin, description) VALUES ('$id',' $entreprise', '$poste', '$date_debut', '$date_fin', '$description');");


}




/* SUPPRESSION EXPERIENCES*/

if ( (!empty($_GET['exp_supp'])) ) {
    

    $exp_supp = $_GET['exp_supp'];


$result = $pdo->exec("DELETE FROM experiences WHERE id = '$exp_supp';");


}



?>

<div>
        <h1 style="color:#343A40;font-size:25px;text-transform: uppercase; text-align: center; margin-bottom: 50px; margin-top: 30px;">
            Mes expériences !
        </h1>
</div>

<div style="margin-left: 20px; margin-bottom: 2px">


    

        <?php



        // Selection multiple des expériences dans la base de donnée !


        $result = $pdo->query("SELECT * FROM experiences ORDER BY id DESC");
        while($experience = $result->fetch(PDO::FETCH_OBJ)) { 

        ?>

               
               <div>

                        <div>

                                <h5 style="color:#458BC7;font-size:25px;text-transform: uppercase;">
                                    <?php 
                                        echo $experience->poste;
                                    ?>

                                </h5>
                                


                                <h5 style="color:#343A40;font-size:15px;text-transform: uppercase;">
                                    <?php 
                                        echo $experience->entreprise;
                                    ?>

                                </h5>


                                <p style="color:#458BC7;"> 
                                    <?php 
                                        echo $experience->date_debut . " - "; 
                                    ?> 
                                    <?php 
                                        echo $experience->date_fin ; 
                                    ?> 
                                </p>

                                <p> 
                                    <?php 
                                        echo substr($experience->description, 0, 1500); 
                                    ?> 
                                </p>


                                  <!-- BOUTON POUR SUPPRIMER DES EXPERIENCES -->


                                <div style="margin-left: 1100PX; margin-bottom: 200px">
                                    <?php



                                     echo '

                                    <a href="experiences.php?exp_supp=' . $experience->id . '">


                                    ';

                                    ?>

                                        <div class="button_contact" style="align: center">
                                            <button type="submit">SUPPRIMER</button>
                                        </div>
                                    </a>
                                </div>


                        </div>

                </div>


        <?php }


        ?>

</div>



