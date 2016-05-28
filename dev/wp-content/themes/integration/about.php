<?php /*
      Template Name: About
*/;?>
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
  <header class="headerabout">
    <h1 aria-level="1" class="header__title"><?php bloginfo();?> - <?php the_title();?></h1>

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
          <a class="menu__link" href="<?php echo the_permalink('7');?>" title="Vers la page d'accueil">Accueil</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('17');?>" title="Vers la page d'accueil">Projet</a>
        </li>
        <li class="menu__element">
          <a class="menu__link menu__link--active" href="<?php echo the_permalink('19');?>" title="Vers la page d'accueil">About me</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('21');?>" title="Vers la page d'accueil">Contact</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('');?>" title="Vers la page d'accueil">CV</a>
        </li>
      </ul>
    </nav>
  </header>
  <main id="content">

    <section class="about">
      <div class="about__container">
        <h2 class="about__title" aria-level="2">About me</h2>
        <p class="about__text">
          <?php echo the_field('description');?>
        </p>
          </div>
        </section>
        <section class="canvas">
          <h3 aria-level="3" class="canvas__title">Animation étoile</h3>
        <div class="canvas__container">
          <?php if( get_field('image_de_moi')):
        $imagemoi = get_field('image_de_moi');
        $imagemoisize='thumb-canvas';
        ?>
            <?php echo wp_get_attachment_image($imagemoi['id'],$imagemoisize);?>
          <?php endif;?>
          <canvas class="draw" id="canvas" width="500" height="550">
            <p>Your browser doesn't support canvas.</p>
            <p><a href="http://browserhappy.com">Change it.</a></p>
          </canvas>
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
  <script type="text/javascript" src="<?php echo get_template_directory_uri().'/assets/canvas.js';?>"></script>

  </body>
  </html>
