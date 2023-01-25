<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bdd</title>
    
</head>
<body>

<?php 
try {
   $ipserver="192.168.65.12";
   $nomBase="medecin";
   $loginPrivilege ="root";
   $passPrivilege="root";
   $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege); 

?>
    <?php
   $requete= "select * from Medecin";
   $resultat=$GLOBALS["pdo"]->query($requete);
 
   $tabMedecin = $resultat->fetchALL();
  foreach ($tabMedecin as $Medecin){
    
  }

  $requete= "select * from Patient";
  $resultat=$GLOBALS["pdo"]->query($requete);

  $tabPatient = $resultat->fetchALL();
  foreach ($tabPatient as $Patient){
    
  }
   
} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}
?>
    <form action="" method="post">
    <label for="medecin">Medecin : <label>    
        <select name="medecin">
            <?php
                foreach ($tabMedecin as $Medecin) {
                    ?>
            <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?></option>
            <?php
                }
            ?>
        </select>
    </form>

    <form action="" method="post">
    <label for="patient">Patient : <label>    
        <select name="patient">
            <?php
                foreach ($tabPatient as $Patient) {
                    ?>
            <option value="<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?></option>
            <?php
                }
            ?>
        </select>
    </form>
    <br>
    <label for="appt">choisir l'heure:</label>

<input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>
    <br>
    <input type="button" value="Envoyer">
</body>
</html> 