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
		$webdesigner=explode(" ",$_COOKIE["webdesigner"]);
		$query_id_webdeisgner=$bdd->query("SELECT * FROM webdesigner where nom like '%".$webdesigner[0]."%'")->fetch();
		if($query_id_webdeisgner['admin']==1){
			$query_categorie=$bdd->query("SELECT nom_categorie FROM categorie")->fetchAll();
			$query_liste_0=$bdd->query("SELECT * FROM liste where categorie = 0");
			$query_liste_1=$bdd->query("SELECT * FROM liste where categorie = 1");
			$query_liste_2=$bdd->query("SELECT * FROM liste where categorie = 2");
			
			foreach ($query_categorie as $key_categorie => $value_categorie) {?>
			<div role="tabpanel" class="tab-pane" id="<?php echo $key_categorie;?>">
				<div class="single_service_tab">
					<section id="choose" class="choose">
						<div class="row">
							<div class="main_choose sections" style="padding:0;display: flex;">
								<div class="col-sm-6">
									<div class="head_title">
										<h3><?php echo $value_categorie['nom_categorie'];?></h3>
										<div class="separator"></div>
									</div>
									<div class="single_choose">
										<div class="single_choose_acording">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<?php foreach (${"query_liste_".$key_categorie} as $key => $value) {
													$questn=$value['id_liste'];
													$query_que=$bdd->query("SELECT reponse FROM checked where id_client = '$numero' and id_question='$questn'")->fetch();
													$query_co=$bdd->query("SELECT commentaire FROM commentaires where id_client = '$numero' and id_categorie='$key_categorie'")->fetch();

													?>
													<div class="panel panel-default cat_<?php echo $key_categorie;?>">
														<div class="panel-heading" role="tab" id="heading<?php echo $key;?>">
															<h4 class="panel-title">
																<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key_categorie;?><?php echo $key;?>" aria-expanded="false" aria-controls="collapse<?php echo $key_categorie;?><?php echo $key;?>" class="collapsed">
																	<i class="fa <?php echo $value['icone'];?>"></i> <?php echo utf8_encode($value['titre']);?> 
																</a>
																<input type="checkbox" <?php if($query_que['reponse']==1){ echo "checked"; }?> class="question_<?php echo $value['id_liste'];?>">
															</h4>
														</div>
														<div id="collapse<?php echo $key_categorie;?><?php echo $key;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $key;?>" aria-expanded="false" style="height: auto;">
															<div class="panel-body">
																<?php echo utf8_encode($value['description']);?> <br>
																<a href="<?php echo utf8_encode($value['lien_tuto']);?>">En savoir plus...</a><br><br>
																<textarea class="reponse_<?php echo $value['id_liste'];?>" style="width: 100%;min-height:100px;" placeholder="Mettre un commentaire pour le graph"></textarea>
															</div>
														</div>
													</div>
													<?php } ?>
													<textarea name="" id="" style="width: 100%;min-height:100px;" class="commentaire_<?php echo $key_categorie;?>" placeholder="commentaires"><?php echo $query_co['commentaire'];?></textarea><br><br>
													<a class="btn btn-primary retour_<?php echo $key_categorie;?>" style="margin-top: -3px;width: 49%;background: #a08e7f;border-color:#a08e7f;">Retour</a>
													<?php if($value_categorie == end($query_categorie)){?>
													<a class="btn btn-primary fin_<?php echo $key_categorie;?>" style="margin-top: -3px;width: 49%;">Fin</a>
													<?php }else{?>
													<a class="btn btn-primary suivant_<?php echo $key_categorie;?>" style="margin-top: -3px;width: 49%;">Suivant</a>
													<?php }?>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6" style="display: flex;">
										<div class="single_choose" style="margin: auto;">
											<div class="single_choose_img" style="display: flex;">
												<img src="img/17-8-2016-945-2.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<?php }
			}else{
				echo "ono";
			}
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
		$comments=utf8_decode($_POST['comments']);
		$id_categorie=$_POST['id_categorie'];
		foreach ($_POST['reponses'] as $key => $value) {
			$reponse_contr=utf8_decode($_POST['reponse_cont'][$key]);
			if($value !=""){
// test si la ligne de la question pour ce client existe
				$query_test=$bdd->query("SELECT * FROM checked where id_client='$id_client' and id_question='$key'");
				$query_test_com=$bdd->query("SELECT * FROM commentaires where id_client='$id_client' and id_categorie='$id_categorie'");
				$nb_test=$query_test->rowCount();
				$nb_test_com=$query_test_com->rowCount();
//si il y a déjà une ligne on la remplace sinon on la créée
				if($nb_test>0){
					$stm = $bdd->prepare("UPDATE checked SET reponse=?, reponse_control=? WHERE id_client=? and id_question=?");
					$stm->bindParam(1, $value);
					$stm->bindParam(2, $reponse_contr);
					$stm->bindParam(3, $id_client);
					$stm->bindParam(4, $key);
					$stm->execute();
				}else{
					$stm = $bdd->prepare("INSERT INTO checked (id_client, id_question, reponse, reponse_control) VALUES (?,?,?,?)");
					$stm->bindParam(1, $id_client);
					$stm->bindParam(2, $key);
					$stm->bindParam(3, $value);
					$stm->bindParam(4, $reponse_control);
					$stm->execute();
				}
				if ($nb_test_com > 0) {
// $query_replace_com=$bdd->query("UPDATE commentaires SET commentaire='$comments' WHERE id_client='$id_client' and id_categorie='$id_categorie'");
					$stmt = $bdd->prepare("UPDATE commentaires SET commentaire=? WHERE id_client=? and id_categorie=?");
					$stmt->bindParam(1, $comments);
					$stmt->bindParam(2, $id_client);
					$stmt->bindParam(3, $id_categorie);
					$stmt->execute();
				}else{
// $query_insert_com=$bdd->query("INSERT INTO commentaires (id_client, id_categorie, commentaire) VALUES ('$id_client','$id_categorie','$comments')");
					$stmt = $bdd->prepare("INSERT INTO commentaires (id_client, id_categorie, commentaire) VALUES (?,?,?)");
					$stmt->bindParam(1, $id_client);
					$stmt->bindParam(2, $id_categorie);
					$stmt->bindParam(3, $$comments);
					$stmt->execute();
				}
			}
		}
	}

	if (isset($_POST['fin'])) {
		$id_client=$_POST['id_client'];
		$comments=utf8_decode($_POST['comments']);
		$id_categorie=$_POST['id_categorie'];
		foreach ($_POST['reponses'] as $key => $value) {
			if($value !=""){
// test si la ligne de la question pour ce client existe
				$query_test=$bdd->query("SELECT * FROM checked where id_client='$id_client' and id_question='$key'");
				$query_test_com=$bdd->query("SELECT * FROM commentaires where id_client='$id_client' and id_categorie='$id_categorie'");
				$nb_test=$query_test->rowCount();
				$nb_test_com=$query_test_com->rowCount();
// echo $nb_test_com;
				$query_fin=$bdd->query("UPDATE client SET fini='1' where num_client='$id_client'");
//si il y a déjà une ligne on la remplace sinon on la créée
				if($nb_test>0){
					$query_replace=$bdd->query("UPDATE checked SET reponse='$value' WHERE id_client='$id_client' and id_question='$key'");
				}else{
					$query_insert=$bdd->query("INSERT INTO checked (id_client, id_question, reponse, reponse_control) VALUES ('$id_client','$key','$value','')");
				}
				if ($nb_test_com > 0) {
					$stmt = $bdd->prepare("UPDATE commentaires SET commentaire=? WHERE id_client=? and id_categorie=?");
					$stmt->bindParam(1, $comments);
					$stmt->bindParam(2, $id_client);
					$stmt->bindParam(3, $id_categorie);
					$stmt->execute();
				}else{
					$stmt = $bdd->prepare("INSERT INTO commentaires (id_client, id_categorie, commentaire) VALUES (?,?,?)");
					$stmt->bindParam(1, $id_client);
					$stmt->bindParam(2, $id_categorie);
					$stmt->bindParam(3, $comments);
					$stmt->execute();
				}
			}
		}
	}

	?>