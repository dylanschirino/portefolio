<?php /*
      Template Name: Single Article
*/
get_header();
?>
<body>
  <header class="headerproject">
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
      <section class="view-project">
        <h2 class="view-project__title" aria-level="2"><?php echo the_title();?></h2>
        <?php if( get_field('image_big_projet')):
      $bigimage = get_field('image_big_projet');
      $bigimagesize='thumb-bigimage';
      ?>
          <?php echo wp_get_attachment_image($bigimage['id'],$bigimagesize);?>
        <?php endif;?>
      </section>
  </header>
  <main id="content">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <section class="project-desc">
      <div class="project-desc__container">
      <h3 class="project-desc__title" aria-level="3">Le projet</h3>
      <p class="project-desc__text">
        <?php echo the_field('intro');?>
      </p>
      <a class="project-desc__button" href="<?php echo the_field('lien_vers_le_site');?>" title="Vous quittez le site vers <?php the_title();?>">Voir le site</a>
    </div>
    <?php if( get_field('screen_intro')):
      $screen_intro = get_field('screen_intro');
      $screensize='thumb-screen';
      ?>
      <?php echo wp_get_attachment_image($screen_intro['id'],$screensize);?>
  <?php endif;?>
    </section>

    <section class="github">
      <h4 class="github__title" aria-level="4">Repository GitHub</h4>
      <a class="github__button project-desc__button" href="<?php echo the_field('lien_vers_le_site');?>" title="Vous quittez le site vers <?php the_title();?>">Voir le repo GitHub</a>
    </section>

    <section class="project-info">
      <h4 class="project-info__title" aria-level="4">Comment le site est fait ?</h4>

      <article class="project-info__design">
        <div class="design__container">
        <h5 class="design__title" aria-level="5">Le design</h5>
        <p class="design__text">
          <?php echo the_field('design_texte');?>
        </p>
      </div>
        <figure class="design__imagecontainer">
          <?php if( get_field('screen_intro')):
            $screen_intro = get_field('screen_intro');
            ?>
            <?php echo wp_get_attachment_image($screen_intro['id'],$screensize);?>
        <?php endif;?>
        </figure>
      </article>

      <article class="project-info__design project-info__design--contrainte">
        <div class="design__container design__container--contrainte">
        <h5 class="design__title" aria-level="5">Les Contraintes</h5>
        <p class="design__text design__text--contrainte">
        <?php echo the_field('contrainte_texte');?>
        </p>

      </div>
      <figure class="design__imagecontainer design__imagecontainer--contrainte">
        <?php if( get_field('screen_intro')):
          $screen_intro = get_field('screen_intro');
          ?>
          <?php echo wp_get_attachment_image($screen_intro['id'],$screensize);?>
      <?php endif;?>
      </figure>
      </article>

      <article class="project-info__time">
        <h5 class="time__title" aria-level="5">
          Temps en café
        </h5>
        <p class="time__subtitle">
          Un café vaut environs 2-3 jours
        </p>
        <ul class="time__list">
          <?php $limit=get_field('temps');?>
          <?php for($i=0;$i<$limit;$i++):?>
          <li class="time__element">
            <span class="visualhidden"><?php echo $i;?></span>
          </li>
        <?php endfor;?>
        </ul>
      </article>
    </section>
  <?php endwhile; endif;?>

  </main>
  <?php get_footer();?>
