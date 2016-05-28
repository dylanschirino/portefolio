<?
/*
Template Name: HomePage
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <meta charset="utf-8">
  <meta name="description" content="Portefolio de Dylan Schirino">
  <meta name="author" content="Dylan Schirino">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php bloginfo();?>-<?php the_title();?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/styles.css';?>">
</head>

<body>
<header class="header">
  <div class="header__bckg">
    <h1 aria-level="1" class="header__title"><?php bloginfo();?>-<?php the_title();?></h1>

    <nav class="header__menu">

      <h2 aria-level="2" class="menu__title">Menu Principal</h2>
      <div id="burger-shower" class="menu__burger">
        <span class="visualhidden">menu</span>
        <span class="menu__global menu__global--top"></span>
        <span class="menu__global menu__global--middle"></span>
        <span class="menu__global menu__global--bottom"></span>
      </div>
      <ul class="menu__list" id="menu">
        <li class="menu__element">
          <a class="menu__link menu__link--active" href="<?php echo the_permalink('7');?>" title="Vers la page d'accueil">Accueil</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('17');?>" title="Vers la page d'accueil">Projet</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('19');?>" title="Vers la page d'accueil">About me</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('21');?>" title="Vers la page d'accueil">Contact</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('');?>" title="Vers la page d'accueil">CV</a>
        </li>
      </ul>
    </nav>

    <section class="mainimage">
      <h2 class="mainimage__title" aria-level="2">I'm Dylan Schirino</h2>
      <p class="mainimage__subtitle">
        Un web-designer belge qui réalise vos sites web.
      </p>
      <a href="#content" class="mainimage__link" title="Découvrir plus sur la page d'accueil"><span class="visualhidden">Accéder vers le bas</span></a>
    </section>
  </div>
</header>
<main id="content">

  <section class="lastproject">
    <h3 class="lastproject__title" aria-level="3">Projet récent</h3>
    <div class="lastproject__containerbutton">
    <a class="lastproject__button" href="<?php echo the_permalink('17');?>" title="Vers la page des projet">Voir plus de projets</a>
  </div>
    <a href="http://www.hepl01.cblue.be/~user31/dw/artiste/" class="lastproject__link" title="Vers le site de Nicolas de Stael">
      <span class="lastproject__link-text">Voir le site</span>
      <?php if( get_field('image_projet')):
    $projet = get_field('image_projet');
    $projetsize='thumb-lastproject';
    ?>
        <?php echo wp_get_attachment_image($projet['id'],$projetsize);?>
      <?php endif;?>
    </a>
  </section>

  <section class="guesswhat">
    <h4 class="guesswhat__title" aria-level="4">Hey, devinez quoi &nbsp;?</h4>
    <div class="gueswhat__center">
      <p class="guesswhat__subtitle">Je suis disponible&nbsp;!</p>
      <a class="guesswhat__button" href="<?php echo the_permalink('21');?>" title="Vers la page de contact">Contactez moi </a>
    </div>
  </section>

  <section class="whyme">
    <h5 class="whyme__title" aria-level="5">
      Pourquoi moi&nbsp;?
    </h5>
    <div class="whyme__container">
      <div class="whyme__presentation">
        <p class="presentation__text presentation__text--left">
          Avant toute chose, ce que j’aime par-dessus tout sur un site Internet et, ce qui fait la différence selon moi, c’est la typographie! J’aime concevoir des sites épurés tout en respectant une charte graphique cohérente.

        </p>
      </div>
      <div class="whyme__presentation whyme__presentation--right">
        <p class="presentation__text presentation__text--right">
          Depuis toujours, je suis passionné par les nouvelles technologies et j’aime comprendre comment les choses fonctionnent .
          Dans notre métier, il faut constamment se mettre au goût du jour et c’est ce qui fait selon moi, du webdesign, un métier si attractif.

        </p>
      </div>
    </div>
  </section>


  <section class="skills">
    <h6 class="skills__title" aria-level="6">Mes affinités</h6>

    <a href="cv" title="Le fichier fait 2MB" class="skills__button">Télécharger mon cv</a>

    <div class="skills__container skills__container--left">

      <p class="skills__label"><abbr title="HyperText Markup Language">html</abbr>
      </p>
      <div class="skills__content">
        <span title="80%" class="skills__purcent skills__purcent--html">80%</span>
      </div>

      <p class="skills__label">Javascript</p>
      <div class="skills__content">
        <span title="60&nbsp;%" class="skills__purcent skills__purcent--js">60%</span>
      </div>

      <p class="skills__label"><abbr title="Hypertext Preprocessor">PHP</abbr>
      </p>
      <div class="skills__content">
       <span title="65&nbsp;%" class="skills__purcent skills__purcent--php">65%</span>
      </div>

      <p class="skills__label">Illustrator</p>
      <div class="skills__content">
       <span title="80&nbsp;%" class="skills__purcent skills__purcent--illu">80%</span>
      </div>

    </div><!--div container-->

    <div class="skills__container skills__container--right">

      <p class="skills__label"><abbr title="Cascading StyleSheet">Css</abbr></p>
      <div class="skills__content">
       <span title="90&nbsp;%" class="skills__purcent skills__purcent--css">90%</span>
     </div>

     <p class="skills__label">Jquery</p>
     <div class="skills__content">
      <span title="50&nbsp;%" class="skills__purcent skills__purcent--jquery">50%</span>
    </div>

    <p class="skills__label">Photoshop</p>
    <div class="skills__content">
     <span title="85&nbsp;%" class="skills__purcent skills__purcent--photoshop">85%</span>
   </div>

   <p class="skills__label">Wordpress</p>
   <div class="skills__content">
    <span title="70&nbsp;%" class="skills__purcent skills__purcent--wordpress">70%</span>
  </div>

    </div>
  </section>
</main>
<footer class="footer">
  <div class="footer__container">

    <a class="footer__link footer__link--github" href="https://github.com/dylanschirino" title="Voir mon Github">GitHub</a>

    <a class="footer__link footer__link--facebook" href="https://www.facebook.com/dylan.schirino" title="Voir mon facebook">Facebook</a>

    <a class="footer__link footer__link--linkedin" href="https://www.linkedin.com/in/dylan-schirino" title="Me voir sur linkedin">Linkedin</a>

    <a class="footer__link footer__link--phone" href="tel:+32493526168" title="Me téléphoner?">Téléphone</a>

  </div>
  <div class="footer__subfooter">
    <p class="subfooter__text">
      Design par Dylan Schirino
    </p>
</div>
</footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/assets/assets.js';?>"></script>

</body>
</html>
