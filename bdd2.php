<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASE DE DONNE</title>
    
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
   $requete1= "select * from Patient";
   $resultat=$GLOBALS["pdo"]->query($requete);
   $resultat1=$GLOBALS["pdo"]->query($requete1);
 $tabMedecin = $resultat->fetchALL();
 $tabPatient = $resultat1->fetchALL();
 ?>
 <form action=""method="post">

 <label for="idMedecin">Medecin:</label>
 <select name="idMedecin">
    <?php
foreach ($tabMedecin as $Medecin){
    ?>
          <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?></option>
          <?php
  }?>
 </select><br>
<label for="idPatient">Patient:</label>
 <select name="idPatient">
<?php foreach ($tabPatient as $Patient){
    ?>
          <option value="<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?></option>
          <?php
  }?>
 </select><br>
 <label for="time">TIME:</label>

<input type="datetime-local" id="time" name="time"><br>
<input type="submit" value="Send Request" />
</form>
<?php
if (isset($_POST["idMedecin"])&&($_POST["idPatient"])) {
    echo "id du medecin :". $_POST["idMedecin"];  
    echo "<br>";
    echo "id du patient :". $_POST["idPatient"];  
    
    $requete2 = "INSERT INTO `Consultation`( `Dateheure`, `idMedecin`, `idPatient`) VALUES ('" . $_POST['time'] . "','" . $_POST['idMedecin'] . "','" . $_POST['idPatient'] . "')";
    $resultat2 = $GLOBALS["pdo"]->query($requete2);
} 


} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}
?>
</body>
</html>