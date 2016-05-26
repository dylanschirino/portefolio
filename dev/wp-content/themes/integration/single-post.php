<?php /*
      Template Name: Single Article
*/
get_header();
?>
<body>
  <header class="headerproject">
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
            <a class="menu__link menu__link--active" href="<?php echo the_permalink('17');?>" alt="Vers la page d'accueil">Projet</a>
          </li>
          <li class="menu__element">
            <a class="menu__link" href="<?php echo the_permalink('19');?>" alt="Vers la page d'accueil">About me</a>
          </li>
          <li class="menu__element">
            <a class="menu__link" href="<?php echo the_permalink('21');?>" alt="Vers la page d'accueil">Contact</a>
          </li>
          <li class="menu__element">
            <a class="menu__link" href="<?php echo the_permalink('');?>" alt="Vers la page d'accueil">CV</a>
          </li>
        </ul>
      </nav>
      <section class="view-project">
        <h2 class="view-project__title" aria-level="2" role="heading">css zen garden</h2>
        <img class="view-project__image retina" src="img/csszgbig.png" alt="Capture d'écran du site csszengarden" width="840" height="422">
      </section>
  </header>
