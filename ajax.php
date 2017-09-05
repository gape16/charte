<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
include('start.php');

try {
	$bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
}


if(isset($_POST['num'])){
	$numero = $_POST['num'];
	$query_test_num=$bdd->query("SELECT * FROM client where num_client = '$numero'");
	$nb_client = $query_test_num->rowCount();

	if($nb_client>0){
	// mettre ici le chargement du client
	}else{
	// quand on ne trouve pas de client au clique pour commencer on le créé
		$webdesigner=explode(" ",$_COOKIE["webdesigner"]);
		$query_id_webdeisgner=$bdd->query("SELECT * FROM webdesigner where nom like '%".$webdesigner[0]."%'")->fetch();
		$legraph = $query_id_webdeisgner['id_graph'];
		$query_ins_client=$bdd->query("INSERT INTO client (num_client,fini,webdesigner) VALUES ('$numero','0','$legraph')");
	}
}
if (isset($_POST['reponses'])) {
	$id_client=$_POST['id_client'];
	$comments=$_POST['comments'];
	foreach ($_POST['reponses'] as $key => $value) {
		if($value !=""){
			// test si la ligne de la question pour ce client existe
			$query_test=$bdd->query("SELECT * FROM checked where id_client='$id_client' and id_question='$key'");
			$query_test_com=$bdd->query("SELECT * FROM commentaires where id_client='$id_client' and id_categorie='$id_categorie'");
			$nb_test=$query_test->rowCount();
			$nb_test_com=$query_test_com->rowCount();
			//si il y a déjà une ligne on la remplace sinon on la créée
			if($nb_test>0){
				$query_replace=$bdd->query("UPDATE checked SET reponse='$value' WHERE id_client='$id_client' and id_question='$key'");
			}else{
				$query_insert=$bdd->query("INSERT INTO checked (id_client, id_question, reponse, reponse_control) VALUES ('$id_client','$key','$value','')");
			}
			if ($nb_test_com > 0) {
				$query_replace_com=$bdd->query("UPDATE commentaires SET commentaire='$comments' WHERE id_client='$id_client' and id_categorie='$id_categorie'");
			}else{
				$query_insert_com=$bdd->query("INSERT INTO commentaires (id_client, id_categorie, commentaires) VALUES ('$id_client','$key','$value','')");
			}
			// echo "l'id client n°".$key." est égal à ".$value;
			//tu es sûr
			// de ça
		}
	}
}

?>