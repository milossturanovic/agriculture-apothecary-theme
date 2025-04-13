<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Rekos_Agency
 */

get_header();
?>



<main id="content" class="wrapper layout-page">



<div class="error-404-area section-space-y-axis-100" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/error-404/bg/1-1920x886.png">

		<div class="container h-100">
			<div class="row h-100">
				<div class="col-lg-12 align-self-center">
					<div class="error-404-content">
						<div class="error-404-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/error-404/404.png" alt="Error Image">
						</div>
						<h2 class="title">Stranica ne postoji</h2>
						<div class="button-wrap">
							<a class="btn btn-error" href="/">Nazad na početnu stranu</a>
							
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




</main>






<?php
get_footer();
