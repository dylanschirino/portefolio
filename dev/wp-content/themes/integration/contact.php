<?php /*
Template Name: Contact
*/
get_header();
?>
<body class="contactbody">
  <header class="headercontact">
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
          <a class="menu__link" href="<?php echo the_permalink('19');?>" title="Vers la page d'accueil">About me</a>
        </li>
        <li class="menu__element">
          <a class="menu__link menu__link--active" href="<?php echo the_permalink('21');?>" title="Vers la page d'accueil">Contact</a>
        </li>
        <li class="menu__element">
          <a class="menu__link" href="<?php echo the_permalink('');?>" title="Vers la page d'accueil">CV</a>
        </li>
      </ul>
    </nav>
  </header>
  <main id="content">
    <section class="contact">
      <div class="contact__container">
        <h2 class="contact__title" aria-level="2">Contact</h2>
        <ul class="contact__list">
          <li class="contact__element">
            <a class="contact__link contact__link--mail" href="mailto:dylan.schirino@hotmail.fr" title="M'envoyer un email">dylan.schirino@hotmail.fr</a>
          </li>
          <li class="contact__element">
            <a class="contact__link contact__link--phone" href="tel:+32493516168" title="Je suis disponible de 8h à 21h">+32 (0)4 93 52 61 68</a>
          </li>
          <li class="contact__element">
            <a href="https://github.com/dylanschirino" title="Voir mes projets sur github" class="contact__link contact__link--github">dylanschirino</a>
          </li>
        </ul>
      </div>


      <div class="contact-form">

        <p class="contact-form__title">Une question&nbsp;?</p>
        <p class="contact-form__subtitle">Besoin de moi&nbsp;?</p>
        <fieldset>
          <legend class="contact-form__legend">
            Remplissez ce formulaire
          </legend>
          <?php echo do_shortcode( '[contact-form-7 id="80" title="Contact"]' ); ?>

        </fieldset>
      </div>
    </section>
  </main>

<?php get_footer();?>
