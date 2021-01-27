<!DOCTYPE HTML>
<html>
<head>
     <meta charset="UTF-8">
</head>

<body>
<form action="page2.php" method="get">
</br>
    Nom : <input type="text" name="name"> <br> <br>
    
    <input type="submit">
</form> 
<br>
<?php  echo $_GET["name"] ?>



</body>
</html>


