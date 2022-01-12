<?php
/**
 * Template Name: Home Page
 * 
 */
 get_header(); 
 ?>

<div class="content-area">
  <main>
    <section class="slider">Slider</section>
    <section class="popular-products"></section>
    <section class="new-arrivals">Lançamentos</section>
    <section class="deal-of-the-week">Promoção da semana</section>
    <section class="lab-blog">
      <?php 
        if ( have_posts() ) :
             while( have_posts() ) : the_post();
      ?>
      <article>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
      </article>

      <?php
        endwhile;
      else: 
          ?>
      <p>Nothing to display.</p>
      <?php 
    endif; ?>

    </section>
  </main>
</div>
<?php get_footer(); ?>