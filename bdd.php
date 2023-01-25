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
    echo "Coucou"?>
    <br><br><br><br><br><br>
<br><br>
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
   
} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}
?>

    <form action="" method="post">
        <select>
            <?php
                foreach ($tabMedecin as $Medecin) {
                    ?>
            <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?>s</option>
            <?php
                }
            ?>
        </select>
    </form>
</body>
</html> 