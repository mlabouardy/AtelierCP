
<!DOCTYPE html>
<html> 
        <head>
		<meta charset="utf-8" /> 
		
		<title> Ajouter un Atelier </title>
        </head>
        <body >
		
        <h1> veuillez ajoutez un atelier  !</h1>
        <h2>Entrez les données demandées :</h2>
        <form name="inscription" method="post" action="add.php">
            le nom de l'atelier : <input type="text" name="nom"/> <br/>
            la matiere  : <input type="text" name="matiere"/> <br/> 
            le lieu : <input type="text" name="lieu"/><br/>
			le labo : <input type="text" name="labo"/><br/>
			l'animateur : <input type="text" name="animateur"/><br/>
			description : <input type="text" name="desc"/><br/>
			horaires : <input type="time" name="horaires"/><br/>
			
            <input type="submit" name="valider" value="AJOUTEZ"/>
        </form>
		
		 <?php
		 include 'config/Connect.php' ;
        if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $nom=$_POST['nom'];
            $matiere=$_POST['matiere'];
            $lieu=$_POST['lieu'];
			$labo=$_POST['labo'];
			$animateur=$_POST['animateur'];
			$description=$_POST['desc'];
			$horaires= time;
			
 
            //On prépare la commande sql d'insertion
            $sql = 'INSERT INTO Atelier VALUES("","'.$nom.'","'.$matiere.'","'.$lieu.'","'.$labo.'","'.$animateur.'","'.$desc.'","'.$horaires.'")'; 
 
            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
 
            // on ferme la connexion
            mysql_close();
        }
        ?>
		
	 	
	</body>
</html>
