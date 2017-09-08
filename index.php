<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
include("start.php");

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$query_list_webdesigner= $bdd->query("SELECT nom, prenom FROM webdesigner order by nom");

$query_categorie=$bdd->query("SELECT nom_categorie FROM categorie")->fetchAll();

$query_liste_0=$bdd->query("SELECT * FROM liste where categorie = 0");
$query_liste_1=$bdd->query("SELECT * FROM liste where categorie = 1");
$query_liste_2=$bdd->query("SELECT * FROM liste where categorie = 2");

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Charte site Privilège</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="200">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <div class='preloader'>
                <div class='loaded'>&nbsp;</div>
            </div>

            <div class="culmn">
                <header id="main_menu" class="header navbar-fixed-top">            
                    <div class="main_menu_bg">
                        <div class="container">
                            <div class="row">
                                <div class="nave_menu">
                                    <nav class="navbar navbar-default">
                                        <div class="container-fluid">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#home">
                                                    <img src="img/solocal_ms_rvb.png"/>
                                                </a>
                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->



                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                                <ul class="nav navbar-nav navbar-right">
                                                    <li><a href="#home">Accueil</a></li>
                                                    <li><a href="#service">Formulaire</a></li>
                                                    <li><a href="#team">TUTOS</a></li>
                                                    <li><a href="#contact">AIDE</a></li>
                                                    <li><a class="nom_webdesigner" style="color:#4c4c4c;text-transform: none;"></a></li>
                                                    <li><a class="deco" style="color:#4c4c4c;text-transform: none;">Deco</a></li>
                                                </ul>


                                            </div>

                                        </div>
                                    </nav>
                                </div>	
                            </div>

                        </div>

                    </div>
                </header> <!--End of header -->





                <section id="home" class="home">
                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="main_home_slider text-center">
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                                <h1>GRILLE QUALITE PRIVILEGE</h1>
                                                <p>La qualité reste notre priorité</p>
                                                <div class="home_btn">
                                                    <a href="https://bootstrapthemes.co" class="btn btn-primary">Allez au formulaire</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                                <h1>DES TUTOS RIEN QUE POUR VOUS</h1>
                                                <p>Afin de ne pas resté bloqué sur un point</p>
                                                <div class="home_btn">
                                                    <a href="https://bootstrapthemes.co" class="btn btn-primary">Allez aux tutos</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <section id="service" class="service" style="padding-bottom: 100px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="main_service_area">
                                    <div class="main_service_content"> 
                                        <div class="service_tabe">
                                            <!-- Nav tabs -->
                                            <ul class="service_tabe_menu nav nav-tabs" role="tablist" style="text-transform: uppercase;">
                                                <li role="presentation" class="active"><a href="#webdesign" aria-controls="webdesign" role="tab" data-toggle="tab" class="active"><i class="fa fa-comment-o"></i> <br />INTRODUCTION</a></li>
                                                <?php 
                                                $icons=array('tint','mobile','tachometer');
                                                foreach ($query_categorie as $key_cat => $value_cat) {?>
                                                <li role="presentation"><a><i class="fa fa-<?php echo $icons[$key_cat];?>"></i> <br /><?php echo $value_cat['nom_categorie']; ?></a></li>
                                                <?php }?>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="webdesign">
                                                    <div class="single_service_tab">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="single_tab_content">
                                                                    <div class="head_title">
                                                                        <h3>Introduction</h3>
                                                                        <div class="separator"></div>
                                                                    </div>
                                                                    <p>Ce formulaire va vous permettre de checker l'ensemble des points de la grille qualité de façon stratégique et de manière à ne négliger aucune partie. Il se compose entre 3 rubriques présentes au dessus (BASE WEB, RESPONSIVE, SEO & TESTS) et dans celles-ci vous allez devoir cocher chacun des points. Un test sera effectué pour que vous ne puissiez rien oublier. C'est parti !

                                                                        Commencez par entrer le numéro client:<br></p>
                                                                        <!-- <div class="form-group"> -->
                                                                        <input type="text" class="form-control num_client" placeholder="Numéro client" style="height: 50px;width: 49%;margin-top: 5px;">
                                                                        <!-- </div> -->
                                                                        <a class="btn btn-primary commencer" role="tab" data-toggle="tab" aria-controls="0" style="margin-top: -3px;width: 49%;">Commencer</a>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="single_tab_img">
                                                                        <img src="img/stab1.png" alt="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php foreach ($query_categorie as $key_categorie => $value_categorie) {?>
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
                                                                                        <?php foreach (${"query_liste_".$key_categorie} as $key => $value) {?>
                                                                                        <div class="panel panel-default cat_<?php echo $key_categorie;?>">
                                                                                            <div class="panel-heading" role="tab" id="heading<?php echo $key;?>">
                                                                                                <h4 class="panel-title">
                                                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key;?>" aria-expanded="false" aria-controls="collapse<?php echo $key;?>" class="collapsed">
                                                                                                        <i class="fa <?php echo $value['icone'];?>"></i> <?php echo utf8_encode($value['titre']);?> 
                                                                                                    </a>
                                                                                                    <input type="checkbox" class="question_<?php echo $value['id_liste'];?>">
                                                                                                </h4>
                                                                                            </div>
                                                                                            <div id="collapse<?php echo $key;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $key;?>" aria-expanded="false" style="height: auto;">
                                                                                                <div class="panel-body">
                                                                                                    <?php echo utf8_encode($value['description']);?> <br>
                                                                                                    <a href="<?php echo utf8_encode($value['lien_tuto']);?>">En savoir plus...</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php } ?>
                                                                                        <textarea name="" id="" style="width: 100%;min-height:100px;" class="commentaire_<?php echo $key_categorie;?>" placeholder="commentaires"></textarea><br><br>
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
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

            <!-- <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_features_area sections">
                                <div class="head_title">
                                    <h3>FEATURED WORK</h3>
                                    <div class="separator"></div>
                                </div>
                                <div class="row">
                                    <div class="main_features_content">

                                        <div class="col-sm-6">

                                            <div class="single_features_slide">
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/featureslid1.jpg" alt="" />
                                                </div>
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/featureslid1.jpg" alt="" />
                                                </div>
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/featureslid1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single_features_text">
                                                <h4>HAND WITH A WATCH</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    when an unknown printer took a galley of type and scrambled </p>

                                                <ul>
                                                    <li><span>Client:</span> Dadit Lorm</li>
                                                    <li><span>Deivered:</span> Sunday, 15 August, 2015</li>
                                                    <li><span>Tags:</span> Hand, Watch, Black, Tree</li>
                                                </ul>

                                                <a href="" class="btn">LAUNCH NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <!-- <section id="video" class="video text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="main_video">
                                <div class="col-sm-12">
                                    <div class="icon">
                                        <a href="https://www.youtube.com/embed/_l6CQRHIGyg" class="youtube-media"><img src="assets/images/play.png" alt="play-icon" /></a>
                                        <h3>WATCH OUR INTRO</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <!-- <section id="about" class="about">
                <div class="container">
                    <div class="row">

                        <div class="main_about_area sections">
                            <div class="col-sm-12">

                                <div class="main_about_content">
                                    <div class="row">

                                        <div class="col-sm-7 wow fadeInRight" data-wow-duration="700ms">
                                            <div class="single_about_right_content">
                                                <div class="head_title">
                                                    <h3>ABOUT LOGIC</h3>
                                                    <div class="separator"></div>
                                                </div>

                                                <div class="single_about">
                                                    <div class="single_ab_icon">
                                                        <div class="ab_border_right"></div>
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="single_ab_text">
                                                        <h3>RESPONSIVE DESIGN</h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ipsum has been the industry's standard dummy text</p>
                                                    </div>
                                                </div>
                                                <div class="single_about">
                                                    <div class="single_ab_icon">

                                                        <i class="fa fa-paint-brush"></i>
                                                    </div>
                                                    <div class="single_ab_text">
                                                        <h3>EASY TO CUSTOMIZE</h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ipsum has been the industry's standard dummy text</p>
                                                    </div>
                                                </div>
                                                <div class="single_about">
                                                    <div class="single_ab_icon">
                                                        <i class="fa fa-headphones"></i>
                                                    </div>
                                                    <div class="single_ab_text">
                                                        <h3>LIFE TIME SUPPORT</h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ipsum has been the industry's standard dummy text</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="single_about_left_img margin-top-40 text-center wow fadeInLeft" data-wow-duration=".6s">
                                                <img src="assets/images/abright.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="about_skill_area">
                                            <div class="col-sm-6">
                                                <div class="about_tabe">
                                                    <ul class="about_tabe_menu" role="tablist">
                                                        <li role="presentation" class="active"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">OUR MISSION</a></li>
                                                        <li role="presentation"><a href="#goal" aria-controls="goal" role="tab" data-toggle="tab">OUR GOAL</a></li>
                                                        <li role="presentation"><a href="#achivements" aria-controls="achivements" role="tab" data-toggle="tab">ACHIVEMENTS</a></li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="mission">
                                                            <div class="single_about_tab">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                                    when an unknown printer took a galley type a scrambled it to make a type specimen book. 
                                                                    It has survived not only five centuries,</p>

                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="goal">
                                                            <div class="single_about_tab">
                                                                <p>222Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                                    when an unknown printer took a galley type a scrambled it to make a type specimen book. 
                                                                    It has survived not only five centuries,</p>

                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="achivements">
                                                            <div class="single_about_tab">
                                                                <p>333Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                                    when an unknown printer took a galley type a scrambled it to make a type specimen book. 
                                                                    It has survived not only five centuries,</p>

                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                            <li><i class="fa fa-check-square"></i> We just want to love our client</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="about_skill">
                                                    <div class="skillbar" data-percent="79%">
                                                        <div class="skillbar-title"><h3 class="blue">PHOTOSHOP</h3><span class="sm-text">79%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>

                                                    <div class="skillbar" data-percent="90%">
                                                        <div class="skillbar-title"><h3 class="blue">HTML/CSS</h3><span class="sm-text">90%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>

                                                    <div class="skillbar" data-percent="69%">
                                                        <div class="skillbar-title"><h3 class="blue">JAVASCRIPT</h3><span class="sm-text">69%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>

                                                    <div class="skillbar" data-percent="92%">
                                                        <div class="skillbar-title"><h3 class="blue">WORDPRESS</h3><span class="sm-text">92%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section> -->


            <!-- <section id="counter" class="counter">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">  
                            <div class="col-sm-12">               
                                <div class="main_counter_area text-center">

                                    <div class="row">
                                        <div class="single_counter border_right">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">561</h2>
                                                    <i class="icon icon-thumbs-up"></i>
                                                    <p class="margin-top-20">CREATIVE DESIGN</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">25</h2>
                                                    <i class="icon icon-business-3"></i>
                                                    <p class="margin-top-20">AWARDS WON</p>  
                                                </div>

                                            </div>
                                        </div> 

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">236</h2>
                                                    <i class="icon icon-people-32"></i>
                                                    <p class="margin-top-20">HAPPY CLIENTS</p>  
                                                </div>

                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">365</h2>
                                                    <i class="icon icon-cup"></i>
                                                    <p class="margin-top-20">CUP OF COFFEE</p> 
                                                </div>

                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->  <!-- End of counter section -->


            <!-- <section id="othersservice" class="othersservice">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_othersservice_area sections">
                                <div class="row">
                                    <div class="head_title">
                                        <h3>OTHER SERVICES</h3>
                                        <div class="separator"></div>
                                    </div>

                                    <div class="main_othersservice_content">
                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4><span><i class="fa fa-clock-o"></i></span> CREATIVE DESIGN</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-picture-o"></i></span> WEB DEVELOPMENT</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-television"></i></span> VIDEO EDITING</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-object-group"></i></span> MARKETING</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-object-group"></i></span> PHOTOGRAPHY</h4>
                                                </div>
                                                <div class="single_othersservice_content">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="s_ot_i_area">
                                                    <div class="single_othersservice_icon">
                                                        <h4><span><i class="fa fa-object-group"></i></span> LOGO DESIGN</h4>
                                                    </div>
                                                </div>
                                                <div class="single_othersservice_content">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->            

            <!-- <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_team sections">
                                <div class="row">
                                    <div class="head_title">
                                        <h3>OTHER SERVICES</h3>
                                        <div class="separator"></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/team1.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>SEMF UCUK</h4>
                                                <p>FOUNDER</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/team2.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>DIK ADALIN</h4>
                                                <p>ENGINEERING</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/team3.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>JENG KOL</h4>
                                                <p>DESIGNER</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_team_content">
                                            <div class="single_team_img">
                                                <img src="assets/images/team4.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text_overlay">
                                                <h4>PET ROMAK</h4>
                                                <p>MARKETING</p>
                                                <div class="team_overlay_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <!-- <section id="choose" class="choose">
                <div class="container">
                    <div class="row">
                        <div class="main_choose sections">
                            <div class="col-sm-6">
                                <div class="head_title">
                                    <h3>WHY CHOOSE US</h3>
                                    <div class="separator"></div>
                                </div>
                                <div class="single_choose">
                                    <div class="single_choose_acording">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                            <i class="fa fa-picture-o"></i> GREAT DESIGN 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
                                                    <div class="panel-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <i class="fa fa-map-signs"></i> RESPONSIVE DESIGN 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                                    <div class="panel-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <i class="fa fa-bullseye"></i> RATINA READY 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                                        culpa qui officia deserunt mollit anim id est laborum.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                                            <i class="fa fa-umbrella"></i>FREE GOOGLE FONT 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                                        culpa qui officia deserunt mollit anim id est laborum.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                                                            <i class="fa fa-subway"></i>1170 PX GRID BASE 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="false">
                                                    <div class="panel-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                                                        culpa qui officia deserunt mollit anim id est laborum.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_choose">
                                    <div class="single_choose_img">
                                        <img src="assets/images/choose.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section id="portfolio" class="portfolio lightbg">
                <div class="container">
                    <div class="row">
                        <div class="main_portfolio sections">
                            <div class="col-sm-4">
                                <div class="head_title">
                                    <h3>LATEST PROJECT</h3>
                                    <div class="separator"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-sm-offset-2">
                                <div id="filters" class="toolbar mb2 mt2">
                                    <button class="btn-md fil-cat filter active" href=""  data-filter="all">SHOW ALL</button>
                                    <button class="btn-md fil-cat filter" data-rel="web" data-filter=".web">PHOTOGRAPHY</button>
                                    <button class="btn-md fil-cat filter" data-rel="flyers" data-filter=".flyers">BRANDING</button> 
                                    <button class="btn-md fil-cat filter" data-rel="bcards" data-filter=".bcards">GRAPHIC DESIGN</button>
                                    <div class="separator2"></div>
                                </div> 

                            </div>

                            <div style="clear:both;"></div>     
                            <div id="portfoliowork"> 
                                <div class="single_portfolio tile scale-anm web grid-item-width2" >
                                    <img src="assets/images/pf1.jpg" alt="" />
                                    <div class="grid_item_overlay g_overlay_1">
                                        <a href="assets/images/pf1.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio tile scale-anm bcards" >
                                    <img src="assets/images/pf2.jpg" alt="" />
                                    <div class="grid_item_overlay">
                                        <a href="assets/images/pf2.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio tile scale-anm web ">
                                    <img src="assets/images/pf3.jpg" alt="" />
                                    <div class="grid_item_overlay">
                                        <a href="assets/images/pf3.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio tile scale-anm web" >
                                    <img src="assets/images/pf4.jpg" alt="" />
                                    <div class="grid_item_overlay">
                                        <a href="assets/images/pf4.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio tile scale-anm bcards" >
                                    <img src="assets/images/pf8.jpg" alt="" />  
                                    <div class="grid_item_overlay">
                                        <a href="assets/images/pf8.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio tile scale-anm web" >
                                    <img src="assets/images/pf9.jpg" alt="" />
                                    <div class="grid_item_overlay">
                                        <a href="assets/images/pf9.jpg" class="portfolio-img"> 
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a href="#"> 
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div> 
                                <div class="single_portfolio tile scale-anm flyers">
                                    <img src="assets/images/pf5.jpg" alt="" />
                                    <div class="grid_item_overlay g_overlay_2">
                                        <a href="assets/images/pf5.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio tile scale-anm flyers">
                                    <img src="assets/images/pf6.jpg" alt="" />
                                    <div class="grid_item_overlay g_overlay_1">
                                        <a href="assets/images/pf6.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="single_portfolio tile scale-anm bcards" >
                                    <img src="assets/images/pf7.jpg" alt="" />
                                    <div class="grid_item_overlay">
                                        <a href="assets/images/pf7.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio tile scale-anm flyers">
                                    <img src="assets/images/pf6.jpg" alt="" />
                                    <div class="grid_item_overlay g_overlay_1">
                                        <a href="assets/images/pf6.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="single_portfolio tile scale-anm bcards" >
                                    <img src="assets/images/pf7.jpg" alt="" />
                                    <div class="grid_item_overlay">
                                        <a href="assets/images/pf7.jpg" class="portfolio-img"> <i class="fa fa-link"></i></a>
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>



                            </div>

                            <div style="clear:both;"></div>  
                        </div>
                    </div>
                </div>
            </section> 
        -->

            <!--            <section id="portfolio" class="portfolio">
                            <div class="container">
                                <div class="row">
                                    <div class="main_portfolio sections">
                                        <div class="heading_filter_menu">
                                            <div class="col-sm-4">
                                                <div class="head_title">
                                                    <h3>LATEST PROJECT</h3>
                                                    <div class="separator"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="filters" class="toolbar mb2 mt2">
                                                    <button class="btn fil-cat filter active" href=""  data-filter="all">All</button>
                                                    <button class="btn fil-cat filter" data-rel="web" data-filter=".web">Websites</button>
                                                    <button class="btn fil-cat filter" data-rel="flyers" data-filter=".flyers">Flyers</button> 
                                                    <button class="btn fil-cat filter" data-rel="bcards" data-filter=".bcards">Business Cards</button>
                                                </div> 
                                            </div>
                                        </div>
            
                                        <div class="main_portfolio_content text-center">
                                            <div class="grid">
                                                <div class="grid-item grid-item--width2">
                                                    <img src="assets/images/pf1.jpg" alt="" />
                                                    <div class="grid_item_overlay all_overlay">
                                                        <a href="assets/images/pf1.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item ">
                                                    <img src="assets/images/pf2.jpg" alt="" />
                                                    <div class="grid_item_overlay all_overlay">
                                                        <a href="assets/images/pf2.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item ">
                                                    <img src="assets/images/pf3.jpg" alt="" />
                                                    <div class="grid_item_overlay">
                                                        <a href="assets/images/pf1.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item ">
                                                    <img src="assets/images/pf4.jpg" alt="" />
                                                    <div class="grid_item_overlay">
                                                        <a href="assets/images/pf4.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item ">
                                                    <img src="assets/images/pf5.jpg" alt="" />
                                                    <div class="grid_item_overlay">
                                                        <a href="assets/images/pf5.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item grid-item--width2">
                                                    <img src="assets/images/pf6.jpg" alt="" />
                                                    <div class="grid_item_overlay">
                                                        <a href="assets/images/pf6.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item ">
                                                    <img src="assets/images/pf7.jpg" alt="" />
                                                    <div class="grid_item_overlay">
                                                        <a href="assets/images/pf7.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item ">
                                                    <img src="assets/images/pf8.jpg" alt="" />
                                                    <div class="grid_item_overlay">
                                                        <a href="assets/images/pf6.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="grid-item ">
                                                    <img src="assets/images/pf9.jpg" alt="" />
                                                    <div class="grid_item_overlay">
                                                        <a href="assets/images/pf7.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>-->


            <!-- <section id="testimonial" class="testimonial">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="main_testimonial sections text-center">
                                <div class="col-md-12" data-wow-delay="0.2s">
                                    <div class="main_teastimonial_slider text-center">

                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration 
                                                        in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing 
                                                        hidden in the middle of text. All the Lorem  ww</p>
                                                    <div class="single_test_author">
                                                        <h4>JANE GALADRIEL <span> -- CEO TENGKUREP</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
                                                        alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing 
                                                        hidden in the middle of text. All the Lorem</p>
                                                    <div class="single_test_author">
                                                        <h4>JANE GALADRIEL <span> -- CEO TENGKUREP</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_testimonial">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <i class="fa fa-quote-left"></i>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have 
                                                        suffered alteration in some form, by injected humour, or randomised words which don't look even 
                                                        slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there 
                                                        isn't anything embarrassing hidden in the middle of text. All the Lorem</p>
                                                    <div class="single_test_author">
                                                        <h4>JANE GALADRIEL <span> -- CEO TENGKUREP</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section> -->


            <!-- <section id="clogo" class="clogo">
                <div class="container">
                    <div class="row">
                        <div class="main_clogo sections text-center">
                            <div class="col-sm-2 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo1.png" alt="" /></a>
                            </div>
                            <div class="col-sm-2 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo2.png" alt="" /></a>
                            </div>
                            <div class="col-sm-2 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo3.png" alt="" /></a>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <a href=""><img src="assets/images/clogo4.png" alt="" /></a>
                            </div>
                            <div class="col-sm-2 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo5.png" alt="" /></a>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <a href=""><img src="assets/images/clogo9.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->




            <!-- <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="contact_contant sections">
                                    <div class="col-sm-6">

                                        <div class="main_contact_info">
                                            <div class="head_title">
                                                <h3>CONTACT INFO</h3>
                                                <div class="separator"></div>
                                            </div>
                                            <div class="row">
                                                <div class="contact_info_content">
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>VISIT US</h3>
                                                                <p>20, 2 Elizabeth ST, Melbourne, Victoria 3000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-envelope-o"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>MAIL US</h3>
                                                                <p>support@yourmail.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-mobile"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>CALL US</h3>
                                                                <p>+(100) 123 4567 890</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-clock-o"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>WORK HOUR</h3>
                                                                <p>Mon - Sat: 08 Am - 17 Pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="head_title">
                                            <h3>LEAVE MESSAGE</h3>
                                            <div class="separator"></div>
                                        </div>
                                        <div class="single_contant_left">
                                            <form action="#" id="formid">
                                               
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" placeholder="Last Name" required="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                                </div>

                                                <div class="">
                                                    <input type="submit" value="Submit" class="btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section> --> 



           <!--  <section id="maps" class="maps">
                <div class="map-overlay">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="main_maps text-center">
                                <div class="col-sm-12 no-padding">
                                    <div class="map_canvas_icon">
                                        <i class="fa fa-map-marker" onClick="showmap()"></i>
                                        <h2 onClick="showmap()">FIND US ON GOOGLE MAP</h2>
                                    </div>
                                    <div id="map_canvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->



            <!-- <section id="footer" class="footer_widget">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="main_widget">
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                                <div class="footer_logo">
                                                    <img src="assets/images/logo.png" alt="" />
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                                    nisi ut aliquip ex ea commodo consequat. </p>

                                            </div>
                                        </div>

                                        <div class="col-sm-3  col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                                <div class="footer_title">
                                                    <h4>SITEMAP</h4>
                                                    <div class="separator"></div>
                                                </div>
                                                <ul>
                                                    <li><a href="">Services</a></li>
                                                    <li><a href="">About Us</a></li>
                                                    <li><a href="">Our Team</a></li>
                                                    <li><a href="">Portfolio</a></li>
                                                </ul> 
                                            </div>
                                        </div>

                                        <div class="col-sm-3  col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                                <div class="footer_title">
                                                    <h4>ACHIVES</h4>
                                                    <div class="separator"></div>
                                                </div>
                                                <ul>
                                                    <li><a href="">January 2015</a></li>
                                                    <li><a href="">February 2015</a></li>
                                                    <li><a href="">March 2015</a></li>
                                                    <li><a href="">April 2015</a></li>
                                                </ul> 
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                                <div class="footer_title">
                                                    <h4>NEWSLETTER</h4>
                                                    <div class="separator"></div>
                                                </div>

                                                <div class="footer_subcribs_area">
                                                    <p>Sign up for our mailing list to get latest updates and offers.</p>
                                                    <form class="navbar-form navbar-left" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                            <button type="submit" class="submit_btn"></button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <div id="test-popup" class="white-popup mfp-hide">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Information</h4>
              </div>
              <div class="modal-body">
                  <p>Choisissez votre nom dans la liste.</p>
                  <div class="form-group">
                      <select class="form-control" id="sel1">
                        <option value="0">Faites un choix...</option>
                        <?php foreach ($query_list_webdesigner as $key => $value) { ?>
                        <option value="<?php echo utf8_encode($value['nom']);?> <?php echo utf8_encode($value['prenom']);?>"><?php echo utf8_encode($value['nom']);?> <?php echo utf8_encode($value['prenom']);?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" id="validation_webdesigner" data-dismiss="modal">Valider</button>
          </div>
      </div>  
  </div>

  <section class="footer">
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="https://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-instagram"></i></a>
                                            <a href=""><i class="fa fa-youtube"></i></a>
                                            <a href=""><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
        </div>

        <!-- START SCROLL TO TOP  <--></-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>

        <script>

            function setCookie(key, value) {
                var expires = new Date();
                expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000));
                document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
            }

            function getCookie(key) {
                var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
                return keyValue ? keyValue[2] : null; 
            }


            $(function(){

                if(getCookie('webdesigner')){
                    $(".nom_webdesigner").append("Bienvenu "+getCookie('webdesigner'));
                }

                $('#validation_webdesigner').on('click', function(){
                    var webdesigner = $("#sel1").val();
                    if(webdesigner == 0){
                        alert('veuillez faire un choix');
                    }else{
                        setCookie('webdesigner',webdesigner);
                        $(".nom_webdesigner").append("Bienvenu "+getCookie('webdesigner'));
                        $.magnificPopup.close();
                    }
                })

                $('.commencer').on('click', function(){
                    if($.isNumeric($('.num_client').val())==true){
                        if($('.num_client').val().length == 8){
                            $.ajax({
                                type:"POST",
                                url: "ajax.php",
                                data: "num="+$('.num_client').val()
                            }).done(function( msg ) {
                                if(msg!=""){
                                    $(".tab-pane").not(':first').remove();
                                    $(".tab-content").append(msg);
                                    $("#0").addClass('active');
                                }
                            });
                            $(".tab-pane").removeClass('active');
                            $("#0").addClass('active');
                            $('.service_tabe_menu li').removeClass('active');
                            $(".service_tabe_menu li:nth-child(2)").addClass('active');
                        }else{
                            alert('Le numéro client ne contient pas 8 chiffres');
                        }
                    }else{
                        alert('Veuillez entrer un numéro client correct');
                    }
                })

                $("#service").on('click', "[class*='retour_']", function(event) {
                    event.preventDefault();
                    var la_categorie=$(this).attr('class').split("retour_");
                    la_categorie=la_categorie[1];
                    if(la_categorie==0){
                        $(".tab-pane").removeClass('active');
                        $("#webdesign").addClass('active');
                        $('.service_tabe_menu li').removeClass('active');
                        $(".service_tabe_menu li:nth-child(1)").addClass('active');
                    }else{
                        la_categorie_inf=la_categorie*1-1;
                        la_categorie_supp=la_categorie*1+1;
                        $(".tab-pane").removeClass('active');
                        $("#"+la_categorie_inf).addClass('active');
                        $('.service_tabe_menu li').removeClass('active');
                        $(".service_tabe_menu li:nth-child("+la_categorie_supp+")").addClass('active');
                    }
                })

                $("#service").on('click', "[class*='suivant_']", function(event) {
                    event.preventDefault();
                    var la_categorie=$(this).attr('class').split("suivant_");
                    // la_categorie contient le numéro de catégorie des questions pour pouvoir prendre les réponses 
                    la_categorie=la_categorie[1];
                    la_categorie_plus=la_categorie*1+1;
                    la_categorie_plus_p=la_categorie*1+3;
                    reponse =[];
                    $("#"+la_categorie+" input[class*='question']").each(function(index, el) {
                        var lindex= $(this).attr('class').split("_");
                        lindex=lindex[1];
                        if($(this).is(":checked")){
                            // console.log("la class "+$(this).attr('class')+" est checked");
                            reponse[lindex] = 1;
                        }else{
                            // console.log("la class "+$(this).attr('class')+" n'est pas checked");
                            reponse[lindex] = 0;
                        }
                    });
                    var comment= $("#"+la_categorie+" .commentaire_"+la_categorie).val();
                    console.log(comment);
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        data: {id_categorie: la_categorie, reponses: reponse, id_client: $('.num_client').val(), comments: comment }
                    })
                    .done(function(data) {
                        console.log(data);
                        $(".tab-pane").removeClass('active');
                        $("#"+la_categorie_plus).addClass('active');
                        $('.service_tabe_menu li').removeClass('active');
                        $(".service_tabe_menu li:nth-child("+la_categorie_plus_p+")").addClass('active');
                    })   
                });

                $("#service").on('click', "[class*='fin_']", function(event) {
                    event.preventDefault();
                    var la_categorie=$(this).attr('class').split("fin_");
                    // la_categorie contient le numéro de catégorie des questions pour pouvoir prendre les réponses 
                    la_categorie=la_categorie[1];
                    la_categorie_plus=la_categorie*1+1;
                    la_categorie_plus_p=la_categorie*1+3;
                    reponse =[];
                    $("#"+la_categorie+" input[class*='question']").each(function(index, el) {
                        var lindex= $(this).attr('class').split("_");
                        lindex=lindex[1];
                        if($(this).is(":checked")){
                            // console.log("la class "+$(this).attr('class')+" est checked");
                            reponse[lindex] = 1;
                        }else{
                            // console.log("la class "+$(this).attr('class')+" n'est pas checked");
                            reponse[lindex] = 0;
                        }
                    });
                    var comment= $("#"+la_categorie+" .commentaire_"+la_categorie).val();
                    // console.log(comment);
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        data: {id_categorie: la_categorie, reponses: reponse, id_client: $('.num_client').val(), comments: comment, fin: 'fin' }
                    })
                    .done(function(data) {
                        //fin
                    })   
                });

                $(".deco").on('click', function(event) {
                    event.preventDefault();
                    $.cookie("webdesigner", "dd", { expires: -1 });
                    location.reload();
                });

                if(!getCookie('webdesigner')){
                    setTimeout(function() {
                     if ($('#test-popup').length) {
                       $.magnificPopup.open({
                        items: {
                            src: '#test-popup' 
                        },
                        closeOnBgClick: 'false',
                        modal: 'true',
                        type: 'inline'
                    });
                   }
               }, 2000);
                }
            })

        </script>             

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
    </html>
