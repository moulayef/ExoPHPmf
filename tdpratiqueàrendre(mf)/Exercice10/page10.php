<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page4</title>
</head>
<body style="font-size:25px">
    <form action="page4a.php" method="POST" style="margin-top: 150px">
        <label for="matricule">Identifiant</label> <input type="text" required  style="background-color: yellow" name="matricule"><br><br>
        <label for="Nom">Nom</label><input type="text" required style="margin-left:50px; background-color: green" name="Nom"><br><br>
        <label for="Prenom">Prenom</label><input type="text" required style="margin-left:20px" name="Prenom"><br><br>
        <label for="sexe">Sexe</label> <label for="M" style="font-size: 15px; margin-left: 40px;">Masculin</label><input type="radio" name="Sexe"><label for="m" style="font-size: 15px;">Feminin</label><input type="radio" name="Sexe" checked><br><br>
        <label for="Adresse">District</label><input type="text" required style="margin-left:15px;" name="Adresse"><br><br>
        <label for="Service">Milieu Porfessionnel</label>
        <select name="Service" required style="margin-left:15px;">
            <option value="">--choisir--</option>
            <option value="assurance">IT geek</option>
            <option value="Banque">Banker</option>
            <option value="Admimistration">Government</option>
            <option value="Fonction_publique">Law</option>
            <option value="Douanes">Douanes</option>
        </select><br><br>
        <label for="Fonction">Fonction</label>
        <select name="Fonction" required>
            <option value="">--choisir--</option>
            <option value="Enseignant">Enseignant</option>
            <option value="PDG">Directeur Générale</option>
            <option value="conseiller">UML Teacher</option>
            <option value="DirCab">Ministre des cabinet</option>
            <option value="Secretaire">Secretaire</option>
            <option value="Freelance">Freelance</option>
            <option value=technicien>technicien réseau</option>
        </select><br><br>
        <input type="submit" value="Valider" name="Valider" ><input type="submit" value="Reinitialiser" name="Reinitialiser" style="margin-left:30px;"><br><br>
    </form>
    <?php 
        if (isset($_POST["Valider"])) {
            if( $_POST["Sexe"]=="M"){ $genre="masculin";}else{ $genre= "Feminin";}
            $nom=$_POST["Nom"];
            $prenom=$_POST["Prenom"];
            $mat=$_POST["matricule"];
            $ad=$_POST["Adresse"];
            $service=$_POST["Service"];
            $fonction=$_POST["Fonction"];
            $bd=new PDO("mysql: host=localhost dbname=Employer","root","");
            $t=$bd->query("INSERT INTO Employer VALUES($mat,$nom,$prenom,$genre,$ad,$service,$fonction)");
        }else if (isset($_POST["Reinitialiser"])) {
            header("Refresh:0");
        }
    $bd=new PDO("mysql: host=localhost dbname=Employer","root","");
    $ex=$bd->query("SELECT * From Employer");
    while ($donnee=$ex-> fetch()) {
           echo $donnee["matricule"], $donnee["nom"], $donnee["prenom"], $donnee["adresse"], $donnee["genre"], $donnee["service"], $donnee["fonction"];
       }   
    ?>
</body>
</html>

