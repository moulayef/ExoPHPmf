<form action="page11.php" method="POST">
<div>
    <input type="text" id="m" name="Mat" placeholder="votre matricule ?" required/>
    <label for="m"> MATRICULE </label>
    <input type="text" id="n" name="nom" placeholder="votre NOM ?" required/>
    <label for="n"> NOM </label>
    <input type="text" id="p" name="prenom" placeholder="votre PRENOM ?" required/>
    <label for="p"> PRENOM </label>
    <br><br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</form>


<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mat=$_POST['Mat'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
 
$sql="INSERT  INTO  Employés(nomE, prenomE , MatE) VALUES ($nom, $prenom,$mat)";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
      $requete="SELECT nomE, prenomE , MatE FROM Employés";
      echo"
    <table border = 1px cellspacing= 0 style='margin-top: 50px; margin-bottom: 50px;'>
      <thead>
        <tr>  
             <th style='padding: 7px>nom Employé</th>
             <th style='padding: 7px>prenom Employé</th>
             <th style='padding: 7px>matricule Employé</th>
        </tr>   
      </thead>";
      while ($res = mysqli_fetch_array($requete)){
          echo "<tbody>
                <tr>
                <td style='padding: 7px;'>{$res["nomE"]}</td>
                <td style='padding: 7px;'> {$res["prenomE"]}</td>
                <td style='padding: 7px;'>{$res["MatE"]}</td>
                </tr>
                </tbody>
               ";
      };
      echo" </table>";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
};