<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Rekos_Agency
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="section-space-top-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php if (have_posts()) : ?>
						<header class="page-header text-center mb-30">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf(esc_html__('Rezultati pretrage za: %s', 'rekos-agency'), '<span class="text-pronia-primary">' . get_search_query() . '</span>');
								?>
							</h1>
							
							<div class="search-form-wrapper mt-4 mb-4">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
									<div class="input-group" style="max-width: 600px; margin: 0 auto;">
										<input type="search" 
											class="form-control" 
											placeholder="Pretraži proizvode..." 
											value="<?php echo get_search_query(); ?>" 
											name="s"
											style="height: 50px; border-radius: 25px 0 0 25px; padding-left: 20px; border: 1px solid #ddd;">
										<button type="submit" 
											class="btn btn-primary" 
											style="border-radius: 0 25px 25px 0; padding: 0 30px; background-color: #56853e; border-color: #56853e;">
											<i class="fa fa-search"></i>
										</button>
									</div>
								</form>
							</div>
						</header><!-- .page-header -->

						<div class="search-results-wrapper">
							<div class="row">
								<?php
								/* Start the Loop */
								while (have_posts()) :
									the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									echo '<div class="col-12 col-md-6 col-lg-4">';
									get_template_part('template-parts/content', 'search');
									echo '</div>';

								endwhile;
								?>
							</div>

							<div class="pagination-area">
								<?php the_posts_navigation(); ?>
							</div>
						</div>

					<?php else : ?>

						<header class="page-header text-center mb-30">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf(esc_html__('Rezultati pretrage za: %s', 'rekos-agency'), '<span class="text-pronia-primary">' . get_search_query() . '</span>');
								?>
							</h1>
							
							<div class="search-form-wrapper mt-4 mb-4">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
									<div class="input-group" style="max-width: 600px; margin: 0 auto;">
										<input type="search" 
											class="form-control" 
											placeholder="Pretraži proizvode..." 
											value="<?php echo get_search_query(); ?>" 
											name="s"
											style="height: 50px; border-radius: 25px 0 0 25px; padding-left: 20px; border: 1px solid #ddd;">
										<button type="submit" 
											class="btn btn-primary" 
											style="border-radius: 0 25px 25px 0; padding: 0 30px; background-color: #56853e; border-color: #56853e;">
											<i class="fa fa-search"></i>
										</button>
									</div>
								</form>
							</div>
						</header><!-- .page-header -->
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</main><!-- #main -->


<style>
	/* Search Results Styling */
	.search-result-item {
		background-color: #fff;
		border-radius: 10px;
		padding: 20px;
		box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
		transition: all 0.3s ease;
		height: 100%;
		display: flex;
  flex-direction: column;
  justify-content: center;
	}

	.search-result-item:hover {
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
		transform: translateY(-2px);
	}

	.search-thumbnail {
		position: relative;
		overflow: hidden;
		border-radius: 8px;
		margin-bottom: 15px;
	}

	.search-thumbnail img {
		width: 100%;
		height: auto;
		transition: transform 0.3s ease;
	}

	.search-thumbnail:hover img {
		transform: scale(1.05);
	}

	.search-content {
		padding: 0;
	}

	.search-content .entry-title {
		font-size: 20px;
		margin-bottom: 10px;
		color: #333;
	}

	.search-content .entry-title a {
		color: inherit;
		text-decoration: none;
		transition: color 0.3s ease;
	}

	.search-content .entry-title a:hover {
		color: #56853e;
	}

	.search-content .entry-meta {
		font-size: 14px;
		color: #666;
		margin-bottom: 15px;
	}

	.search-content .entry-summary {
		color: #666;
		line-height: 1.6;
		margin-bottom: 15px;
	}

	.search-content .entry-footer {
		font-size: 14px;
		color: #888;
	}

	.search-content .entry-footer a {
		color: #56853e;
		text-decoration: none;
	}

	.search-content .entry-footer a:hover {
		text-decoration: underline;
	}

	.search-form-wrapper .form-control:focus {
		box-shadow: none;
		border-color: #56853e;
	}

	.search-form-wrapper .btn-primary:hover {
		background-color: #476f34;
		border-color: #476f34;
	}

	@media (max-width: 767px) {
		.search-result-item {
			padding: 15px;
			margin-bottom: 20px;
		}

		.search-content {
			padding: 15px 0 0;
		}

		.search-content .entry-title {
			font-size: 18px;
		}

		.search-thumbnail {
			text-align: center;
		}

		.search-thumbnail img {
			width: auto;
			height: 200px;
			transition:
				transform 0.3s ease;
		}


		.search-content .entry-title {
			font-size: 18px;
			text-align: center;
		}


	}

	.col-lg-4 {
		margin-bottom: 30px;
	}
</style>

<?php
get_footer();
