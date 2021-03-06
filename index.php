<?php
get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {

			the_post();

			?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<header class="entry-header">

						<?php
						the_title( '<h1 class="entry-title">', '</h1>' );
						?>

				</header><!-- .entry-header -->

				<div class="entry-content">

					<?php
						the_content();
					?>

				</div><!-- .entry-content -->

			</article><!-- .post -->

			<?php
		}

	}

	?>

</main><!-- #site-content -->

<?php
get_footer();
