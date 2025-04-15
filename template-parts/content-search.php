<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rekos_Agency
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-result-item mb-30'); ?>>
	<div class="row align-items-center">
		<div class="col-md-4">
			<?php if (has_post_thumbnail()) : ?>
				<div class="search-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium', array('class' => 'img-fluid rounded')); ?>
					</a>
				</div>
			<?php endif; ?>
		</div>
		
		<div class="col-md-8">
			<div class="search-content">
				<header class="entry-header">
					<?php the_title(sprintf('<h2 class="entry-title mb-2"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

					<?php if ('post' === get_post_type()) : ?>
						<div class="entry-meta mb-2">
							<?php
							rekos_agency_posted_on();
							rekos_agency_posted_by();
							?>
						</div>
					<?php endif; ?>
				</header>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>

				<footer class="entry-footer">
					<?php rekos_agency_entry_footer(); ?>
				</footer>
			</div>
		</div>
	</div>
</article>
