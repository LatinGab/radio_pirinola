
xxxxx
<div class="containerbhbhb">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php

		if ( has_post_thumbnail() ) {
		  $img = get_the_post_thumbnail_url('', 'post-custom-size');
		} else {
		  $img = get_template_directory_uri() . '/assets/img/brooke-lark-609900-unsplash-400x300.jpg';
		}

		?>

    <div id="post-jumbotron" class="jumbotron p-5 md-3 text-white text-center" style="background-image: url('<?= $img ?>')">
      <h2><?php the_title() ?></h2>
      <p><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
    </div>

    <?php the_content(); ?>

    <div class="text-center mb-5">
      <a class="btn btn-primary" href="blog">Volver al Blog</a>
    </div>

  <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
