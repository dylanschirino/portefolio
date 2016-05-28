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
<?
/*
Template Name: Archive Projet
*/
if(is_page()){
  query_posts([
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post'
  ]);
}
?>
<body>
  <header class="headerproject">
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
          <a class="menu__link" href="<?php echo the_permalink('7');?>" title="Vers la page d'accueil">Accueil</a>
        </li>
        <li class="menu__element">
          <a class="menu__link menu__link--active" href="<?php echo the_permalink('17');?>" title="Vers la page d'accueil">Projet</a>
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
    <section class="introproject">
      <h2 class="introproject__title" aria-level="2">Projet</h2>
      <div class="introproject__image retina">
        <?php if( get_field('image_tv')):
          $tv = get_field('image_tv');
          $tvsize='thumb-tv';
          ?>
          <?php echo wp_get_attachment_image($tv['id'],$tvsize);?>
        </div>
      <?php endif;?>
      <p class="introproject__text">
        Vous pouvez retrouver ici tout les projets que j’ai réalisé dans le cadre de projets scolaires mais également professionels.
        Cliquez sur le projet pour en découvrir les détails.
      </p>
    </section>
  </header>

  <main id="content">
    <section class="listproject">
      <h3 class="listproject__title" aria-level="3">Liste de mes projets</h3>
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <div class="listproject__container">
          <a href="<?php the_permalink();?>" title="Voir la fiche" class="listproject__link">
            <?php if( get_field('image_big_projet')):
          $bigimage = get_field('image_big_projet');
          $bigimagesize='thumb-bigimage';
          ?>
              <?php echo wp_get_attachment_image($bigimage['id'],$bigimagesize);?>
            <?php endif;?>
            <div class="listproject__content">
              <span class="listproject__info">Voir la fiche du projet '<?php echo the_title();?>'</span>
            </div>
          </a>
        </div>
      <?php endwhile; endif; ?>
    </section>
  </main>
      <?php get_footer();?>
