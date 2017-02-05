<?php

/*
Theme Name: Slotheme
Author: Xavier Martínez Pujol
Author URI: http://xmpdesign.com/
Description: A simple Wordpress Theme made with CSSloth CSS Framework.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: slotheme
*/

get_header(); ?>

  <h1 class="center-txt color-duo">MAIN MENU</h1>
  <?php if ( has_post_thumbnail() ) {
	   the_post_thumbnail('post_thumbnail', array('class' => 'img-responsive'));
   } ?>
  <div class="row gradient-1">
      <input type="text" onfocus="this.value='';" class="form-input" value="Data1">
      <input type="text" onfocus="this.value='';" class="form-input" value="Data2">
      <input type="text" onfocus="this.value='';" class="form-input" value="Data3">
      <a class="button a-inverse">Submit</a>
  </div>

<div class="container-bd gradient-1 center">
  <div class="row flex-space color-pri">
    <div class="block color-acc">
      <img class="block-img-icons" src="<?php echo get_template_directory_uri(); ?>/assets/img/sloth-2.jpg">
      <h3 class="center-txt">BLOCK 1</h3>
      <p>Sloths are mammals classified in the families Megalonychidae (two-toed sloths) and Bradypodidae (three-toed sloths), including six extant species.</p>
    </div>
    <div class="block color-duo">
      <img class="block-img-icons" src="<?php echo get_template_directory_uri(); ?>/assets/img/sloth-3.jpg">
      <h3 class="center-txt text-black">BLOCK 2</h3>
      <p class="text-black">Sloths are mammals classified in the families Megalonychidae (two-toed sloths) and Bradypodidae (three-toed sloths), including six extant species.</p>
    </div>
    <div class="block color-acc">
      <img class="block-img-icons" src="<?php echo get_template_directory_uri(); ?>/assets/img/sloth-4.jpg">
      <h3 class="center-txt">BLOCK 3</h3>
      <p>Sloths are mammals classified in the families Megalonychidae (two-toed sloths) and Bradypodidae (three-toed sloths), including six extant species.</p>
    </div>
  </div>
  <div class="row color-pri">
    <div class="block-full ">
      <blockquote class="center-txt pad-h-10">Sloths are mammals classified in the families Megalonychidae (two-toed sloths) and Bradypodidae (three-toed sloths), including six extant species.</blockquote>
    </div>
  </div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
endwhile; else:
    // no posts found
endif; ?>


</div>


<?php get_footer();
