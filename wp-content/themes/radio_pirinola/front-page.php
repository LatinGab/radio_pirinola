<?php get_header(); ?>

<!--Carrousel-->
<section>
  <div class="">
    <div class="row centrar">
      <div class="col-md-12">
        <!--Carrousel Carrousel Carrousel-->
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/image-1.jpg" alt="First Slide">
              <div class="carousel-caption">
                <h2>Pon tu imaginación en acción</h2>
                <h4>Programación infantil las 24 horas</h4>
              </div>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/image-2.jpg" alt="Second Slide">
              <div class="carousel-caption">
                <h2>Música para todas las edades</h2>
                <h4>Programación infantil las 24 horas</h4>
              </div>
            </div>
          </div>
          <!-- Carousel nav -->
          <div>
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--fin Carrousel-->

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

<!--Bloque noticias-->
<?php
/*
* Loop through Categories and Display Posts within
*/
$post_type = 'noticias';//"feature"

// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

foreach( $taxonomies as $taxonomy ) :

// Gets every "category" (term) in this taxonomy to get the respective posts
$terms = get_terms( $taxonomy );

foreach( $terms as $term ) : ?>

    <?php
    $args = array(
            'post_type' => $post_type,
            'posts_per_page' => 4, //muestra 4 posts
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'slug',
                    'terms' => $term->slug,
                )
            )

        );
    $posts = new WP_Query($args);

    if( $posts->have_posts() ): ?>

     <?php $categoria= $term->name; ?>
     <section id="<?php echo $categoria ?>" class="container content-section text-center">

       <div class="container bloque_noticias">
         <div class="row centrar">

    <?php while( $posts->have_posts() ) : $posts->the_post(); ?>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="thumbnail">
              <?php the_post_thumbnail('custom-size-blog', array('class'=>'img-fluid mb3')) ?>
              <h2 class="titulos_noticias"><?php the_title() ?></h2>
              <div class="parrafo_noticia"><?php the_excerpt() ?></div>
              <a href="<?php the_permalink() ?>" "target=blank">Ver+</a>
            </div>
          </div>

    <?php endwhile;?>
    </div>
  </div>
</section>
  <?php endif; ?>

<?php endforeach;

endforeach; ?>
</section>

<!-- Fin Bloque noticias-->

<!--Nosotros-->
<section id="radio">
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_pirinola.png" alt="">
        </div>
        <div class="col-md-6">
          <h2>Desde Chile escuchas Radio Pirinola</h2>
          <p>Radio Pirinola es un proyecto de radiodifusión por internet con programación de música y programas familiares destinados a niños y niñas principalmente de américa latina.

            Nace en Chile en 2015, y desde ese año a establecido contactos con conjuntos musicales, y programas destinados a la familia y niños en paises como Chile, Argentina, Colombia, México, etc.

            Hoy en día en la programación de la radio hay una parrilla de interesantes bandas en diferentes idiomas mezclando sonidos desde Australia, Africa, EEUU, Suecia....

            Esperamos tener tú opinión y que seas un auditor.. y que vayas a ver las bandas en vivo!!! </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Nosotros-->

<!--Sección título Bandas-->
<section id="bandas">
  <div class="container">
    <div class="text-center">
      <h1 class="titulos_secciones">Bandas Infantiles Latinoamericanas</h1>
      <div class="notas_musicales">
        <i class="fa fa-music"></i>
        <i class="fa fa-music"></i>
        <i class="fa fa-music"></i>
      </div>
      <p>Conoce destacadas bandas infantiles de Chile y Latinoamerica que dan vida a interesantes proyectos</p>
      <hr>
    </div>

    <!--Bloque Bandas-->
    <?php
    /*
    * Loop through Categories and Display Posts within
    */
    $post_type = 'bandas';//"feature"

    // Get all the taxonomies for this post type
    $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

    foreach( $taxonomies as $taxonomy ) :

    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );

    foreach( $terms as $term ) : ?>

        <?php
        $args = array(
                'post_type' => $post_type,
                'posts_per_page' => 12,  //muestra 12 posts
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                )

            );
        $posts = new WP_Query($args);

        if( $posts->have_posts() ): ?>

      <?php $categoria= $term->name; ?>
      <section id="<?php echo $categoria ?>" class="container content-section text-center"></section>

        <section id="blog-landing">
          <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
          <article class="white-panel"><?php the_post_thumbnail() ?>
            <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
            <p><?php the_excerpt() ?></p>
          </article>

        <?php endwhile;?>
    </section>
      <?php endif; ?>

    <?php endforeach;

    endforeach; ?>
    </section>

    <!-- Fin Bloque Bandas-->

<!--Fin Sección Bandas-->

<?php get_footer(); ?>
