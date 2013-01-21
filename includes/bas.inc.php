<?php
 
	$connecte = false;
	if (isset($_COOKIE['sid'])){
		$sql="SELECT * FROM utilisateur WHERE  sid='".$_COOKIE['sid']."'";
		$resultat = mysql_query($sql);
		$util = mysql_fetch_array($resultat);
		
		if(mysql_num_rows($resultat)){
			$connecte = true;
		}
	
	}//récupération du champ SID pour pouvoir connecter l'utilisateur.
?>

 </div>
        <nav class="span4">
		  <?php if (isset($connecte)){
					if (isset($util)){
						echo "<h4> L'adresse '".$util['email']."' est connectée.</h4>";
					}
				}// message pour indiqué que l'utilisateur est bien connecté.
		
		  ?>
		  <!-- Début de la partie Menu -->
          <h2>Menu</h2>
			<form action="index.php" method="get">
				<!-- Début de la fonction recherche -->
				<label for="rech">Recherche : </label>
				<input type="text" name ="r" id="rech" placeholder = "Informatique, LINUX" class="span3" <?php if($rech) echo "value=".$rech; ?>>&nbsp;
				<input type="submit" value="OK" class="btn btn-primary">
				<!-- Fin de la fonction recherche -->
			</form>
            <ul>
				<!-- Début de la partie Liens internes -->
                <li><a href="index.php">Accueil</a></li>
                <li><a href="article.php">Rédiger un article</a></li>
                <li><a href="connexion.php">Connexion</a></li>
				<!-- Fin de la partie Liens interne -->
				<!-- Début de la partie tags -->
				<h2>Tags</h2>
					<?php $sql = "SELECT * FROM tags";
						  $result = mysql_query($sql); 
						  $tag = array();
						  while($data = mysql_fetch_array($result)){
						  $tag = $data['nom'];
					?>
				<li><a href = "index.php?t=<?php echo $tag; ?>"><?php echo $tag; ?></a></li>		
					<?php } ?>	
				<!-- Fin de la partie tags -->
			<!-- Fin de la partie Menu -->	
            </ul>
            
        </nav>
  </div>
        
</div>
	<!--Début des mentions légales -->
     <footer>
        <p>&copy; Nilsine & ULCO 2012</p>
    </footer>
	<!-- Fin des mentions légales -->

</div>
		
		<script type="text/javascript">
		//Script JS pour les notifications
			$(".alert").click(function () {
			$(this).slideUp();
	  		});
	    </script>
  </body>
</html>