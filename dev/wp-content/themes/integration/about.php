<?php /*
      Template Name: About
*/
get_header();
?>
<body>
  <header class="headerabout">
    <h1 aria-level="1" role="heading" class="header__title"><?php bloginfo();?> - <?php the_title();?></h1>

    <nav class="header__menu">
      <h2 aria-level="2" role="heading" class="menu__title">Menu Principal</h2>
      <div id="burger-shower" class="menu__burger">
        <span class="visualhidden">menu</span>
        <span class="menu__global menu__global--top"></span>
        <span class="menu__global menu__global--middle"></span>
        <span class="menu__global menu__global--bottom"></span>
      </div>
      <ul class="menu__list" id="menu">
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('7');?>" alt="Vers la page d'accueil">Accueil</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('17');?>" alt="Vers la page d'accueil">Projet</a>
        </li>
        <li class="menu__element">
          <a class="menu__link menu__link--active" href="<?php echo the_permalink('19');?>" alt="Vers la page d'accueil">About me</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('21');?>" alt="Vers la page d'accueil">Contact</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('');?>" alt="Vers la page d'accueil">CV</a>
        </li>
      </ul>
    </nav>
  </header>
  <main id="content">

    <section class="about">
      <div class="about__container">
        <h2 class="about__title" aria-level="2" role="heading">About me</h2>
        <p class="about__text">
          <?php echo the_field('description');?>
        </p>
          </div>
        </section>
        <section class="canvas">
        <div class="canvas__container">
          <?php if( get_field('image_de_moi')):
        $imagemoi = get_field('image_de_moi');
        $imagemoisize='thumb-canvas';
        ?>
            <?php echo wp_get_attachment_image($imagemoi['id'],$imagemoisize);?>
          <?php endif;?>
          <canvas class="draw" id="canvas" width="500" height="530">
            <p>Your browser doesn't support canvas.</p>
            <p><a href="http://browserhappy.com">Change it.</a></p>
          </canvas>
        </div>
      </section>
  </main>
  <?php get_footer();?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/assets/canvas.js';?>"></script>
