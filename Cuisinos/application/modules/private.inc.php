<?php
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['login']))
	echo "<script>
			  alert(\"Vous n'êtes pas authentifié. Connectez vous pour accéder à cette page.\");
			  document.location.href = \"index.php?page=accueil\";
		  </script>";
?>