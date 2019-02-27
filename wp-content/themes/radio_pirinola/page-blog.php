<?php get_header();?>

  <!--encabezado noticias-->
  <section id="noticias">
    <div class="container">
      <div class="text-center">
        <h1 class="titulos_secciones">Noticias</h1>
        <div class="notas_musicales">
          <i class="fa fa-music"></i>
          <i class="fa fa-music"></i
          <i class="fa fa-music"></i>
        </div>
        <p>Infórmate de las principales novedades para los mas pequeños</p>
        <hr>
      </div>
  <!--encabezado noticias-->

 <div class="row">
   <?php
     $arg = array(
       'post_type'		 => 'noticias',
       'posts_per_page' => -1
     );
     $get_arg = new WP_Query( $arg );
     while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
     ?>
       <div class="col-md-4 mt-5">
         <div class="thumbnail">
         <?php the_post_thumbnail('custom-size-blog', array('class'=>'img-fluid mb3')) ?>
         <h4><?php the_title() ?></h4>
         <p><?php the_excerpt() ?></p>
         <a class="btn btn-primary" href="<?php the_permalink() ?>">Léeme completo</a>
       </div>
     </div>
     <?php } wp_reset_postdata();
   ?>
 </div>
</div>

 <?php get_footer(); ?>
