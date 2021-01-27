<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
$matricule=$_POST['Matricule'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
// champ select 
echo"
<form action='page14.php' method='POST'>
<select name='service'>";
    
$requete="SELECT numS , nomS , Categorie FROM Service";
while($select= mysqli_fetch_array($requete)){
    echo"<option>{$select['numS']}</option>";
};
echo"</select>
</form>";

// requete sql 
$sql="SELECT E.nomE, E.prenomE , E.MatE FROM Employés E , Service S
WHERE S.numS= {$_POST['service']}
 Group by S.numS";
if (mysqli_query($conn, $sql)) {
      echo "Employé existe ";
// affichage dans un tableau 
      echo"
    <table border = 1px cellspacing= 0 style='margin-top: 50px; margin-bottom: 50px;'>
      <thead>
        <tr>  
             <th style='padding: 7px;'>nom Employé</th>
             <th style='padding: 7px;'>prenom Employé</th>
             <th style='padding: 7px;'>matricule Employé</th>
        </tr>   
      </thead>";
      while ($res = mysqli_fetch_array($sql)){
          echo "<tbody>
                <tr>
                <td style='padding: 7px;'>{$res['nomE']}</td>
                <td style='padding: 7px;'> {$res['prenomE']}</td>
                <td style='padding: 7px;'>{$res['MatE']}</td>
                </tr>
                </tbody>
                ";
      };
      echo"</table>";
}else{
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
};